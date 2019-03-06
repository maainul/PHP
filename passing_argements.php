<!DOCTYPE html>
<html>
<head>
	<title>Passing argument by reference</title>
</head>
<body>
	<?php

		function addFive($num){
			$num +=5;
		}

		function addSix(&$num){
			$num +=6;
		}

		$orignum = 10;
		addFive($orignum);
		echo "original value is $orignum<br/>";

		addSix($orignum);
		echo "original value is $orignum";

	?>
</body>
</html>