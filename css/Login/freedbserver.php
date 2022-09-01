<?php

$freedbserver = mysqli_connect("localhost","root","","FreeRegistrationdb");

if(!$freedbserver)
{	
	echo "Database connection faild...";
}
?>