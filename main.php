<?php
 session_start();
 if(isset($_SESSION['first'])){
	 
 }else{
	echo"<p>not set</p>";
	}


?>

<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
    
    
        
	<style>
		
		#nameheader{
			width=100%;
			background-color:orange;
			text-align:right;
			
			
		}
    
    </style>
    
  </head>	
  <body>	
 <?php
		echo '<div id = "nameheader" ><h4>welcome '.$_SESSION['first'].'!!</div></h4>';
	?>	
 	
	

    </body>
	</html>
	
	