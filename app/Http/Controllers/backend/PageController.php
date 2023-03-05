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
        $title = 'Tất cả giới thiệu';
        $list_page = Post::where([['post.status', '<>', '0'], ['post.type', '=', 'page']])
            ->orderBy('post.created_at', 'desc')->get();

        return view("backend.page.index", compact('list_page', 'title'));
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
    #delete
    public function delete($id, Request $request)
    {
        $page = Post::find($id);
        if ($page == null) {
            return redirect()->route('page.index')->with('message', ['type' => 'danger', 'msg' => 'Mẫu tin không tồn tại']);
        } else {
            $page->status = 0;
            $page->updated_at = date('Y-m-d H:i:s');
            $page->updated_by = ($request->session()->exists('user_id')) ? session('user_id') : 1;
            $page->save();
            return redirect()->route('page.index')->with('message', ['type' => 'success', 'msg' => 'Chuyển vào thùng rác thành công']);
        }
    }
    #restore
    public function restore($id, Request $request)
    {
        $page = Post::find($id);
        if ($page == null) {
            return redirect()->route('page.index')->with('message', ['type' => 'danger', 'msg' => 'Mẫu tin không tồn tại']);
        } else {
            $page->status = 2;
            $page->updated_at = date('Y-m-d H:i:s');
            $page->updated_by = ($request->session()->exists('user_id')) ? session('user_id') : 1;
            $page->save();
            return redirect()->route('page.trash')->with('message', ['type' => 'success', 'msg' => 'Khôi phục sản phẩm thành công']);
        }
    }
    #status
    public function status($id, Request $request)
    {
        $page = Post::find($id);
        if ($page == null) {
            return redirect()->route('page.index')->with('message', ['type' => 'danger', 'msg' => 'Mẫu tin không tồn tại']);
        } else {
            $page->status = ($page->status == 1) ? 2 : 1;
            $page->updated_at = date('Y-m-d H:i:s');
            $page->updated_by = ($request->session()->exists('user_id')) ? session('user_id') : 1;
            $page->save();
            return redirect()->route('page.index')->with('message', ['type' => 'success', 'msg' => 'Thay đổi trạng thái thành công']);
        }
    }
    // trash
    public function trash()
    {
        $title = 'Thùng rác ';
        $list_page = Post::where([['post.status', '=', '0'], ['post.type', '=', 'page']])
            ->orderBy('post.created_at', 'desc')->get();
        return view("backend.page.trash", compact('list_page','title'));
    }
}
