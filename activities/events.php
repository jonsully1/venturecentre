<!DOCTYPE html>

<html>

<head>

	<meta charset="UTF-8">
	
	<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<title>Events: Venture Community Association</title>
	<meta name="description" content="View our up-coming community events at the Venture Centre including links to more information about venure hire.">

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
				<li><a href="/index.php">Home</a>
				</li>
				<li><a href="/about/about.php">About</a>
				</li>
				<li class="current"><a href="/activities/activities.php">Activities</a>
				</li>
				<li><a href="/success/success.php">Success</a>
				</li>
				<li><a href="/future/future.php">Future</a>
				</li>
				<li><a href="/venue-hire/venue-hire.php">Venue Hire</a>
				</li>
				<li><a href="../newsletter/newsletter.php">Newsletter</a></li>
				<li><a href="/contact-us/contact-us.php">Contact Us</a>
				</li>
<!-- 				<li><?php //include '../php/header-content/search.php';?></li> -->
			</ul>

		</nav>


		<!-- end of nav bar -->

		<!--  start of logo-newsletter  -->

		<?php include '../php/header-content/logo-newsletter.php';?>

		<!--  end of logo-newsletter  -->
		
		<h1>Venture : Events</h1>
		
	</header>

	<!-- end of header -->

	
	<!-- start of sub-menu -->

	<aside class="sub-menu">

		<nav aria-label="secondary">
			<ul>
				<li class="current-mobile">Sub Menu</li>
				<li><a href="activities.php">Activities</a>
				</li>
				<li class="current">Events</li>
				<li><a href="mondays-activities.php">Monday</a>
				</li>
				<li><a href="tuesdays-activities.php">Tuesday</a>
				</li>
				<li><a href="wednesdays-activities.php">Wednesday</a>
				</li>
				<li><a href="thursdays-activities.php">Thursday</a>
				</li>
				<li><a href="fridays-activities.php">Friday</a>
				</li>
				<li><a href="saturdays-activities.php">Saturday</a>
				</li>
				<li><a href="sundays-activities.php">Sunday</a>
				</li>
			</ul>
		</nav>

	</aside>
	<!-- start of sub-menu -->

		<!-- start of breadcrumbs -->

		<div class="breadcrumbs">
			<ul>
				<li>You are:</li>
				<li><a href="/index.php">Home</a>
				</li>
				<li>> <a href="activities.php">Activities</a>
				</li>
				<li>> Events</li>
			</ul>
		</div>

	<!-- end of breadcrumbs -->

	<!--  start of main content  -->

	<main class="general" id="maincontent">

		<h2>Events</h2>
		
		<div class="inner">
		
		<p>Below is a list of the up-coming events at the Venture Community Centre.</p>
		
		<p><em>Please note:</em> In the run up to the Christmas the centre will be operating reduced opening times - <em>10:30am to 5:45pm on Mon 21st, Tues 22nd and Wed 23rd Dec 2015</em>.</p>
	
<p>The centre will then be closed for the holidays from <em>Thurs 24th Dec to Sunday 3rd Jan 2016</em>.</p>

<p>We wil re-open under normal opening hours on: <em>Monday 4th January 2016</em>.</p>
		
		<p>We  we have a variety of different spaces available for hire. If you would like to run your own event, class, business meeting or even birthday party see our <a href="../venue-hire/venue-hire.php">Venue Hire</a> page and/or <a href="../contact-us/contact-us.php">Contact Us</a> for more information.</p>

		<?php include '../php/main-content/coming-soon.php';?>
		
				</div>
<!-- 		close inner -->

		<!-- start of Share on social media -->

		<div class="social-share">

			<p>Share this content on social media</p>

			<ul>
				<li class="facebook"><a href="http://www.facebook.com/sharer.php?u=http://www.venturecentre.org.uk/activities/events.php">Facebook</a>
				</li>
				<li class="twitter"><a href="http://twitter.com/share?text=Events%3A%20Venture%20Community%20Association&amp;url=http://www.venturecentre.org.uk/activities/events.php">Twitter</a>
				</li>
				<li class="pinterest"><a href="//pinterest.com/pin/create/link/?url=http%3A%2F%2Fwww%2Eventurecentre%2Eorg%2Euk%2Fabout%2Fhistory%2Ephp&amp;media=http%3A%2F%2Fwww%2Eventurecentre%2Eorg%2Euk%2Fimages%2Fvc%2Dmosaic%2Ejpg&amp;description=Events%3A%20Venture%20Community%20Centre">Pinterest</a>
				</li>
				<li class="google-plus"><a href="https://plus.google.com/share?url=http://www.venturecentre.org.uk/activities/events.php">Google +</a>
				</li>

			</ul>

		</div>

		<!-- start of Share on social media -->
		
	</main>

	<!--  end of  main content  -->

	<!--  start of coming-soon.php  -->
	<aside class="coming-soon" role="complementary">

		<h2>News</h2>

		<?php include '../php/main-content/recent-news-content.php';?>

	</aside>
	<!--  end of coming-soon.php  -->

	<!--  start of footer.php  -->

	<?php include '../php/footer-content/footer.php';?>