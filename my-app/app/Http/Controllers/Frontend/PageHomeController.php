<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Blog;
use App\Models\About;
use App\Models\Slider;
use App\Models\Comment;
use App\Models\Product;
use App\Models\Service;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageHomeController extends Controller
{
    public function index() {
        $sliders = Slider::all();

        $products = Product::where('status', '1')->get();

        $categories = Category::all();

        $services = Service::all();

        $blogs = Blog::where('status', '1')->get();
        $comments = Comment::all();

        $about = Service::all();

        $title = "Homepage";

        return view('Front.pages.index', compact('sliders', 'title', 'products', 'categories', 'services', 'blogs','comments','about'));
    }
}
