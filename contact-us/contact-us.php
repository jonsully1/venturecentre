<?php session_start() ?>
<!DOCTYPE html>

<html>

<head>

	<meta charset="UTF-8">
	
	<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame - what a beauty, cross broswer compatiblity solved!! -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<title>Contact Us: Venture Community Association</title>
	<meta name="description" content="Contact us on 020 8960 3234, email us via info@venturecentre.org.uk or fill out the contact form on this page.">

	<!-- Place favicon.ico and apple-touch-icon.png in the root of your domain and delete these references -->
	<link rel="shortcut icon" href="/favicon.ico">
	<link rel="apple-touch-icon" href="/apple-touch-icon.png">
	
	<link type="text/css" rel="stylesheet" href="../style.css">
	<link href='http://fonts.googleapis.com/css?family=Gudea%7CRancho' rel='stylesheet' type='text/css'>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

</head>

<body id="remove-link" class="current-page">
	
		<!--///////////////////////// start of header /////////////////////////////-->

		<header>

			<div id="skip"><a href="#maincontent">skip to main content</a>
			</div>


		<!--///////////////////////// start of nav bar /////////////////////////////-->

<nav aria-label="primary">

	<ul>
		<li class="current-mobile">Main Menu</li>
		<li><a href="../index.php">Home</a></li>
		<li><a href="../about/about.php">About</a></li>
		<li><a href="../activities/activities.php">Activities</a></li>
		<li><a href="../success/success.php">Success</a></li> 
		<li><a href="../future/future.php">Future</a></li>
		<li><a href="../venue-hire/venue-hire.php">Venue Hire</a></li>
		<li><a href="../newsletter/newsletter.php">Newsletter</a></li>
		<li class="current">Contact Us</li>
<!-- 		<li><?php //include '../php/header-content/search.php';?></li>	 -->
	</ul>

</nav>

			<!--///////////////////////// end of nav bar /////////////////////////////-->

			<!-- ///////////////////////// start of logo-newsletter ///////////////////////// -->

<?php include '../php/header-content/logo-newsletter.php';?>

			<!-- ///////////////////////// end of logo-newsletter ///////////////////////// -->

         <h1>Venture : Contact Us</h1>
			
		</header>

		<!--///////////////////////// end of header /////////////////////////////-->

		<!--///////////////////////// start of sub-menu /////////////////////////////-->

		<aside class="sub-menu">
		
			<nav aria-label="secondary">
		<ul>
			<li class="current-mobile">Sub Menu</li>
			<li class="current">Contact Us</li>
			<li><a href="volunteer.php">Volunteer</a>
			</li>
			<li><a href="jobs.php">Jobs</a>
			</li>
			<li><a href="staff.php">Staff</a>
			</li>

		</ul>

			</nav>
			
		</aside>
	
		<!--///////////////////////// end of sub-menu /////////////////////////////-->

		<!--///////////////////////// start of breadcrumbs /////////////////////////////-->

<div class="breadcrumbs">
    <ul>
        <li>You are:</li>
		<li><a href="../index.php">Home</a></li>
		<li>> Contact Us</li>
		
    </ul>
</div>
	
	<!--///////////////////////// end of breadcrumbs /////////////////////////////-->
         
     <!--///////////////////////// start of main /////////////////////////-->
     
         
<main class="general" id="maincontent">

         <h2>Contact Us</h2>
	
<div class="inner">
	
	<p>If you would like to find out more about any of the services we offer feel free to fill in the contact form below or visit the reception desk at the Venture Centre. Our friendly staff members will be happy to help:</p>
	
	<ul>
		<li>Venture Community Association
			<br>103A Wornington Rd
			<br>North Kensington
			<br>London
			<br>W10 5YB</li>
	</ul>

	<p><a href="https://www.google.co.uk/maps/place/Venture+Community+Association/@51.52267,-0.209813,17z/data=!3m1!4b1!4m2!3m1!1s0x48761018f53ea37f:0xf848a3e977f7f3e8">Find Us on Google Maps</a></p>
	
	<p>You can also call us on <a href="tel://020-8960-3234">020 8960 3234</a> or email us via <a href="mailto:info@venturecentre.org.uk">info@venturecentre.org.uk</a>.</p>

	
	<div id="contact-form" class="clearfix">
    
	<?php
//init variables
$cf = array();
$sr = false;
 
if(isset($_SESSION['cf_returndata'])){
    $cf = $_SESSION['cf_returndata'];
    $sr = true;
}
?>
		<ul id="errors" class="<?php echo ($sr && !$cf['form_ok']) ? 'visible' : ''; ?>">
    <li id="info">There were some problems with your form submission:</li>
    <?php 
    if(isset($cf['errors']) && count($cf['errors']) > 0) :
        foreach($cf['errors'] as $error) :
    ?>
    <li><?php echo $error ?></li>
    <?php
        endforeach;
    endif;
    ?>
</ul>
<p id="success" class="<?php echo ($sr && $cf['form_ok']) ? 'visible' : ''; ?>">Thanks for your message! We will get back to you ASAP!</p>
   <form method="post" action="process.php">
	<label for="name">Name: <span class="required">*</span>
	</label>
	<input type="text" id="name" name="name" value="<?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['name'] : '' ?>" placeholder="John Doe" required="required" autofocus="autofocus" />

	<label for="email">Email Address: <span class="required">*</span>
	</label>
	<input type="email" id="email" name="email" value="<?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['email'] : '' ?>" placeholder="johndoe@example.com" required="required" />

	<label for="telephone">Telephone:</label>
	<input type="tel" id="telephone" name="telephone" value="<?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['telephone'] : '' ?>" />

	<label for="enquiry">Enquiry:</label>
	<select id="enquiry" name="enquiry">
		<option value="General" <?php echo ($sr && !$cf[ 'form_ok'] && $cf[ 'posted_form_data'][ 'enquiry']=='General' ) ? "selected='selected'" : '' ?>>General</option>
		<option value="Venue Hire" <?php echo ($sr && !$cf[ 'form_ok'] && $cf[ 'posted_form_data'][ 'enquiry']=='Venue Hire' ) ? "selected='selected'" : '' ?>>Venue Hire</option>
		<option value="Volunteer" <?php echo ($sr && !$cf[ 'form_ok'] && $cf[ 'posted_form_data'][ 'enquiry']=='Volunteer' ) ? "selected='selected'" : '' ?>>Volunteer</option>
	</select>

	<label for="message">Message: <span class="required">*</span>
	</label>
	<textarea id="message" name="message" placeholder="Your message must be greater than 10 charcters" required="required" data-minlength="20">
		<?php echo ($sr && !$cf[ 'form_ok']) ? $cf[ 'posted_form_data'][ 'message'] : '' ?>
	</textarea>

	<span id="loading"></span>
	<input type="submit" value="Send" id="submit-button" />
	<p id="req-field-desc"><span class="required">*</span> indicates a required field</p>
</form>
<?php unset($_SESSION['cf_returndata']); ?>
</div>

</div> 
<!-- 	inner close -->

		<!--///////////////////////// start of Share on social media /////////////////////////////-->

		<div class="social-share">

			<p>Share this content on social media</p>

			<ul>
				<li class="facebook"><a href="http://www.facebook.com/sharer.php?u=http://www.venturecentre.org.uk/contact-us/contact-us.php">Facebook</a>
				</li>
				<li class="twitter"><a href="http://twitter.com/share?text=Contact%2DUs%3A%20Venture%20Community%20Association&amp;url=http://www.venturecentre.org.uk/contact-us/contact-us.php">Twitter</a>
				</li>
				<li class="pinterest"><a href="//pinterest.com/pin/create/link/?url=http%3A%2F%2Fwww%2Eventurecentre%2Eorg%2Euk%2Fabout%2Fhistory%2Ephp&amp;media=http%3A%2F%2Fwww%2Eventurecentre%2Eorg%2Euk%2Fimages%2Fvc%2Dmosaic%2Ejpg&amp;description=Contact%2DUs%3A%20Venture%20Community%20Centre">Pinterest</a>
				</li>
				<li class="google-plus"><a href="https://plus.google.com/share?url=http://www.venturecentre.org.uk/contact-us/contact-us.php">Google +</a>
				</li>

			</ul>

		</div>

		<!--///////////////////////// start of Share on social media /////////////////////////////-->	
	
</main>
	
		<!-- ///////////////////////// end of  main content ///////////////////////// -->

		<!-- ///////////////////////// start of coming-soon.php ///////////////////////// -->
<aside class="coming-soon">

	<h2>Events</h2>

<?php include '../php/main-content/coming-soon.php';?>

</aside>
		<!-- ///////////////////////// end of coming-soon.php ///////////////////////// -->

		<!-- ///////////////////////// start of recent-news-content.php ///////////////////////// -->

<section class="recent-news">

	<h2>News</h2>

<?php include '../php/main-content/recent-news-content.php';?>
	
</section>

		<!-- ///////////////////////// end of recent-news-content.php ///////////////////////// -->




		<!-- ///////////////////////// start of footer.php ///////////////////////// -->

<?php include '../php/footer-content/footer.php';?>