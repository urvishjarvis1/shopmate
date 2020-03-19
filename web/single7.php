<?php
 session_start();
 
include 'inc/dbh.php';
$sql = "SELECT * FROM price where name='nexus5x'";

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
							<h3>Nexus 5x First Look</h3>	
					</div>
						<div class="video-grid-single-page-agileits">
							<div data-video="QLqHZLdt_jE" id="video"> <img src="images/lg-nexus-5x-3.jpg" alt="" class="img-responsive" /> </div>
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
							
							
							
							<div id="flip">Click to get best deal!!</div>
							
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
								<h5>Nexus 5x vs Nexus 6P: Guide to choose right mobile</h5>
								<div class="media-left">
									<a href="#">
										<img src="images/user.jpg" title="One movies" alt=" " />
									</a>
								</div>
								<div class="media-body">
									<p>I bought Nexus 5x from eBay as it was selling cheaper during diwali offer.This review is for those who are confused to choose between Nexus 5x and 6P.
Earlier i have used Nexus 5/ Moto X Play/ One Plus Two. But When i started using the Nexus 5x i am completely surprised. The experience is so much amazing that i have decided never to use a non-nexus device in future.
1. Camera: If you are a camera lover, (especially low light photography)please buy this phone. This is by far the best camera(both in low light and day light) experience i have. It is better than OP2 and Moto xPlay's 21MP camera.NEXUS 5x and 6P has same camera performance.
2. Fingerprint Scanner(FS): The best/perfect FS out in the market right now. It takes only 6 touch to configure and works every time. So it is better than OP2 which is good but not as fast as Nexus 5x. NEXUS 5x and 6PP has similar FS experience.
3. Light weight: I do lots of surfing and watch videos. Both OP2 and Moto X play are good mobiles but they are too heavy(with silicon back case applied). After 10 minutes i feel like holding bricks in my hand. But with Nexus 5x i am so happy as it is very lightweight. 5/5 again. NEXUS 6P is much heavier than 5x.
4. Smaller size: Again after using bigger mobiles like OP2 and Moto X Play when i touched Nexus 5x, it was very pleasant experience. 5.2 inch screen is perfect for me. Neither too big not too small for watching videos and surfing. Nexus 6P is again much bigger.
5. Android M and future updates: I am a kind of person who cannot wait for future android updates.With Nexus 5x now i don't have to worry about future updates. Considering the track of Nexus 5(released in 2013 and received updates till 2015), Nexus 5x will receive all android updates till 2017. It means i can use it till late 2018 with updated software all the time.But such a promise cannot be expected from companies like Motorola and One Plus. So NOW I AM TENSION FREE FOR 3 YEARS AS FAR AS UPDATES ARE CONCERNED. NEXUS 5x and 6P both will get same set of updates.
6. Earphone provided with the mobile is very very good. Many times better than what Motorola provides. NEXUS 5x and 6P have similar earphones.
7 Gaming performance: Though i am not a serious gamer but i decided to test its gaming performance. I played games like Asphalt, San Andreas, Mortal Combat. GAMING PERFORMANCE is really good on NEXUS 5x. BUT NEXUS 6P IS MUCH BETTER FOR GAMING. SO GAMERS CHOSE NEXUS 6P.
8. Battery: Now this is a tricky comparison. Nexus 5x has 2700mah which takes around 90 minutes to completely charge itself with usb type c adaptor. for heavy use it lasts 12 hours on average. But my Moto x play which has 3630 mah battery does not have fast charger and with the charger provided it takes around 3 hours to completely charge the mobile and on heavy usage it lasts for 24 hours only. So considering the time it takes to charge the mobile i think Nexus 5x beats Moto x play and OP2(it takes around 150mins to completely charge itself). So unless and untill you do lots of travelling without power banks Nexus 5x battery will not disappoint you. AGAIN NEXUS 6P HAS MUCH BETTER BATTERY. SO IF BATTERY IS YOUR FIRST priority BUY NEXUS 6P.
Some features of Nexus 5x which did not impress me:
1. Single sim: i usually prefer double sim mobiles Except Nexus 5, all the mobiles i use are double sim. But i already have a good secondary mobile like redmi 2 prime at low cost to solve this issue.
2. Usb type c charger: I had to purchase a type c to micro usb adaptor separately.
3. Storage: I would love to have micro sd card slot on Nexus 5x. But as 32 GB model has 25GB free space. So it is not bad. BUT NEXUS 6P HAS 64GB MODEL TOO. IF YOU ARE BUYING NEXUS 5X PLEASE NEVER BUY 16GB MODEL.
4. Plastic back cover: Many people might get disappointed by non-metal finish. SO NEXUS 6P IS THE REAL PREMIUM NEXUS OF 2015.
5. 2GB RAM: In my daily experience i did not feel any lag with 2 GB RAM provided. But considering other manufacturer offer atleast 3GB RAM in 30K price range i think it is a con. 2GB RAM OF NEXUS 5X IS NOT GOOD FOR MULTITASKING. WE GET ONLY 600-700MB FREE OUT OF 2GB.
NEXUS 6P HAS 3GB RAM.
6. battery: it drains like water. heavy users will not like it. NEXUS 6P IS MUCH BETTER IN TERMS OF BATTERY.
Who should choose Nexus 5x:
1. If you like small screen and light weight mobile.
2. Medium and light users of mobile.
3. Casual gamers.
4. Have power banks or can recharge mobile anytime during the day.
5. Non-geeks.
6. Cannot afford NEXUS 6P.
7. Those who do not do MULTITASKING .
8. WANT TO UPGRADE FROM NEXUS 5 OF 2013.
Who should buy NEXUS 6P:
1. Heavy/power users
2. If you do lots of MULTITASKING.
3. Like phablets and comfortable with heavy weight
4. Better battery requirement.
5. Geeks who want best processor in the market and can afford it.
6. Need more storage like 64GB.</p>
									<span>Certified Buyer :<a href="#">Aditya </a></span>
								</div>
							</div>
							<div class="media">
								<h5>The Younger Nexus. As Good as it gets.</h5>
								<div class="media-left">
									<a href="#">
									<img src="images/user.jpg" title="One movies" alt=" " />
									</a>
								</div>
								<div class="media-body">
									<p>Its been 15 days I've been using this device and mark my words this is of the best devices I have used. 
Prior to this one, I had Moto X (1st Gen) and Moto Droid Turbo.
The Younger Nexus is an worthy successor to the 2013's Nexus 5. Comparing the specs with lot of other flagships, this one shows minimum to no stutter on daily day to day use.
Despite of its 2GB RAM (Which by 2016's standard is 1/2 gig less) it flies through your daily activities and mark it when I say that I've been using this device to its fullest. There are more than 30 downloaded apps with constantly running background services, this one rarely shows any form of lag or stutter. With almost 20+ tabs opened in chrome and 10-12 ongoing background services it never ForceCloseed me.

Below are some of my key findings which might help you judge on weather to spend your money in it or not.

Pros :
1. Pure Android Marshmallow, with guaranteed 2 updates for 2016/2017.
2. Finger Print (Nexus Imprint) reader. Spot on. barely mis-recognized me once or twice.
3. One of the best Camera Sensor both front and back. with super low light image capture. (OIS is missing, but steady hands gives some great results.)
4. Call and reception quality, though we barely judge our smartphones based on these qualities now a days, but here LG had given us, a well balanced earpiece and noise cancellation mics with crystal sound on both ends. 
5. The WiFi, Bluetooth and GPS radios are spot on, I have managed to connect to WiFi with very poor signal strengths. (I was able to connect to my single band router 3 floors away without any issues. same goes to the GPS, found my device within seconds of switching it on.)

The SO-SOs' :

1. The Display, though being a Full HD , I'm not complaining about the clarity or sharpness, but the contrast and Blacks are little off-the-mark. (Both my earlier devices are AMOLED, so judgement are based on that.)
2. The Main speaker (front) is good, but on noisy environments it can be easily over shadowed.
3. The Built quality : Full plastic built, very light , no metal whatsoever. But grippy and less slippery. 
4. The Ambient Light sensor sometimes behaves funny. 
5. USB C cables. Though its the "Future" as they say, but the charging/data syncing cable is USB C - USB C which might be a case if you don't have Type C ports in your Laptop or desktops (Which most of us don't have.)

PS : LG is blessed us a converter (which I didn't expected at all) which can solve most the issues. (data sync can be done using PC normal micro-usb cable but USB OTG with the converter doesn't works.)

CONs :

One and Only 

1. The battery. Being 2700Mah and even with Marshmallows Doze, it fails to live up to a day, of my kind of use (heavy, with LTE mode on and lots of networking and Up-Downloads)

it gave me 3.15hrs of screen on time and died around 1630hrs. Left my charger around 0700hrs.

PS : Little trick if you wanna juice out a little more, Uninstall the Facebook app right now(even with your current device) its a sucker of your battery. 
and turn into 3G/2G radios if you don't need them. (if connected to WiFi). LTE radio is another monster for battery.


Go and buy the 32Gb version, 16Gb sets should die by 2016's standards.</p>
									<span>Certified Buyer :<a href="#">Rohit Mandal </a></span>
								</div>
							</div>
							<div class="media">
								<h5>The last Nexus phone from LG!</h5>
								<div class="media-left">
									<a href="#">
									<img src="images/user.jpg" title="One movies" alt=" " />
									</a>
								</div>
								<div class="media-body">
									<p>I was looking for a phone with zero customization in OS, timely updates and no bloatware. My budget was 30K.

There are 3 choices:
iPhone 5s - I'm not a fan of iOS
Moto X Style - OS upgrades are slower than Nexus
Nexus 5x - the last Nexus device from LG

I went with Nexus 5x 32GB for 30K. Fast delivery by Flipkart and loved the product.

Cons (My view):
* Underpowered compared to its peers like Xiomi or One Plus. (Latest OS and timely upgrades are my priority)
* No dual SIM (I have only one connection)
* No memory expansion (If you keep a check on WhatsApp images and videos, 32GB is enough)
* No FM Radio (This hurts!)

Well, I'm a happy man today!</p>
									<span>Certified Buyer :<a href="#">Flipkart Customer </a></span>
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