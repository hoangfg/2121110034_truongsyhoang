<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;


class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list_category = Category::where('status',  '<>', '0')->get();
        return view("backend.category.index", compact('list_category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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

    #delete
    public function delete($id)
    {
        $category = Category::find($id);
        if ($category == null) {
            return redirect()->route('category.index')->with('message', ['type' => 'danger', 'msg' => 'Mẫu tin không tồn tại']);
        } else {
            $category->status = 0;
            $category->updated_at = date('Y-m-d H:i:s');
            $category->updated_by = 1;
            $category->save();
            return redirect()->route('category.index')->with('message',['type' => 'success','msg'=>'Chuyển vào thùng rác thành công']);
        }

    }
    #status
    public function status($id)
    {
        $category = Category::find($id);
        if ($category == null) {
            return redirect()->route('category.index')->with('message', ['type' => 'danger', 'msg' => 'Mẫu tin không tồn tại']);
        } else {
            $category->status = ($category->status==1) ? 2 : 1;
            $category->updated_at = date('Y-m-d H:i:s');
            $category->updated_by = 1;
            $category->save();
            return redirect()->route('category.index')->with('message',['type' => 'success','msg'=>'Thay đổi trạng thái thành công']);
        }
    }
}
