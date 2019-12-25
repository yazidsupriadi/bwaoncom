<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>

	@include('includes.style')
</head>
<body>
	@include('includes.navbar')
	@yield('content')
	@include('includes.footer')
	@include('includes.script')
</body>
</html>