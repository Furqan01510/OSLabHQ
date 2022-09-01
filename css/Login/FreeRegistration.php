<?php
require_once("freedbserver.php");
$username = $email = $password = $pwd = $gender = $city =$country = "";

$username = $_POST["username"];
$email = $_POST["email"]
$pwd = $_POST["passworld2"];
$password = MD5($pwd);
$gender = $_POST["gender"];
$city = $_POST["city"];
$country = $_POST["country"];

$sql = "INSERT INTO freeuser(Usename,Email,Passworld,Gender,City,Country) VALUES ("$usename","$email","$passworld","$gender","$city","$country")";

$result = mysqli_query($freedbserver, $sql);
if($result)
{
	header("Location: freelogin.php")
}
else
{
	echo "Error:" $sql;
}
?>