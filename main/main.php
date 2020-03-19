<?php
 session_start();
 if(isset($_SESSION['first'])){
	 
 }else{
	echo"<p>not set</p>";
	}


?>
<html>
<head>

<style>
body{
	height:100%;
	opacity:0.7;
}
h1{
	color:white;
	background-color: #66ffff;
	text-align: center;
}
#nameheader{
			font-family:Calibri;
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
#mobiles{
	font-family:Calibri;
	color:white;
	background-color: #2b7ce5;
	//background-image:url("mobile.jpg");
	opacity:0.4;
	font-size:50px;
	float: right;
	width:100%;
	height:200px;
	margin-top:0px;

	transition: height 2s;
	
	
}
a:link{
	text-decoration:none;
	color:white;
}
a:visited{
	color:white;
}
a:hover{
	color:black;	
}
#mobiles:hover{
	background-color: #a59f9a;
	background-image: url("m.jpg");
	opacity:1;
	height: 300px;
	font-size: 100px;
	transition: font-size 2s;
	
		
}
#movies{
	font-family:Calibri;
	background-color: #f7aa25;
	//background-image: url("movies.jpg");
	opacity:0.4;
	font-size:50px;
	float: left;
	width: 100%;
	height:200px;
	margin-top:0px;
	transition: height 2s;
}
#movies:hover{
	background-color: #a59f9a;
	background-image: url("m1.jpg");
	opacity:1;
	height: 300px;
	font-size: 100px;
	transition: font-size 2s;
	
}
#travel{
	font-family:Calibri;
	background-color:#4c0e7f;
	//background-image: url("travel1.jpg");
	opacity:0.4;
	font-size:50px;
	width:100%;
	height:200px;
	float:left;
	transition: height 2s;
}
#travel:hover{
	background-color: #a59f9a;
	background-image: url("travel.jpg");
	opacity:1;
	height: 300px;
	font-size: 100px;
	transition: font-size 2s;
}


</style>

</head>
<body>
 <?php
		echo '<div id="logo"><a href="main.php"><img src=logo.png height=100px width=200px></a></div><div id = "nameheader" ><h4>Welcome '.$_SESSION['first'].'!!<br><form action="inc/logout.php" method="post"><a href="../index.php">logout<a></form></div></h4>';
	?>	
 	

<div id="mobiles">
<a href="../web/index1.php"><p>mobiles</p></a>
</div>
<div id="movies">
<a href="../movies/index.php"><p>movies<br></p></a>
</div>
<div id="travel">
<a href="../travel/index.php"><p>travel<br></p></a>
</div>




</body>

</html>
