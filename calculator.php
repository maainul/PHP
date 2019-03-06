<!DOCTYPE html>
<html>
<head>
	<title>This is calculator using php</title>
</head>
<body>

	<?php
	/* Declearing a function */
		function add(){
			$a = 10;
	        $b = 20;
	        $c = $a + $b;
	        echo "Addition: $c<br/>";
		}
	/* Declearing sub function */
		function sub(){
			$a = 30;
			$b = 20;
			$c = $a - $b;
			echo "Subtraction: $c<br/>";
		}
	/* Declearing a mul function */
		function mul(){
			$a = 30;
			$b = 20;
			$c = $a * $b;
			echo "Multiplication: $c"; 
		}
	/* Function calling */
		add();
		sub();
		mul()
	?>

</body>
</html>