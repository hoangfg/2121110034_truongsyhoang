<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Brand;
use App\Models\Product;
use App\Models\User;
use App\Models\Link;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StoreBrandRequest;
use App\Http\Requests\UpdateBrandRequest;
use Illuminate\Support\Facades\File;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Tất cả thương hiệu';
        $list_brand = Brand::where('status',  '<>', '0')->orderBy('created_at', 'desc')->get();
        return view("backend.brand.index", compact('list_brand', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Thêm thương hiệu';
        $list_brand = Brand::where('status', '<>', '0')->orderBy('created_at', 'desc')->get();
       
        $html_sort_order = "";
        foreach ($list_brand as $brand) {
            $html_sort_order .= "<option value='" . ($brand->sort_order + 1) . "'>Sau: " . $brand->name . "</option>";
        }
        return view('backend.brand.create', compact( 'html_sort_order', 'title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     */
    public function store(StoreBrandRequest $request)
    {
        $brand = new Brand();
        $brand->name = $request->name;
        $brand->slug = Str::slug($request->name, '-');
        $brand->metakey = $request->metakey;
        $brand->metadesc = $request->metadesc;

        $brand->sort_order = $request->sort_order;
        $brand->status = $request->status;
        $brand->created_at = date('Y-m-d H:i:s');
        $brand->created_by = ($request->session()->exists('user_id')) ? session('user_id') : 1;
        // upload file
        if ($request->has('image')) {
            $path_dir = "images/brand/";
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = $brand->slug . '.' . $extension;
            $file->move($path_dir, $filename);
            $brand->image = $filename;
        }
        // end
        if ($brand->save()) {
            $link = new Link();
            $link->link = $brand->slug;
            $link->table_id = $brand->id;
            $link->type = 'brand';
            $link->save();
            return redirect()->route('brand.index')->with('message', ['type' => 'success', 'msg' => 'Thêm sản phẩm thành công']);
        } else {
            return redirect()->route('brand.index')->with('message', ['type' => 'danger', 'msg' => 'Thêm sản phẩm không thành công']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $title = 'Thông tin thương hiệu';
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
            return view('backend.brand.show', compact('brand', 'total', 'total_sale', 'product_brand', 'title'));
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
        $brand = Brand::find($id);
        $title = 'Sửathương hiệu';
        $list_brand = Brand::where('status', '<>', '0')->orderBy('created_at', 'desc')->get();
       
        $html_sort_order = "";
        foreach ($list_brand as $item) {
            
            $html_sort_order .= "<option value='" . ($item->sort_order + 1) . "'>Sau: " . $item->name . "</option>";
        }
        return view('backend.brand.edit', compact('brand',  'html_sort_order', 'title'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBrandRequest $request, $id)
    {
        $brand = Brand::find($id);
        $brand->name = $request->name;
        $brand->slug = Str::slug($request->name, '-');
        $brand->metakey = $request->metakey;
        $brand->metadesc = $request->metadesc;
       
        $brand->sort_order = $request->sort_order;
        
        $brand->status = $request->status;
        $brand->updated_at = date('Y-m-d H:i:s');

        $brand->updated_by = ($request->session()->exists('user_id')) ? session('user_id') : 1;

        // dd($brand);
        // upload file
        if ($request->has('image')) {
            $path_dir = "images/brand/";
            if (File::exists(public_path($path_dir . $brand->image))) {
                File::delete(public_path($path_dir . $brand->image));
            }
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = $brand->slug . '.' . $extension;
            $file->move($path_dir, $filename);
            $brand->image = $filename;
        }
        // end
        if ($brand->save()) {
            $link = Link::where([['type', '=', 'brand'], ['table_id', '=', $id]])->first();
            $link->link = $brand->slug;

            $link->save();
            return redirect()->route('brand.index')->with('message', ['type' => 'success', 'msg' => 'Cập nhật sản phẩm thành công']);
        } else {
            return redirect()->route('brand.index')->with('message', ['type' => 'danger', 'msg' => 'Thêm sản phẩm không thành công']);
        }
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
        $path_dir = "images/brand/";
        $path_image_delete = public_path($path_dir . $brand->image);
        if ($brand == null) {
            return redirect()->route('brand.trash')->with('message', ['type' => 'danger', 'msg' => 'Mẫu tin không tồn tại']);
        }
        if ($brand->delete()) {
            if (File::exists($path_image_delete)) {
                File::delete($path_image_delete);
            }
            $link = Link::where(
                [['type', '=', 'brand'], ['table_id', '=', $id]]
            )->first();
            $link->delete();
            return redirect()->route('brand.trash')->with('message', ['type' => 'success', 'msg' => 'Xóa sản phẩm thành công']);
        } else {
            return redirect()->route('brand.trash')->with('message', ['type' => 'danger', 'msg' => 'Xóa sản phẩm không thành công']);
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
        $title = 'Thùng rác thương hiệu';
        $list_brand = Brand::where('status',  '=', '0')->orderBy('created_at', 'desc')->get();
        return view("backend.brand.trash", compact('list_brand', 'title'));
    }
    // status
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
            return redirect()->route('brand.trash')->with('message', ['type' => 'success', 'msg' => 'Khôi phục sản phâm thành công']);
        }
    }
}
