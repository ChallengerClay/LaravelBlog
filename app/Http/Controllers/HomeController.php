<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function getHome(){
        $posts = Post::getRecentPosts();
        $categories = Category::inRandomOrder()->take(4)->get();
        return view('home.index', compact('posts', 'categories'));
    }

    public function getPosts(){
        $posts = Post::paginate(3);
        return view('home.posts', compact('posts'));
    }

    public function getAbout(){
        return view('about');
    }

    public function getContact(){
        return view('contact');
    }
}
