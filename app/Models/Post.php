<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

class Post extends Model
{
    protected $fillable = ['title', 'content'];

    public static function getRecentPosts() 
    {
        $recent_posts = [];
        if(!Cache::get('recent_posts')){
            $recent_posts = Cache::remember('users', 120, function () {
                return Post::orderBy('id', 'desc')->take(3)->get();
            });
        }else{
            $recent_posts = Cache::get('recent_posts');
        }
        return $recent_posts;
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }
}
