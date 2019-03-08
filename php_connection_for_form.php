<!DOCTYPE html>
<html>
<body>

<form action="" method="post">
  <fieldset>
    <legend>Personal information:</legend>
    First name:<br>
    <input type="text" name="firstname">
    <br>
    Last name:<br>
    <input type="text" name="lastname">
    <br><br>
   <input type="submit" value=" Submit " name="submit"/><br />
  </fieldset>
</form>

<?php

if(isset($_POST["submit"])){
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "testdb";

// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO userinfo (firstname, lastname)
	VALUES ('".$_POST["firstname"]."','".$_POST["lastname"]."')";

if ($conn->query($sql) === TRUE) {
echo "<script type= 'text/javascript'>alert('New record created successfully');</script>";
} else {
echo "<script type= 'text/javascript'>alert('Error: " . $sql . "<br>" . $conn->error."');</script>";
}

$conn->close();
}

?>

</body>
</html>
