<?php

namespace App\Http\Controllers;

use App\Models\Blogs;
use Illuminate\Http\Request;

class BlogsController extends Controller
{
    public function index(){
        $blogs = Blogs::all();
        return view('blog.blog', compact('blogs'));
    }

    public function viewPage($page){
        $blogPage = Blogs::where('uriName', '=', $page)->firstOrFail();
        return view('blog.blogPage', compact('blogPage'));
    }
}
