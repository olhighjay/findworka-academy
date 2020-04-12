<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

class PagesController extends Controller
{
    public function home()
    {
        $posts = Post::orderBy('created_at', 'desc')->take(3)->get();
        return view('website.pages.home')->with('posts', $posts);
    }


    public function about()
    {
        return view('website.pages.about');
    }

    public function contact()
    {
        return view('website.pages.contact');
    }

    public function backend()
    {
        return view('website.pages.backend');
    }

    
    public function cms()
    {
        return view('website.pages.cms');
    }

    public function dataScience()
    {
        return view('website.pages.data-science');
    }

    public function frontend()
    {
        return view('website.pages.frontend');
    }

    public function mobile()
    {
        return view('website.pages.mobile');
    }

    public function uiUx()
    {
        return view('website.pages.ui-ux');
    }

    // public function calendar()
    // {
    //     return view('website.pages.calendar');
    // }

    public function blog()
    {
        $posts = Post:: orderBy('created_at', 'desc')->paginate(20);
        $lastPost = Post::latest()->first();
        return view('website.posts.index')->with('posts', $posts)->with('lastPost', $lastPost);
    }

    public function showPost($title)
    {
        $post= Post::where('title', $title)->first();
        return view('website.posts.show')->with('post', $post);
    }

}
