<!DOCTYPE html>
<html>
<head>
		<meta charset="utf-8">

		<link href="css1/style.css" rel='stylesheet' type='text/css' />

		<meta name="viewport" content="width=device-width, initial-scale=1">

		<script type="application/x-javascript"> addEventListener("load", function() 
		{ setTimeout(hideURLbar, 0); },
		 false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' 
		rel='stylesheet' type='text.css'/>
		
</head>
 
<body>
	<div class="main">
		<form name="login" action="validatelogin.php" method="POST">
		
    		<h1><span>User  <lable> </lable>Login </span></h1>
  			<div class="inset">
	  			<p>
	    		 <label for="email">USER NAME</label>
   	 			<input type="text" name="username" placeholder="" required/>
				</p>
  				<p>
				    <label for="password">PASSWORD</label>
				    <input type="password" name="password" placeholder="" required/>
  				</p>
				  <p>
				    <input type="checkbox" name="remember" id="remember">
				    <label for="remember">Remember me </label>
				  </p>
 			 </div>
 	 
			  <p class="p-container">
			    <span><a href="#">Forgot password ?</a></span>
			    <input type="submit" name="login" value="Login">
			  </p>
		</form>
	</div>  
</body>
</html>