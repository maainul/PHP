<?php

$cars = array("Vari","BMW","Toyota");
echo count($cars);
echo "<br/>";
$arrlength = count($cars);

for($x=0;$x<$arrlength;$x++){
	echo $cars[$x];
	echo "<br/>";
}

?>