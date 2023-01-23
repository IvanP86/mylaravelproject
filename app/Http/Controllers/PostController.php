<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;
use App\Tag;
use App\PostTag;

class PostController extends Controller
{
    public function index()
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

    public function create()
    {

        $categories = Category::all();
        $tags = Tag::all();
    	// $postsArr = [

    	// 	[
    	// 		'title' => 'newAutoCreatedPost',
    	// 		'content' => 'content6',
    	// 		'image' => 'image',
    	// 		'likes' => 123,
    	// 		'is_published' => true
    	// 	],
    	// 	[
    	// 		'title' => 'another new ttile from sublim',
    	// 		'content' => 'another content7',
    	// 		'image' => 'anothe image',
    	// 		'likes' => 124,
    	// 		'is_published' => true
    	// 	],
    	// 	[
    	// 		'title' => 'another2 new ttile from sublim',
    	// 		'content' => 'another2 content7',
    	// 		'image' => 'another2 image',
    	// 		'likes' => 125,
    	// 		'is_published' => false
    	// 	]
    	// ];
    	// foreach ($postsArr as $post) {
    	// 	Post::create($post);
    	// }
    	// // Post::create();
    	// dd('created');
    	return view('post.create', compact('categories', 'tags'));
    }

    public function store()
    {
    	$data = request()->validate([
    		'title' => 'string',
    		'content' => 'string',
    		'image' => 'string',
            'category_id' => '',
            'tags' => ''
    		]);
        $tags = $data['tags'];
        unset($data['tags']);
        //dd($data);
    	$post = Post::create($data);
        // foreach ($tags as $tag) {
        //     PostTag::firstOrCreate([
        //         'tag_id' => $tag,
        //         'post_id' => $post->id
        //     ]);
        // }
        $post->tags()->attach($tags);
    	return redirect()->route('post.index');
    }

    public function show(Post $post)
    {
    	return view('post.show', compact('post'));
    }

    public function edit(Post $post)
    {
        $categories = Category::all();
        return view('post.edit', compact('post', 'categories'));
    }

    public function firstOrCreate()
    {
    	$post = Post::firstOrCreate([
	    		'title' => 'firstOrCreate'
    		],
    		[
    			'title' => 'firstOrCreate',
    			'content' => 'some firstOrCreate content',
    			'image' => 'image',
    			'likes' => 123,
    			'is_published' => true
    		]);
    	dd($post->content);
    }

    public function update(Post $post)
    {
/*    	$post = Post::find(7);
    	if($post){
	    	$post->update([
	    			'title'=>'updated title'
	    		]);
	    	dd('post izmenen');
    	}else{
    		dd('posta net');
    	}*/
        $data = request()->validate([
            'title' => 'string',
            'content' => 'string',
            'image' =>'string',
            'category_id' => ''
            ]);
        $post->update($data);
        // dump($data);
        return redirect()->route('post.show', $post->id);
    }

    public function updateOrCreate() {
    	
    	$post = Post::updateOrCreate([
    			'title' => 'updateOrCreate'
    		],[
    			'title' => 'updateOrCreate',
    			'content' => 'some updateOrCreate content',
    			'image' => 'image',
    			'likes' => 123,
    			'is_published' => true
    		]);
    	dd($post->content);

    }

    public function delete(Post $post)
    {
        $post = Post::find(1);
        $post->delete();
        dd('post deleted');

        // $post = Post::withTrashed(1);
        // $post->restore();
        $post->delete();
        return redirect()->route('post.index');
    }

    public function destroy(Post $post)
    {
    	// $post = Post::find(1);
    	// $post->delete();
    	// dd('post deleted');

    	// $post = Post::withTrashed(1);
    	// $post->restore();
        $post->delete();
        return redirect()->route('post.index');
    }
}
