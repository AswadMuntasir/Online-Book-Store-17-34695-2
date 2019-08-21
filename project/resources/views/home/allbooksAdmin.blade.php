<!DOCTYPE html>
<html>
<head>
	<title>Book list</title>
</head>
<body>
	<center>
		<table align="center" border="1">
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>Categories</th>
				<th>Price</th>
				<th>Author</th>
				<th>Add to cart</th>
			</tr>
			@foreach($novel as $value)
			<tr>
				<td>{{$value['id']}}</td>
				<td>{{$value['name']}}</td>
				<td>{{$value['categories']}}</td>
				<td>{{$value['price']}}</td>
				<td>{{$value['Author']}}</td>
				<td>
					<a href="{{route('home.editallbooks', $value['id'])}}">Edit books</a>
				</td>
			</tr>
			@endforeach
		</table>
	</center>
		<br><br>
		<h1><a href="/home">Home</a></h1>
	</center>
	<br><br>
</body>
</html>