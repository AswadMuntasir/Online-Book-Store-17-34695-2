<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>
</head>
<body>

	<h2>Update Profile</h2>

	<a href="{{route('home.index')}}">Back</a> |
	<a href="/logout">logout</a>

<form method="post">
	@csrf
	<table border="1">
		<tr>
			<td>Name :</td>
			<td><input type="text" name="name" value="{{$value['name']}}" required></td>
		</tr>
		<tr>
			<td>Password :</td>
			<td><input type="password" name="password" value="{{$value['password']}}" required></td>
		</tr>
		<tr>
			<td>Email :</td>
			<td><input type="email" name="email" value="{{$value['email']}}" required></td>
		</tr>
		<tr>
			<td>Address :</td>
			<td><input type="text" name="address" value="{{$value['address']}}" required></td>
		</tr>
		<tr>
			<td>Phone Number :</td>
			<td><input type="text" name="phonenumber" value="{{$value['phonenumber']}}" required></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="Submit" value="Submit" required></td>
		</tr>
</table>
</form>
</body>
</html>