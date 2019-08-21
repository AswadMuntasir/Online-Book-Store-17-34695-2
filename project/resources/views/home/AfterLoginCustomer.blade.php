<!DOCTYPE html>
<html>
<head>
	<title>Online Book Store</title>
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
	</style>
</head>
<body>
	<div>
		<table>
			<tr>
				<div class="header" id="myHeader">
					<h2>
						<form method="post">
							@csrf
							<a href="/home">Oneline Book Store</a>
							&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
						
							<button class="btn p-0-left-right" type="submit">Submit search</button>
							<input type="text" name="search" placeholder="Search Books" autocomplete="on">
							&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
							<a href="/home/allbooks">See All Books</a>&nbsp &nbsp
							<a href="/home/profile">Profile</a>&nbsp &nbsp
							<a href="/home">Logout</a>&nbsp &nbsp
						</form>
					</h2>
				</div>
				<div>
					<h1>Book Categories</h1>
					<a href="/home/categories/novel">Novel</a> &nbsp &nbsp 
					<a href="/home/categories/literature">Literature</a> &nbsp &nbsp
					<a href="/home/categories/scifi">Sci-Fi</a>
				</div>
			</tr>
		</table>
	</div>
	<script>
		window.onscroll = function() {myFunction()};

		var header = document.getElementById("myHeader");
		var sticky = header.offsetTop;

		function myFunction() {
			if (window.pageYOffset > sticky) {
				header.classList.add("sticky");
			} else {
				header.classList.remove("sticky");
			}
		}
	</script>
</body>
</html>