<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\ProductSale;
use App\Models\ProductStore;
use App\Http\Services\CartService;
use Illuminate\Console\View\Components\Alert;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    protected $cartService;

    public function __construct()
    {
    }




    public function addcart(Request $request)
    {
        $productid = $request->input('product_id');
        $quality = $request->input('product_qty');
        if (Auth::guard('users')->check() || Auth::guard('admin')->check()) {
            $prod_check = Product::where('id', $productid)->first();
            if ($prod_check) {
                if (Cart::where('product_id', $productid)->where('user_id', Auth::guard('admin')->user()->id ?? Auth::guard('users')->user()->id)->exists()) {
                } else {
                    $cartItem = new Cart();
                    $cartItem->product_id = $productid;
                    $cartItem->product_qty = $quality;
                    $cartItem->user_id = Auth::guard('admin')->user()->id ?? Auth::guard('users')->user()->id;
                    $cartItem->save();
                    return response()->json(['status' => $prod_check->name .= ' Added to Cart']);
                }
            }
        } else {
            return response()->json(['status' => ' Login to Continue']);
        }
    }
    public function deletecart(Request $request)
    {
        if (Auth::guard('users')->check() || Auth::guard('admin')->check()) {
            $productid = $request->input('product_id');

            if (Cart::where('product_id', $productid)->where('user_id', Auth::guard('admin')->user()->id ?? Auth::guard('users')->user()->id)->exists()) {
                $cartItem = Cart::where('product_id', $productid)->where('user_id', Auth::guard('admin')->user()->id ?? Auth::guard('users')->user()->id)->first();
                $cartItem->delete();
                return response()->json(['status' => 'Product delete successfully']);
            }
        } else {
            return response()->json(['status' => ' Login to Continue']);
        }
    }
    public function updatecart(Request $request)
    {
        $productid = $request->input('product_id');
        $productqty = $request->input('product_qty');
        if (Auth::guard('users')->check() || Auth::guard('admin')->check()) {
          

            if (Cart::where('product_id', $productid)->where('user_id', Auth::guard('admin')->user()->id ?? Auth::guard('users')->user()->id)->exists()) {
                $cartItem = Cart::where('product_id', $productid)->where('user_id', Auth::guard('admin')->user()->id ?? Auth::guard('users')->user()->id)->first();
                $cartItem->product_qty = $productqty;
                $cartItem->update();
                return response()->json(['status' => 'Quatily updated successfully']);
            }
        } else {
            return response()->json(['status' => ' Login to Continue']);
        }
    }
    public function cart()
    {

        $data = Cart::where('user_id', Auth::guard('admin')->user()->id ?? Auth::guard('users')->user()->id)->get();
       
        return view('frontend.cart', compact('data'));
    }
}
