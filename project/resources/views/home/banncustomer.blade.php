<!DOCTYPE html>
<html>
<head>
	<title>Bann Customer</title>
</head>
<body>
	<h1><a href="/home">Home</a>
	 &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
	 &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
	 &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
	 <a href="/home/logout">Logout</a></h1>
	<br><br>
	<table align="center" width="85%" border="1">
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Password</th>
			<th>Email</th>
			<th>Address</th>
			<th>Status</th>
		</tr>
		@foreach($users as $value)
		<tr>
			<td>{{$value['id']}}</td>
			<td>{{$value['name']}}</td>
			<td>{{$value['password']}}</td>
			<td>{{$value['email']}}</td>
			<td>{{$value['address']}}</td>
			<td></a href="{{home.banncustomerA}}">Add to cart</a></td>
		</tr>
		@endforeach
	</table>
	<br><br><br>
	<a href="/home/allbooks">Search All books</a>
</body>
</html>