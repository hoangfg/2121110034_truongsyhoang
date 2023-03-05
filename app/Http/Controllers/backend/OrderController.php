<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
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
            ->where('order.status', '<>', '5')
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
        return view("backend.order.index", compact('list_order', 'list_status', 'title'));
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
        //
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
}
