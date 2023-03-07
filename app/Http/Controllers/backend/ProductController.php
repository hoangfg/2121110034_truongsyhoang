<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;
use App\Models\Brand;
use App\Models\Category;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Tất cả sản phẩm';
        $list_product = Product::join("category", "category.id", "=", "product.category_id")
            ->join("brand", "brand.id", "=", "product.brand_id")
            ->select("product.*", "category.name as category_name", "brand.name as brand_name")
            ->where('product.status',  '<>', '0')
            ->orderBy('product.created_at', 'desc')
            ->get();
        // return view("backend.product.index", ['list_product' => $list_product]);
        return view("backend.product.index", compact('list_product', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Thêm sản phẩm';
        $list_category = Product::where('status', '<>', '0')->orderBy('created_at', 'desc')->get();
        $html_parent_id = "";
        $html_sort_order = "";
        foreach ($list_category as $item) {
            $html_parent_id .= "<option value='" . $item->id . "'>" . $item->name . "</option>";
            $html_sort_order .= "<option value='" . ($item->sort_order + 1) . "'>Sau: " . $item->name . "</option>";
        }
        return view('backend.product.create', compact('html_parent_id', 'html_sort_order', 'title'));
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
        $title = 'Chi tiết sản phẩm';
        // $product = Product::join("category", "category.id", "=", "product.category_id")
        //     ->join("brand", "brand.id", "=", "product.brand_id")
        //     ->join("user as user_1", "user_1.id", "=", "product.created_by")
        //     ->join("user as user_2", "user_2.id", "=", "product.updated_by")
        //     ->select("product.*", "category.name as category_name", "brand.name as brand_name", "user_1.name as created_name", "user_2.name as updated_name")
        //     ->find($id);
        $product = Product::where('product.id', '=', $id)
            // ->join("category", "category.id", "=", "product.category_id")
            // ->join("brand", "brand.id", "=", "product.brand_id")
            // ->select("product.*", "category.name as category_name", "brand.name as brand_name")
            ->select(
                "*",
                DB::raw("(" . User::select("name")->whereColumn("user.id", "=", "product.updated_by")->toSql() . ") as updated_name"),
                DB::raw("(" . User::select("name")->whereColumn("user.id", "=", "product.created_by")->toSql() . ") as created_name"),
                DB::raw("(" . Brand::select("name")->whereColumn("brand.id", "=", "product.brand_id")->toSql() . ") as brand_name"),
                DB::raw("(" . Category::select("name")->whereColumn("category.id", "=", "product.category_id")->toSql() . ") as category_name")
            )
            ->first();
        if ($product == null) {
            return redirect()->route('product.index')->with('message', ['type' => 'danger', 'msg' => 'Sản phẩm không tồn tại']);
        } else {
            return view("backend.product.show", compact('product', 'title'));
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
        $product = Product::find($id);
        if ($product == null) {
            return redirect()->route('product.index')->with('message', ['type' => 'danger', 'msg' => 'Sản phẩm không tồn tại']);
        } else {
            $product->delete();
            return redirect()->route('product.index')->with('message', ['type' => 'success', 'msg' => 'Xóa sản phẩm thành công thành công']);
        }
    }
    // delete
    public function delete($id)
    {
        $product = Product::find($id);
        if ($product == null) {
            return redirect()->route('product.index')->with('message', ['type' => 'danger', 'msg' => 'Sản phẩm không tồn tại']);
        } else {
            $product->status = 0;
            $product->updated_at = date('Y-m-d H:i:m');
            $product->updated_by = 1;
            $product->save();
            return redirect()->route('product.index')->with('message', ['type' => 'success', 'msg' => 'Xóa sản phẩm thành công thành công']);
        }
    }
    // restore
    public function restore($id)
    {
        $product = Product::find($id);
        if ($product == null) {
            return redirect()->route('product.index')->with('message', ['type' => 'danger', 'msg' => 'Sản phẩm không tồn tại']);
        } else {
            $product->status = 2;
            $product->updated_at = date('Y-m-d H:i:m');
            $product->updated_by = 1;
            $product->save();
            return redirect()->route('product.trash')->with('message', ['type' => 'success', 'msg' => 'Khôi phục sản phẩm thành công']);
        }
    }
    // status
    public function status($id)
    {
        $product = Product::find($id);
        if ($product == null) {
            return redirect()->route('product.index')->with('message', ['type' => 'danger', 'msg' => 'Sản phẩm không tồn tại']);
        } else {
            $product->status = ($product->status == 1) ? 2 : 1;
            $product->updated_at = date('Y-m-d H:i:m');
            $product->updated_by = 1;
            $product->save();
            return redirect()->route('product.index')->with('message', ['type' => 'success', 'msg' => 'Thay đổi trạng thái thành công']);
        }
    }

    // trash
    public function trash()
    {
        $title = 'Thùng rác sản phẩm';
        $list_product = Product::join("category", "category.id", "=", "product.category_id")
            ->join("brand", "brand.id", "=", "product.brand_id")
            ->select("product.*", "category.name as category_name", "brand.name as brand_name")
            ->where('product.status',  '=', '0')
            ->orderBy('product.created_at', 'desc')
            ->get();

        return view("backend.product.trash", compact('list_product', 'title'));
    }
}
