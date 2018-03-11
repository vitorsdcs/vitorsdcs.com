<html>
	<head>
		<meta charset="utf-8">
		<title>@yield('title') | vitorsdcs.com</title>
		{{ HTML::script('js/jquery.min.js'); }}
		{{ HTML::script('js/jquery.selectric.min.js'); }}
		{{ HTML::script('js/analytics.js'); }}
		{{ HTML::script('js/cartola-parciais.js'); }}
		{{ HTML::style('http://fonts.googleapis.com/css?family=Lobster'); }}
		{{ HTML::style('http://fonts.googleapis.com/css?family=Boogaloo'); }}
		{{ HTML::style('http://fonts.googleapis.com/css?family=Exo+2'); }}
		{{ HTML::style('http://fonts.googleapis.com/css?family=Open+Sans'); }}
		{{ HTML::style('http://fonts.googleapis.com/css?family=Kalam'); }}
		{{ HTML::style('css/fonts/league-gothic/stylesheet.css'); }}
		{{ HTML::style('http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css'); }}
		{{ HTML::style('css/reset.css'); }}
		{{ HTML::style('css/selectric.css'); }}
		{{ HTML::style('css/style.css'); }}
		<link rel="icon" href="/images/favicon.png">
	</head>
	<body>
		<div class="container">
			<header>
				<section>
					<div id="logo">
						<a href="{{ url('/') }}">
							vitorsdcs.com
						</a>
					</div>
					<menu id="main-menu">
						<ul class="horizontal-menu">
							<li><a href="/">home</a></li>
							<li><a href="/sobre">sobre</a></li>
							<li><a href="#">portfolio</a></li>
							<li><a href="/blog">blog</a></li>
							<li><a href="/contato">contato</a></li>
						</ul>
					</menu>
				</section>
			</header>