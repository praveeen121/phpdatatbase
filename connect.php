<?php
$mysql_host='localhost';
$mysql_user='root';
$mysql_password='';
$con=mysqli_connect($mysql_host,$mysql_user,$mysql_password);
if(!@mysqli_connect($mysql_host,$mysql_user,$mysql_password)){
	die('cannot connect to database');
}
else{
	
if(mysqli_select_db($con,'student')){
	echo 'connection success'.'<br>';
}
else {
	echo 'cannot connect to the database ';
}
}

?>