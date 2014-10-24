<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>@yield('title','Project 3')</title>
<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700,500' rel='stylesheet' type='text/css'>
{{ HTML::style('style.css') }}
</head>
<body>
<a href="/"><h2>Developer's Best Friend</h2></a><hr>
@yield('content')
</body>
</html>