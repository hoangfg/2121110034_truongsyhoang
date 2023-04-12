<?php

namespace App\Http\Controllers\frontend;

use App\Models\Cart;
use App\Models\User;
use App\Models\Order;
use App\Models\Product;
use App\Models\Orderdetail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CheckOutController extends Controller
{
    public function check()
    {
        $old_data = Cart::where('user_id',  Auth::guard('users')->user()->id)->get();
        foreach ($old_data as $data) {
            $product = Product::where('id', $data->product_id)->first();
            if ($product->store->qty < $data->product_qty) {
                $removeItem = Cart::where('user_id',  Auth::guard('users')->user()->id)->first();
                $removeItem->delete();
            }
        }
        $data = Cart::where('user_id',  Auth::guard('users')->user()->id)->get();

        return view('frontend.checkout', compact('data'));
    }
    public function placeorder(Request $request)
    {
        $request->validate([
            'name' => 'required|max:50',
            'email' => 'required|email|max:30',
            'phone' => 'required|min:10|max:12',
            'address' => 'required|max:255',
        ], [
            'name.required' => 'Tên là trường bắt buộc',
            'email.required' => 'Bạn chưa điền email',
            'email.email' => 'Email không hợp lệ',

            'email.max' => 'Email không được dài quá 30 ký tự',
            'phone.required' => 'Số điện thoại là trường bắt buộc',
            'phone.min' => 'Số điện thoại phải có ít nhất 10 chữ số',
            'phone.max' => 'Số điện thoại không được vượt quá 12 chữ số',
            'address.required' => 'Địa chỉ là trường bắt buộc',

        ]);

        $order = new Order();
        $order->user_id = Auth::guard('users')->user()->id;
        $order->name = $request->name ?? Auth::guard('users')->user()->name;
        $order->email = $request->email ?? Auth::guard('users')->user()->email;
        $order->phone = $request->phone ?? Auth::guard('users')->user()->phone;
        $order->address = $request->address ?? Auth::guard('users')->user()->address;
        $order->created_at = date('Y-m-d H:i:s');
        $order->code = date("Ymd");
        $order->save();

        $cartItem = Cart::where('user_id',  Auth::guard('users')->user()->id)->get();

        foreach ($cartItem as $Item) {
            if ($Item->products->sale && $Item->products->sale->date_begin <= now() && $Item->products->sale->date_end >= now()) {
                $product_price = $Item->products->sale->price_sale;
            } else {
                $product_price = $Item->products->price_buy;
            }
            Orderdetail::create([
                'order_id' => $order->id,
                'product_id' => $Item->product_id,
                'qty' => $Item->product_qty,
                'price' => $product_price,
                'amount' => $Item->product_qty * $product_price,

            ]);
            $product = Product::where('id', $Item->product_id)->first();
            $product->store->qty = $product->store->qty -  $Item->product_qty;
            $product->store->update();
            
        }
      

        $cartItem = Cart::where('user_id',  Auth::guard('users')->user()->id)->get();
        Cart::destroy($cartItem);
        return redirect('/')->with('status', 'Đặt hàng thành công');
    }
}
