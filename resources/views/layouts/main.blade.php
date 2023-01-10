<!doctype html>
<html lang="ru">
<head>
  <meta charset="utf-8" />
  <title></title>
  
</head>
<body>
<div>
<div>
	<nav>
		<ul>
			<li><a href="{{ route('main.index') }}">Main</a></li>
			<li><a href="{{ route('post.index') }}">Posts</a></li>
			<li><a href="{{ route('about.index') }}">About</a></li>
			<li><a href="{{ route('contact.index') }}">Contacts</a></li>
		</ul>
	</nav>
</div>
	@yield('content')

</div>    
</body>
</html>