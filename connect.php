<?php

$name=$_POST['name'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$message=$_POST['message'];



$conn = new mysqli('localhost','root','','test1');

if($conn->connect_error)
{
	die('Connection failed: '.$conn->connect_error);

}

else {
	$stmt=$conn->prepare("Insert into registration(name,phone,email,message)
	values(?,?,?,?)");
	$stmt->bind_param("siss",$name,$phone,$email,$message);
	$stmt->execute();
	echo"Registration successful";
	$stmt->close();
}




















?>

