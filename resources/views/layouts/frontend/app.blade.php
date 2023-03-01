<!DOCTYPE html>
<html lang="en">
<head>
	<title>
        @yield('title')
    </title>
	<meta charset="UTF-8">
	<meta name="description" content="Unica University Template">
	<meta name="keywords" content="event, unica, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
    @include('layouts.frontend.style')
</head>
<body>
	<!-- Page Preloder -->
	{{-- <div id="preloder">
		<div class="loader"></div>
	</div> --}}

	<!-- header section -->
	@include('layouts.frontend.header')
	<!-- header section end-->

	@yield('content')


	@include('layouts.frontend.footer')



	@include('layouts.frontend.script')
	
</body>
</html>