<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $now = Carbon::now();
        $targetDate = Carbon::create(2023, 2, 31);
        if ($targetDate->isValid()) {
            $diffInDays = "Ngày tháng năm hợp lệ.";
        } else {
            $diffInDays = "Ngày tháng năm không hợp lệ.";
        }
       
        $title = 'Tất cả khách hàng';
        $list_customer = User::where([['status', '<>', '0'], ['roles', '=', '0']])->orderBy('created_at', 'desc')->get();
        return view("backend.customer.index", compact('list_customer', 'title', 'diffInDays'));
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
        $title = 'Thông tin khách hàng';
        $customer = User::find($id);
        return view("backend.customer.show", compact('title', 'customer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

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
        $customer = User::find($id);
        if ($customer == null) {
            return redirect()->route('customer.index')->with('message', ['type' => 'danger', 'msg' => 'Mẫu tin không tồn tại']);
        } else {
            $customer->delete();
            return redirect()->route('customer.trash')->with('message', ['type' => 'success', 'msg' => 'Xóa sản phẩm thành công']);
        }
    }
    // delete
    public function delete($id, Request $request)
    {
        $customer = User::find($id);
        if ($customer == null) {
            return redirect()->route('customer.index')->with('message', ['type' => 'danger', 'msg' => 'Mẫu tin không tồn tại']);
        } else {
            $customer->status = 0;
            $customer->updated_at = date('Y-m-d H:i:s');
            $customer->updated_by =  Auth::user()->id;
            $customer->save();
            return redirect()->route('customer.index')->with('message', ['type' => 'success', 'msg' => 'Chuyển vào thùng rác thành công']);
        }
    }
    // trash
    public function trash()
    {
        $title = 'Tài khoản bị khóa';
        $list_customer = User::where([['status', '=', '0'], ['roles', '=', '0']])->orderBy('created_at', 'desc')->get();
        return view("backend.customer.trash", compact('list_customer', 'title'));
    }
    // status
    public function status($id, Request $request)
    {
        $customer = User::find($id);
        if ($customer == null) {
            return redirect()->route('customer.index')->with('message', ['type' => 'danger', 'msg' => 'Mẫu tin không tồn tại']);
        } else {
            $customer->status = ($customer->status == 1) ? 2 : 1;
            $customer->updated_at = date('Y-m-d H:i:s');
            $customer->updated_by =  Auth::user()->id;
            $customer->save();
            return redirect()->route('customer.index')->with('message', ['type' => 'success', 'msg' => 'Thay đổi trạng thái thành công']);
        }
    }
    // restore
    public function restore($id, Request $request)
    {
        $customer = User::find($id);
        if ($customer == null) {
            return redirect()->route('customer.index')->with('message', ['type' => 'danger', 'msg' => 'Mẫu tin không tồn tại']);
        } else {
            $customer->status = 2;
            $customer->updated_at = date('Y-m-d H:i:s');
            $customer->updated_by =  Auth::user()->id;
            $customer->save();
            return redirect()->route('customer.trash')->with('message', ['type' => 'success', 'msg' => 'Khôi phục sản phẩm thành công']);
        }
    }
}
