<?php

namespace App\Http\Controllers\Post;

use Illuminate\Http\Request;
use App\Post;
// use App\Category;
// use App\Tag;
// use App\PostTag;
use App\Controller;

class DestroyController extends BaseController
{
    public function __invoke(Post $post)
    {
        $post->delete();
        return redirect()->route('post.index');
    }

   
}
