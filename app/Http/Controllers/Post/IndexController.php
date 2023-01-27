<?php

namespace App\Http\Controllers\Post;

use Illuminate\Http\Request;
use App\Http\Requests\Post\FilterRequest;
use App\Post;
use App\Http\Filters\PostFilter;
// use App\Category;
// use App\Tag;
// use App\PostTag;
use App\Controller;

class IndexController extends BaseController
{
    public function __invoke(FilterRequest $request)
    {
        // $posts = Post::all();
        // $data = ['title' => "sjchkjhfklj"];
        $data = $request->validated();
        $filter = app()->make(PostFilter::class, ['queryParams' => array_filter($data)]);
        // $posts = Post::paginate(10);
        $posts = Post::filter($filter)->paginate(10);
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
