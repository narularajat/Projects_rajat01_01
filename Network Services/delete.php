<?php
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"network");
?>
<html>
<head>
<title> </title>
<style>
body{
background-image: url("delete.jpg");
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
    <tr><td>Enter data amount</td>
	<td><input type="text" name="t1"></td>
	</tr>
	<tr><td>Enter call amount</td>
	<td><input type="text" name="t2"></td>
	</tr>
	<tr><td>Enter tv amount</td>
	<td><input type="text" name="t3"></td>
	</tr><br>
     <tr><td>Enter wifi amount</td>
	<td><input type="text" name="t4"></td>
	</tr>
	
	<tr>
	<td colspan="2" align="center"><input type="submit" class="button" name="sub1" value="delete"></td>
</tr>
</table>
</form></center>
<?php
if(isset($_POST["sub1"]))
{
$que= "DELETE FROM data_plans where d_amount='$_POST[t1]'";	
$qu= "DELETE FROM call_plans where c_amount='$_POST[t2]'";
$quee= "DELETE FROM tv_plans where t_amount='$_POST[t3]'";
$quu= "DELETE FROM wifi_plans where w_amount='$_POST[t4]'";
mysqli_query($link,$que);
mysqli_query($link,$qu);
mysqli_query($link,$quee);
mysqli_query($link,$quu);
}
?>

</body>
</html>	
