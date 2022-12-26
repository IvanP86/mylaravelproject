<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function index() {
        $posts = Post::all();
        // dump($post->title);
        // dd($posts);
        foreach ($posts as $post) {
        	dump($post->title);
        }
        $postWhere = Post::where('is_published', 0)->first();
        // $postWhere = Post::where('is_published', 0)->get();
        dump($postWhere->title);
    }

    public function create() {

    	$postsArr = [

    		[
    			'title' => 'newAutoCreatedPost',
    			'content' => 'content6',
    			'image' => 'image',
    			'likes' => 123,
    			'is_published' => true
    		],
    		[
    			'title' => 'another new ttile from sublim',
    			'content' => 'another content7',
    			'image' => 'anothe image',
    			'likes' => 124,
    			'is_published' => true
    		],
    		[
    			'title' => 'another2 new ttile from sublim',
    			'content' => 'another2 content7',
    			'image' => 'another2 image',
    			'likes' => 125,
    			'is_published' => false
    		]
    	];
    	foreach ($postsArr as $post) {
    		Post::create($post);
    	}
    	// Post::create();
    	dd('created');
    }

    public function update() {
    	$post = Post::find(2);
    	$post->update([
    			'title'=>'updated title'
    		]);
    }

    public function delete() {
    	$post = Post::find(1);
    	$post->delete();
    	dd('post deleted');

    	// $post = Post::withTrashed(1);
    	// $post->restore();
    }
}
