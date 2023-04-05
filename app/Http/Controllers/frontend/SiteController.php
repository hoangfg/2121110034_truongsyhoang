<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Link;
use App\Models\Product;
use App\Models\Post;
use App\Models\Brand;

class SiteController extends Controller
{
    public function index($slug = null)
    {
        if ($slug == null) {
            return  $this->home();
        } else {
            $link = Link::where('link', '=', $slug)->first();
            // var_dump($slug);
            if ($link != null) {
                $type = $link->type;
                switch ($type) {
                    case 'category': {
                            return $this->ProductCategory($slug);
                        }
                    case 'brand': {
                            return $this->ProductBrand($slug);
                        }
                    case 'topic': {
                            return $this->PostTopic($slug);
                        }
                    case 'page': {
                            return $this->PostPage($slug);
                        }
                }
            } else {
                $product = Product::where([['slug', '=', $slug], ['status', '=', 1]])->first();
                if ($product != null) {
                    return $this->ProductDetail($product);
                } else {
                    $post = Post::where([['slug', '=', $slug], ['status', '=', 1], ['type', '=', 'post']])->first();
                    if ($post != null) {
                        return $this->PostDetail($post);
                    } else {
                        return $this->error_404($slug);
                    }
                }
            }
            // return view('frontend.site');
        }
    }
    #home
    private function home()
    {
        $title = 'Trang chủ';
        $list_category = Category::where([
            ['status', '=', '1'],
            ['parent_id', '=', '0']
        ])->orderBy('sort_order', 'desc')->get();
        $min_price = Product::min('price_buy');
        $max_price = Product::max('price_buy');
        $max_price_range = $max_price + 100000;
        return view('frontend.home', compact('list_category', 'title', 'min_price', 'max_price', 'max_price_range'));
    }
    #product - all
    public function product()
    {
        return view('frontend.product');
    }

    #category
    private function ProductCategory($slug)
    {

        $cat = Category::where([['slug', '=', $slug], ['status', '=', '1']])->first();

        $listcatid = array();
        array_push($listcatid, $cat->id);
        $list_category1 = Category::where([['parent_id', '=', $cat->id], ['status', '=', '1']])->orderBy('sort_order', 'asc')->get();
        if (count($list_category1) != 0) {
            foreach ($list_category1 as $cat1) {
                array_push($listcatid, $cat1->id);
                $list_category2 = Category::where([['parent_id', '=', $cat1->id], ['status', '=', '1']])->orderBy('sort_order', 'asc')->get();
                if (count($list_category2) != 0) {
                    foreach ($list_category2 as $cat2) {
                        array_push($listcatid, $cat2->id);
                    }
                }
            }
        }
        if (isset($_GET['sort_by'])) {
            $sort_by = $_GET['sort_by'];
            if ($sort_by == 'az') {
                $list_product = Product::with(['sale' => function ($query) {
                    $query->whereRaw('? between date_begin and date_end', [now()]);
                }])->where('status', '=', '1')->whereIn('category_id', $listcatid)->orderBy('name', 'ASC')->paginate(12)->appends(request()->query());
            }
            if ($sort_by == 'za') {
                $list_product = Product::with(['sale' => function ($query) {
                    $query->whereRaw('? between date_begin and date_end', [now()]);
                }])->where('status', '=', '1')->whereIn('category_id', $listcatid)->orderBy('name', 'DESC')->paginate(12)->appends(request()->query());
            }
            if ($sort_by == 'LowToHigh') {
                $list_product = Product::with(['sale' => function ($query) {
                    $query->whereRaw('? between date_begin and date_end', [now()]);
                }])->where('status', '=', '1')->whereIn('category_id', $listcatid)->orderBy('price_buy', 'ASC')->paginate(12)->appends(request()->query());
            }
            if ($sort_by == 'HighToLow') {
                $list_product = Product::with(['sale' => function ($query) {
                    $query->whereRaw('? between date_begin and date_end', [now()]);
                }])->where('status', '=', '1')->whereIn('category_id', $listcatid)->orderBy('price_buy', 'DESC')->paginate(12)->appends(request()->query());
            }
        } else if (isset($_GET['start_price']) && $_GET['end_price']) {
            $min_price = $_GET['start_price'];
            $max_price = $_GET['end_price'];
            $list_product = Product::with(['sale' => function ($query) {
                $query->whereRaw('? between date_begin and date_end', [now()]);
            }])->where('status', '=', '1')->whereIn('category_id', $listcatid)->whereBetween('price_buy', [$min_price, $max_price])->orderBy('price_buy', 'ASC')->paginate(12)->appends(request()->query());
        } else {
            $list_product = Product::with(['sale' => function ($query) {
                $query->whereRaw('? between date_begin and date_end', [now()]);
            }])->where('status', '=', '1')->whereIn('category_id', $listcatid)->orderBy('created_at', 'desc')->paginate(12);
        }
        $min_price = Product::min('price_buy');
        $max_price = Product::max('price_buy');
        $max_price_range = $max_price + 100000;
        return view('frontend.product-category', compact('cat', 'list_product', 'min_price', 'max_price', 'max_price_range'));
    }
    #Detail
    private function ProductDetail($product)
    {
        $cat = $product->category_id;

        $listcatid = array();
        array_push($listcatid,  $cat);
        $list_category1 = Category::where([['parent_id', '=',  $cat], ['status', '=', '1']])->orderBy('sort_order', 'asc')->get();
        if (count($list_category1) != 0) {
            foreach ($list_category1 as $cat1) {
                array_push($listcatid, $cat1->id);
                $list_category2 = Category::where([['parent_id', '=', $cat1->id], ['status', '=', '1']])->orderBy('sort_order', 'asc')->get();
                if (count($list_category2) != 0) {
                    foreach ($list_category2 as $cat2) {
                        array_push($listcatid, $cat2->id);
                    }
                }
            }
        }

        $list_product = Product::with(['sale' => function ($query) {
            $query->whereRaw('? between date_begin and date_end', [now()]);
        }])->where([['status', '=', '1'],['id','<>',$product->id]])->whereIn('category_id', $listcatid)->orderBy('created_at', 'desc')->paginate(5);

        $product_sale = Product::with(['sale' => function ($query) {
            $query->whereRaw('? between date_begin and date_end', [now()]);
        }])->find($product->id);

        $min_price = Product::min('price_buy');
        $max_price = Product::max('price_buy');
        $max_price_range = $max_price + 100000;
        return view('frontend.product-detail', compact('min_price', 'max_price', 'max_price_range', 'product', 'list_product', 'product_sale'));
    }
    #Brand
    private function ProductBrand($slug)
    {
        $brand = Brand::where([['slug', '=', $slug], ['status', '=', '1']])->first();
        if (isset($_GET['sort_by'])) {
            $sort_by = $_GET['sort_by'];
            if ($sort_by == 'az') {
                $list_product = Product::with(['sale' => function ($query) {
                    $query->whereRaw('? between date_begin and date_end', [now()]);
                }])->where([['status', '=', '1'], ['brand_id', '=', $brand->id]])->orderBy('name', 'ASC')->paginate(12)->appends(request()->query());
            }
            if ($sort_by == 'za') {
                $list_product = Product::with(['sale' => function ($query) {
                    $query->whereRaw('? between date_begin and date_end', [now()]);
                }])->where([['status', '=', '1'], ['brand_id', '=', $brand->id]])->orderBy('name', 'DESC')->paginate(12)->appends(request()->query());
            }
            if ($sort_by == 'LowToHigh') {
                $list_product = Product::with(['sale' => function ($query) {
                    $query->whereRaw('? between date_begin and date_end', [now()]);
                }])->where([['status', '=', '1'], ['brand_id', '=', $brand->id]])->orderBy('price_buy', 'ASC')->paginate(12)->appends(request()->query());
            }
            if ($sort_by == 'HighToLow') {
                $list_product = Product::with(['sale' => function ($query) {
                    $query->whereRaw('? between date_begin and date_end', [now()]);
                }])->where([['status', '=', '1'], ['brand_id', '=', $brand->id]])->orderBy('price_buy', 'DESC')->paginate(12)->appends(request()->query());
            }
        } else if (isset($_GET['start_price']) && $_GET['end_price']) {
            $min_price = $_GET['start_price'];
            $max_price = $_GET['end_price'];
            $max_price_range = $max_price + 100000;
            $list_product = Product::with(['sale' => function ($query) {
                $query->whereRaw('? between date_begin and date_end', [now()]);
            }])->where([['status', '=', '1'], ['brand_id', '=', $brand->id]])->whereBetween('price_buy', [$min_price, $max_price])->orderBy('price_buy', 'ASC')->paginate(12)->appends(request()->query());
        } else {
            $list_product = Product::with(['sale' => function ($query) {
                $query->whereRaw('? between date_begin and date_end', [now()]);
            }])->where([['status', '=', '1'], ['brand_id', '=', $brand->id]])->orderBy('created_at', 'desc')->paginate(12);
        }
        $min_price = Product::min('price_buy');
        $max_price = Product::max('price_buy');
        $max_price_range = $max_price + 100000;
        return view('frontend.product-brand', compact('brand', 'list_product', 'min_price', 'max_price', 'max_price_range'));
    }
    #Topic
    private function PostTopic($slug)
    {
        return view('frontend.post-topic');
    }
    #page
    private function PostPage($slug)
    {
        return view('frontend.post-page');
    }
    #Detail
    private function PostDetail($slug)
    {
        return view('frontend.post-detail');
    }
    #Error_404
    private function Error_404($slug)
    {
        return view('frontend.404');
    }
}
