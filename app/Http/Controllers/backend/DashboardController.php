<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        if ($request->session()->exists('useradmin')) {
            
            return view('backend.dashboard.index');
        } else {
            return view('backend.login');
        }
    }
}
