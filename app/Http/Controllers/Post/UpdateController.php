<?php

namespace App\Http\Controllers\Post;

use Illuminate\Http\Request;
use App\Post;
use App\Category;
use App\Tag;
// use App\PostTag;
use App\Controller;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Post $post)
    {
        $data = $request->validated();
        $tags = $data['tags'];
        unset($data['tags']);
        $post->update($data);
        $post->tags()->sync($tags);
        return redirect()->route('post.show', $post->id);
    }

   
}
