<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Brand;
use App\Models\Product;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list_brand = Brand::where('status',  '<>', '0')->orderBy('created_at', 'desc')->get();
        return view("backend.brand.index", compact('list_brand'));
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
        $total = Brand::join('product', 'product.brand_id', '=', 'brand.id')
            ->where('brand.id', '=', $id)
            ->distinct()
            ->count();

        $total_sale = Brand::join('product', 'product.brand_id', '=', 'brand.id')
            ->where('product.price_sale', '>', '0')
            ->where('brand.id', '=', $id)
            ->distinct()
            ->count();


        $product_brand = Brand::join('product', 'product.brand_id', '=', 'brand.id')
            ->select('product.*', 'product.name as product_name', 'product.id as product_id')
            ->where('brand.id', '=', $id)
            ->orderBy('created_at', 'desc')
            ->distinct()
            ->get();

        $brand = Brand::where('brand.id', '=', $id)
            ->select(
                "*",
                DB::raw("(" . User::select("name")->whereColumn("user.id", "=", "brand.updated_by")->toSql() . ") as updated_name"),
                DB::raw("(" . User::select("name")->whereColumn("user.id", "=", "brand.created_by")->toSql() . ") as created_name")
            )
            ->first();
        if ($brand == null) {
            return redirect()->route('brand.index')->with('message', ['type' => 'danger', 'msg' => 'Sản phẩm không tồn tại']);
        } else {
            return view('backend.brand.show', compact('brand', 'total', 'total_sale', 'product_brand'));
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
        $brand = Brand::find($id);
        if ($brand == null) {
            return redirect()->route('brand.index')->with('message', ['type' => 'danger', 'msg' => 'Sản phẩm không tồn tại']);
        } else {
            $brand->delete();
            return redirect()->route('brand.trash')->with('message', ['type' => 'success', 'msg' => 'Hủy sản phẩm thành công']);
        }
    }
    // delete
    public function delete($id)
    {
        $brand = Brand::find($id);
        if ($brand == null) {
            return redirect()->route('brand.index')->with('message', ['type' => 'danger', 'msg' => 'Sản phẩm không tồn tại']);
        } else {
            $brand->status = 0;
            $brand->updated_at = date('Y-m-d H:i:m');
            $brand->updated_by = 1;
            $brand->save();
            return redirect()->route('brand.index')->with('message', ['type' => 'success', 'msg' => 'Xóa sản phẩm thành công']);
        }
    }
    // trash
    public function trash()
    {
        $list_brand = Brand::where('status',  '=', '0')->orderBy('created_at', 'desc')->get();
        return view("backend.brand.trash", compact('list_brand'));
    }
    // delete
    public function status($id)
    {
        $brand = Brand::find($id);
        if ($brand == null) {
            return redirect()->route('brand.index')->with('message', ['type' => 'danger', 'msg' => 'Sản phẩm không tồn tại']);
        } else {
            $brand->status = ($brand->status == 1) ? 2 : 1;
            $brand->updated_at = date('Y-m-d H:i:m');
            $brand->updated_by = 1;
            $brand->save();
            return redirect()->route('brand.index')->with('message', ['type' => 'success', 'msg' => 'Thay đổi trạng thái thành công']);
        }
    }
    // restore
    public function restore($id)
    {
        $brand = Brand::find($id);
        if ($brand == null) {
            return redirect()->route('brand.index')->with('message', ['type' => 'danger', 'msg' => 'Sản phẩm không tồn tại']);
        } else {
            $brand->status = 2;
            $brand->updated_at = date('Y-m-d H:i:m');
            $brand->updated_by = 1;
            $brand->save();
            return redirect()->route('brand.index')->with('message', ['type' => 'success', 'msg' => 'Khôi phục sản phâm thành công']);
        }
    }
}
