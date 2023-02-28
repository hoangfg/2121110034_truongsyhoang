<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\Category;
use App\Models\Brand;
use App\Models\Topic;
use App\Models\Post;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list_menu = Menu::where('status', '<>', '0')
        ->orderBy('position', 'asc')
        ->orderBy('sort_order', 'asc')
        ->get();
        $list_category = Category::where('status', '<>', '0')
        ->orderBy('created_at', 'desc')
        ->get();
        $list_brand = Brand::where('status', '<>', '0')
        ->orderBy('created_at', 'desc')
        ->get();
        $list_topic = Topic::where('status', '<>', '0')
        ->orderBy('created_at', 'desc')
        ->get();
        $list_page = Post::where([['status', '<>', '0'], ['type', '=', 'page']])
        ->orderBy('created_at', 'desc')
        ->get();
        
        return view("backend.menu.index", compact('list_menu', 'list_category', 'list_brand', 'list_topic', 'list_page'));
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
