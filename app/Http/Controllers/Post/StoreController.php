<?php

namespace App\Http\Controllers\Post;

use Illuminate\Http\Request;
use App\Post;
// use App\Category;
// use App\Tag;
// use App\PostTag;
use App\Controller;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
    	$data = $request->validated();
        $tags = $data['tags'];
        unset($data['tags']);
    	$post = Post::create($data);
        $post->tags()->attach($tags);
    	return redirect()->route('post.index');
    }

   
}
