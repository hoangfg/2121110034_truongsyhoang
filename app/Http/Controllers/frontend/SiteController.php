<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Link;
use App\Models\Product;
use App\Models\Post;

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
                    
                } 
                else {
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
                ['parent_id','=','0']
            ])->orderBy('sort_order', 'desc')->get();
       
        return view('frontend.home', compact('list_category', 'title'));
    }
    #product - all
    public function product()
    {
        return view('frontend.product');
    }

    #category
    private function ProductCategory($slug)
    {
        return view('frontend.product-category');
    }
    #Detail
    private function ProductDetail($product)
    {
       
        return view('frontend.product-detail');
    }
    #Brand
    private function ProductBrand($slug)
    {
        return view('frontend.product-brand');
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
