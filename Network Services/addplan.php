<?php
$con = mysqli_connect("localhost","root","","network");
if (!$con)
  {
  die('Could not connect: ' . mysqli_error());
  }
if(@$_POST['Submit']){
	
$sql= "INSERT INTO data_plans(d_amount,d_description,d_name)VALUES('$_POST[name1]','$_POST[dis1]','$_POST[nam]')";
$sq= "INSERT INTO call_plans(c_amount,c_description,c_name) VALUES ('$_POST[name2]','$_POST[dis2]','$_POST[nam1]')";
$sqll= "INSERT INTO tv_plans(t_amount,t_description,t_name) VALUES ('$_POST[name3]','$_POST[dis3]','$_POST[nam2]')";
$sqs= "INSERT INTO wifi_plans(w_amount,w_description,w_name) VALUES ('$_POST[name4]','$_POST[dis4]','$_POST[nam3]')";
}
if ((!mysqli_query($con,$sql)) ||(!mysqli_query($con,$sq)) ||(!mysqli_query($con,$sqll))||(!mysqli_query($con,$sqs)))
  {
  die('Error: ' . mysqli_error($con));
  }
  mysqli_close($con);
  header("Location: addPlan.html ");
  exit;
echo "1 record added";
mysqli_close($con);
?> 
