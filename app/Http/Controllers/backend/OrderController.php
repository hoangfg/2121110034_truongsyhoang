<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\User;
use App\Models\Orderdetail;
use App\Models\Product;
use Illuminate\Support\Facades\DB;




class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Tất cả hóa đơn';
        $list_order = Order::join('user', 'user.id', '=', 'order.user_id')
            ->join('orderdetail', 'orderdetail.order_id', '=', 'order.id')
            ->select('order.*', 'user.name as user_name', 'user.email as user_email', 'user.phone as user_phone')
            
            ->orderBy('created_at', 'desc')
            ->distinct()
            ->get();
        $list_order_new = Order::join('user', 'user.id', '=', 'order.user_id')
            ->join('orderdetail', 'orderdetail.order_id', '=', 'order.id')
            ->select('order.*', 'user.name as user_name', 'user.email as user_email', 'user.phone as user_phone')
            ->where('order.status', '=', '0')
            ->orderBy('created_at', 'desc')
            ->distinct()
            ->get();
        $list_order_confirm = Order::join('user', 'user.id', '=', 'order.user_id')
            ->join('orderdetail', 'orderdetail.order_id', '=', 'order.id')
            ->select('order.*', 'user.name as user_name', 'user.email as user_email', 'user.phone as user_phone')
            ->where('order.status', '=', '1')
            ->orderBy('created_at', 'desc')
            ->distinct()
            ->get();
        // return dd($list_order);
        $list_status = [
            ['type' => 'secondary', 'text' => 'Đơn hàng mới'],
            ['type' => 'primary', 'text' => 'Đã xác nhận'],
            ['type' => 'info', 'text' => 'Đóng gói'],
            ['type' => 'warning', 'text' => 'Vận chuyển'],
            ['type' => 'success', 'text' => 'Đã giao'],
            ['type' => 'danger', 'text' => 'Đã hủy'],
        ];
        return view("backend.order.index", compact('list_order', 'list_order_new', 'list_order_confirm', 'list_status', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $title = 'Chi tiết hóa đơn';
        $order = Order::join('user', 'user.id', '=', 'order.user_id')
            ->where('order.id', '=', $id)
            ->first();
        $list_orderdetail = Product::join('Orderdetail', 'product.id', '=', 'orderdetail.product_id')
            ->select('*', 'product.price as product_price', 'product.qty as product_qty')
            ->where('orderdetail.order_id', '=', $id)
            ->get();
        if ($order == null) {
            return redirect()->route('order.index')->with('message', ['type' => 'danger', 'msg' => 'Sản phẩm không tồn tại']);
        } else {
           
            return view('backend.order.show', compact('order',  'title', 'list_orderdetail'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    // status
    public function status($id)
    {
        $order = Order::find($id);
        if ($order == null) {
            return redirect()->route('order.index')->with('message', ['type' => 'danger', 'msg' => 'Sản phẩm không tồn tại']);
        } else {
            $order->status = ($order->status == 1) ? 2 : 1;
            $order->updated_at = date('Y-m-d H:i:m');
            $order->updated_by = 1;
            $order->save();
            return redirect()->route('order.index')->with('message', ['type' => 'success', 'msg' => 'Thay đổi trạng thái thành công']);
        }
    }
}
