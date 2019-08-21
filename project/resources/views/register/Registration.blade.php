<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Registration</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<style>
		body {
    	font: 30px Montserrat, sans-serif;
	    line-height: 1.8;
    	color: #000033;
  		}
		p {font-size: 16px;}
  		.margin {margin-bottom: 30px;;}
		
		.error {color: #FF0000;}
		
		.bg-1 { 
    	background-color: #f5f7b9; /* Offwhite */
    	color: #ffffff;
  		}

  		.navbar {
    	padding-top: 15px;
    	padding-bottom: 15px;
    	border: 0;
    	border-radius: 0;
    	margin-bottom: 0;
    	font-size: 12px;
    	letter-spacing: 5px;
  		}
		
		.navbar-nav  li a:hover {
    	color: #1abc9c !important;
 		}
 		
 		hr {
  		border: 1px solid ##000070;
  		margin-bottom: 25px;
  		}

  		* {
  		box-sizing: border-box;
		}

		input[name=name], input[name=password], input[name=email], input[name=phonenumber], input[name=address], input[name=type] {
  		width: 50%;
  		padding: 15px;
  		margin: 5px 0 22px 0;
  		display: inline-block;
  		border: none;
  		background: #f1f1f1;
		}

		input[name=name]:focus, input[name=password]:focus, input[name=email]:focus, input[name=phonenumber]:focus, input[name=address]:focus, input[name=type]:focus {
  		background-color: #ddd;
  		outline: none;
		}

  		.registerbtn {
  		background-color: #8c0027;
  		color: white;
  		padding: 16px 20px;
  		margin: 8px 0;
  		border: none;
  		cursor: pointer;
  		width: 50%;
  		opacity: 1;
  		font-size: 30px;
		}

  		.registerbtn:hover {
  		opacity: 1;
		}

  		a {
  		color: dodgerblue;
		}

  		.signin {
  		background-color: #f1f1f1;
  		text-align: center;
		}
  		

		.tooltip 
		{
			position: relative;
			display: inline-block;
			border-bottom: 1px dotted black;
		}

		.tooltip .tooltiptext 
		{
			visibility: hidden;
			width: 400px;
			background-color: black;
			color: #fff;
			text-align: center;
			border-radius: 6px;
			padding: 5px 0;
			position: absolute;
			z-index: 1;
		}
		.tooltip:hover .tooltiptext
		{
			visibility: visible;
		}
		select { 
			width: 50%;
	  		padding: 15px;
	  		margin: 5px 0 22px 0;
	  		display: inline-block;
	  		border: none;
	  		background: #f1f1f1;
		}

  		</style>
	</head>
	<body style="background-color: #f5f7b9;">
		

		<div class="text-center">
  			<center><h1 class="margin">Sign up Page For Customer</h1>
  			<hr style="width: 50%">
  			<form method="POST">
  				@csrf
	  			<br><label for="name"><b>Name</b></label></br>
		    	<input type="name" placeholder="Name" name="name" id="name" required>

	  			<br><label for="password"><b>Last Name</b></label></br>
	    		<input type="password" placeholder="Password" name="password" id="password" required>

	    		<br><label for="email"><b>Email Address</b></label></br>
		    	<input type="email" placeholder="Work email address" name="email" id="email" required>

		    	<br><label for="phonenumber"><b>Phone Number</b></label></br>
	    		<input type="text" placeholder="Phone Number" name="phonenumber" id="phonenumber" required>

	    		<br><label for="Address"><b>Work email address</b></label></br>
		    	<input type="text" placeholder="Address" name="address" id="address" required>

		    	<br><label for="Type"><b>Type</b></label></br>
		    	<select name="type" id="type">
		    		<option value="customer">Customer</option>
		    		<option value="admin">admin</option>
		    	</select>
	    		
	    		<hr style="width: 50%">

	    		<button type="submit" class="registerbtn">Sign Up</button>

	    		<center>Already have an account? <a href="login/">Log in</a></center>
    		</form>
  			</center>
		</div>

	</body>

</html>