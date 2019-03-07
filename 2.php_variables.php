<?php
/* Declaring PHP variables */

	$txt = "hello world";
	$x = 5;
	$y = 10.5;

/* Output variables */
	echo "I love $txt <br/>";
	echo "I love " .$txt."<br/>";

/* Sum of two variables */
	$x = 5;
	$y = 4;
	echo $x + $y;

/* PHP is a Loosely Typed Language */
/* we did not have to tell PHP which data type the variable is. */
/* PHP automatically converts the variable to the correct data type, depending on its value. */

// PHP has three different variable scopes:

// local
// global
// static
// Global and local scope
// A variable declared outside a function has a GLOBAL SCOPE and can only be accessed outside a function

	$x = 5; // global scope

	function mytest(){
		// using x inside this function will generate an error 
		echo "<p>Variable x inside function is: $x</p>";
	}
	mytest();
	
	echo "<p>Variable is x outside function is : $x</p>";

// A variable declared within a function has a LOCAL SCOPE and can only be accessed within that function
	
	function mytestlocal(){
		$x = 5; //local scope
		echo "<p>Variable x inside fucntion is: $x </p>";
	}
	mytestlocal();
	echo "<p> Variable x outside function is: $x</p>"
	


?>