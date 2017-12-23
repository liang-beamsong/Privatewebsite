<!doctype html>
<html>
<head>
<title>shop</title>
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
<script src="homes/js/modernizr.custom.97074.js"></script>
<!-- bootstrap-js -->
<script src="homes/js/bootstrap.js"></script>
<!-- bootstrap-js -->
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
        <script src="homes/js/jquery.chocolat.js"></script>
		<link rel="stylesheet" href="homes/css/chocolat.css" type="text/css" media="screen">
		<!--light-box-files -->
		<script type="text/javascript">
		$(function() {
			$('.gallery a').Chocolat();
		});
		</script>
	</head>
	<body>
		<div class="header" id="home">
			@include('layout.header')
			<div class="header-banner">
					<!-- Top Navigation -->
					<section class="bgi banner5"><h2>Gallery</h2> </section>
							<!--gallery-->
	<div class="gallery" id="gallery">
		<div class="container">
						<script type="text/javascript" src="homes/js/jquery.hoverdir.js"></script>	
		<script type="text/javascript">
			$(function() {
			
				$(' #da-thumbs > li ').each( function() { $(this).hoverdir(); } );

			});
		</script>
			<div class="gallery-grids">
			<section>
				<ul id="da-thumbs" class="da-thumbs">
					<li>
						<a href="homes/images/pp1-1.jpg" class="b-link-stripe b-animate-go  thickbox">
							<img src="homes/images/pp1-1.jpg" alt="" />
							<div>
								<h5>Traveling</h5>
								<span>non suscipit leo fringilla non suscipit leo fringilla molestie</span>
							</div>
						</a>
					</li>
					<li>
						<a href="homes/images/pp2-1.jpg" class="b-link-stripe b-animate-go  thickbox">
							<img src="homes/images/pp2-1.jpg" alt="" />
							<div>
								<h5>Traveling</h5>
								<span>non suscipit leo fringilla non suscipit leo fringilla molestie</span>
							</div>
						</a>
					</li>
					<li>
						<a href="homes/images/pp3-1.jpg" class="b-link-stripe b-animate-go  thickbox">
							<img src="homes/images/pp3-1.jpg" alt="" />
							<div>
								<h5>Traveling</h5>
								<span>non suscipit leo fringilla non suscipit leo fringilla molestie</span>
							</div>
						</a>
					</li>
					<li>
						<a href="homes/images/pp4-1.jpg" class="b-link-stripe b-animate-go  thickbox">
							<img src="homes/images/pp4-1.jpg" alt="" />
							<div>
								<h5>Traveling</h5>
								<span>non suscipit leo fringilla non suscipit leo fringilla molestie</span>
							</div>
						</a>
					</li>
					<li>	
						<a href="homes/images/pp5-1.jpg" class="b-link-stripe b-animate-go  thickbox">
							<img src="homes/images/pp5-1.jpg" alt="" />
							<div>
								<h5>Traveling</h5>
								<span>non suscipit leo fringilla non suscipit leo fringilla molestie</span>
							</div>
						</a>
					</li>
					<li>
						<a href="homes/images/pp6-1.jpg" class="b-link-stripe b-animate-go  thickbox">
							<img src="homes/images/pp6-1.jpg" alt="" />
							<div>
								<h5>Traveling</h5>
								<span>non suscipit leo fringilla non suscipit leo fringilla molestie</span>
							</div>
						</a>
					</li>
					<li>
						<a href="homes/images/pp7-1.jpg" class="b-link-stripe b-animate-go  thickbox">
							<img src="homes/images/pp7-1.jpg" alt="" />
							<div>
								<h5>Traveling</h5>
								<span>non suscipit leo fringilla non suscipit leo fringilla molestie</span>
							</div>
						</a>
					</li>
					<li>
						<a href="homes/images/pp8-1.jpg" class="b-link-stripe b-animate-go  thickbox">
							<img src="homes/images/pp8-1.jpg" alt="" />
							<div>
								<h5>Traveling</h5>
								<span>non suscipit leo fringilla non suscipit leo fringilla molestie</span>
							</div>
						</a>
					</li>
					<li>
						<a href="homes/images/pp9-1.jpg" class="b-link-stripe b-animate-go  thickbox">
							<img src="homes/images/pp9-1.jpg" alt="" />
							<div>
								<h5>Traveling</h5>
								<span>non suscipit leo fringilla non suscipit leo fringilla molestie</span>
							</div>
						</a>
					</li>
				</ul>
			</section>
        </div>
<!--script-->
	</div>
</div>
<!--//gallery-->
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
