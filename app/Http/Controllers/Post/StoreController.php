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
    public function __invoke()
    {
    	$data = request()->validate([
    		'title' => 'required|string',
    		'content' => 'string',
    		'image' => 'string',
            'category_id' => '',
            'tags' => ''
    		]);
        $tags = $data['tags'];
        unset($data['tags']);
    	$post = Post::create($data);
        $post->tags()->attach($tags);
    	return redirect()->route('post.index');
    }

   
}
