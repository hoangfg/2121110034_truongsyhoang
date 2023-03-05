<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Tất cả tài khoản ';
        $list_user=User::where([['status', '<>', '0'], ['roles', '!=', '0']])->orderBy('created_at', 'desc')->get();
        return view("backend.user.index", compact('list_user', 'title'));
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
        $user =User::find($id);
        if ($user == null) {
            return redirect()->route('user.index')->with('message', ['type' => 'danger', 'msg' => 'Mẫu tin không tồn tại']);
        } else {
            $user->delete();
            return redirect()->route('user.trash')->with('message', ['type' => 'success', 'msg' => 'Xóa sản phẩm thành công']);
        }
    }
    // delete
    public function delete($id, Request $request)
    {
        $user =User::find($id);
        if ($user == null) {
            return redirect()->route('user.index')->with('message', ['type' => 'danger', 'msg' => 'Mẫu tin không tồn tại']);
        } else {
            $user->status = 0;
            $user->updated_at = date('Y-m-d H:i:s');
            $user->updated_by = ($request->session()->exists('user_id')) ? session('user_id') : 1;
            $user->save();
            return redirect()->route('user.index')->with('message', ['type' => 'success', 'msg' => 'Chuyển vào thùng rác thành công']);
        }
    }
    // trash
    public function trash()
    {
        $title = 'Tất cả tài khoản không còn sử dụng';
        $list_user =User::where('status', '=', '0')->orderBy('created_at', 'desc')->get();
        return view("backend.user.trash", compact('list_user', 'title'));
    }
    // status
    public function status($id, Request $request)
    {
        $user =User::find($id);
        if ($user == null) {
            return redirect()->route('user.index')->with('message', ['type' => 'danger', 'msg' => 'Mẫu tin không tồn tại']);
        } else {
            $user->status = ($user->status == 1) ? 2 : 1;
            $user->updated_at = date('Y-m-d H:i:s');
            $user->updated_by = ($request->session()->exists('user_id')) ? session('user_id') : 1;
            $user->save();
            return redirect()->route('user.index')->with('message', ['type' => 'success', 'msg' => 'Thay đổi trạng thái thành công']);
        }
    }
    // restore
    public function restore($id, Request $request)
    {
        $user =User::find($id);
        if ($user == null) {
            return redirect()->route('user.index')->with('message', ['type' => 'danger', 'msg' => 'Mẫu tin không tồn tại']);
        } else {
            $user->status = 2;
            $user->updated_at = date('Y-m-d H:i:s');
            $user->updated_by = ($request->session()->exists('user_id')) ? session('user_id') : 1;
            $user->save();
            return redirect()->route('user.trash')->with('message', ['type' => 'success', 'msg' => 'Khôi phục sản phẩm thành công']);
        }
    }
}
