<!doctype html>
<html lang="ru">
<head>
  <meta charset="utf-8" />
  <title></title>
  <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
</head>
<body>
<div class="container">
<div class="row">
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
	    <ul class="navbar-nav mr-auto">
	      <li class="nav-item">
	        <a class="nav-link" href="{{ route('main.index') }}">Main <span class="sr-only">Posts</span></a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="{{ route('post.index') }}">Posts</a>
	      </li>

	      <li class="nav-item">
	        <a class="nav-link" href="{{ route('about.index') }}">About</a>
	      </li>
          <li class="nav-item">
	        <a class="nav-link" href="{{ route('contact.index') }}">Contacts</a>
	      </li>
	      @can('view', auth()->user())
		      <li class="nav-item">
		        <a class="nav-link" href="{{ route('admin.post.index') }}">Admin</a>
		      </li>
	      @endcan
	    </ul>
	  </div>
	</nav>
<!-- 	<nav>
		<ul>
			<li><a href="{{ route('main.index') }}">Main</a></li>
			<li><a href="{{ route('post.index') }}">Posts</a></li>
			<li><a href="{{ route('about.index') }}">About</a></li>
			<li><a href="{{ route('contact.index') }}">Contacts</a></li>
		</ul>
	</nav> -->
</div>
	@yield('content')

</div>    
</body>
</html>