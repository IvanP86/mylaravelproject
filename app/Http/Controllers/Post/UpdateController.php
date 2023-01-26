<?php

namespace App\Http\Controllers\Post;

use Illuminate\Http\Request;
use App\Http\Requests\Post\UpdateRequest;
use App\Post;
use App\Category;
use App\Tag;
// use App\PostTag;
use App\Http\Controllers\Controller;
// use App\Http\Requests\Post;
// use App\Http\Requests\Post;

class UpdateController extends BaseController
{
    public function __invoke(UpdateRequest $request, Post $post)
    {
        $data = $request->validated();
        $this->service->update($post, $data);
        // $tags = $data['tags'];
        // unset($data['tags']);
        // $post->update($data);
        // $post->tags()->sync($tags);
        return redirect()->route('post.show', $post->id);
    }

   
}
