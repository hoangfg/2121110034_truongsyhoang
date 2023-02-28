<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list_product = Product::leftJoin("category", "category.id", "=", "product.category_id")
            ->leftJoin("brand", "brand.id", "=", "product.brand_id")
            ->select("product.*", "category.name as category_name", "brand.name as brand_name")
            ->where('product.status',  '<>', '0')
            ->orderBy('product.created_at', 'desc')
            ->get();
        // return view("backend.product.index", ['list_product' => $list_product]);
        return view("backend.product.index", compact('list_product'));
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
        $product = Product::leftJoin("category", "category.id", "=", "product.category_id")
            ->leftJoin("brand", "brand.id", "=", "product.brand_id")
            ->leftJoin("user as user_1", "user_1.id", "=", "product.created_by")
            ->leftJoin("user as user_2", "user_2.id", "=", "product.updated_by")
            ->select("product.*", "category.name as category_name", "brand.name as brand_name", "user_1.name as created_name", "user_2.name as updated_name")
            ->find($id);
        if ($product == null) {
            return redirect()->route('product.index')->with('message', ['type' => 'danger', 'msg' => 'Sản phẩm không tồn tại']);
        } else {
            return view("backend.product.show", compact('product'));
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
        //
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
            return redirect()->route('product.index')->with('message', ['type' => 'success', 'msg' => 'Khôi phục sản phẩm thành công']);
        }
    }
    // status
    public function status($id)
    {
        $product = Product::find($id);
        if ($product == null) {
            return redirect()->route('product.index')->with('message', ['type' => 'danger', 'msg' => 'Sản phẩm không tồn tại']);
        } else {
            $product->status=($product->status == 1) ? 2 : 1;
            $product-> updated_at = date('Y-m-d H:i:m');
            $product->updated_by = 1;
            $product -> save();         
            return redirect()->route('product.index')->with('message', ['type' => 'success', 'msg' => 'Thay đổi trạng thái thành công']);
        }
    }

    // trash
    public function trash()
    {
        $list_product = Product::leftJoin("category", "category.id", "=", "product.category_id")
        ->leftJoin("brand", "brand.id", "=", "product.brand_id")
        ->select("product.*", "category.name as category_name", "brand.name as brand_name")
        ->where('product.status',  '=', '0')
            ->orderBy('product.created_at', 'desc')
            ->get();
        
        return view("backend.product.trash", compact('list_product'));
    }
}
