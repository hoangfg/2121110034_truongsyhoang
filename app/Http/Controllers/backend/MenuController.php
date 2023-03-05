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
        $title = 'Tất cả danh mục menu';
        $list_menu = Menu::where('status', '<>', '0')
            ->orderBy('position', 'asc')
            ->orderBy('sort_order', 'desc')
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

        return view("backend.menu.index", compact('list_menu', 'list_category', 'list_brand', 'list_topic', 'list_page', 'title'));
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
        $menu = Menu::find($id);
        if ($menu == null) {
            return redirect()->route('menu.index')->with('message', ['type' => 'danger', 'msg' => 'Mẫu tin không tồn tại']);
        } else {
            $menu->delete();
            return redirect()->route('menu.trash')->with('message', ['type' => 'success', 'msg' => 'Xóa tin nhắn thành công']);
        }
    }
    // delete
    public function delete($id, Request $request)
    {
        $menu = Menu::find($id);
        if ($menu == null) {
            return redirect()->route('menu.index')->with('message', ['type' => 'danger', 'msg' => 'Mẫu tin không tồn tại']);
        } else {
            $menu->status = 0;
            $menu->updated_at = date('Y-m-d H:i:s');
            $menu->updated_by = ($request->session()->exists('user_id')) ? session('user_id') : 1;
            $menu->save();
            return redirect()->route('menu.index')->with('message', ['type' => 'success', 'msg' => 'Xóa tin nhắn thành công']);
        }
    }
    // restore
    public function restore($id, Request $request)
    {
        $menu = Menu::find($id);
        if ($menu == null) {
            return redirect()->route('menu.index')->with('message', ['type' => 'danger', 'msg' => 'Mẫu tin không tồn tại']);
        } else {
            $menu->status = 2;
            $menu->updated_at = date('Y-m-d H:i:s');
            $menu->updated_by = ($request->session()->exists('user_id')) ? session('user_id') : 1;
            $menu->save();
            return redirect()->route('menu.trash')->with('message', ['type' => 'success', 'msg' => 'Khôi phục sản phẩm thành công']);
        }
    }
    // trash
    public function trash()
    {
        $title = 'Thùng rác menu';
        $list_menu = Menu::where('status', '=', '0')
            ->orderBy('position', 'asc')
            ->orderBy('sort_order', 'asc')
            ->get();
        return view("backend.menu.trash", compact('list_menu', 'title'));
    }
    #status
    public function status($id, Request $request)
    {
        $menu = Menu::find($id);
        if ($menu == null) {
            return redirect()->route('menu.index')->with('message', ['type' => 'danger', 'msg' => 'Mẫu tin không tồn tại']);
        } else {
            $menu->status = ($menu->status == 1) ? 2 : 1;
            $menu->updated_at = date('Y-m-d H:i:s');
            $menu->updated_by = ($request->session()->exists('user_id')) ? session('user_id') : 1;
            $menu->save();
            return redirect()->route('menu.index')->with('message', ['type' => 'success', 'msg' => 'Thay đổi trạng thái thành công']);
        }
    }
}
