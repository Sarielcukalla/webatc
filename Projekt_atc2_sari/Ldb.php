
<?php

$servername="localhost";
$username="root";
$password="";
$dbname="pharmacy";

$conn=new mysqli($servername,$username,$password,$dbname);
if (!$conn) {
	die(mysql_error());
    
}
?>
