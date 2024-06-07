<!doctype html>
<html lang="en">
    <head>
		@yield('page_title')
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
		<meta name="description" content="Photographer Portfolio Admin Template | Bootstrap 4.1.1">
		<meta name="author" content="MoreXhub Tech LMT, design by: morexhub.com">
		<link rel="icon" href="favicon.ico" type="image/x-icon">
		
		<!-- CSS File -->
		@include('backends.inc.styles')
	</head>
	<body class="theme-cyan">
		<!-- Page Loader -->
		@include('backends.inc.preloader')

        
		<!-- Overlay For Sidebars -->
		<div id="wrapper">
            @guest
            @else
		
            <!--  Navbar  -->
            @include('backends.inc.navbar')
            
            
            <!--  Navbar  -->
            @include('backends.inc.sidebar')
			
            @endguest
            @yield('dashboard_layouts')
			@yield('page_scripts')
		</div>
		<!-- Javascript -->
		@include('backends.inc.scripts')
	</body>
</html>