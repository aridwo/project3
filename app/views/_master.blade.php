<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head><title>@yield('title','Project 3')</title>

<meta charset="utf-8" />

{{ HTML::style('style.css') }}
	
@yield('head')</head>

<body>
	<a href="/"><h2>Developer's Best Friend</h2></a><hr>
@yield('content')
</body>
</html>