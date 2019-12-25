<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>

	@include('includes.style')
</head>
<body class="bg-white">

	@include('includes.navbar-alternate')
	@yield('content')
	@include('includes.script')
</body>
</html>