<?php
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
$sql="INSERT INTO admin(Admin_id,Pwd)
values('$username','$password')";
if($con->query($sql)){
echo "New record is inserted successfully";
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
}
{
echo "username should not be empty";
die();}
