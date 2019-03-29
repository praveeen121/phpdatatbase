<?php
require 'connect.php';
$query= "select * from user_info";
if($is_query_run=mysqli_query($con,$query))
{
	echo "query executed".'<br>';
	while($query_execute=mysqli_fetch_assoc($is_query_run)){
		echo '<table><tr><td>'.$query_execute['Name'].'</td><td>'.$query_execute['Surname'].'</td></tr></table>';
		//echo $query_execute['Name'].'<br>';
		
	}
}
else
	echo 'query not executed';
 
?>