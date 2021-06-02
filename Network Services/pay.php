<?php
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"network");
?>
<html>
<head>
<style>
.button {
    background-color: #000066; 
    border: none;
    color: white;
    padding: 10px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 15px;
    margin: 4px 2px;
    cursor: pointer;
}


.button4 {border-radius: 08px;}
body{
background-image: url("card.jpg");
background-size:100%;
}

</style>
</head>
<body>
<form action="pay.php" method="post">
<form action="test1.php" method="post">
<header><center><h1><label style="color:white;"> PAYMENT</label></h1></center></header>
<center><label style="color:white;width=100%"><font size="4">
NAME</font></label><input type="text" name="nam" value="">
<input type="submit" button class="button button4" name="sub" value="next">
<table>
<thead>
<tr>
<th><br><br><label style="color:white"><font size="4">PAYMENT METHOD</label></th>
</tr>
</thead>
<tbody>
<tr>
<td><label style="color:white;"><br><input type="radio" name="pay" value="paytm">PAYTM</label></td>
<td><label style="color:white;"><br><input type="radio" name="pay" value="tez">TEZ</label></td>
<td><label style="color:white;"><br><input type="radio" name="pay" value="card">CARD</label></td>
</tr>
<tr<label style="color:white;"><font size="4">ENTER AMOUNT</font><input type="text" name="amt" value=""></label></tr>
<tr><td><center><label style="color:white;"> <br><input type="submit" button class="button button4" name="subm" value="pay"></label></center></td></tr>

</tbody>
</table><br><br><br>
<br>
<center><label style="color:white;"><font size="4">
CLICK HERE TO BROWSE FOR MORE PLANS</font></label> <input type="button" button class="button button4" value="services" onclick="location.href='services.html';"/>
</center>
</body>
</html>
<?php
$type=filter_input(INPUT_POST, 'pay');
$tot=filter_input(INPUT_POST, 'amt');
$na=filter_input(INPUT_POST, 'nam');
if(isset($_POST["sub"]))
{    
	$sql="SELECT sum(amount) AS total_amt FROM subscriptions WHERE Username='$na'" ;
	$result=$link->query($sql);
	if($result->num_rows>0)
while($row=$result->fetch_assoc()){
	echo "total amount is -". $row["total_amt"];
	
}

}
if(@$_POST['subm']){
	$na=filter_input(INPUT_POST, 'nam');
	$sql = "INSERT INTO bills (U_name,amount,pay_method) VALUES ('$na','$tot','$type')";
	 if(mysqli_query($link, $sql)){

        echo "<script>alert('AMOUNT PAID SUCCESSFULLY.')</script>";
	 }
	 
}

?>

