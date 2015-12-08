<!DOCTYPE html>

<html>

<head>

	<meta charset="UTF-8">
	
	<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<title>Home: Venture Community Association</title>
	<meta name="description" content="Find out about the activities, events and services are available at the Venture Community Association; serving the local community of North Kensington and the surrounding areas since 1960.">

	<!-- Place favicon.ico and apple-touch-icon.png in the root of your domain and delete these references -->
	<link rel="shortcut icon" href="/favicon.ico">
	<link rel="apple-touch-icon" href="/apple-touch-icon.png">
	
<link type="text/css" rel="stylesheet" href="style.css">
	<link href='http://fonts.googleapis.com/css?family=Gudea%7CRancho' rel='stylesheet' type='text/css'>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="../js/isotope.pkgd.min.js"></script>
	<script src="../js/custom.js"></script>

</head>

	<body class="home">

		<!--///////////////////////// start of header /////////////////////////////-->

		<header>
		
		<div id="skip"><a href="#maincontent">skip to main content</a></div>


		<!--///////////////////////// start of nav bar /////////////////////////////-->

<nav aria-label="primary">

	<ul>
		<li class="current-mobile">Main Menu</li>
		<li class="current">Home</li>
		<li><a href="about/about.php">About</a></li>
		<li><a href="activities/activities.php">Activities</a></li>
		<li><a href="success/success.php">Success</a></li> 
		<li><a href="future/future.php">Future</a></li>
		<li><a href="venue-hire/venue-hire.php">Venue Hire</a></li>
		<li><a href="newsletter/newsletter.php">Newsletter</a></li>
		<li><a href="contact-us/contact-us.php">Contact Us</a></li>
	</ul>

</nav>

		<!--///////////////////////// end of nav bar /////////////////////////////-->
			
		<!-- ///////////////////////// start of logo-newsletter.php ///////////////////////// -->
		
<div class="logo-newsletter">

	<div class="logo">

		<img src="/images/vca-logo-original.png" width="350" height="90" alt="the venture community association">

	</div>

</div>

	<h1>Venture : Home</h1>
			
		<!-- ///////////////////////// end of logo-newsletter.php ///////////////////////// -->

		</header>

		<!--///////////////////////// end of header /////////////////////////////-->
		
	<!-- ///////////////////////// start of recent-news-content.php ///////////////////////// -->

<aside class="recent-news">

	<h2>News</h2>

<?php include 'php/main-content/recent-news-content.php';?>
	
</aside>

		<!-- ///////////////////////// end of recent-news-content.php ///////////////////////// -->
		
		<!--///////////////////////// start of main (php) /////////////////////////////-->

		<main id="maincontent">
		
            <h2>Your Community Centre</h2>
        
            <div class="inner video-wrapper">
				
<!--  				<video width="560" height="315" preload controls>
					<source src="video/venture-community-centre.mp4" type="video/mp4">
					Your browser does not support the video tag.
				</video>  -->
		
              <iframe width="560" height="315" src="https://www.youtube.com/embed/ycanaoGB5co" allowfullscreen></iframe>
             
                
            </div>
            <!-- 	inner close -->
            
            <div class="inner video-text">
            
                <p>Video not working? Please visit <a href="https://www.youtube.com/embed/ycanaoGB5co">YouTube</a> or right click <a href="video/venture-community-centre.mp4">download</a> and select 'save as' or 'download as' to watch on your computer/device. Consider your data allowance before downloading - this file is 18 MB.</p>
            
            </div>
            <!-- 	inner close -->
			
			<h2>Today's Activities</h2>


				
<div class="inner">
	
<!-- 	<p>Welcome to the Venture Community Association, serving the local community of North Kensington and the surrounding areas since 1960.</p>
	 -->
<?php

date_default_timezone_set('Europe/London');
$today = date("l");

$content = array (

"Sunday" => "php/main-content/sunday-content.php",
"Monday" => "php/main-content/monday-content.php",
"Tuesday" => "php/main-content/tuesday-content.php",
"Wednesday" => "php/main-content/wednesday-content.php",
"Thursday" => "php/main-content/thursday-content.php",
"Friday" => "php/main-content/friday-content.php",
"Saturday" => "php/main-content/saturday-content.php"

);
	
include $content[$today];

?>
	
</div>
<!-- 	inner close -->
	
<!-- 	</div> -->
<!-- 	portfolio close -->
			
		<!--///////////////////////// start of Share on social media /////////////////////////////-->

		<div class="social-share">

			<p>Share this content on social media</p>

			<ul>
				<li class="facebook"><a href="http://www.facebook.com/sharer.php?u=http://www.venturecentre.org.uk/index.php">Facebook</a>
				</li>
				<li class="twitter"><a href="http://twitter.com/share?text=Home:%20Venture%20Community%20Association&amp;url=http://www.venturecentre.org.uk/index.php">Twitter</a>
				</li>
				<li class="pinterest"><a href="//pinterest.com/pin/create/link/?url=http%3A%2F%2Fwww%2Eventurecentre%2Eorg%2Euk%2Findex%2Ephp&amp;media=http%3A%2F%2Fwww%2Eventurecentre%2Eorg%2Euk%2Fimages%2Fvc%2Dmosaic%2Ejpg&amp;description=Home%3A%20Venture%20Community%20Centre">Pinterest</a>
				</li>
				<li class="google-plus"><a href="https://plus.google.com/share?url=http://www.venturecentre.org.uk/index.php">Google +</a>
				</li>

			</ul>
			
		</div>

		
		<!--///////////////////////// start of Share on social media /////////////////////////////-->

		</main>

		<!--///////////////////////// end of main ///////////////////////// -->
		
		
        <!-- ///////////////////////// start of coming-soon.php ///////////////////////// -->

        <aside class="coming-soon">

            <h2>Coming Soon</h2>

            <?php include 'php/main-content/coming-soon.php';?>

        </aside>
        <!-- ///////////////////////// end of coming-soon.php ///////////////////////// -->
		

		<!-- ///////////////////////// start of footer.php ///////////////////////// -->

<?php include 'php/footer-content/footer.php';?>