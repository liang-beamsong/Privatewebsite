<!doctype html>
<html>
<head>
<title>Forum</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Stunning Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--flexslider-css-->
<!--bootstrap-->
<link href="homes/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<!--coustom css-->
<link href="homes/css/style.css" rel="stylesheet" type="text/css"/>
<!--fonts-->
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,800italic,800,700italic,700,600,600italic' rel='stylesheet' type='text/css'>
<!--/fonts-->
<!--script-->
<script src="homes/js/jquery.min.js"> </script>
	<!-- js -->
		 <script src="homes/js/bootstrap.js"></script>
	<!-- js -->
		<script type="text/javascript" src="homes/js/move-top.js"></script>
<script type="text/javascript" src="homes/js/easing.js"></script>
<!--/script-->
<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},900);
				});
			});
</script>
<!--/script-->
	</head>
	<body>
		<div class="header" id="home">
		
			@include('layout.header')
			
			<div class="header-banner">
					<!-- Top Navigation -->
					<section class="bgi banner5"><h2>Contact</h2> </section>
					
	<!-- contact -->
	<div class="contact-top">
		<!-- container -->
		<div class="container">
			<div class="map footer-middle">
				<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d158858.18237072596!2d-0.10159865000003898!3d51.52864165000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1436514341845" allowfullscreen></iframe>
			</div>
			<div class="mail-grids">
				<div class="col-md-6 mail-grid-left">
					<h3>Address</h3>
					<h5>Cras porttitor imperdiet volutpat nulla malesuada lectus erosut convallis felis consectetur ut</h5>
					<h4>Headquarters</h4>
					<p>123 T. Globel Place.
						<span>CG 09-123</span>
						Italy, Ba. 4567
					</p>
					<h4>Get In Touch</h4>
					<p>Telephone: +1 234 567 9871
						<span>FAX: +1 234 567 9871</span>
						E-mail: <a href="mailto:info@example.com">mail@example.com</a>
					</p>
				</div>
				<div class="col-md-6 contact-form">
					<form>
						<input type="text" placeholder="Name" required="">
						<input type="text" placeholder="Email" required="">
						<input type="text" placeholder="Subject" required="">
						<textarea placeholder="Message" required=""></textarea>
						<input type="submit" value="SEND">
					</form>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<!-- //container -->
	</div>
	<!-- //contact -->
		</div>
</div>
<!--footer-starts-->
@include('layout.footer')
<script type="text/javascript">
		$(document).ready(function() {
				/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
				*/
		$().UItoTop({ easingType: 'easeOutQuart' });
});
</script>
<a href="#to-top" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!----> 
	</body>
</html>
