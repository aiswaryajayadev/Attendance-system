<?php
include "z_db.php";


$rollno=$_GET['rn'];
$quer="DELETE FROM STUDENT WHERE ROLLNO='$rollno'";

$data=mysqli_query($con,$quer);
if($data)
{
	header('location:delete.php');
	
}
else
{
	echo'error';
}
?>