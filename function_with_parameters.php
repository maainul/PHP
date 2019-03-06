<!DOCTYPE html>
<html>
<head>
	<title>PHP function with parameters </title>
</head>
<body>
	<?php
		/*declearing  a function */
		function addition($num1,$num2){
			$sum = $num1 + $num2;
			echo "addition: $sum<br/>";
		}
		function subtraction($num1,$num2){
			$sub = $num1 - $num2;
			echo "subtraction:$sub";
		}
		/* calling funcion */
		addition(4,5);
		subtraction(13,3);
	?>
</body>
</html>