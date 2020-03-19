<?php
	session_start();
	

	
?>

<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Sign-Up/Login Form</title>
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
    
    <link rel="stylesheet" href="css/normalize.css">

    
        <link rel="stylesheet" href="css/style.css">

    <style>
	p{
		colour:#red;	
	}
	</style>
    
    
  </head>

  <body>

    <div class="form">
      
      <ul class="tab-group">
		<li class="tab"><a href="#login">Log In</a></li>
        <li class="tab"><a href="#signup">Sign Up</a></li>
       <a href="#signup">
      </ul> 
	  <?php
			$url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
				if(strpos($url,'error=username')!== false){
					
					echo "<p><b>username already exists!</b><p></a>";
				}
				elseif(strpos($url,'error=password')!== false){
					
					echo "<p><b>wrong username or password!</b><p></a>";
				}
		 ?>
      
      <div class="tab-content">
	   <div id="login">   
          <h1>Welcome Back!</h1>
          
			
			<form action="inc/login.php" method="post">
          
            <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email"required name="uid" autocomplete="off"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Password<span class="req">*</span>
            </label>
            <input type="password"required name="pwd" autocomplete="off"/>
          </div>
		  
			
          
          <p class="forgot"><a href="recovery.php">Forgot Password?</a></p>
          
          <button class="button button-block"/>Log In</button>
          
          </form>
		
		 
        </div>
        <div id="signup">   
          <h1>Sign Up for Free</h1>
          
          <form action="inc/signup.php" method="post">
          
          <div class="top-row">
            <div class="field-wrap">
              <label>
                First Name<span class="req">*</span>
              </label>
              <input type="text" name="first" required autocomplete="off" />
            </div>
        
            <div class="field-wrap">
              <label>
                Last Name<span class="req">*</span>
              </label>
              <input type="text" name="last"required autocomplete="off"/>
            </div>
          </div>

          <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email" name="uid" required autocomplete="off"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Set A Password<span class="req">*</span>
            </label>
            <input type="password" name="pwd" required autocomplete="off"/>
          </div>
          
          <button type="submit" class="button button-block"/>Get Started</button>
          
          </form>

        </div>
        
       
        
      </div><!-- tab-content -->
      
</div> <!-- /form -->
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

        <script src="js/index.js"></script>

    

    
  </body>
</html>
