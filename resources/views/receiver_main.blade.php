<!DOCTYPE HTML>
<!--
	Helios by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>NuPlastic Recycling</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="{{asset('css/main.css')}}" />
		<noscript><link rel="stylesheet" href="{{asset('css/noscript.css')}}" /></noscript>
	</head>
	<body class="homepage is-preload">
		<div id="page-wrapper">

			<!-- Header -->
				<div id="header-other">

					<!-- Inner -->
						<div class="inner">
							<header>
								<h1><a href="index.html" id="logo">I am a {{$_SESSION["login_role"];}}!</a></h1>
								<hr />
								<!--p>Receiver Login</p-->
								<x-dashboard-shadow />
							</header>
						</div>

					<!-- Nav -->
						<nav id="nav">
							<ul>
								<!-- Authentication -->
								<form method="POST" action="{{ route('logout') }}">
									@csrf

									<x-responsive-nav-link :href="route('logout')"
											onclick="event.preventDefault();
														this.closest('form').submit();">
										{{ __('Log Out') }}
									</x-responsive-nav-link>
								</form>
								<!--
								<li><a href="{{route('welcome')}}">Home</a></li>
								<li>
									<a href="#">Dropdown</a>
									<ul>
										<li><a href="#">Lorem ipsum dolor</a></li>
										<li><a href="#">Magna phasellus</a></li>
										<li><a href="#">Etiam dolore nisl</a></li>
										<li>
											<a href="#">And a submenu &hellip;</a>
											<ul>
												<li><a href="#">Lorem ipsum dolor</a></li>
												<li><a href="#">Phasellus consequat</a></li>
												<li><a href="#">Magna phasellus</a></li>
												<li><a href="#">Etiam dolore nisl</a></li>
											</ul>
										</li>
										<li><a href="#">Veroeros feugiat</a></li>
									</ul>
								</li>
								<li><a href="left-sidebar.html">Left Sidebar</a></li>
								<li><a href="right-sidebar.html">Right Sidebar</a></li>
								<li><a href="no-sidebar.html">No Sidebar</a></li>
								-->
							</ul>
						</nav>

				</div>

			<!-- Banner -->
			<!--
				<section id="banner">
					<header>
						<h2>Welcome to NuEco 3.0 Login Console </h2>
						<p>
							Please choose one role log in.
						</p>
					</header>
				</section>
			-->

			<!-- Features -->
				<div class="wrapper style1">

					<section id="features" class="container special">
						<header>
							<!--
							<h2>HAHAHAHA</h2>
							<p>Ipsum volutpat consectetur orci metus consequat imperdiet duis integer semper magna.</p>
							-->
						</header>
						<div class="row">
							<article class="col-4 col-12-mobile special" style="horizontal-align: middle !important;">
								<img src="images/dockets.png" alt=""/>
								<header class="for-shadow-blade">
									<h3 style="background:PapayaWhip;"><a href="#"><span style="font-size: small;vertical-align: middle;">&#9899</span> Enter Scale Ticket</a></h3>
									<h3 style="background:Khaki;"><a href="#"><span style="font-size: small;vertical-align: middle;">&#9899</span> View Dockets</a></h3>
								</header>
								<!--p>
									Amet nullam fringilla nibh nulla convallis tique ante proin sociis accumsan lobortis. Auctor etiam
									porttitor phasellus tempus cubilia ultrices tempor sagittis. Nisl fermentum consequat integer interdum.
								</p-->
							</article>
						</div>
					</section>

				</div>

			<!-- Footer -->
			<!--
				<div id="footer">
					<div class="container">
						<div class="row">
						<div class="row">
							<div class="col-12">
								<!-- Copyright
									<div class="copyright">
										<ul class="menu">
											<li>&copy; 2022 NuPlastic Recycling Co. All rights reserved.</li>
										</ul>
									</div>

							</div>

						</div>
					</div>
				</div>
			-->

		</div>

		<!-- Scripts -->
			<script src="{{asset('js/jquery.min.js')}}"></script>
			<script src="{{asset('js/jquery.dropotron.min.js')}}"></script>
			<script src="{{asset('js/jquery.scrolly.min.js')}}"></script>
			<script src="{{asset('js/jquery.scrollex.min.js')}}"></script>
			<script src="{{asset('js/browser.min.js')}}"></script>
			<script src="{{asset('js/breakpoints.min.js')}}"></script>
			<script src="{{asset('js/util.js')}}"></script>
			<script src="{{asset('js/main.js')}}"></script>

	</body>
</html>