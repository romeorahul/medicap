<?php

error_reporting(0);

if (isset($_POST['btnsend'])) {



	require_once 'class.phpmailer.php';





	$mail = new PHPMailer(true);

	$mail->IsSMTP();

	$mail->Host = "mail.medicapinc.com"; // SMTP server

	//$mail->SMTPDebug  = 2;                     // enables SMTP debug information (for testing)

	// 1 = errors and messages

	// 2 = messages only

	$mail->SMTPAuth = true; // enable SMTP authentication

	$mail->Host = "mail.medicapinc.com"; // sets the SMTP server

	$mail->Port = 587; // set the SMTP port for the GMAIL server

	$mail->Username = "inquiry@medicapinc.com"; // SMTP account username

	$mail->Password = "Password21"; // SMTP account password

	try {



		$mail->AddAddress('savio@medicapinc.com', 'New Enquiry');

		$mail->AddAddress('kaggarwal@medicapinc.com', 'New Enquiry');

		//$mail->AddAddress('abdalwadi@gmail.com', 'New Enquiry');

		$mail->SetFrom('inquiry@medicapinc.com', 'Mailing System');

		$mail->Subject = "New inquiry from " . $_POST['Fname'];

		$mail->AltBody = 'To view the message, please use an HTML compatible email viewer!';



		$html = "<table width='50%' border='1' align='center' cellpadding='2' cellspacing='2' bordercolor='#666666' >

    <tr>

      <td colspan='5' bordercolor='#4A0404' >&nbsp;

      <font face='Verdana, Arial, Helvetica, sans-serif'>Feedback</font> From </td>

  </tr>

    <tr>

      <td colspan='2' valign='middle' bordercolor='#333333'></td>

      <td colspan='3' bordercolor='#333333' height='10'></td>

    </tr>

    <tr>

      <td width='42%' valign='middle' ><div align='left'><font face='Verdana, Arial, Helvetica, sans-serif' >&nbsp;&nbsp;Name</td>

      <td width='8%' valign='middle' bordercolor='#333333' ><div align='center' >::</td>

      <td colspan='3' bordercolor='#333333'><div align='left'><font size='2'>

        " . $_REQUEST['Fname'] . "

      </td>

    </tr>



    <tr>

      <td bordercolor='#333333' ><div align='left' >&nbsp;&nbsp;Email</td>

      <td valign='middle' bordercolor='#333333' ><div align='center' >::</td>

      <td colspan='3' bordercolor='#333333'><div align='left'><font size='2'>

        " . $_REQUEST['Email'] . "

      </td>

    </tr>

    <tr>

      <td valign='middle' bordercolor='#333333' ><div align='left' >&nbsp;&nbsp;Phone No.</td>

      <td valign='middle' bordercolor='#333333' ><div align='center' >::</td>

      <td colspan='3' bordercolor='#333333'><div align='left'><strong><font size='2'>

        " . $_REQUEST['Phone'] . "

      </td>

    </tr>

    <tr>

      <td valign='middle' bordercolor='#333333' ><div align='left' >&nbsp;&nbsp;Subject</td>

      <td valign='middle' bordercolor='#333333' ><div align='center' >::</td>

      <td colspan='3' bordercolor='#333333'><div align='left'><strong><font size='2'>

        " . $_REQUEST['Org'] . "

      </td>

    </tr>

  <tr>

      <td valign='middle' bordercolor='#333333' ><div align='left' >&nbsp;&nbsp;Message</td>

      <td valign='middle' bordercolor='#333333' ><div align='center' >::</td>

      <td colspan='3' bordercolor='#333333'><div align='left'><strong><font size='2'>

        " . $_REQUEST['message'] . "

      </td>

    </tr>

   

</table>";

		$mail->MsgHTML($html);

		$mail->Send();

		$msg = "Your inquiry has been send successfully";

	} catch (phpmailerException $e) {

		echo $e->errorMessage(); //Pretty error messages from PHPMailer

		$msg = "Your inquiry has not been submitted. Please try latter";

	} catch (Exception $e) {

		echo $e->getMessage(); //Boring error messages from anything else!

		$msg = "Your inquiry has not been submitted. Please try latter";

	}





}

?>



<script language="javascript">

	function check() {

		var email = /^[a-zA-Z0-9.][a-zA-Z0-9-_\s]+@[a-zA-Z0-9-\s].+\.[a-zA-Z]{2,5}$/

		var phonenumber = /[0-9]/

		var obj = document.frmcon;



		if (obj.Fname.value == "") {

			alert("Name is require");

			obj.Fname.focus();

			return false;

		}

		if (obj.Address.value == "") {

			alert("Address is require");

			obj.Address.focus();

			return false;

		}

		if (obj.Email.value != "") {

			if (!email.test(obj.Email.value)) {

				alert("Invalid Email address...");

				obj.Email.focus();

				return false;

			}

		}

		if (obj.Phone.value == "") {

			alert("Phone Number is require");

			obj.Phone.focus();

			return false;

		}

		if (!phonenumber.test(obj.Phone.value)) {

			alert("Phone Number must be in digit");

			obj.Phone.focus();

			return false;

		}

		if (obj.txtsub.value == "") {

			alert("Subject Name is require");

			obj.txtsub.focus();

			return false;

		}

		return true;

	}

</script>

<!DOCTYPE html>

<!--[if IE 8 ]><html class="ie ie8 no-js" lang="en"> <![endif]-->

<!--[if IE 9 ]><html class="ie ie9 no-js" lang="en"> <![endif]-->

<!--[if (gt IE 9)|!(IE)]><!-->
<html class="no-js" lang="en"> <!--<![endif]-->



<head>



	<!-- Basic Page Needs -->

	<meta charset="utf-8">

	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<title>Medicap Inc | PP (Polypropylene) and PE (Poly Ethylene) Euro Head Cap</title>

	<meta name="description" content="">

	<meta name="author" content="">



	<!-- Mobile Specific Metas -->

	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">



	<!-- CSS -->

	<link rel="stylesheet" href="css/base.css">

	<link rel="stylesheet" href="css/grid.css">

	<link rel="stylesheet" href="css/layout.css">

	<link rel="stylesheet" href="css/main_color1/olive.css" id="main-color1">

	<link rel="stylesheet" href="css/main_color2/red.css" id="main-color2">

	<link rel="stylesheet" href="css/main_bg/green.css" id="main-bg-scheme">

	<link rel="stylesheet"
		href="http://fonts.googleapis.com/css?family=Roboto+Condensed:300|Open+Sans:400,700,300,600,400italic,600italic|Ubuntu:400italic">

	<link rel="stylesheet" href="css/font-awesome.css">

	<link rel="stylesheet" href="css/prettyPhoto.default.css">

	<link rel="stylesheet" href="css/carousel.css">

	<meta name="google-translate-customization" content="70dc599509842d32-67a4cbdc3358ec54-g1ac3ee33a5a1a1f1-f">
	</meta>

	<link rel="stylesheet" href="css/switcher.css"> <!-- Style Switcher -->



	<script>document.documentElement.className = document.documentElement.className.replace(/\bno-js\b/g, 'js');</script>

</head>



<body>



	<!-- START HEADER -->



	<header id="header" class="top-bar-embedded">



		<!-- Top Bar -->

		<div id="top-bar">

			<div class="container"> <!-- 1080 pixels Container -->

				<div class="full-width columns">



					<div class="align-left adapted-max-767px">

						<ul class="fa-icon-list clearfix">

							<li><a href="https://www.facebook.com/MedicapInc?fref=ts" target="_blank"
									title="Facebook"><i class="fa fa-facebook"></i></a></li>

							<li><a href="https://www.linkedin.com/company/9447181?trk=hp-feed-company-name"
									target="_blank" title="LinkedIn"><i class="fa fa-linkedin"></i></a></li>

							<li><a href="https://plus.google.com/+Medicapinc/posts" title="Google+" target="_blank"><i
										class="fa fa-google-plus"></i></a></li>

						</ul>

					</div>



					<div class="align-right adapted-max-767px">



						<ul class="quick-links clearfix">



							<li><a href="#">&nbsp;&nbsp;Support</a></li>

							<li><a href="#">&nbsp;-&nbsp;info@medicapinc.com / rajveer@medicapinc.com</a><span>|</span>
							</li>
							<li><a href="contact.html">Talk to us</a></li>
							<li class="phone-number">&nbsp;-&nbsp;+91-997-891-3120 / +91-968-761-5067&nbsp;&nbsp;</li>

							<div id="google_translate_element"></div>

						</ul>

					</div>

				</div>

			</div>

		</div>



		<div class="container"> <!-- 1080 pixels Container -->



			<div class="full-width columns">



				<!-- Logo -->

				<div id="logo">

					<a href="index.html"><img src="images/logo.png" alt="logo"></a>
				</div>



				<!-- Navigation -->

				<nav id="navigation">



					<div id="primary-nav">



						<ul id="main-menu">



							<li><a href="index.html">Home</a></li>







							<li><a href="about_us.html">About Us</a>

								<!--<ul>

								<li><a href="index-2.html">About Us 1</a></li>

								<li><a href="index2.html">About Us 2</a></li>

								<li><a href="index3.html">About Us 3</a></li>

							</ul>-->

							</li>



							<li><a href="products.html">Our Products</a></li>



							<li><a href="infrastructure.html">Infrastructure</a></li>
							<li><a href="our_business_partner.html">Our Business Partner</a></li>



							<li><a href="events.html">Events</a></li>

							<li><a href="certificasen.html">Certifications</a></li>

							<li><a href="inquiry.php" class="current">Inquiry</a></li>



							<li><a href="contact_us.html">Contact Us</a></li>

						</ul>

					</div>

				</nav>

			</div>

			<!-- end full-width columns -->



		</div> <!-- end 1080 pixels Container -->



	</header>



	<!-- END HEADER -->





	<!-- START CONTENT -->



	<section id="main">



		<!-- Page Title -->

		<section id="page-title">



			<div class="grid-bg">

				<div class="container"> <!-- 1080 pixels Container -->



					<div class="full-width columns">



						<ul class="breadcrumb-nav clearfix">

							<li><a href="index.html" class="link-sm">Home<span></span></a></li>

							<li class="italic">Inquiry</li>

						</ul>

						<h1>Inquiry</h1>



					</div>



				</div>

			</div>



		</section>

		<section id="page-content">



			<div class="container"> <!-- 1080 pixels Container -->



				<div class="row">



					<div class="one-third fixed columns align-right mb-40px mb-max-767px"> <!-- right-aligned column -->

						<br>

						<br>



						<span class="thumbnail-white mb-30px">

							<img src="images/inquiry.jpg" alt="" class="scale-with-grid">

						</span>









					</div>



					<div class="two-thirds adaptive-to-fixed columns">



						<div class="contact-form-wrapper">





							<?php echo $msg; ?>





							<!-- Contact Form -->

							<form method="post" name="frmcon" id="frmcon" onSubmit="return check();" class="form">



								<div>

									<label for="sender-name"><strong>Name</strong> <span>*</span></label>

									<input name="Fname" type="text" value="" id="Fname" required>

								</div>



								<div>

									<label for="sender-email"><strong>E-mail</strong> <span>*</span></label>

									<input name="Email" type="email" value="" id="Email" required>

								</div>

								<div>

									<label for="message-subject"><strong>Phone</strong></label>

									<input name="Phone" type="text" value="" id="Phone4">

								</div>



								<div>

									<label for="message-subject"><strong>Subject</strong></label>

									<input name="Org" type="text" value="" id="Org">

								</div>



								<div>

									<label><strong>Message</strong> <span>*</span></label>

									<textarea name="message" rows="10" cols="75" required></textarea>

								</div>

								<!--

							<div class="checkbox-field">

								<input name="agree" type="checkbox" value="checkbox" id="terms-agree" required>

								<label for="terms-agree"><strong>I have read the terms and conditions and I agree!</strong> <span>(required)</span></label>

							</div>

							-->

								<div class="hidden">

									<label for="spam-check"><strong>Leave this field blank:</strong></label>

									<input name="username" type="text" value="" id="spam-check">

								</div>



								<div id="submit-button">

									<input name="btnsend" type="submit" value="Submit" id="btnsend" class="button">

								</div>



							</form>

							<!-- end Contact Form -->



						</div> <!-- end contact-form-wrapper -->

					</div>



				</div>



			</div> <!-- end 1080 pixels Container -->



			<!-- Stripe section: Google Map -->

			<section class="stripe bottom map-wrapper">



				<div class="container"> <!-- 1080 pixels Container -->



					<span class="scroll-top">

				</div>

				<!-- end 1080 pixels Container -->











				<!-- Page Content -->



				<!-- end Page Content -->









				<!-- END CONTENT -->





				<!-- START FOOTER -->

				<br>

				<br>



				<footer id="footer">



					<div class="container"> <!-- 1080 pixels Container -->



						<!-- Contact Details -->

						<div class="one-half columns clearfix" id="contact-details">

							<div class="contact-data">

								<div>

									<h4>Contact Us</h4>

									<p class="large-font-size"><span class="phone-number">+91-2667-292 771</span></p>
									<p class="large-font-size"><span class="phone-number">+91-968-761-5067</span></p>
									<p class="large-font-size"><span class="phone-number">+91-823-804-6418</span></p>
									<p><a href="mailto:info@medicapinc.com">info@medicapinc.com</a></p>
									<p><a href="mailto:rajveer@medicapinc.com">rajveer@medicapinc.com</a></p>

								</div>

							</div>

							<div class="contact-description">

								<div>

									<h4>Office</h4>

									<p class="tight"> E-73 Savli Gujarat Industrial Development Corporation (GIDC),
										Village -Manjusar, <br>

										Savli - 391 775, Gujarat India</p>

								</div>

							</div>

						</div>



						<div class="one-half columns clearfix" id="info-share">



							<!-- Subscription Form -->

							<p class="mb-12px">Join us to start receiving the latest Updates</p>





							<!-- Social Icons -->

							<ul class="social-icons clearfix">

								<li class="facebook"><a href="https://www.facebook.com/MedicapInc?fref=ts"
										target="_blank" title="Facebook">Facebook</a></li>

								<li class="linkedin"><a
										href="https://www.linkedin.com/company/9447181?trk=hp-feed-company-name"
										target="_blank" title="linkedin">Linkedin</a></li>

								<li class="google-plus"><a href="https://plus.google.com/112238995534672298087/about"
										target="_blank" title="Google+">Google+</a></li>

							</ul>



						</div>



						<span class="scroll-top">

							<span class="arrow-top"></span>

							<span>Back to Top</span> </span>
					</div>

					<!-- end 1080 pixels Container -->



				</footer>



				<footer id="footer-bottom">



					<div class="container"> <!-- 1080 pixels Container -->



						<div class="seven columns">



							<!-- Footer Navigation -->

							<ul class="footer-nav clearfix">

								<li><a href="index.html" class="current">Home</a></li>







								<li><a href="about_us.html">About Us</a>

									<!--<ul>

								<li><a href="index-2.html">About Us 1</a></li>

								<li><a href="index2.html">About Us 2</a></li>

								<li><a href="index3.html">About Us 3</a></li>

							</ul>-->

								</li>



								<li><a href="products.html">Our Products</a></li>



								<li><a href="infrastructure.html">Infrastructure</a></li>
								<li><a href="our_business_partner.html">Our Business Partner</a></li>

								<li><a href="events.html" class="current">Events</a></li>



								<li><a href="inquiry.php">Inquiry</a></li>



								<li><a href="contact_us.html">Contact Us</a></li>

							</ul>



						</div>



						<div class="five columns">



							<ul class="links clearfix">

								<li>© 2015 Medicap Inc<span>|</span></li>

								<li><a href="#">Design by : Creative Web Solutions</a></li>



							</ul>



						</div>



					</div> <!-- end 1080 pixels Container -->



				</footer>

			</section>

			<!-- END FOOTER -->





			<!-- Java Script -->
			<script type="text/javascript">

				function googleTranslateElementInit() {

					new google.translate.TranslateElement({ pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE }, 'google_translate_element');

				}

			</script>
			<script type="text/javascript"
				src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

			<script type="text/javascript"
				src="http://maps.google.com/maps/api/js?sensor=false&amp;language=en"></script>

			<script type="text/javascript" src="js/vendors/gmap3.min.js"></script>

			<script src="js/respond.min.js"></script>

			<script src="js/selectnav.min.js"></script>

			<script src="js/html5media.min.js"></script> <!-- Cross-browser solution for embedding HTML5 video -->

			<script src="js/jquery.min.js"></script>

			<script src="js/detectmobilebrowser.js"></script>

			<script src="js/jquery.easing.min.js"></script>

			<script src="js/jquery.fitvids.min.js"></script>

			<script src="js/jquery.prettyPhoto.min.js"></script>

			<script src="js/jquery.flexslider.min.js"></script>

			<script src="js/jquery.carousel.min.js"></script>

			<script src="js/jquery.tweet.min.js"></script>

			<script src="js/custom.js"></script>





</body>



</html>