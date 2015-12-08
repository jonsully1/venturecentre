<!DOCTYPE html>

<html>

<head>

	<meta charset="UTF-8">
	
	<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<title>Mission: Venture Community Association</title>
	<meta name="description" content="Our mission statement outlining what we aim to achieve through the community work we undertake in RBKC">

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
				<li class="current"><a href="../about/about.php">About</a>
				</li>
				<li><a href="../activities/activities.php">Activities</a>
				</li>
				<li><a href="../success/success.php">Success</a>
				</li>
				<li><a href="../future/future.php">Future</a>
				</li>
				<li><a href="../venue-hire/venue-hire.php">Venue Hire</a>
				</li>
				<li><a href="../newsletter/newsletter.php">Newsletter</a></li>
				<li><a href="../contact-us/contact-us.php">Contact Us</a>
				</li>
<!-- 				<li><?php //include '../php/header-content/search.php';?></li>
				 -->
			</ul>

		</nav>

		<!-- end of nav bar -->

		<!--  start of logo-newsletter  -->

		<?php include '../php/header-content/logo-newsletter.php';?>

		<!--  end of logo-newsletter  -->
		
		<h1>Venture : Mission</h1>

	</header>

	<!-- end of header -->

	<!-- start of sub-menu -->

	<aside class="sub-menu">

		<nav aria-label="secondary">
			<ul>
				<li class="current-mobile">Sub Menu</li>
				<li><a href="about.php">About</a>
				</li>
				<li class="current">Mission</li>
				<li><a href="partners.php">Partners</a>
				</li>
				<li><a href="history.php">History</a>
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
			<li>> <a href="about.php">About</a>
			</li>
			<li>> Mission</li>

		</ul>
	</div>

	<!-- end of breadcrumbs -->

	<!-- start of main -->


	<main class="general" id="maincontent">

		<h2>Mission</h2>

		<div class="inner">

			<p>Combining the country’s oldest adventure playground with a vibrant community centre and London’s only purpose-built steel pan rehearsal room, the Venture Community Association (known locally as “The Venture”) is located in the heart of Golborne, North Kensington.</p>
			
			<p>We seek to offer this vibrant and diverse community a unique combination of opportunities:</p>

			<ul class="list-item">
				<li>Access to adventure play and sports for children of all ages and backgrounds, including those with special needs and/or who are socially excluded</li>
				<li>Opportunities for fun and enjoyment for people of all ages</li>
				<li>Opportunities for learning, personal growth and development, with a particular focus on developing healthy lifestyles and improving life chances</li>
				<li>A community space for people to express themselves, celebrate together, and meet to develop mutual support and a sense of community</li>
			</ul>

		</div>
		<!-- inner close -->

		<!-- start of Share on social media -->

		<div class="social-share">

			<p>Share this content on social media</p>

			<ul>
				<li class="facebook"><a href="http://www.facebook.com/sharer.php?u=http://www.venturecentre.org.uk/about/mission.php">Facebook</a>
				</li>
				<li class="twitter"><a href="http://twitter.com/share?text=Mission%3A%20Venture%20Community%20Association&amp;url=http://www.venturecentre.org.uk/about/mission.php">Twitter</a>
				</li>
				<li class="pinterest"><a href="//pinterest.com/pin/create/link/?url=http%3A%2F%2Fwww%2Eventurecentre%2Eorg%2Euk%2Fabout%2Fmission%2Ephp&amp;media=http%3A%2F%2Fwww%2Eventurecentre%2Eorg%2Euk%2Fimages%2Fvc%2Dmosaic%2Ejpg&amp;description=Mission%3A%20Venture%20Community%20Centre">Pinterest</a>
				</li>
				<li class="google-plus"><a href="https://plus.google.com/share?url=http://www.venturecentre.org.uk/about/mission.php">Google +</a>
				</li>

			</ul>

		</div>

		<!-- start of Share on social media -->

	</main>

	<!--  end of  main content  -->

	<!--  start of coming-soon.php  -->
		
		<aside class="coming-soon" role="complementary">

			<h2>Events</h2>

		<?php include '../php/main-content/coming-soon.php';?>

		</aside>
	
	<!--  end of coming-soon.php  -->

	<!--  start of recent-news-content.php  -->

	<section class="recent-news">

		<h2>Recent News</h2>

		<?php include '../php/main-content/recent-news-content.php';?>

	</section>

	<!--  end of recent-news-content.php  -->
	
	<!--  start of footer.php  -->

	<?php include '../php/footer-content/footer.php';?>