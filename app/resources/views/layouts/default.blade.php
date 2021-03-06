<!doctype html>
<html lang="en">
	<head>
		@include('includes.head')
		@yield('head-content')
	</head>
	<body class="{{ isset($body_class) ? $body_class : '' }}">
		<div class="container">

			<header class="row">
				@include('includes.header')
			</header>

			<div id="main" class="row">

					@yield('content')

			</div>

			<footer>
				@include('includes.footer')
			</footer>

		</div>
		@yield('footer-content')
	</body>
</html>