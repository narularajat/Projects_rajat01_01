<?php
session_start();
$username=filter_input(INPUT_POST, 'Email');
$password=filter_input(INPUT_POST,'Password');
if(!empty($username)){
if(!empty($password)){
$host="localhost";
$dbusername="root";
$dbpassword="";
$dbname="network";
$con=new mysqli($host,$dbusername,$dbpassword,$dbname);
if(mysqli_connect_error()){
die('Connect Error('. mysqli_connect_errno().')' .mysqli_connect_error());

}
else{
$sql="INSERT INTO users(Username,Password) 
values('$username','$password')"; 

if($con->query($sql)){
echo "<script>alert('Registration successfull')</script>";
echo "<script>window.open('home.html','_self')</script>";  
	
}
else{
echo "Error: " .$sql ."<br>".$con->error;
}
$con->close();
}
}
else
{
echo "password should not be empty";
die();
}
}else
{
echo "username should not be empty";
die();}
