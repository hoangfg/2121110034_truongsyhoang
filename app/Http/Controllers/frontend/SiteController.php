<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
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
            $link = Link::where('slug', '=', $slug)->first();
            // var_dump($slug);
            if ($link != null) {
                $type = $link->type;
                switch ($type) {
                    case 'category': {
                            return $this->ProductCategory($slug);
                        }
                    case 'brand': {
                            echo 'thuong hieu';
                        }
                    case 'topic': {
                            echo 'thuong hieu';
                        }
                    case 'page': {
                            echo 'thuong hieu';
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
        return view('frontend.home');
    }
    #product - all
    public function product()
    {
        return view('frontend.product');
    }

    #category
    private function ProductCategory()
    {
        return view('frontend.home');
    }
    #Detail
    private function ProductDetail()
    {
        return view('frontend.home');
    }
    #Brand
    private function ProductBrand()
    {
        return view('frontend.home');
    }
    #Topic
    private function PostTopic()
    {
        return view('frontend.home');
    }
    #page
    private function PostPage()
    {
        return view('frontend.home');
    }
    #Detail
    private function PostDetail()
    {
        return view('frontend.home');
    }
    #Error_404
    private function Error_404()
    {
        return view('frontend.404');
    }
}
