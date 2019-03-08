<?php

$age = array('Mainul' =>"12",'kaisar'=>"23","joes"=>"34");
asort($age);
foreach ($age as $x => $x_value) {
	echo "Key=" .$x. ",Value=" .$x_value;
	echo "<br/>";
}



?>