<?php
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"network");
?>
<html>
<head>
<title> </title>
<style>
body{
background-image: url("update.jpg");
background-size:100%;
}
.button{
background-color: darkblue;
border: none;
color: white;
padding: 10px 20px;
text-align: center;
text-decoration: none;
display: inline-block;
font-size: 16px;
margin: 4px 2px;
cursor: pointer;
}
</style>
</head>
<body><center>
<form action="" name="" method="post">
<table>
<tr>
<tr><td>Enter old data amount</td>
<td><input type="text" name="t5a"></td>
</tr>
<tr><td>Enter new data amount</td>
<td><input type="text" name="t5b"></td>
</tr>
<tr><td>Enter old call amount</td>
<td><input type="text" name="t6a"></td>
</tr>
<tr><td>Enter new call amount</td>
<td><input type="text" name="t6b"></td>
</tr>
<tr><td>Enter old tv amount</td>
<td><input type="text" name="t7a"></td>
</tr>
<tr><td>Enter new tv amount</td>
<td><input type="text" name="t7b"></td>
</tr>
<tr><td>Enter old wifi amount</td>
<td><input type="text" name="t8a"></td>
</tr>
<tr><td>Enter new wifi amount</td>
<td><input type="text" name="t8b"></td>
</tr>
<tr>
	<td colspan="2" align="center"><input type="submit" class="button" name="sub2" value="Update"></td>
</tr>
</table>
</form></center>
<?php
if(isset($_POST["sub2"]))
{
$up= "UPDATE data_plans SET d_amount='$_POST[t5b]' where d_amount='$_POST[t5a]'";	
$upp= "UPDATE call_plans SET c_amount='$_POST[t6b]' where c_amount='$_POST[t6a]'";
$uup= "UPDATE tv_plans SET t_amount='$_POST[t7b]' where t_amount='$_POST[t7a]'";
$upu= "UPDATE wifi_plans SET w_amount='$_POST[t8b]' where w_amount='$_POST[t8a]'";
mysqli_query($link,$up);
mysqli_query($link,$upp);
mysqli_query($link,$uup);
mysqli_query($link,$upu);
}
?>
</body>
</html>
