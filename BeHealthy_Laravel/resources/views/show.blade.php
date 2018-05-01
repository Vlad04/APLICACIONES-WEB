<!DOCTYPE html>
<html>
<head>
	<title>Car {{ $car->id }}</title>
</head>
<body>
	<h1>Car {{ $car->id }}</h1>
	<ul>
		<li>marca: {{$car->marca}}</li>
		<li>modelo: {{$car->modelo}}</li>
	</ul>

</body>
</html>