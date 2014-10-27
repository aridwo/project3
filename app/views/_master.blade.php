<!DOCTYPE html>
<html>
<head><title>@yield('title','Project 3')</title>

<meta charset="utf-8" />

{{ HTML::style('style.css') }}
	
@yield('head')</head>

<body>
	<a href="/"><h2>Developer's Best Friend</h2></a><hr>
@yield('content')
</body>
</html>