<!DOCTYPE html>
<html>
<head>
	<title>Book Edit</title>
</head>
<body>

	<h2>Book Edit</h2>

	<a href="/logout">logout</a>

<form method="post">
	@csrf
	<table border="1" align="center">
		<tr>
			<td>ID</td>
			<td>{{$std['id']}}</td>
		</tr>
		<tr>
			<td>Name</td>
			<td><input type="text" name="name" value="{{$std['name']}}"></td>
		</tr>
		<tr>
			<td>Categories</td>
			<td><input type="text" name="categories" value="{{$std['categories']}}"></td>
		</tr>
		<tr>
			<td>Price</td>
			<td><input type="text" name="price" value="{{$std['price']}}"></td>
		</tr>
		<th>
			
			<td>Author</td>
			<td><input type="text" name="Author" value="{{$std['Author']}}"></td>
		</th>
		<tr>
			<td></td>
			<td><input type="submit" name="Submit" value="Submit"></td>
		</tr>
</table>
</form>
</body>
</html>