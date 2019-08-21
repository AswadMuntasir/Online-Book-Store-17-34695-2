<!DOCTYPE html>
<html>
<head>
	<title>Hire Freelancers. Make Things Happens | Upwork</title>
	<style>
		.header {
			padding: 10px 16px;
			background: #00000000;
			color: #f1f1f1;
			background-color: #f5f7b9;
		}
		.content {
			padding: 16px;
		}
		.sticky {
			position: fixed;
			top: 0;
			width: 100%;
		}
		.sticky + .content {
			padding-top: 102px;
		}
		.dropbtn {
			background-color: #4caf50;
			color: white;
			padding: 16px;
			font-size: 16px;
			border: none;
		}
		.dropdown {
			position: relative;
			display: inline-block;
		}
		.dropdown-content {
			display: none;
			position: absolute;
			background-color: #f1f1f1;
			min-width: 160px;
			box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
			z-index: 1;
		}
		.dropdown-content a {
			color: black;
			padding: 12px 16px;
			text-decoration: none;
			display: block;
		}
		.dropdown-content a:hover {
			background-color: #ddd;
		}
		.dropdown:hover .dropdown-content {
			display: block;
		}
		.dropdown:hover .dropbtn {
			background-color: #3e8e41;
		}
		* {box-sizing: border-box}
			body {font-family: Verdana, sans-serif; margin:0}
		.mySlides {display: none}
			img {vertical-align: middle;}

		/* Slideshow container */
		.slideshow-container {
			max-width: 700px;
			position: relative;
			margin: auto;
		}

		/* Next & previous buttons */
		.prev, .next {
			cursor: pointer;
			position: absolute;
			top: 50%;
			width: auto;
			padding: 16px;
			margin-top: -22px;
			color: white;
			font-weight: bold;
			font-size: 18px;
			transition: 0.6s ease;
			border-radius: 0 3px 3px 0;
			user-select: none;
		}

		/* Position the "next button" to the right */
		.next {
			right: 0;
			border-radius: 3px 0 0 3px;
		}

		/* On hover, add a black background color with a little bit see-through */
		.prev:hover, .next:hover {
			background-color: rgba(0,0,0,0.8);
		}

		/* Number text (1/3 etc) */
		.numbertext {
			color: #f2f2f2;
			font-size: 12px;
			padding: 8px 12px;
			position: absolute;
			top: 0;
		}

		/* The dots/bullets/indicators */
		.dot {
			cursor: pointer;
			height: 15px;
			width: 15px;
			margin: 0 2px;
			background-color: #bbb;
			border-radius: 50%;
			display: inline-block;
			transition: background-color 0.6s ease;
		}

		.active, .dot:hover {
			background-color: #717171;
		}

		/* Fading animation */
		.fade {
			-webkit-animation-name: fade;
			-webkit-animation-duration: 1.5s;
			animation-name: fade;
			animation-duration: 1.5s;
		}

		@-webkit-keyframes fade {
			from {opacity: .4} 
			to {opacity: 1}
		}

		@keyframes fade {
			from {opacity: .4} 
			to {opacity: 1}
		}

		/* On smaller screens, decrease text size */
		@media only screen and (max-width: 300px) {
			.prev, .next,.text {font-size: 11px}
		}

		body {
			margin: 0;
			background-color: #f1f1f1;
			font-family: Arial, Helvetica, sans-serif;
		}

		#navbar {
			background-color: #333;
			position: fixed;
			top: 105px;
			width: 100%;
			display: block;
			transition: top 0.3s;
		}

		#navbar a {
			float: left;
			display: block;
			color: #f2f2f2;
			text-align: center;
			padding: 15px;
			text-decoration: none;
			font-size: 17px;
		}

		#navbar a:hover {
			background-color: #ddd;
			color: black;
		}
		.button {
			background-color: #4CAF50; /* Green */
			border: none;
			color: white;
			padding: 15px 32px;
			text-align: center;
			text-decoration: none;
			display: inline-block;
			font-size: 16px;
		}

		.button_big {
			background-color: #ffffff; /* Green */
			border: none;
			color: black;
			height: 150px;
			width: 250px;
			padding: 15px 32px;
			text-align: bottom;
			text-decoration: none;
			display: inline-block;
			font-size: 16px;
		}
		.button5 {border-radius: 50%;}

		* {
			box-sizing: border-box;
		}

		.box {
			float: left;
			width: 25%;
			padding: 50px;
		}

		.clearfix::after {
			content: "";
			clear: both;
			display: table;
		}
		a {
			color: green;
		}
		.last_div {
			padding: 30px 15px;
		}
		.footer {
			padding: 30px 30px;
			background-color: #2a2854;
			width: 100%;
			height: 550px;
			color: white;
		}
		.al {
			color: white;
		}
	</style>
</head>
<body>
	<h1><a href="/home">Home</a>
	 &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
	 &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
	 &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
	 <a href="/home/login">Login</a></h1>
	<br><br>
	<table align="center" width="85%" border="1">
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Categories</th>
			<th>Price</th>
			<th>Author</th>
			<th>Purchase</th>
		</tr>
		@foreach($books as $value)
		<tr>
			<td>{{$value['id']}}</td>
			<td>{{$value['name']}}</td>
			<td>{{$value['categories']}}</td>
			<td>{{$value['Price']}}</td>
			<td>{{$value['Author']}}</td>
			<td></a href="register/Registration">Add to cart</a></td>
		</tr>
		@endforeach
	</table>
	<br><br><br>
	<a href="/home/allbooks">Search All books</a>
</body>
</html>