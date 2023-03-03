<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list_page = Post::where([['post.status', '<>', '0'], ['post.type', '=', 'page']])
            ->orderBy('post.created_at', 'desc')->get();

        return view("backend.page.index", compact('list_page'));
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
        $page = Post::find($id);
        if ($page == null) {
            return redirect()->route('page.index')->with('message', ['type' => 'danger', 'msg' => 'Sản phẩm không tồn tại']);
        } else {
            $page->delete();
            return redirect()->route('page.trash')->with('message', ['type' => 'success', 'msg' => 'Hủy sản phẩm thành công']);
        }
    }

    // trash
    public function trash()
    {
        $list_page = Post::where([['post.status', '=', '0'], ['post.type', '=', 'page']])
            ->orderBy('post.created_at', 'desc')->get();
        return view("backend.page.trash", compact('list_page'));
    }
}
