<?php

namespace App\Http\Controllers\Post;

use Illuminate\Http\Request;
use App\Post;
// use App\Category;
// use App\Tag;
// use App\PostTag;
use App\Controller;

class ShowController extends BaseController
{
    public function __invoke(Post $post)
    {
        return view('post.show', compact('post'));
    }

   
}
