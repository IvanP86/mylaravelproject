@extends('layouts.main')
@section('content')
	<div>
		<form action="{{ route('post.update', $post->id)   }}" method="post">
		@csrf
		@method('patch')
		  <div class="form-group">
		    <label for="title">Title</label>
		    <input type="text" name="title" class="form-control" id="title" placeholder="title" value="{{$post->title}}">
		  </div>
		  <div class="form-group">
		    <label for="content">Content</label>
		    <textarea name="content" class="form-control" id="content" placeholder="content">{{$post->content}}</textarea>
		  </div>
		  <div class="form-group">
		    <label for="image">Image</label>
		    <input name="image" type="text" class="form-control" id="image" placeholder="image" value="{{$post->image}}">
		  </div>		  		  
		  <button type="submit" class="btn btn-primary">Update</button>
		</form>
	</div>
@endsection