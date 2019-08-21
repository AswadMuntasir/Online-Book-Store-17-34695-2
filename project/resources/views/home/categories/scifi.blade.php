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
		<div class="container box">
			<h3 align="center"></h3><br />
				<div class="panel panel-default">
					<div class="panel-heading"></div>
						<div class="panel-body">
							<div class="table-responsive">
							<table class="table table-striped table-bordered">
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
					</div>
				</div>
			</div>
		</div>
	</center>
</body>
</html>