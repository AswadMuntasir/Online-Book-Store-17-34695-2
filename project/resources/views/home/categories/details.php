<!DOCTYPE html>
<html>
<head>
	<title>Sci-Fi</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<h1><a href="/home">Home</a></h1>
	<br>
	<br>
	<center>
		<table>
			<tr>
				<th>ID :</th>
				<th>{{$value['id']}}</th>
			</tr>
			<tr>
				<th>Name :</th>
				<th>{{$value['Name']}}</th>
			</tr>
			<tr>
				<th>Categories :</th>
				<th>{{$value['categories']}}</th>
			</tr>
			<tr>
				<th>Price :</th>
				<th>{{$value['Price']}}</th>
			</tr>
			<tr>
				<th>Author :</th>
				<th>{{$value['Author']}}</th>
			</tr>
			<tr>
				<th>Description :</th>
				<th>This Book is good.</th>
			</tr>

			<tr><a href="{{route('home.cart', $value['id'])}}">Add to cart</a></tr>
		</table>
</body>
</html>