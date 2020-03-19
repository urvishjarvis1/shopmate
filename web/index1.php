<?php
 session_start();
 if(isset($_SESSION['first'])){
	 
 }else{
	echo"<p>not set</p>";
	}


?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>ShopMate an Entertainment | Home </title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="One Movies Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/contactstyle.css" type="text/css" media="all" />
<link rel="stylesheet" href="css/faqstyle.css" type="text/css" media="all" />
<link href="css/single.css" rel='stylesheet' type='text/css' />
<link href="css/medile.css" rel='stylesheet' type='text/css' />
<!-- banner-slider -->
<link href="css/jquery.slidey.min.css" rel="stylesheet">
<!-- //banner-slider -->
<!-- pop-up -->
<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
<!-- //pop-up -->
<!-- font-awesome icons -->
<link rel="stylesheet" href="css/font-awesome.min.css" />
<!-- //font-awesome icons -->
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- //js -->
<!-- banner-bottom-plugin -->
<link href="css/owl.carousel.css" rel="stylesheet" type="text/css" media="all">
<style>
#nameheader{
			color:white;
			font-size:20px;
			width:50%;
			height:120px;
			background-color:#212121;
			text-align:right;
			float:right;
			
	}
#logo{
			width:50%;
			height:120px;
			background-color:#212121;
			text-align:left;
			float:left;
	}
</style>
<script src="js/owl.carousel.js"></script>
<script>
	$(document).ready(function() { 
		$("#owl-demo").owlCarousel({
	 
		  autoPlay: 3000, //Set AutoPlay to 3 seconds
	 
		  items : 5,
		  itemsDesktop : [640,4],
		  itemsDesktopSmall : [414,3]
	 
		});
	 
	}); 
</script> 
<!-- //banner-bottom-plugin -->
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700italic,700,400italic,300italic,300' rel='stylesheet' type='text/css'>
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->

</head>
	
<body>
<?php
		echo '<div id="logo"><a href="../main/main.php"><img src=logo.png height=100px width=200px></a></div><div id = "nameheader" ><h4>Welcome '.$_SESSION['first'].'!!<br><form action="inc/logout.php" method="post"><a href="../index.php">logout<a></form></div></h4>';
	?>	

<!-- header -->
	<div class="header">
		<div class="container">
			<div class="w3layouts_logo">
				<a href="index.html"><h1>ShopMate<span>Mobiles</span></h1></a>
			</div>
			<div class="w3_search">
				<form action="#" method="post">
					<input type="text" name="Search" placeholder="Search" required="">
					<input type="submit" value="Go">
				</form>
			</div>
			<div class="w3l_sign_in_register">
				<ul>
					<li><i class="fa fa-phone" aria-hidden="true"></i> (+91)8866794195</li>
					
				</ul>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //header -->
<!-- bootstrap-pop-up -->
	<div class="modal video-modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					Sign In & Sign Up
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div>
				<section>
					<div class="modal-body">
						<div class="w3_login_module">
							<div class="module form-module">
							  <div class="toggle"><i class="fa fa-times fa-pencil"></i>
								<div class="tooltip">Click Me</div>
							  </div>
							  <div class="form">
								<h3>Login to your account</h3>
								<form action="#" method="post">
								  <input type="text" name="Username" placeholder="Username" required="">
								  <input type="password" name="Password" placeholder="Password" required="">
								  <input type="submit" value="Login">
								</form>
							  </div>
							  <div class="form">
								<h3>Create an account</h3>
								<form action="#" method="post">
								  <input type="text" name="Username" placeholder="Username" required="">
								  <input type="password" name="Password" placeholder="Password" required="">
								  <input type="email" name="Email" placeholder="Email Address" required="">
								  <input type="text" name="Phone" placeholder="Phone Number" required="">
								  <input type="submit" value="Register">
								</form>
							  </div>
							  <div class="cta"><a href="#">Forgot your password?</a></div>
							</div>
						</div>
					</div>
				</section>
			</div>
		</div>
	</div>
	<script>
		$('.toggle').click(function(){
		  // Switches the Icon
		  $(this).children('i').toggleClass('fa-pencil');
		  // Switches the forms  
		  $('.form').animate({
			height: "toggle",
			'padding-top': 'toggle',
			'padding-bottom': 'toggle',
			opacity: "toggle"
		  }, "slow");
		});
	</script>
<!-- //bootstrap-pop-up -->
<!-- nav -->
	<div class="movies_nav">
		<div class="container">
			<nav class="navbar navbar-default">
				<div class="navbar-header navbar-left">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
					<nav>
						<ul class="nav navbar-nav">
							<li><a href="index1.php">Home</a></li>
							
							<li class="active"><a href="index1.php">Mobiles</a></li>
							<li><a href="../movies/index.php">Movies</a></li>
							<li><a href="../movies/web/index.html">Travelling</a></li>
						</ul>
					</nav>
				</div>
			</nav>	
		</div>
	</div>
<!-- //nav -->
<!-- banner -->
	<div id="slidey" style="display:none;height: auto; margin: auto;">
		<ul>
			<li><img src="images/Pixel.png" alt=" " ><p class='title'>Google Pixel</p><p class='description'> The Pixel combines hardware and software made by Google, including all your favorite Google apps, to bring you a fast, seamless, and easy-to-use experience.</p></li>
			<li><img src="images/iPhone7.jpg" alt=" "><p class='title'>iPhone 7</p><p class='description'>The iPhone 7 comes with a 4.70-inch touchscreen display with a resolution of 750 pixels by 1334 pixels at a PPI of 326 pixels per inch.</p></li>
			<li><img src="images/motoz.png" alt=" "><p class='title'>Moto Z</p><p class='description'> The Moto Z Play comes with a 5.50-inch touchscreen display with a resolution of 1080 pixels by 1920 pixels at a PPI of 403 pixels per inch. </p></li>
			<li><img src="images/s7edge.jpg" alt=" "><p class='title'>Samsung s7</p><p class='description'>The s7 Edge comes with a 5.50-inch touchscreen display with a resolution of 1440 pixels by 2560 pixels at a PPI of 534 pixels per inch. </p></li>
			<li><img src="images/xperiaxz.jpg" alt=" "><p class='title'>Xperia XZ</p><p class='description'>Xperia XZ perfects the fundamentals of a great smartphone. And it’s all delivered in a stunning, evolved design.</p></li>
			<li><img src="images/oneplus_three.jpg" alt=" "><p class='title'>One Plus Three </p><p class='description'>The One Plus 3 comes with a 5.50-inch touchscreen display with a resolution of 1080 pixels by 1920 pixels at a PPI of 401 pixels per inch.</p></li>
		</ul>   	
    </div>
    <script src="js/jquery.slidey.js"></script>
    <script src="js/jquery.dotdotdot.min.js"></script>
	   <script type="text/javascript">
			$("#slidey").slidey({
				interval: 8000,
				listCount: 5,
				autoplay: false,
				showList: true
			});
			$(".slidey-list-description").dotdotdot();
		</script>
<!-- //banner -->
<!-- banner-bottom -->
	<div class="banner-bottom">
		<div class="container">
			<div class="w3_agile_banner_bottom_grid">
				<div id="owl-demo" class="owl-carousel owl-theme">
					<div class="item">
						<div class="w3l-movie-gride-agile w3l-movie-gride-agile1">
							<a href="single.php" class="hvr-shutter-out-horizontal"><img src="images/rsz_pixel1.jpg" title="album-name" class="img-responsive" alt=" " />
								<div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
							</a>
							<div class="mid-1 agileits_w3layouts_mid_1_home">
								<div class="w3l-movie-text">
									<h6><a href="pixel.php">Pixel</a></h6>							
								</div>
								<div class="mid-2 agile_mid_2_home">
									<p>₹57,000</p>
									<div class="block-stars">
										<ul class="w3l-ratings">
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
										</ul>
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
							<div class="ribben">
								<p>NEW</p>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="w3l-movie-gride-agile w3l-movie-gride-agile1">
							<a href="single1.php" class="hvr-shutter-out-horizontal"><img src="images/rsz_xperiaxz.jpg" title="album-name" class="img-responsive" alt=" " />
								<div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
							</a>
							<div class="mid-1 agileits_w3layouts_mid_1_home">
								<div class="w3l-movie-text">
									<h6><a href="single1.php">XPERIA XZ</a></h6>							
								</div>
								<div class="mid-2 agile_mid_2_home">
									<p>₹49,878</p>
									<div class="block-stars">
										<ul class="w3l-ratings">
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
										</ul>
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
							<div class="ribben">
								<p>NEW</p>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="w3l-movie-gride-agile w3l-movie-gride-agile1">
							<a href="single2.php" class="hvr-shutter-out-horizontal"><img src="images/rsz_1iphone7.jpg" title="album-name" class="img-responsive" alt=" " />
								<div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
							</a>
							<div class="mid-1 agileits_w3layouts_mid_1_home">
								<div class="w3l-movie-text">
									<h6><a href="single2.php">iPhone 7</a></h6>							
								</div>
								<div class="mid-2 agile_mid_2_home">
									<p>₹57,845</p>
									<div class="block-stars">
										<ul class="w3l-ratings">
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
										</ul>
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
							<div class="ribben">
								<p>NEW</p>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="w3l-movie-gride-agile w3l-movie-gride-agile1">
							<a href="single3.php" class="hvr-shutter-out-horizontal"><img src="images/rsz_s7edge.jpg" title="album-name" class="img-responsive" alt=" " />
								<div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
							</a>
							<div class="mid-1 agileits_w3layouts_mid_1_home">
								<div class="w3l-movie-text">
									<h6><a href="single3.php">s7 Edge</a></h6>							
								</div>
								<div class="mid-2 agile_mid_2_home">
									<p>₹45,000</p>
									<div class="block-stars">
										<ul class="w3l-ratings">
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
										</ul>
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
							<div class="ribben">
								<p>AVG</p>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="w3l-movie-gride-agile w3l-movie-gride-agile1">
							<a href="single4.php" class="hvr-shutter-out-horizontal"><img src="images/rsz_iphone6s.jpg" title="album-name" class="img-responsive" alt=" " />
								<div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
							</a>
							<div class="mid-1 agileits_w3layouts_mid_1_home">
								<div class="w3l-movie-text">
									<h6><a href="single4.php">iPhone 6s</a></h6>							
								</div>
								<div class="mid-2 agile_mid_2_home">
									<p>₹38,999</p>
									<div class="block-stars">
										<ul class="w3l-ratings">
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
										</ul>
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
							<div class="ribben">
								<p>AVG</p>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="w3l-movie-gride-agile w3l-movie-gride-agile1">
							<a href="single5.php" class="hvr-shutter-out-horizontal"><img src="images/rsz_moto-z-1.jpg" title="album-name" class="img-responsive" alt=" " />
								<div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
							</a>
							<div class="mid-1 agileits_w3layouts_mid_1_home">
								<div class="w3l-movie-text">
									<h6><a href="single5.php">Moto Z Play</a></h6>							
								</div>
								<div class="mid-2 agile_mid_2_home">
									<p>₹24,999</p>
									<div class="block-stars">
										<ul class="w3l-ratings">
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
										</ul>
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
							<div class="ribben">
								<p>NEW</p>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="w3l-movie-gride-agile w3l-movie-gride-agile1">
							<a href="single6.php" class="hvr-shutter-out-horizontal"><img src="images/rsz_oneplus-1.jpg" title="album-name" class="img-responsive" alt=" " />
								<div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
							</a>
							<div class="mid-1 agileits_w3layouts_mid_1_home">
								<div class="w3l-movie-text">
									<h6><a href="single6.php">One Plus Three</a></h6>							
								</div>
								<div class="mid-2 agile_mid_2_home">
									<p>₹27,999</p>
									<div class="block-stars">
										<ul class="w3l-ratings">
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
										</ul>
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
							<div class="ribben">
								<p>NEW</p>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="w3l-movie-gride-agile w3l-movie-gride-agile1">
							<a href="single7.php" class="hvr-shutter-out-horizontal"><img src="images/rsz_lg-nexus-5x-3.jpg" title="album-name" class="img-responsive" alt=" " />
								<div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
							</a>
							<div class="mid-1 agileits_w3layouts_mid_1_home">
								<div class="w3l-movie-text">
									<h6><a href="single7.php">Nexus 5x</a></h6>							
								</div>
								<div class="mid-2 agile_mid_2_home">
									<p>₹29,850</p>
									<div class="block-stars">
										<ul class="w3l-ratings">
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
										</ul>
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
							<div class="ribben">
								<p>AVG</p>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="w3l-movie-gride-agile w3l-movie-gride-agile1">
							<a href="single8.php" class="hvr-shutter-out-horizontal"><img src="images/rsz_xperia-z5.jpg" title="album-name" class="img-responsive" alt=" " />
								<div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
							</a>
							<div class="mid-1 agileits_w3layouts_mid_1_home">
								<div class="w3l-movie-text">
									<h6><a href="single8.php">XPERIA Z5 premium</a></h6>							
								</div>
								<div class="mid-2 agile_mid_2_home">
									<p>₹29,990</p>
									<div class="block-stars">
										<ul class="w3l-ratings">
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
										</ul>
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
							<div class="ribben">
								<p>AVG</p>
							</div>
						</div>
					</div>
				</div>
			</div>			
		</div>
	</div>
<!-- //banner-bottom -->
<div class="general_social_icons">
	<nav class="social">
		<ul>
			<li class="w3_twitter"><a href="#">Twitter <i class="fa fa-twitter"></i></a></li>
			<li class="w3_facebook"><a href="#">Facebook <i class="fa fa-facebook"></i></a></li>
			<li class="w3_dribbble"><a href="#">Dribbble <i class="fa fa-dribbble"></i></a></li>
			<li class="w3_g_plus"><a href="#">Google+ <i class="fa fa-google-plus"></i></a></li>				  
		</ul>
  </nav>
</div>
<!-- general -->
	<div class="general">
		<h4 class="latest-text w3_latest_text">Featured Mobiles</h4>
		<div class="container">
			<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
				<ul id="myTab" class="nav nav-tabs" role="tablist">
					<li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">Featured</a></li>
					<li role="presentation"><a href="#profile" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile" aria-expanded="false">Top viewed</a></li>
					<li role="presentation"><a href="#rating" id="rating-tab" role="tab" data-toggle="tab" aria-controls="rating" aria-expanded="true">Top Rating</a></li>
					<li role="presentation"><a href="#imdb" role="tab" id="imdb-tab" data-toggle="tab" aria-controls="imdb" aria-expanded="false">Recently Added</a></li>
				</ul>
				<div id="myTabContent" class="tab-content">
					<div role="tabpanel" class="tab-pane fade active in" id="home" aria-labelledby="home-tab">
						<div class="w3_agile_featured_movies">
							<div class="col-md-2 w3l-movie-gride-agile">
								<a href="index1.php" class="hvr-shutter-out-horizontal"><img src="images/rsz_na1.jpg" title="album-name" class="img-responsive" alt=" " />
									<div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
								</a>
								<div class="mid-1 agileits_w3layouts_mid_1_home">
									<div class="w3l-movie-text">
										<h6><a href="index1.php">Honor 8</a></h6>							
									</div>
									<div class="mid-2 agile_mid_2_home">
										<p>₹29,999</p>
										<div class="block-stars">
											<ul class="w3l-ratings">
												<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
											</ul>
										</div>
										<div class="clearfix"></div>
									</div>
								</div>
								<div class="ribben">
									<p>NEW</p>
								</div>
							</div>
							<div class="col-md-2 w3l-movie-gride-agile">
								<a href="index1.php" class="hvr-shutter-out-horizontal"><img src="images/rsz_na2.jpg" title="album-name" class="img-responsive" alt=" "  />
									<div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
								</a>
								<div class="mid-1 agileits_w3layouts_mid_1_home">
									<div class="w3l-movie-text">
										<h6><a href="index1.php">K5 Note</a></h6>							
									</div>
									<div class="mid-2 agile_mid_2_home">
										<p>₹11,999</p>
										<div class="block-stars">
											<ul class="w3l-ratings">
												<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
											</ul>
										</div>
										<div class="clearfix"></div>
									</div>
								</div>
								<div class="ribben">
									<p>NEW</p>
								</div>
							</div>
							<div class="col-md-2 w3l-movie-gride-agile">
								<a href="index1.php" class="hvr-shutter-out-horizontal"><img src="images/na3.jpg" title="album-name" class="img-responsive" alt=" " />
									<div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
								</a>
								<div class="mid-1 agileits_w3layouts_mid_1_home">
									<div class="w3l-movie-text">
										<h6><a href="index1.php">g4 Plus</a></h6>							
									</div>
									<div class="mid-2 agile_mid_2_home">
										<p>₹14,999</p>
										<div class="block-stars">
											<ul class="w3l-ratings">
												<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
											</ul>
										</div>
										<div class="clearfix"></div>
									</div>
								</div>
								<div class="ribben">
									<p>AVG</p>
								</div>
							</div>
							<div class="col-md-2 w3l-movie-gride-agile">
								<a href="index1.php" class="hvr-shutter-out-horizontal"><img src="images/na4.jpg" title="album-name" class="img-responsive" alt=" " />
									<div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
								</a>
								<div class="mid-1 agileits_w3layouts_mid_1_home">
									<div class="w3l-movie-text">
										<h6><a href="index1.php">K4 Note</a></h6>							
									</div>
									<div class="mid-2 agile_mid_2_home">
										<p>₹10,999</p>
										<div class="block-stars">
											<ul class="w3l-ratings">
												<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
											</ul>
										</div>
										<div class="clearfix"></div>
									</div>
								</div>
								<div class="ribben">
									<p>AVG</p>
								</div>
							</div>
							<div class="col-md-2 w3l-movie-gride-agile">
								<a href="index1.php" class="hvr-shutter-out-horizontal"><img src="images/rsz_na6.jpg" title="album-name" class="img-responsive" alt=" " />
									<div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
								</a>
								<div class="mid-1 agileits_w3layouts_mid_1_home">
									<div class="w3l-movie-text">
										<h6><a href="index1.php">J7</a></h6>							
									</div>
									<div class="mid-2 agile_mid_2_home">
										<p>₹12,965</p>
										<div class="block-stars">
											<ul class="w3l-ratings">
												<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
											</ul>
										</div>
										<div class="clearfix"></div>
									</div>
								</div>
								<div class="ribben">
									<p>OLD</p>
								</div>
							</div>
							<div class="col-md-2 w3l-movie-gride-agile">
								<a href="index1.php" class="hvr-shutter-out-horizontal"><img src="images/rsz_na5.jpg" title="album-name" class="img-responsive" alt=" " />
									<div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
								</a>
								<div class="mid-1 agileits_w3layouts_mid_1_home">
									<div class="w3l-movie-text">
										<h6><a href="index1.php">J5</a></h6>							
									</div>
									<div class="mid-2 agile_mid_2_home">
										<p>₹10,390</p>
										<div class="block-stars">
											<ul class="w3l-ratings">
												<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
											</ul>
										</div>
										<div class="clearfix"></div>
									</div>
								</div>
								<div class="ribben">
									<p>OLD</p>
								</div>
							</div>
							<div class="col-md-2 w3l-movie-gride-agile">
								<a href="index1.php" class="hvr-shutter-out-horizontal"><img src="images/rsz_na7.jpg" title="album-name" class="img-responsive" alt=" " />
									<div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
								</a>
								<div class="mid-1 agileits_w3layouts_mid_1_home">
									<div class="w3l-movie-text">
										<h6><a href="index1.php">Mi 5</a></h6>						
									</div>
									<div class="mid-2 agile_mid_2_home">
										<p>₹24,999</p>
										<div class="block-stars">
											<ul class="w3l-ratings">
												<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
											</ul>
										</div>
										<div class="clearfix"></div>
									</div>
								</div>
								<div class="ribben">
									<p>NEW</p>
								</div>
							</div>
							<div class="col-md-2 w3l-movie-gride-agile">
								<a href="index1.php" class="hvr-shutter-out-horizontal"><img src="images/rsz_na8.jpg" title="album-name" class="img-responsive" alt=" " />
									<div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
								</a>
								<div class="mid-1 agileits_w3layouts_mid_1_home">
									<div class="w3l-movie-text">
										<h6><a href="index1.php">Mi Note 3</a></h6>							
									</div>
									<div class="mid-2 agile_mid_2_home">
										<p>₹11,999</p>
										<div class="block-stars">
											<ul class="w3l-ratings">
												<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
											</ul>
										</div>
										<div class="clearfix"></div>
									</div>
								</div>
								<div class="ribben">
									<p>AVG</p>
								</div>
							</div>
							<div class="col-md-2 w3l-movie-gride-agile">
								<a href="index1.php" class="hvr-shutter-out-horizontal"><img src="images/rsz_na9.jpg" title="album-name" class="img-responsive" alt=" " />
									<div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
								</a>
								<div class="mid-1 agileits_w3layouts_mid_1_home">
									<div class="w3l-movie-text">
										<h6><a href="index1.php">Le 2</a></h6>							
									</div>
									<div class="mid-2 agile_mid_2_home">
										<p>₹10,999</p>
										<div class="block-stars">
											<ul class="w3l-ratings">
												<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
											</ul>
										</div>
										<div class="clearfix"></div>
									</div>
								</div>
								<div class="ribben">
									<p>AVG</p>
								</div>
							</div>
							<div class="col-md-2 w3l-movie-gride-agile">
								<a href="index1.php" class="hvr-shutter-out-horizontal"><img src="images/rsz_na22.jpg" title="album-name" class="img-responsive" alt=" " />
									<div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
								</a>
								<div class="mid-1 agileits_w3layouts_mid_1_home">
									<div class="w3l-movie-text">
										<h6><a href="index1.php">Nexus 6p</a></h6>							
									</div>
									<div class="mid-2 agile_mid_2_home">
										<p>₹36,990</p>
										<div class="block-stars">
											<ul class="w3l-ratings">
												<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
											</ul>
										</div>
										<div class="clearfix"></div>
									</div>
								</div>
								<div class="ribben">
									<p>AVG</p>
								</div>
							</div>
							<div class="col-md-2 w3l-movie-gride-agile">
								<a href="index1.php" class="hvr-shutter-out-horizontal"><img src="images/rsz_na11.jpg" title="album-name" class="img-responsive" alt=" " />
									<div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
								</a>
								<div class="mid-1 agileits_w3layouts_mid_1_home">
									<div class="w3l-movie-text">
										<h6><a href="index1.php">Zenfone 3</a></h6>							
									</div>
									<div class="mid-2 agile_mid_2_home">
										<p>₹20,599</p>
										<div class="block-stars">
											<ul class="w3l-ratings">
												<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
											</ul>
										</div>
										<div class="clearfix"></div>
									</div>
								</div>
								<div class="ribben">
									<p>AVG</p>
								</div>
							</div>
							<div class="col-md-2 w3l-movie-gride-agile">
								<a href="index1.php" class="hvr-shutter-out-horizontal"><img src="images/rsz_na12.jpg" title="album-name" class="img-responsive" alt=" " />
									<div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
								</a>
								<div class="mid-1 agileits_w3layouts_mid_1_home">
									<div class="w3l-movie-text">
										<h6><a href="index1.php">P9</a></h6>							
									</div>
									<div class="mid-2 agile_mid_2_home">
										<p>₹39,999</p>
										<div class="block-stars">
											<ul class="w3l-ratings">
												<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
											</ul>
										</div>
										<div class="clearfix"></div>
									</div>
								</div>
								<div class="ribben">
									<p>NEW</p>
								</div>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
					<div role="tabpanel" class="tab-pane fade" id="profile" aria-labelledby="profile-tab">
						<div class="col-md-2 w3l-movie-gride-agile">
							<a href="index1.php" class="hvr-shutter-out-horizontal"><img src="images/rsz_na18.jpg" title="album-name" class="img-responsive" alt=" " />
								<div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
							</a>
							<div class="mid-1 agileits_w3layouts_mid_1_home">
								<div class="w3l-movie-text">
									<h6><a href="index1.php">iPhone 7</a></h6>							
								</div>
								<div class="mid-2 agile_mid_2_home">
									<p>₹57,150</p>
									<div class="block-stars">
										<ul class="w3l-ratings">
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
										</ul>
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
							<div class="ribben">
								<p>NEW</p>
							</div>
						</div>
						<div class="col-md-2 w3l-movie-gride-agile">
							<a href="index1.php" class="hvr-shutter-out-horizontal"><img src="images/rsz_1rsz_1rsz_2na19.jpg" title="album-name" class="img-responsive" alt=" " />
								<div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
							</a>
							<div class="mid-1 agileits_w3layouts_mid_1_home">
								<div class="w3l-movie-text">
									<h6><a href="index1.php">One PLus 3</a></h6>							
								</div>
								<div class="mid-2 agile_mid_2_home">
									<p>₹27,999</p>
									<div class="block-stars">
										<ul class="w3l-ratings">
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
										</ul>
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
							<div class="ribben">
								<p>NEW</p>
							</div>
						</div>
						<div class="col-md-2 w3l-movie-gride-agile">
							<a href="index1.php" class="hvr-shutter-out-horizontal"><img src="images/rsz_na1.jpg" title="album-name" class="img-responsive" alt=" " />
								<div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
							</a>
							<div class="mid-1 agileits_w3layouts_mid_1_home">
								<div class="w3l-movie-text">
									<h6><a href="index1.php">Honor 8</a></h6>							
								</div>
								<div class="mid-2 agile_mid_2_home">
									<p>₹29,999</p>
									<div class="block-stars">
										<ul class="w3l-ratings">
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
										</ul>
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
							<div class="ribben">
								<p>NEW</p>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div role="tabpanel" class="tab-pane fade" id="rating" aria-labelledby="rating-tab">
						<div class="col-md-2 w3l-movie-gride-agile">
							<a href="index1.php" class="hvr-shutter-out-horizontal"><img src="images/rsz_na18.jpg" title="album-name" class="img-responsive" alt=" " />
								<div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
							</a>
							<div class="mid-1 agileits_w3layouts_mid_1_home">
								<div class="w3l-movie-text">
									<h6><a href="index1.php">iPhone 7</a></h6>							
												
								</div>
								<div class="mid-2 agile_mid_2_home">
									<p>₹57,150</p>
									<div class="block-stars">
										<ul class="w3l-ratings">
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
										</ul>
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
							<div class="ribben">
								<p>NEW</p>
							</div>
						</div>
						<div class="col-md-2 w3l-movie-gride-agile">
							<a href="index1.php" class="hvr-shutter-out-horizontal"><img src="images/na4.jpg" title="album-name" class="img-responsive" alt=" " />
								<div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
							</a>
							<div class="mid-1 agileits_w3layouts_mid_1_home">
								<div class="w3l-movie-text">
									<h6><a href="index1.php">K4 Note</a></h6>							
								</div>
								<div class="mid-2 agile_mid_2_home">
									<p>₹10,999</p>
									<div class="block-stars">
										<ul class="w3l-ratings">
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
										</ul>
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
							<div class="ribben">
								<p>AVG</p>
							</div>
						</div>
						<div class="col-md-2 w3l-movie-gride-agile">
							<a href="index1.php" class="hvr-shutter-out-horizontal"><img src="images/na3.jpg" title="album-name" class="img-responsive" alt=" " />
								<div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
							</a>
							<div class="mid-1 agileits_w3layouts_mid_1_home">
								<div class="w3l-movie-text">
									<h6><a href="index1.php">G4 Plus</a></h6>							
								</div>
								<div class="mid-2 agile_mid_2_home">
									<p>₹14,999</p>
									<div class="block-stars">
										<ul class="w3l-ratings">
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
										</ul>
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
							<div class="ribben">
								<p>AVG</p>
							</div>
						</div>
						<div class="col-md-2 w3l-movie-gride-agile">
							<a href="index1.php" class="hvr-shutter-out-horizontal"><img src="images/rsz_na19.jpg" title="album-name" class="img-responsive" alt=" " />
								<div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
							</a>
							<div class="mid-1 agileits_w3layouts_mid_1_home">
								<div class="w3l-movie-text">
									<h6><a href="index1.php">iPhone 6s</a></h6>							
								</div>
								<div class="mid-2 agile_mid_2_home">
									<p>₹38,999</p>
									<div class="block-stars">
										<ul class="w3l-ratings">
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
										</ul>
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
							<div class="ribben">
								<p>AVG</p>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div role="tabpanel" class="tab-pane fade" id="imdb" aria-labelledby="imdb-tab">
						<div class="col-md-2 w3l-movie-gride-agile">
							<a href="index1.php" class="hvr-shutter-out-horizontal"><img src="images/rsz_na18.jpg" title="album-name" class="img-responsive" alt=" " />
								<div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
							</a>
							<div class="mid-1 agileits_w3layouts_mid_1_home">
								<div class="w3l-movie-text">
									<h6><a href="index1.php">iPhone 7</a></h6>							
								</div>
								<div class="mid-2 agile_mid_2_home">
									<p>₹57,150</p>
									<div class="block-stars">
										<ul class="w3l-ratings">
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
										</ul>
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
							<div class="ribben">
								<p>NEW</p>
							</div>
						</div>
						<div class="col-md-2 w3l-movie-gride-agile">
							<a href="index1.php" class="hvr-shutter-out-horizontal"><img src="images/rsz_na20.jpg" title="album-name" class="img-responsive" alt=" " />
								<div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
							</a>
							<div class="mid-1 agileits_w3layouts_mid_1_home">
								<div class="w3l-movie-text">
									<h6><a href="index1.php">Moto Z Play</a></h6>							
								</div>
								<div class="mid-2 agile_mid_2_home">
									<p>₹24,999</p>
									<div class="block-stars">
										<ul class="w3l-ratings">
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
										</ul>
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
							<div class="ribben">
								<p>NEW</p>
							</div>
						</div>
						<div class="col-md-2 w3l-movie-gride-agile">
							<a href="index1.php" class="hvr-shutter-out-horizontal"><img src="images/rsz_na1.jpg" title="album-name" class="img-responsive" alt=" " />
								<div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
							</a>
							<div class="mid-1 agileits_w3layouts_mid_1_home">
								<div class="w3l-movie-text">
									<h6><a href="index1.php">Honor 8</a></h6>							
								</div>
								<div class="mid-2 agile_mid_2_home">
									<p>₹29,999</p>
									<div class="block-stars">
										<ul class="w3l-ratings">
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
										</ul>
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
							<div class="ribben">
								<p>NEW</p>
							</div>
						</div>
						<div class="col-md-2 w3l-movie-gride-agile">
							<a href="index1.php" class="hvr-shutter-out-horizontal"><img src="images/rsz_na2.jpg" title="album-name" class="img-responsive" alt=" " />
								<div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
							</a>
							<div class="mid-1 agileits_w3layouts_mid_1_home">
								<div class="w3l-movie-text">
									<h6><a href="index1.php">K5 Note</a></h6>							
								</div>
								<div class="mid-2 agile_mid_2_home">
									<p>₹13,499</p>
									<div class="block-stars">
										<ul class="w3l-ratings">
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
										</ul>
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
							<div class="ribben">
								<p>NEW</p>
							</div>
						</div>
						<div class="col-md-2 w3l-movie-gride-agile">
							<a href="index1.php" class="hvr-shutter-out-horizontal"><img src="images/rsz_1na21.jpg" title="album-name" class="img-responsive" alt=" " />
								<div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
							</a>
							<div class="mid-1 agileits_w3layouts_mid_1_home">
								<div class="w3l-movie-text">
									<h6><a href="index1.php">Pixel</a></h6>							
								</div>
								<div class="mid-2 agile_mid_2_home">
									<p>₹57,000</p>
									<div class="block-stars">
										<ul class="w3l-ratings">
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
										</ul>
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
							<div class="ribben">
								<p>NEW</p>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
<!-- //general -->
<!-- Latest-tv-series -->
	<div class="Latest-tv-series">
		<h4 class="latest-text w3_latest_text w3_home_popular">Most Popular Mobiles</h4>
		<div class="container">
			<section class="slider">
				<div class="flexslider">
					<ul class="slides">
						<li>
							<div class="agile_tv_series_grid">
								<div class="col-md-6 agile_tv_series_grid_left">
									<div class="w3ls_market_video_grid1">
										<img src="images/na16.jpg" alt=" " class="img-responsive" />
										<a class="w3_play_icon" href="#small-dialog">
											<span class="glyphicon glyphicon-play-circle" aria-hidden="true"></span>
										</a>
									</div>
								</div>
								<div class="col-md-6 agile_tv_series_grid_right">
									<p class="fexi_header">Google Pixel</p>
									<p class="fexi_header_para"><span class="conjuring_w3">Description<label>:</label></span> The Google Pixel is powered by 1.6GHz quad-core Qualcomm Snapdragon 821 processor and it comes with 4GB of RAM. The phone packs 32GB of internal storage cannot be expanded. As far as the cameras are concerned, the Google Pixel packs a 12.3-megapixel primary camera on the rear and a 8-megapixel front shooter for selfies. </p>
									<p class="fexi_header_para"><span>Date of Release<label>:</label></span> October, 2016 </p>
									<p class="fexi_header_para">
										<span>Category<label>:</label> </span>
										<a>Work</a> | 
										<a>Photography</a> | 
										<a>High Performance</a>								
									</p>
									<p class="fexi_header_para fexi_header_para1"><span>Star Rating<label>:</label></span>
										<a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
										<a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
										<a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
										<a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
										<a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a>
									</p>
								</div>
								<div class="clearfix"> </div>
								<div class="agileinfo_flexislider_grids">
									<div class="col-md-2 w3l-movie-gride-agile">
										<a href="index1.php" class="hvr-shutter-out-horizontal"><img src="images/rsz_na18.jpg" title="album-name" class="img-responsive" alt=" " />
											<div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
										</a>
										<div class="mid-1 agileits_w3layouts_mid_1_home">
											<div class="w3l-movie-text">
												<h6><a href="index1.php">iPhone 7</a></h6>							
											</div>
											<div class="mid-2 agile_mid_2_home">
												<p>₹57,150</p>
												<div class="block-stars">
													<ul class="w3l-ratings">
														<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
														<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
														<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
														<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
														<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
													</ul>
												</div>
												<div class="clearfix"></div>
											</div>
										</div>
										<div class="ribben">
											<p>NEW</p>
										</div>
									</div>
									<div class="col-md-2 w3l-movie-gride-agile">
										<a href="index1.php" class="hvr-shutter-out-horizontal"><img src="images/na4.jpg" title="album-name" class="img-responsive" alt=" " />
											<div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
										</a>
										<div class="mid-1 agileits_w3layouts_mid_1_home">
											<div class="w3l-movie-text">
												<h6><a href="index1.php">K4 Note</a></h6>							
											</div>
											<div class="mid-2 agile_mid_2_home">
												<p>₹10,999</p>
												<div class="block-stars">
													<ul class="w3l-ratings">
														<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
														<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
														<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
														<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
														<li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
													</ul>
												</div>
												<div class="clearfix"></div>
											</div>
										</div>
										<div class="ribben">
											<p>AVG</p>
										</div>
									</div>
									<div class="col-md-2 w3l-movie-gride-agile">
										<a href="index1.php" class="hvr-shutter-out-horizontal"><img src="images/na3.jpg" title="album-name" class="img-responsive" alt=" " />
											<div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
										</a>
										<div class="mid-1 agileits_w3layouts_mid_1_home">
											<div class="w3l-movie-text">
												<h6><a href="index1.php">G4 Plus</a></h6>							
											</div>
											<div class="mid-2 agile_mid_2_home">
												<p>₹13,499</p>
												<div class="block-stars">
													<ul class="w3l-ratings">
														<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
														<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
														<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
														<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
														<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
													</ul>
												</div>
												<div class="clearfix"></div>
											</div>
										</div>
										<div class="ribben">
											<p>AVG</p>
										</div>
									</div>
									<div class="col-md-2 w3l-movie-gride-agile">
										<a href="index1.php" class="hvr-shutter-out-horizontal"><img src="images/rsz_na19.jpg" title="album-name" class="img-responsive" alt=" " />
											<div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
										</a>
										<div class="mid-1 agileits_w3layouts_mid_1_home">
											<div class="w3l-movie-text">
												<h6><a href="index1.php">iPhone 6s</a></h6>							
											</div>
											<div class="mid-2 agile_mid_2_home">
												<p>₹38,999</p>
												<div class="block-stars">
													<ul class="w3l-ratings">
														<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
														<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
														<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
														<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
														<li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
													</ul>
												</div>
												<div class="clearfix"></div>
											</div>
										</div>
										<div class="ribben">
											<p>AVG</p>
										</div>
									</div>
									<div class="col-md-2 w3l-movie-gride-agile">
										<a href="index1.php" class="hvr-shutter-out-horizontal"><img src="images/rsz_1na21.jpg" title="album-name" class="img-responsive" alt=" " />
											<div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
										</a>
										<div class="mid-1 agileits_w3layouts_mid_1_home">
											<div class="w3l-movie-text">
												<h6><a href="index1.php">Nexus 6P</a></h6>							
											</div>
											<div class="mid-2 agile_mid_2_home">
												<p>₹36,990</p>
												<div class="block-stars">
													<ul class="w3l-ratings">
														<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
														<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
														<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
														<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
														<li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
													</ul>
												</div>
												<div class="clearfix"></div>
											</div>
										</div>
										<div class="ribben">
											<p>AVG</p>
										</div>
									</div>
									<div class="col-md-2 w3l-movie-gride-agile">
										<a href="index1.php" class="hvr-shutter-out-horizontal"><img src="images/rsz_1na34.jpg" title="album-name" class="img-responsive" alt=" " />
											<div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
										</a>
										<div class="mid-1 agileits_w3layouts_mid_1_home">
											<div class="w3l-movie-text">
												<h6><a href="index1.php">Moto Z Play</a></h6>							
											</div>
											<div class="mid-2 agile_mid_2_home">
												<p>₹24,999</p>
												<div class="block-stars">
													<ul class="w3l-ratings">
														<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
														<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
														<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
														<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
														<li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
													</ul>
												</div>
												<div class="clearfix"></div>
											</div>
										</div>
										<div class="ribben">
											<p>NEW</p>
										</div>
									</div>
									<div class="clearfix"> </div>
								</div>
							</div>
						</li>
						<li>
							<div class="agile_tv_series_grid">
								<div class="col-md-6 agile_tv_series_grid_left">
									<div class="w3ls_market_video_grid1">
										<img src="images/na13.jpg" alt=" " class="img-responsive" />
										<a class="w3_play_icon1" href="#small-dialog1">
											<span class="glyphicon glyphicon-play-circle" aria-hidden="true"></span>
										</a>
									</div>
								</div>
								<div class="col-md-6 agile_tv_series_grid_right">
									<p class="fexi_header">Apple iPhone 7 & 7 Plus</p>
									<p class="fexi_header_para"><span class="conjuring_w3">Description<label>:</label></span> The Apple iPhone 7 is powered by quad-core Apple A10 Fusion processor and it comes with 2GB of RAM. The phone packs 32GB of internal storage cannot be expanded. As far as the cameras are concerned, the Apple iPhone 7 packs a 12-megapixel primary camera on the rear and a 7-megapixel front shooter for selfies. </p>
									<p class="fexi_header_para"><span>Date of Release<label>:</label></span> September, 2016 </p>
									<p class="fexi_header_para">
										<span>Category<label>:</label> </span>
										<a>Work</a> |  
										<a>photography</a>|
										<a>High Performance</a>
									</p>
									<p class="fexi_header_para fexi_header_para1"><span>Star Rating<label>:</label></span>
										<a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
										<a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
										<a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
										<a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
										<a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
									</p>
								</div>
								<div class="clearfix"> </div>
								<div class="agileinfo_flexislider_grids">
									<div class="col-md-2 w3l-movie-gride-agile">
										<a href="index1.php" class="hvr-shutter-out-horizontal"><img src="images/rsz_na2.jpg" title="album-name" class="img-responsive" alt=" " />
											<div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
										</a>
										<div class="mid-1 agileits_w3layouts_mid_1_home">
											<div class="w3l-movie-text">
												<h6><a href="index1.php">K5 Note</a></h6>							
											</div>
											<div class="mid-2 agile_mid_2_home">
												<p>₹13,499</p>
												<div class="block-stars">
													<ul class="w3l-ratings">
														<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
														<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
														<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
														<li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
														<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
													</ul>
												</div>
												<div class="clearfix"></div>
											</div>
										</div>
										<div class="ribben">
											<p>NEW</p>
										</div>
									</div>
									<div class="col-md-2 w3l-movie-gride-agile">
										<a href="index1.php" class="hvr-shutter-out-horizontal"><img src="images/rsz_na1.jpg" title="album-name" class="img-responsive" alt=" " />
											<div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
										</a>
										<div class="mid-1 agileits_w3layouts_mid_1_home">
											<div class="w3l-movie-text">
												<h6><a href="index1.php">Honor 8</a></h6>							
											</div>
											<div class="mid-2 agile_mid_2_home">
												<p>₹29,999</p>
												<div class="block-stars">
													<ul class="w3l-ratings">
														<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
														<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
														<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
														<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
														<li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
													</ul>
												</div>
												<div class="clearfix"></div>
											</div>
										</div>
										<div class="ribben">
											<p>NEW</p>
										</div>
									</div>
									<div class="col-md-2 w3l-movie-gride-agile">
										<a href="index1.php" class="hvr-shutter-out-horizontal"><img src="images/rsz_na11.jpg" title="album-name" class="img-responsive" alt=" " />
											<div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
										</a>
										<div class="mid-1 agileits_w3layouts_mid_1_home">
											<div class="w3l-movie-text">
												<h6><a href="index1.php">Zenfone 3</a></h6>							
											</div>
											<div class="mid-2 agile_mid_2_home">
												<p>₹20,599</p>
												<div class="block-stars">
													<ul class="w3l-ratings">
														<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
														<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
														<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
														<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
														<li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
													</ul>
												</div>
												<div class="clearfix"></div>
											</div>
										</div>
										<div class="ribben">
											<p>NEW</p>
										</div>
									</div>
									<div class="col-md-2 w3l-movie-gride-agile">
										<a href="index1.php" class="hvr-shutter-out-horizontal"><img src="images/rsz_1na21.jpg" title="album-name" class="img-responsive" alt=" " />
											<div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
										</a>
										<div class="mid-1 agileits_w3layouts_mid_1_home">
											<div class="w3l-movie-text">
												<h6><a href="index1.php">Pixel</a></h6>							
											</div>
											<div class="mid-2 agile_mid_2_home">
												<p>₹57,000</p>
												<div class="block-stars">
													<ul class="w3l-ratings">
														<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
														<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
														<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
														<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
														<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
													</ul>
												</div>
												<div class="clearfix"></div>
											</div>
										</div>
										<div class="ribben">
											<p>NEW</p>
										</div>
									</div>
									<div class="col-md-2 w3l-movie-gride-agile">
										<a href="index1.php" class="hvr-shutter-out-horizontal"><img src="images/rsz_na10.jpg" title="album-name" class="img-responsive" alt=" " />
											<div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
										</a>
										<div class="mid-1 agileits_w3layouts_mid_1_home">
											<div class="w3l-movie-text">
												<h6><a href="index1.php">A7</a></h6>							
											</div>
											<div class="mid-2 agile_mid_2_home">
												<p>₹19,499</p>
												<div class="block-stars">
													<ul class="w3l-ratings">
														<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
														<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
														<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
														<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
														<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
													</ul>
												</div>
												<div class="clearfix"></div>
											</div>
										</div>
										<div class="ribben">
											<p>AVG</p>
										</div>
									</div>
									<div class="col-md-2 w3l-movie-gride-agile">
										<a href="index1.php" class="hvr-shutter-out-horizontal"><img src="images/rsz_na5.jpg" title="album-name" class="img-responsive" alt=" " />
											<div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
										</a>
										<div class="mid-1 agileits_w3layouts_mid_1_home">
											<div class="w3l-movie-text">
												<h6><a href="index1.php">J5</a></h6>							
											</div>
											<div class="mid-2 agile_mid_2_home">
												<p>₹10,390</p>
												<div class="block-stars">
													<ul class="w3l-ratings">
														<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
														<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
														<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
														<li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
														<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
													</ul>
												</div>
												<div class="clearfix"></div>
											</div>
										</div>
										<div class="ribben">
											<p>OLD</p>
										</div>
									</div>
									<div class="clearfix"> </div>
								</div>
							</div>
						</li>
						<li>
							<div class="agile_tv_series_grid">
								<div class="col-md-6 agile_tv_series_grid_left">
									<div class="w3ls_market_video_grid1">
										<img src="images/na17.jpg" alt=" " class="img-responsive" />
										<a class="w3_play_icon2" href="#small-dialog2">
											<span class="glyphicon glyphicon-play-circle" aria-hidden="true"></span>
										</a>
									</div>
								</div>
								<div class="col-md-6 agile_tv_series_grid_right">
									<p class="fexi_header">One Plus Three</p>
									<p class="fexi_header_para"><span class="conjuring_w3">Description<label>:</label></span> The OnePlus 3 is powered by 1.6GHz quad-core Qualcomm Snapdragon 820 processor and it comes with 6GB of RAM. The phone packs 64GB of internal storage cannot be expanded. As far as the cameras are concerned, the OnePlus 3 packs a 16-megapixel primary camera on the rear and a 8-megapixel front shooter for selfies. </p>
									<p class="fexi_header_para"><span>Date of Release<label>:</label></span> June, 2016 </p>
									<p class="fexi_header_para">
										<span>Category<label>:</label> </span>
										<a>Gaming</a> | 
										<a>Multi Tasking</a>|	
										<a>High Performance</a>	
									</p>
									<p class="fexi_header_para fexi_header_para1"><span>Star Rating<label>:</label></span>
										<a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
										<a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
										<a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
										<a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
										<a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
									</p>
								</div>
								<div class="clearfix"> </div>
								<div class="agileinfo_flexislider_grids">
									<div class="col-md-2 w3l-movie-gride-agile">
										<a href="index1.php" class="hvr-shutter-out-horizontal"><img src="images/rsz_na6.jpg" title="album-name" class="img-responsive" alt=" " />
											<div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
										</a>
										<div class="mid-1 agileits_w3layouts_mid_1_home">
											<div class="w3l-movie-text">
												<h6><a href="index1.php">J7</a></h6>							
											</div>
											<div class="mid-2 agile_mid_2_home">
												<p>₹12,964</p>
												<div class="block-stars">
													<ul class="w3l-ratings">
														<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
														<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
														<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
														<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
														<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
													</ul>
												</div>
												<div class="clearfix"></div>
											</div>
										</div>
										<div class="ribben">
											<p>OLD</p>
										</div>
									</div>
									<div class="col-md-2 w3l-movie-gride-agile">
										<a href="index1.php" class="hvr-shutter-out-horizontal"><img src="images/rsz_na7.jpg" title="album-name" class="img-responsive" alt=" " />
											<div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
										</a>
										<div class="mid-1 agileits_w3layouts_mid_1_home">
											<div class="w3l-movie-text">
												<h6><a href="index1.php">Mi5</a></h6>							
											</div>
											<div class="mid-2 agile_mid_2_home">
												<p>₹19,999</p>
												<div class="block-stars">
													<ul class="w3l-ratings">
														<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
														<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
														<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
														<li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
														<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
													</ul>
												</div>
												<div class="clearfix"></div>
											</div>
										</div>
										<div class="ribben">
											<p>NEW</p>
										</div>
									</div>
									<div class="col-md-2 w3l-movie-gride-agile">
										<a href="index1.php" class="hvr-shutter-out-horizontal"><img src="images/rsz_na1.jpg" title="album-name" class="img-responsive" alt=" " />
											<div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
										</a>
										<div class="mid-1 agileits_w3layouts_mid_1_home">
											<div class="w3l-movie-text">
												<h6><a href="index1.php">Honor 8</a></h6>							
											</div>
											<div class="mid-2 agile_mid_2_home">
												<p>₹29,999</p>
												<div class="block-stars">
													<ul class="w3l-ratings">
														<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
														<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
														<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
														<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
														<li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
													</ul>
												</div>
												<div class="clearfix"></div>
											</div>
										</div>
										<div class="ribben">
											<p>NEW</p>
										</div>
									</div>
									<div class="col-md-2 w3l-movie-gride-agile">
										<a href="index1.php" class="hvr-shutter-out-horizontal"><img src="images/rsz_na8.jpg" title="album-name" class="img-responsive" alt=" " />
											<div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
										</a>
										<div class="mid-1 agileits_w3layouts_mid_1_home">
											<div class="w3l-movie-text">
												<h6><a href="index1.php">Mi Note 3</a></h6>							
											</div>
											<div class="mid-2 agile_mid_2_home">
												<p>₹10,999</p>
												<div class="block-stars">
													<ul class="w3l-ratings">
														<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
														<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
														<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
														<li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
														<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
													</ul>
												</div>
												<div class="clearfix"></div>
											</div>
										</div>
										<div class="ribben">
											<p>AVG</p>
										</div>
									</div>
									<div class="col-md-2 w3l-movie-gride-agile">
										<a href="index1.php" class="hvr-shutter-out-horizontal"><img src="images/rsz_na9.jpg" title="album-name" class="img-responsive" alt=" " />
											<div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
										</a>
										<div class="mid-1 agileits_w3layouts_mid_1_home">
											<div class="w3l-movie-text">
												<h6><a href="index1.php">P9</a></h6>							
											</div>
											<div class="mid-2 agile_mid_2_home">
												<p>₹39,999</p>
												<div class="block-stars">
													<ul class="w3l-ratings">
														<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
														<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
														<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
														<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
														<li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
													</ul>
												</div>
												<div class="clearfix"></div>
											</div>
										</div>
										<div class="ribben">
											<p>NEW</p>
										</div>
									</div>
									<div class="col-md-2 w3l-movie-gride-agile">
										<a href="index1.phpindex1.php" class="hvr-shutter-out-horizontal"><img src="images/na4.jpg" title="album-name" class="img-responsive" alt=" " />
											<div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
										</a>
										<div class="mid-1 agileits_w3layouts_mid_1_home">
											<div class="w3l-movie-text">
												<h6><a href="index1.php">K4 Note</a></h6>							
											</div>
											<div class="mid-2 agile_mid_2_home">
												<p>₹10,999</p>
												<div class="block-stars">
													<ul class="w3l-ratings">
														<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
														<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
														<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
														<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
														<li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
													</ul>
												</div>
												<div class="clearfix"></div>
											</div>
										</div>
										<div class="ribben">
											<p>AVG</p>
										</div>
									</div>
									<div class="clearfix"> </div>
								</div>
							</div>
						</li>
					</ul>
				</div>
			</section>
			<!-- flexSlider -->
				<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />
				<script defer src="js/jquery.flexslider.js"></script>
				<script type="text/javascript">
				$(window).load(function(){
				  $('.flexslider').flexslider({
					animation: "slide",
					start: function(slider){
					  $('body').removeClass('loading');
					}
				  });
				});
			  </script>
			<!-- //flexSlider -->
		</div>
	</div>
	<!-- pop-up-box -->  
		<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
	<!--//pop-up-box -->
	<div id="small-dialog" class="mfp-hide">
		<iframe src="https://player.vimeo.com/video/187872264?"></iframe>
	</div>
	<div id="small-dialog1" class="mfp-hide">
		<iframe width="640" height="360" src="https://www.youtube.com/embed/Q6dsRpVyyWs" frameborder="0" allowfullscreen></iframe>
	</div>
	<div id="small-dialog2" class="mfp-hide">
		<iframe width="640" height="360" src="https://www.youtube.com/embed/iVoGG_YazjY" frameborder="0" allowfullscreen></iframe>
	</div>
	<script>
		$(document).ready(function() {
		$('.w3_play_icon,.w3_play_icon1,.w3_play_icon2').magnificPopup({
			type: 'inline',
			fixedContentPos: false,
			fixedBgPos: true,
			overflowY: 'auto',
			closeBtnInside: true,
			preloader: false,
			midClick: true,
			removalDelay: 300,
			mainClass: 'my-mfp-zoom-in'
		});
																		
		});
	</script>
<!-- //Latest-tv-series -->
<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="w3ls_footer_grid">
				<div class="col-md-6 w3ls_footer_grid_left">
					<div class="w3ls_footer_grid_left1">
						<h2>Subscribe to us</h2>
						<div class="w3ls_footer_grid_left1_pos">
							<form action="#" method="post">
								<input type="email" name="email" placeholder="Your email..." required="">
								<input type="submit" value="Send">
							</form>
						</div>
					</div>
				</div>
				<div class="col-md-6 w3ls_footer_grid_right">
					<a href="index1.php"><h2>ShopMate<span>Mobiles</span></h2></a>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="col-md-5 w3ls_footer_grid1_left">
				<p>design by: ShopMate Inc.</a></p>
			</div>
			<div class="col-md-7 w3ls_footer_grid1_right">
				<ul>
					<li>
						<a href="index1.php">Mobiles</a>
					</li>
					<li>
						<a href="faq.php">FAQ</a>
					</li>
					<li>
						<a href="contact.php">Contact Us</a>
					</li>
				</ul>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //footer -->
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
<script>
$(document).ready(function(){
    $(".dropdown").hover(            
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
            $(this).toggleClass('open');       
        }
    );
});
</script>
<!-- //Bootstrap Core JavaScript -->
<!-- here stars scrolling icon -->
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
<!-- //here ends scrolling icon -->
</body>
</html>
