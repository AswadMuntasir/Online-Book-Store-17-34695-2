<!DOCTYPE html>
<html>
<head>
	<title>Nobel</title>
</head>
<body>
	<h1><a href="/home">Home</a></h1>
	<br>
	<br>
	<center>
		<tr>
			<th>id</th>
			<th>name</th>
			<th>categories</th>
			<th>Price</th>
			<th>Details</th>
			<th>Cart</th>
		</tr>
		@foreach($novel as $value)
		<tr>
			<td>{{$value['id']}}</td>
			<td>{{$value['name']}}</td>
			<td>{{$value['categories']}}</td>
			<td>{{$value['price']}}</td>
			<td>
				<a href="{{route('home.categories.details', $value['id'])}}">Details</a>
			</td>
			<td>
				<a href="{{route('home.cart', $value['id'])}}">Add to cart</a>
			</td>
		</tr>
		@endforeach
</table>
				
	</center>
</body>
</html>