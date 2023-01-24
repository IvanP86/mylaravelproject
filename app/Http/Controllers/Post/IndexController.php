<?php

namespace App\Http\Controllers\Post;

use Illuminate\Http\Request;
use App\Post;
// use App\Category;
// use App\Tag;
// use App\PostTag;
use App\Controller;

class IndexController extends Controller
{
    public function __invoke()
    {
        $posts = Post::all();
        // $category = Category::find(1);
        // $post = Post::find(5);
        // $tag = Tag::find(1);
        // dd($tag->posts);
        //$posts = Post::where('category_id', $category->id)->get();
        // dd($category->posts);
        // dump($post->title);
        // dd($posts);
        // foreach ($posts as $post) {
        // 	dump($post->title);
        // }
        // $postWhere = Post::where('is_published', 0)->first();
        // $postWhere = Post::where('is_published', 0)->get();
        // dump($postWhere->title);
        return view('post.index', compact('posts'));
    }

   
}
