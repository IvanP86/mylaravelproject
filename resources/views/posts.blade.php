<!doctype html>
<html lang="ru">
<head>
  <meta charset="utf-8" />
  <title></title>
  
</head>
<body>
<div>
	@foreach($posts as $post)
		<div>{{$post->title}}</div>
	@endforeach
</div>    
</body>
</html>