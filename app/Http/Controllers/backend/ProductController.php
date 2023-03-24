<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\ProductSale;
use App\Models\ProductStore;
use App\Models\User;
use App\Models\Brand;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use Carbon\Carbon;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

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

        $list_product = Product::leftJoin('product_image', function ($join) {
            $join->on('product.id', '=', 'product_image.product_id')
                ->where('product_image.ordinal_number', '=', 1);
        })
            ->join('category', 'product.category_id', '=', 'category.id')
            ->join('brand', 'product.brand_id', '=', 'brand.id')
            ->select('product.*', 'category.name as category_name', 'brand.name as brand_name', 'product_image.image as image')
            ->where('product.status',  '<>', '0')
            ->orderBy('created_at', 'desc')
            ->get();
        return view("backend.product.index", compact('list_product', 'title',));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Thêm sản phẩm';
        $list_category = Category::where('status', '<>', '0')->orderBy('created_at', 'desc')->get();
        $list_brand = Brand::where('status', '<>', '0')->orderBy('created_at', 'desc')->get();
        $html_category_id = "";
        $html_brand_id = "";

        foreach ($list_category as $item) {
            if ($item->id == old('category_id')) {
                $html_category_id .= "<option selected  value='" . $item->id . "'>" . $item->name . "</option>";
            } else {
                $html_category_id .= "<option value='" . $item->id . "'>" . $item->name . "</option>";
            }
        }
        foreach ($list_brand as $item) {
            if ($item->id == old('brand_id')) {
                $html_brand_id .= "<option selected  value='" . $item->id . "'>" . $item->name . "</option>";
            } else {
                $html_brand_id .= "<option value='" . $item->id . "'>" . $item->name . "</option>";
            }
        }
        return view('backend.product.create', compact('html_category_id', 'html_brand_id',  'title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductRequest $request)
    {
        $product = new Product();
        $product->category_id = $request->category_id;
        $product->brand_id = $request->brand_id;
        $product->name = $request->name;
        $product->slug = Str::slug($request->name, '-');
        $product->price_buy = $request->price_buy;
        $product->detail = $request->detail;
        $product->metakey = $request->metakey;
        $product->metadesc = $request->metadesc;
        $product->status = $request->status;
        $product->created_at = date('Y-m-d H:i:s');
        $product->created_by = ($request->session()->exists('user_id')) ? session('user_id') : 1;
        // dd($product);
        if ($product->save()) {
            // // upload file
            if ($request->has('image')) {
                $count = 1;
                $path_dir = "images/product/";
                $array_file = $request->file('image');
                foreach ($array_file as $file) {
                    $extension = $file->getClientOriginalExtension();
                    $filename = $product->slug . '_' . $count . '.' . $extension;
                    $file->move($path_dir, $filename);
                    $product_image = new ProductImage();
                    $product_image->product_id = $product->id;
                    $product_image->ordinal_number = $count;
                    $product_image->image = $filename;
                    $product_image->save();
                    $count++;
                }
            }
            // sale
            $product_sale = new ProductSale();
            if ($request->filled('price_sale')) {
                $product_sale->price_sale = $request->price_sale;
                $product_sale->date_begin = $request->date_begin;
                $product_sale->date_end = $request->date_end;
            }
            $product->sale()->save($product_sale);
            // store
            if (strlen($request->price) && strlen($request->qty)) {
                $product_store = new ProductStore();

                $product_store->price = $request->price;
                $product_store->qty = $request->qty;
                $product_store->created_at = date('Y-m-d H:i:s');
                $product_store->created_by = ($request->session()->exists('user_id')) ? session('user_id') : 1;
            }
            $product->sale()->save($product_store);
        }
        return redirect()->route('product.index')->with('message', ['type' => 'success', 'msg' => 'Thêm sản phẩm thành công']);
    }

    public function show($id)
    {

        $title = 'Chi tiết sản phẩm';
        $product = Product::where('product.id', $id)
            ->join('product_sale', 'product.id', '=', 'product_sale.product_id')
            ->join('product_store', 'product.id', '=', 'product_store.product_id')
            ->select(
                "product.*",
                "product_sale.price_sale",
                "product_sale.date_begin",
                "product_sale.date_end",
                "product_store.price",
                "product_store.qty",
                "product_store.created_at as created_at_ps",
                "product_store.updated_at as updated_at_ps",
                DB::raw("(" . User::select("name")->whereColumn("user.id", "=", "product.updated_by")->toSql() . ") as updated_name"),
                DB::raw("(" . User::select("name")->whereColumn("user.id", "=", "product.created_by")->toSql() . ") as created_name"),
                DB::raw("(" . Brand::select("name")->whereColumn("brand.id", "=", "product.brand_id")->toSql() . ") as brand_name"),
                DB::raw("(" . Category::select("name")->whereColumn("category.id", "=", "product.category_id")->toSql() . ") as category_name"),
                DB::raw("(" . User::select("name")->whereColumn("user.id", "=", "product_store.updated_by")->toSql() . ") as updated_name_ps"),
                DB::raw("(" . User::select("name")->whereColumn("user.id", "=", "product_store.created_by")->toSql() . ") as created_name_ps"),
            )

            ->first();
        // dd($product);
        $list_image = ProductImage::where('product_image.product_id', '=', $id)->orderBy('ordinal_number', 'ASC')->get();

        if ($product == null) {
            return redirect()->route('product.index')->with('message', ['type' => 'danger', 'msg' => 'Sản phẩm không tồn tại']);
        } else {
            return view("backend.product.show", compact('product', 'title', 'list_image',));
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
        $product = Product::where('product.id', $id)
            ->join('product_sale', 'product.id', '=', 'product_sale.product_id')
            ->join('product_store', 'product.id', '=', 'product_store.product_id')
            ->select(
                "product.*",
                "product_sale.price_sale",
                "product_sale.date_begin",
                "product_sale.date_end",
                "product_store.price",
                "product_store.qty",
            )

            ->first();


        $title = 'Cập nhật sản phẩm';
        $list_category = Category::where('status', '<>', '0')->orderBy('created_at', 'desc')->get();
        $list_brand = Brand::where('status', '<>', '0')->orderBy('created_at', 'desc')->get();
        $html_category_id = "";
        $html_brand_id = "";

        foreach ($list_category as $item) {
            if ($item->id == $product->category_id) {
                $html_category_id .= "<option selected  value='" . $item->id . "'>" . $item->name . "</option>";
            } else {
                $html_category_id .= "<option value='" . $item->id . "'>" . $item->name . "</option>";
            }
        }
        foreach ($list_brand as $item) {
            if ($item->id == $product->brand_id) {
                $html_brand_id .= "<option selected  value='" . $item->id . "'>" . $item->name . "</option>";
            } else {
                $html_brand_id .= "<option value='" . $item->id . "'>" . $item->name . "</option>";
            }
        }
        return view('backend.product.edit', compact('product', 'html_category_id', 'html_brand_id',  'title',));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductRequest $request, $id)
    {

        $product = Product::find($id);
        $product->category_id = $request->category_id;
        $product->brand_id = $request->brand_id;
        $product->name = $request->name;
        $product->slug = Str::slug($request->name, '-');
        $product->price_buy = $request->price_buy;
        $product->detail = $request->detail;
        $product->metakey = $request->metakey;
        $product->metadesc = $request->metadesc;
        $product->status = $request->status;
        $product->updated_at = date('Y-m-d H:i:s');
        $product->updated_by = ($request->session()->exists('user_id')) ? session('user_id') : 1;

        if ($product->save()) {
            // // upload file
            if ($request->has('image')) {
                $array_file = $request->file('image');
                $list_images = ProductImage::where('product_image.product_id', '=', $id)->get();
                $count = 1;
                $path_dir = "images/product/";
                $array_file = $request->file('image');
                foreach ($list_images as $list_images) {
                    $list_images->delete();
                    if (File::exists(public_path($path_dir . $list_images->image))) {
                        File::delete(public_path($path_dir . $list_images->image));
                    }
                }

                foreach ($array_file as $file) {
                    $extension = $file->getClientOriginalExtension();
                    $filename = $product->slug . '_' . $count . '.' . $extension;
                    $file->move($path_dir, $filename);
                    $product_image = new ProductImage();
                    $product_image->product_id = $product->id;
                    $product_image->ordinal_number = $count;
                    $product_image->image = $filename;
                    $product_image->save();
                    $count++;
                }
            }
            // sale
            if (strlen($request->price_sale) && strlen($request->date_begin) && strlen($request->date_end)) {
                $product_sale = ProductSale::where('product_id', '=', $id)->first();
                $product_sale->price_sale = $request->price_sale;
                $product_sale->date_begin = $request->date_begin;
                $product_sale->date_end = $request->date_end;
                $product_sale->save();
            }
            // store
            if (strlen($request->price) && strlen($request->qty)) {
                $product_store = ProductStore::where('product_id', '=', $id)->first();

                $product_store->price = $request->price;
                $product_store->qty = $request->qty;
                $product_store->updated_at = date('Y-m-d H:i:s');
                $product_store->updated_by = ($request->session()->exists('user_id')) ? session('user_id') : 1;
                $product_store->save();
            }
        }
        return redirect()->route('product.index')->with('message', ['type' => 'success', 'msg' => 'Sửa sản phẩm thành công']);
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
            return redirect()->route('product.trash')->with('message', ['type' => 'danger', 'msg' => 'Mẫu tin không tồn tại']);
        }
        if ($product->delete()) {
            // image
            $product_images = ProductImage::where('product_id', $id)->get();
            $path_dir = "images/product/";
            foreach ($product_images as $product_image) {
                $path_image_delete = public_path($path_dir . $product_image->image);
                if (File::exists($path_image_delete)) {
                    File::delete($path_image_delete);
                }
                $product_image->delete();
            }
            // dale
            $product_sale = ProductSale::where('product_id', $id)->first();
            if ($product_sale) {
                $product_sale->delete();
            }
            // store
            $product_store = ProductStore::where('product_id', $id)->first();
            if ($product_store) {
                $product_store->delete();
            }
            return redirect()->route('product.trash')->with('message', ['type' => 'success', 'msg' => 'Xóa sản phẩm thành công']);
        } else {
            return redirect()->route('product.trash')->with('message', ['type' => 'danger', 'msg' => 'Xóa sản phẩm không thành công']);
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
        $list_product = DB::table('product')
            ->leftJoin('product_image', function ($join) {
                $join->on('product.id', '=', 'product_image.product_id')
                    ->where('product_image.ordinal_number', '=', 1);
            })
            ->join('category', 'product.category_id', '=', 'category.id')
            ->join('brand', 'product.brand_id', '=', 'brand.id')
            ->select('product.*', 'category.name as category_name', 'brand.name as brand_name', 'product_image.image as image')
            ->where('product.status',  '=', '0')
            ->orderBy('created_at', 'desc')
            ->get();
        return view("backend.product.trash", compact('list_product', 'title'));
    }
    public function deleteAll(Request $request)
    {
        $list = $request->checkId;
        if ($list == null) {
            return redirect()->route('product.index')->with('message', ['type' => 'danger', 'msg' => 'Sản phẩm không tồn tại']);
        } else {
            foreach ($list as $list) {
                $list->status = 0;
                $list->updated_at = date('Y-m-d H:i:m');
                $list->updated_by = Auth::user()->id;
                $list->save();
                return redirect()->route('product.index')->with('message', ['type' => 'success', 'msg' => 'Xóa sản phẩm thành công thành công']);
            }
        }
    }
}
