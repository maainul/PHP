<?php

/*
PHP - Sort Functions For Arrays
In this chapter, we will go through the following PHP array sort functions:

	sort() - sort arrays in ascending order
	rsort() - sort arrays in descending order
	asort() - sort associative arrays in ascending order, according to the value
	ksort() - sort associative arrays in ascending order, according to the key
	arsort() - sort associative arrays in descending order, according to the value
	krsort() - sort associative arrays in descending order, according to the key

*/
 $numbers = array(4,6,4,11,3,55,78);
 sort($numbers);

 $arrlength = count($numbers);
 for($x=0;$x<$arrlength;$x++){
 	echo $numbers[$x];
 	echo "<br/>";
 }
?>
