<?php
 session_start();
 
include 'inc/dbh.php';
$sql = "SELECT * FROM price where name='s7edge'";

$result = $conn->query($sql);
$row = $result->fetch_assoc();
$flipkart = $row['flipkart'];
$snapdeal = $row['snapdeal'];
$amazone = $row['amazone'];
//echo $flipkart;
//echo $snapdeal;
//echo $amazone;
$sql = "SELECT * FROM price ";

$result = $conn->query($sql);
if(!$row = $result->fetch_assoc()){
	echo 'hello';
}else{
	//$_SESSION['id'] = $row['id'];
	$_SESSION['flipkart'] = $flipkart;
	$_SESSION['snapdeal'] = $snapdeal;
	$_SESSION['amazone'] = $amazone;
	
}

 
 if(isset( $_SESSION['snapdeal'])&&isset($_SESSION['first'])){

 }else{
	echo"<p>not set</p>";
	}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>ShopMate an Entertainment| Single </title>
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
<link href="css/medile.css" rel='stylesheet' type='text/css' />
<link href="css/single.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="css/contactstyle.css" type="text/css" media="all" />
<link rel="stylesheet" href="css/faqstyle.css" type="text/css" media="all" />
<!-- news-css -->
<link rel="stylesheet" href="news-css/news.css" type="text/css" media="all" />
<!-- //news-css -->
<!-- list-css -->
<link rel="stylesheet" href="list-css/list.css" type="text/css" media="all" />
<!-- //list-css -->
<!-- font-awesome icons -->
<link rel="stylesheet" href="css/font-awesome.min.css" />
<!-- //font-awesome icons -->
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- //js -->
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
<link href="css/owl.carousel.css" rel="stylesheet" type="text/css" media="all">
<script src="js/owl.carousel.js"></script>
<script>
	$(document).ready(function() { 
		$("#owl-demo").owlCarousel({
	 
		  autoPlay: 3000, //Set AutoPlay to 3 seconds
	 
		  items : 5,
		  itemsDesktop : [640,5],
		  itemsDesktopSmall : [414,4]
	 
		});
	 
	}); 
</script> 
<script src="js/simplePlayer.js"></script>
<script>
	$("document").ready(function() {
		$("#video").simplePlayer();
	});
</script>
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
</head>
	
<body>
<!-- header -->
<?php
		echo '<div id="logo"><a href="../main/main.php"><img src=logo.png height=100px width=200px></a></div><div id = "nameheader" ><h4>Welcome '.$_SESSION['first'].'!!<br><form action="inc/logout.php" method="post"><a href="../index.php">logout<a></form></div></h4>';
	?>
	<div class="header">
		<div class="container">
			<div class="w3layouts_logo">
				<a href="index1.php"><h1>ShopMate<span>Mobiles</span></h1></a>
			</div>
			<div class="w3_search">
				<form action="#" method="post">
					<input type="text" name="Search" placeholder="Search" required="">
					<input type="submit" value="Go">
				</form>
			</div>
			<div class="w3l_sign_in_register">
				<ul>
					<li><i class="fa fa-phone" aria-hidden="true"></i> (+91)7043050607</li>
					
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
							<li><a href="list.html">Travelling</a></li>
						</ul>
					</nav>
				</div>
			</nav>	
		</div>
	</div>
<!-- //nav -->
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
<!-- single -->
<div class="single-page-agile-main">
<div class="container">
		<!-- /w3l-medile-movies-grids -->
			<div class="agileits-single-top">
				<ol class="breadcrumb">
				  <li><a href="index1.php">Home</a></li>
				  <li class="active">Single</li>
				</ol>
			</div>
			<div class="single-page-agile-info">
                   <!-- /movie-browse-agile -->
                           <div class="show-top-grids-w3lagile">
				<div class="col-sm-8 single-left">
					<div class="song">
						<div class="song-info">
							<h3>S7 Edge First Look</h3>	
					</div>
						<div class="video-grid-single-page-agileits">
							<div data-video="cyohHyQl-kc" id="video"> <img src="images/s7edge.jpg" alt="" class="img-responsive" /> </div>
						</div>
					</div>
					<div class="song-grid-right">
						<div class="share">
							<h5>Share this</h5>
							<div class="single-agile-shar-buttons">
							<ul>
								<li>
									<div class="fb-like" data-href="https://www.facebook.com/w3layouts" data-layout="button_count" data-action="like" data-size="small" data-show-faces="false" data-share="false"></div>
									<script>(function(d, s, id) {
									  var js, fjs = d.getElementsByTagName(s)[0];
									  if (d.getElementById(id)) return;
									  js = d.createElement(s); js.id = id;
									  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.7";
									  fjs.parentNode.insertBefore(js, fjs);
									}(document, 'script', 'facebook-jssdk'));</script>
								</li>
								<li>
									<div class="fb-share-button" data-href="https://www.facebook.com/w3layouts" data-layout="button_count" data-size="small" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fwww.facebook.com%2Fw3layouts&amp;src=sdkpreparse">Share</a></div>
								</li>
								<li class="news-twitter">
									<a href="https://twitter.com/shopmate" class="twitter-follow-button" data-show-count="false">Follow @shopmate</a><script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
								</li>
								<li>
									<a href="https://twitter.com/intent/tweet?screen_name=shopmate" class="twitter-mention-button" data-show-count="false">Tweet to @shopmate</a><script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
								</li>
								<li>
									<!-- Place this tag where you want the +1 button to render. -->
									<div class="g-plusone" data-size="medium"></div>

									<!-- Place this tag after the last +1 button tag. -->
									<script type="text/javascript">
									  (function() {
										var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
										po.src = 'https://apis.google.com/js/platform.js';
										var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
									  })();
									</script>
								</li>
							</ul>
						</div>
						</div>
					</div>
					<div class="clearfix">
					<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
							<script>
							$(document).ready(function(){
							$("#flip").click(function(){
							$("#panel").slideToggle("slow");
							});
							});
							
							
							
							$(document).ready(function(){
							$("#flip1").click(function(){
							$("#panel").slideToggle("slow");
							});
							});
							</script>

							<style>
							#panel, #flip {
								
								padding: 10px;
								
								background-color: #FF8D1B;
								border: solid 1px black;
							}

							#panel {
								padding: 10px;
								display: none;
							}
							#panel1, #flip1 {
								
								padding: 10px;
								
								background-color: #FF8D1B;
								border: solid 1px black;
							}

							#panel1 {
								padding: 10px;
								display: none;
							}
							div.price{
								
								height:160px;
								text-align:right;
								padding:20px;
								border:solid 1px;
								background-color:white;
								margin:10px;
								display:inline;
								
							
							}
							
							</style>
							
							
							
							<div id="flip">Click to get best deal !!</div>
							
								<div id="panel">
								
								
								<?php
									
									echo '<div class="price"><img src="images/flipkart.jpg" width=100px height=50px></img>     Rs.'.$_SESSION['flipkart'].'/-</div>';
									echo '<div class="price"><img src="images/snapdeal.jpg" width=100px height=50px></img>     Rs.'.$_SESSION['snapdeal'].'/-</div>';
									echo '<div class="price"><img src="images/amazon.jpg" width=100px height=50px></img>       Rs.'.$_SESSION['amazone'].'/-</div>'
									
								?>
									</div>
					</div>

					<div class="all-comments">
						<div class="all-comments-info">
							<a href="#">Comments</a>
							<div class="agile-info-wthree-box">
								<form>
									<input type="text" placeholder="Name" required="">			           					   
									<input type="text" placeholder="Email" required="">
									<input type="text" placeholder="Phone" required="">
									<textarea placeholder="Message" required=""></textarea>
									<input type="submit" value="SEND">
									<div class="clearfix"> </div>
								</form>
							</div>
						</div>
						<div class="media-grids">
							<div class="media">
								<h5>"Rethink what a phone can do" - Intro, Pros/Cons, FAQs</h5>
								<div class="media-left">
									<a href="#">
										<img src="images/user.jpg" title="One movies" alt=" " />
									</a>
								</div>
								<div class="media-body">
									<p>So, it's been more than 2 weeks with GS7E now. The review consist of a summary followed by Pros/Cons and then a small FAQ.

Like every year, I'd watched the Live Release of the new flagship and was amazed and excited with the specifications/features of the same. Plus, the free Gear VR offer made me to make my first pre-order for a mobile. Trust me, this is undoubtedly the best you can get. The following Pros/Cons answers what you probably need to know about it. In addition to the pros, I couldn't resist myself adding few more details about the specs/features:

• PROS:

1) DESIGN - The metallic/glass body of GS7 with its elegant curves makes it damn appealing to the eyes. No images can define its beauty when seen physically. Please get to a Samsung Store to see how beautiful is the new galaxy.

2) DISPLAY: I've always loved Samsung's AMOLED display and this time too with their 2K AMOLED display, you'll fall in love with its color reproduction and sharp images. Being AMOLED, 2K is far more battery efficient than a normal HD LCD display. GS7 display is something that eyes will love for years. You get 5.5 in screen with edge and because of its ergonomical design and less Body-to-Screen Ratio, being a perfect size for viewing, it doesn't feels so large in hands.

3) CAMERA: S6 had the best smartphone camera in the world. So, here comes the Dual Pixel 12 MP camera of the GS7 that'll supress your need for a DSLR. Reviews said it captures more light than what human eye can and being honest, I couldn't believe it before I got my galaxy. And they were absolutely right! They decreased the pixels to 12 MP, increased their size and unlike other smartphone cameras, made 100% pixels to capture light. Have done plenty of low light photography and I tell you, you can't demand and expect more than what GS7 camera is capable of. Selective focus gives you a perfect DSLR level focus/blur effect shot.

4) BATTERY: This is first feature-full android smatphone whose battery has ever impressed me. GS6e had only 2600 mAh battery but you could still have enough juice for a daily use thanks to Samsung's power efficient processor, RAM and display. And here you get more power efficient hardware with a battery capacity of 3600 mAh for edge. It never came below 30% after using it throughout the day (gaming, photography, chatting, 4G + WiFi, music/videos). Also, charging it is like a treat to your eyes when you see getting it from 50-100 in no more than half an hour. It's incredibly fast not missing that edge's battery capacity is of 3.6 Ah!

Camera, Display, Battery and Expandable Storage are on the top of the plenty of stuff I love about GS7.

5) STORAGE: You get 25 GB usable out of 32 GB with this model. I don't care much about the internal memory when I've a 200 GB expandable storage. This was the only thing that stopped me from buying even the 128 GB variant of GS6. 

6) PERFORMANCE: When you get the best CPU, 4GB RAM, Vulkan API and liquid cooling with a smartphone, you not need to describe much about performace. Exynos 8890 variant Scores 130k+ on Antutu, 7k+ on Vellamo Browser, 339 ms on Sunspider, 26 / 53 FPS on GFXBench Manhattan ES 3.0 / T-Rex ES 2.0 and 6.3k+ on GB Multi-core. I think this answer all for the geeks out there. 

In simple words, with a PC-like gaming capable hardware of GS7, you'll love the butterly feel of the UI and notice no lags on the most graphics hungry games out there. 


• CONS: 

-- NOTHING -- Please, anyone?

• FAQ:

1) Why did I choose edge variant?

- Initially, I loved the innovation Samsung had done with the screens but was spectical about getting an edge. Samsung is giving more battery and bigger screen size with the edge variant. 

Coming to the design, the screen is only slightly bent about edges that instead of feeling weird, feels more elegant. Once you get an edge, you'll see other displays as of older generations. Edge gives illusion of the screen popping out a bit and images/videos feel more real. 

2) What color should one go for?

- Silver Titanium is the most loved one. I wanted a non-distracting color that is best for playing games and watching videos. Since I don't care much about appeal, I feel Black to be more classy and simple yet beautiful. Gold is for the ones who want to stand out of the crowd.

4) Any case protector I use?

- If you want minimal protection, go for Spigen Thin Fit Case (1k). I'm using Spigen Neo Hybrid Premium Bumber Case (1.8k) that has perfect balance between design, protection and bulkiness. It preserves the edge functionality while protecting your camera and screen with few mms of lip protection.


Thanks for reading the review. Please rate it 'helpful' below if it deserves. It took me 4 hours to generate this one. Message or email me for any other queries you'd like to know. I'll add them here too. Have a good day. :)</p>
									<span>Certified Buyer :<a href="#">Paras Lehana </a></span>
								</div>
							</div>
							<div class="media">
								<h5>Excellent phone</h5>
								<div class="media-left">
									<a href="#">
									<img src="images/user.jpg" title="One movies" alt=" " />
									</a>
								</div>
								<div class="media-body">
									<p>It's a beautiful and powerful phone.</p>
									<span>Certified Buyer :<a href="#">Prashantth S </a></span>
								</div>
							</div>
							<div class="media">
								<h5>Awesome</h5>
								<div class="media-left">
									<a href="#">
									<img src="images/user.jpg" title="One movies" alt=" " />
									</a>
								</div>
								<div class="media-body">
									<p>Feel really sad that I have only 5 stars to give. Flipkart and WSRetail worth 10 stars both atleast</p>
									<span>Certified Buyer :<a href="#">Anindya Mukherjee </a></span>
								</div>
							</div>

						</div>
					</div>
				</div>
				<div class="col-md-4 single-right">
					<h3>Up Next</h3>
					<div class="single-grid-right">
						<div class="single-right-grids">
							<div class="col-md-4 single-right-grid-left">
								<a href="index1.php"><img src="images/na4.jpg" alt="" /></a>
							</div>
							<div class="col-md-8 single-right-grid-right">
								<a href="index1.php" class="title"> K4 Note</a>
								<p class="author">By <a href="#" class="author">Lenovo</a></p>
								<p class="views">114,200 views</p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="single-right-grids">
							<div class="col-md-4 single-right-grid-left">
								<a href="index1.php"><img src="images/na3.jpg" alt="" /></a>
							</div>
							<div class="col-md-8 single-right-grid-right">
								<a href="index1.php" class="title"> Moto G4 Plus</a>
								<p class="author">By <a href="#" class="author">Motorola</a></p>
								<p class="views">114,045 views </p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="single-right-grids">
							<div class="col-md-4 single-right-grid-left">
								<a href="index1.php"><img src="images/na21.jpeg" alt="" /></a>
							</div>
							<div class="col-md-8 single-right-grid-right">
								<a href="index1.php" class="title">Pixel</a>
								<p class="author">By <a href="#" class="author">Google</a></p>
								<p class="views">114,240 views</p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="single-right-grids">
							<div class="col-md-4 single-right-grid-left">
								<a href="index1.php"><img src="images/rsz_na18.jpg" alt="" /></a>
							</div>
							<div class="col-md-8 single-right-grid-right">
								<a href="index1.php" class="title"> iPhone 7</a>
								<p class="author">By <a href="#" class="author">Apple</a></p>
								<p class="views">114,480 views</p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="single-right-grids">
							<div class="col-md-4 single-right-grid-left">
								<a href="index1.php"><img src="images/rsz_na10.jpg" alt="" /></a>
							</div>
							<div class="col-md-8 single-right-grid-right">
								<a href="index1.php" class="title"> A7</a>
								<p class="author">By <a href="#" class="author">Samsung</a></p>
								<p class="views">114,050 views</p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="single-right-grids">
							<div class="col-md-4 single-right-grid-left">
								<a href="index1.php"><img src="images/rsz_na20.jpg" alt="" /></a>
							</div>
							<div class="col-md-8 single-right-grid-right">
								<a href="index1.php" class="title"> Moto Z Play</a>
								<p class="author">By <a href="#" class="author">Motorola</a></p>
								<p class="views">114,085 views</p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="single-right-grids">
							<div class="col-md-4 single-right-grid-left">
								<a href="index1.php"><img src="images/rsz_na19.jpg" alt="" /></a>
							</div>
							<div class="col-md-8 single-right-grid-right">
								<a href="index1.php" class="title">iPhone 6s</a>
								<p class="author">By <a href="#" class="author">Apple</a></p>
								<p class="views">214,200 views</p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="single-right-grids">
							<div class="col-md-4 single-right-grid-left">
								<a href="single.html"><img src="images/rsz_na1.jpg" alt="" /></a>
							</div>
							<div class="col-md-8 single-right-grid-right">
								<a href="index1.php" class="title">Honor 8</a>
								<p class="author">By <a href="#" class="author">Huawei</a></p>
								<p class="views">113,200 views</p>
							</div>
							<div class="clearfix"> </div>
						</div>

					</div>
				</div>
				

				
				<div class="clearfix"> </div>
			</div>
				<!-- //movie-browse-agile -->
				<!--body wrapper start-->
			<div class="w3_agile_banner_bottom_grid">
				<div id="owl-demo" class="owl-carousel owl-theme">
					<div class="item">
						<div class="w3l-movie-gride-agile w3l-movie-gride-agile1">
							<a href="index1.php" class="hvr-shutter-out-horizontal"><img src="images/rsz_na7.jpg" title="album-name" class="img-responsive" alt=" " />
								<div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
							</a>
							<div class="mid-1 agileits_w3layouts_mid_1_home">
								<div class="w3l-movie-text">
									<h6><a href="single.html">Mi 5</a></h6>							
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
					</div>
					<div class="item">
						<div class="w3l-movie-gride-agile w3l-movie-gride-agile1">
							<a href="index1.php" class="hvr-shutter-out-horizontal"><img src="images/rsz_na19.jpg" title="album-name" class="img-responsive" alt=" " />
								<div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
							</a>
							<div class="mid-1 agileits_w3layouts_mid_1_home">
								<div class="w3l-movie-text">
									<h6><a href="single.html">iPhone 6s</a></h6>							
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
					</div>
					<div class="item">
						<div class="w3l-movie-gride-agile w3l-movie-gride-agile1">
							<a href="index1.php" class="hvr-shutter-out-horizontal"><img src="images/rsz_na22.jpg" title="album-name" class="img-responsive" alt=" " />
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
							<a href="index1.php" class="hvr-shutter-out-horizontal"><img src="images/rsz_na9.jpg" title="album-name" class="img-responsive" alt=" " />
								<div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
							</a>
							<div class="mid-1 agileits_w3layouts_mid_1_home">
								<div class="w3l-movie-text">
									<h6><a href="index1.php">P9</a></h6>							
								</div>
								<div class="mid-2 agile_mid_2_home">
									<p>₹36,999</p>
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
					</div>
					<div class="item">
						<div class="w3l-movie-gride-agile w3l-movie-gride-agile1">
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
					</div>
					<div class="item">
						<div class="w3l-movie-gride-agile w3l-movie-gride-agile1">
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
					</div>
					<div class="item">
						<div class="w3l-movie-gride-agile w3l-movie-gride-agile1">
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
					</div>
				</div>
			</div>
		<!--body wrapper end-->
						
							 
				</div>
				<!-- //w3l-latest-movies-grids -->
			</div>	
		</div>
	<!-- //w3l-medile-movies-grids -->
	
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
					<a href="index.html"><h2>ShopMate<span>Mobiles</span></h2></a>
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