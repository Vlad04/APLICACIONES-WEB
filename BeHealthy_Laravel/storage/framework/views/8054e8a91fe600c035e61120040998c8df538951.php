<!DOCTYPE html>
<html>
<head>
	<title>Car <?php echo e($car->id); ?></title>
</head>
<body>
	<h1>Car <?php echo e($car->id); ?></h1>
	<ul>
		<li>marca: <?php echo e($car->marca); ?></li>
		<li>modelo: <?php echo e($car->modelo); ?></li>
	</ul>

</body>
</html>