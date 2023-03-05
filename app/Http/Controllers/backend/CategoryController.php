<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Http\Requests\StoreCategoryRequest;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;


class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Tất cả danh mục';
        $list_category = Category::where('status',  '<>', '0')->orderBy('created_at', 'desc')->get();
        return view("backend.category.index", compact('list_category', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Thêm danh mục';
        $list_category = Category::where('status', '<>', '0')->orderBy('created_at', 'desc')->get();
        $html_parent_id = "";
        $html_sort_order = "";
        foreach ($list_category as $category) {
            $html_parent_id .= "<option value='" . $category->id . "'>" . $category->name . "</option>";
            $html_sort_order .= "<option value='" . ($category->sort_order + 1) . "'>" . $category->name . "</option>";
        }
        return view('backend.category.create', compact('html_parent_id', 'html_sort_order', 'title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCategoryRequest $request)
    {
        $category = new Category();
        $category->name = $request->name;
        $category->slug = Str::slug($request->name, '-');
        $category->metakey = $request->metakey;
        $category->metadesc = $request->metadesc;
        $category->parent_id =  $request->parent_id;
        $category->sort_order = $request->sort_order;
        $category->level = 1;
        $category->status = $request->status;
        $category->created_at = date('Y-m-d H:i:s');
        $category->image = 1;
        $category->created_by = ($request->session()->exists('user_id')) ? session('user_id') : 1;
        // $category->created_by = 1;
        // dd($category);
        $category->save();
        return redirect()->route('category.index')->with('message', ['type' => 'success', 'msg' => 'Thêm sản phẩm thành công']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $title = 'Thông tin danh mục';
        $total = category::join('product', 'product.category_id', '=', 'category.id')
            ->where('category.id', '=', $id)
            ->count();
        $total_sale = category::join('product', 'product.category_id', '=', 'category.id')
            ->where('product.price_sale', '>', '0')
            ->where('category.id', '=', $id)
            ->count();

        $product_category = Category::join('product', 'product.category_id', '=', 'category.id')
            ->select('product.*', 'product.name as product_name', 'product.id as product_id')
            ->where('category.id', '=', $id)
            ->orderBy('created_at', 'desc')
            ->distinct()
            ->get();

        $category = category::where('category.id', '=', $id)
            ->select(
                "*",
                DB::raw("(" . User::select("name")->whereColumn("user.id", "=", "category.created_by")->toSql() . ") as created_name"),
                DB::raw("(" . User::select("name")->whereColumn("user.id", "=", "category.updated_by")->toSql() . ") as updated_name")
            )
            ->first();
        if ($category == null) {
            return redirect()->route('category.index')->with('message', ['type' => 'danger', 'msg' => 'Sản phẩm không tồn tại']);
        } else {
            return view('backend.category.show', compact('category', 'total', 'total_sale', 'product_category', 'title'));
        }
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
    public function update($id, Request $request)
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
        $category = Category::find($id);
        if ($category == null) {
            return redirect()->route('category.index')->with('message', ['type' => 'danger', 'msg' => 'Mẫu tin không tồn tại']);
        } else {
            $category->delete();
            return redirect()->route('category.trash')->with('message', ['type' => 'success', 'msg' => 'Xóa sản phẩm thành công']);
        }
    }

    #delete
    public function delete($id, Request $request)
    {
       
        $category = Category::find($id);
        if ($category == null) {
            return redirect()->route('category.index')->with('message', ['type' => 'danger', 'msg' => 'Mẫu tin không tồn tại']);
        } else {
            $category->status = 0;
            $category->updated_at = date('Y-m-d H:i:s');
            $category->updated_by = ($request->session()->exists('user_id')) ? session('user_id') : 1;
            $category->save();
            return redirect()->route('category.index')->with('message', ['type' => 'success', 'msg' => 'Chuyển vào thùng rác thành công']);
        }
    }
    #restore
    public function restore($id, Request $request)
    {
        $category = Category::find($id);
        if ($category == null) {
            return redirect()->route('category.index')->with('message', ['type' => 'danger', 'msg' => 'Mẫu tin không tồn tại']);
        } else {
            $category->status = 2;
            $category->updated_at = date('Y-m-d H:i:s');
            $category->updated_by = ($request->session()->exists('user_id')) ? session('user_id') : 1;
            $category->save();
            return redirect()->route('category.trash')->with('message', ['type' => 'success', 'msg' => 'Khôi phục sản phẩm thành công']);
        }
    }
    #status
    public function status($id, Request $request)
    {
        $category = Category::find($id);
        if ($category == null) {
            return redirect()->route('category.index')->with('message', ['type' => 'danger', 'msg' => 'Mẫu tin không tồn tại']);
        } else {
            $category->status = ($category->status == 1) ? 2 : 1;
            $category->updated_at = date('Y-m-d H:i:s');
            $category->updated_by = ($request->session()->exists('user_id')) ? session('user_id') : 1;
            $category->save();
            return redirect()->route('category.index')->with('message', ['type' => 'success', 'msg' => 'Thay đổi trạng thái thành công']);
        }
    }
    // trash
    public function trash()
    {
        $title = 'Thùng rác danh mục';
        $list_category = Category::where('status',  '=', '0')->orderBy('created_at', 'desc')->get();
        return view("backend.category.trash", compact('list_category', 'title'));
    }
}
