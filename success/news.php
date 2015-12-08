<!DOCTYPE html>

<html>

<head>

	<meta charset="UTF-8">

	<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<title>News: Venture Community Association</title>
	<meta name="description" content="You can find all the recent news and updates relating to activites, events and services at the Venture Centre.">

	<!-- Place favicon.ico and apple-touch-icon.png in the root of your domain and delete these references -->
	<link rel="shortcut icon" href="/favicon.ico">
	<link rel="apple-touch-icon" href="/apple-touch-icon.png">

	<link type="text/css" rel="stylesheet" href="../style.css">
	<link href='http://fonts.googleapis.com/css?family=Gudea%7CRancho' rel='stylesheet' type='text/css'>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

</head>

<body id="remove-link" class="current-page">

	<!-- start of header -->

	<header>

		<div id="skip"><a href="#maincontent">skip to main content</a>
		</div>


		<!-- start of nav bar -->

		<nav aria-label="primary">

			<ul>
				<li class="current-mobile">Main Menu</li>
				<li><a href="../index.php">Home</a>
				</li>
				<li><a href="../about/about.php">About</a>
				</li>
				<li><a href="../activities/activities.php">Activities</a>
				</li>
				<li class="current"><a href="../success/success.php">Success</a>
				</li>
				<li><a href="../future/future.php">Future</a>
				</li>
				<li><a href="../venue-hire/venue-hire.php">Venue Hire</a>
				</li>
				<li><a href="../newsletter/newsletter.php">Newsletter</a>
				</li>
				<li><a href="../contact-us/contact-us.php">Contact Us</a>
				</li>
				<!-- 		<li><?php //include '../php/header-content/search.php';?></li>	 -->
			</ul>

		</nav>

		<!-- end of nav bar -->

		<!--  start of logo-newsletter  -->

		<?php include '../php/header-content/logo-newsletter.php';?>

		<!--  end of logo-newsletter  -->

		<h1>Venture : News</h1>

	</header>

	<!-- end of header -->

	<!-- start of sub-menu -->

	<aside class="sub-menu">

		<nav aria-label="secondary">
			<ul>
				<li class="current-mobile">Sub Menu</li>
				<li><a href="success.php">Success</a>
				</li>
				<li class="current">News</li>
				<li><a href="impact.php">Impact</a>
				</li>
				<li><a href="partnerships.php">Partnerships</a>
				</li>
			</ul>
		</nav>

	</aside>
	<!-- end of sub-menu -->


	<!-- start of breadcrumbs -->

	<div class="breadcrumbs">
		<ul>
			<li>You are:</li>
			<li><a href="../index.php">Home</a>
			</li>
			<li>> <a href="success.php">Success</a>
			</li>
			<li>> News</li>

		</ul>
	</div>

	<!-- end of breadcrumbs -->

	<!-- start of main -->


	<main class="general" id="maincontent">

		<h2>News</h2>

		<div class="inner">
			
		<p>You'll find all the Venture news and updates below but to be kept up-to-date with news, activities, events and services we highly reccommed signing up to our <a href="../newsletter/newsletter.php">monthly newsletter</a>.</p>
		
			<?php include '../php/main-content/recent-news-content.php';?>

		</div>
		<!-- 	inner close -->

	</main>

	<!--  end of  main content  -->

	<!--  start of coming-soon.php  -->

	<aside class="coming-soon">

		<h2>Events</h2>

		<?php include '../php/main-content/coming-soon.php';?>

	</aside>
	<!--  end of coming-soon.php  -->

	<!-- start of Share on social media -->

	<div class="social-share">

		<p>Share this page on social media</p>

		<ul>
			<li class="facebook"><a href="https://www.facebook.com/sharer/sharer.php">Facebook</a>
			</li>
			<li class="twitter"><a href="https://twitter.com/intent/tweet">Twitter</a>
			</li>
			<li class="pinterest"><a href="http://pinterest.com/pin/create/link/?url=">Pinterest</a>
			</li>
			<li class="google-plus"><a href="https://plus.google.com/share">Google +</a>
			</li>

		</ul>


	</div>

	<!-- start of Share on social media -->

	<!--  start of footer.php  -->

	<?php include '../php/footer-content/footer.php';?>