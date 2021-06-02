<?php
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"network");
?>
<html>
<head>
<title> </title>
<style>
body{
background-image: url("white.jpeg");
background-size:100%;
}
.button{
background-color: black;
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
	<td colspan="2" align="center"><input type="submit" class="button" name="sub3" value="display data"></td>
    <td colspan="2" align="center"><input type="submit" class="button" name="sub4" value="display call"></td>
	<td colspan="2" align="center"><input type="submit" class="button" name="sub5" value="display tv"></td>
	<td colspan="2" align="center"><input type="submit" class="button" name="sub6" value="display wifi"></td>	
</tr>
</table>
</form>
<?php
if(isset($_POST["sub3"]))
{
	$res=mysqli_query($link,"SELECT * FROM data_plans");
	echo "<table border=1>"; 
	echo "<tr>";
	echo "<th>"; echo "d_id"; echo "</th>";
	echo "<th>";  echo "d_name"; echo "</th>";
	echo "<th>"; echo "d_amount"; echo "</th>";
	echo "<th>";  echo "d_description"; echo "</th>";
		echo "</tr>";
	while($row=mysqli_fetch_array($res))
	{
		echo "<tr>";
		echo "<td>"; echo $row["d_id"]; echo "</td>";
		echo "<td>";  echo $row["d_name"]; echo "</td>";
		echo "<td>"; echo $row["d_amount"]; echo "</td>";
		echo "<td>";  echo $row["d_description"]; echo "</td>";
		echo "</tr>";
	}
	echo "</table>";
	mysqli_query($link,'$res');
}
if(isset($_POST["sub4"]))
{
	$res=mysqli_query($link,"SELECT * FROM call_plans");
	echo "<table border=1>"; 
	echo "<tr>";
	echo "<th>"; echo "c_id"; echo "</th>";
	echo "<th>";  echo "c_name"; echo "</th>";
	echo "<th>"; echo "c_amount"; echo "</th>";
	echo "<th>";  echo "c_description"; echo "</th>";
		echo "</tr>";
	while($row=mysqli_fetch_array($res))
	{
		echo "<tr>";
		echo "<td>"; echo $row["c_id"]; echo "</td>";
		echo "<td>";  echo $row["c_name"]; echo "</td>";
		echo "<td>"; echo $row["c_amount"]; echo "</td>";
		echo "<td>";  echo $row["c_description"]; echo "</td>";
		
		echo "</tr>";
	}
	echo "</table>";
	mysqli_query($link,'$res');
}
if(isset($_POST["sub5"]))
{
	$res=mysqli_query($link,"SELECT * FROM tv_plans");
	echo "<table border=1>"; 
	echo "<tr>";
	echo "<th>"; echo "t_id"; echo "</th>";
	echo "<th>";  echo "t_name"; echo "</th>";
	echo "<th>"; echo "t_amount"; echo "</th>";
	echo "<th>";  echo "t_description"; echo "</th>";
		echo "</tr>";
	while($row=mysqli_fetch_array($res))
	{
		echo "<tr>";
		echo "<td>"; echo $row["t_id"]; echo "</td>";
		echo "<td>";  echo $row["t_name"]; echo "</td>";
		echo "<td>"; echo $row["t_amount"]; echo "</td>";
		echo "<td>";  echo $row["t_description"]; echo "</td>";
		echo "</tr>";
	}
	echo "</table>";
	mysqli_query($link,'$res');
}
if(isset($_POST["sub6"]))
{
	$res=mysqli_query($link,"SELECT * FROM wifi_plans");
	echo "<table border=1>"; 
	echo "<tr>";
	echo "<th>"; echo "w_id"; echo "</th>";
	echo "<th>";  echo "w_name"; echo "</th>";
	echo "<th>"; echo "w_amount"; echo "</th>";
	echo "<th>";  echo "w_description"; echo "</th>";
		echo "</tr>";
	while($row=mysqli_fetch_array($res))
	{
		echo "<tr>";
		echo "<td>"; echo $row["w_id"]; echo "</td>";
		echo "<td>";  echo $row["w_name"]; echo "</td>";
		echo "<td>"; echo $row["w_amount"]; echo "</td>";
		echo "<td>";  echo $row["w_description"]; echo "</td>";
		echo "</tr>";
	}
	echo "</table>";
	mysqli_query($link,'$res');
}
?></center>
</body>
</html>
