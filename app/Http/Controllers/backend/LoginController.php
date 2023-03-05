<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Đăng nhập hệ thống';
        return view("backend.login", compact('title'));
    }
    public function login(Request $request)
    {
        if (isset($request->DANGNHAP)) {
            $username = $request['username'];
            $password = sha1($request['password']);
            if (filter_var($username, FILTER_VALIDATE_EMAIL)) {
                $args = [
                    ['email', '=', $username],
                    ['roles', '=', 1],
                    ['status', '=', 1]
                ];
            } else {
                $args = [
                    ['username', '=', $username],
                    ['roles', '=', 1],
                    ['status', '=', 1]
                ];
            }
            $row = User::where($args)->first();
            if ($row != null) {
                if ($row->password == $password) {
                    session(['useradmin' => $username]);
                    session(['name' => $row->name]);
                    session(['user_id' => $row->id]);
                    session(['image' => isset($row->image) ? $row->image : 'user.jpg']);
                    return redirect()->route('dashboard.index');
                } else {
                    $error_login = "Sai mật khẩu";
                }
            } else {
                $error_login = "Sai tên đăng nhập";
            }
            return view('backend.login', compact('error_login'));
        }
    }
    public function logout(Request $request)
    {
        $request->session()->forget('useradmin');
        $request->session()->forget('name');
        $request->session()->forget('user_id');
        $request->session()->forget('image');
        return redirect()->route('dashboard.index');
    }
}
