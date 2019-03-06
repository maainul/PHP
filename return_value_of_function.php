<!DOCTYPE html>
<html>
<head>
	<title>Writing  a  php file that return value</title>
</head>
<body>
	<?php
		function addFunction($num1,$num2) {
			$sum = $num1 + $num2;
			return $sum;

		}

		$return_value = addFunction(10,20);
		echo "return value form the function : $return_value";
	?>
</body>
</html>