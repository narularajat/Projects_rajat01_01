<?php  
  session_start();
$link = mysqli_connect("localhost", "root", "");
$selectdb = mysqli_select_db($link,'network');
 
  

  
if(isset($_POST['submit']))  
{  
    $user_name=$_POST['name'];  
    $user_pass=$_POST['pass'];  
  
    $check_user="select * from users WHERE Username='$user_name'AND Password='$user_pass'";  
  
    $run=mysqli_query($link,$check_user);  
  
    if(mysqli_num_rows($run))  
    {  
        
  
        $_SESSION['user_name']=$user_name;//here session is used and value of $user_email store in $_SESSION.
        echo "<script>window.open('services.html','_self')</script>";  		
  
    }  
    else  
    {  
      echo "<script>alert('username or password is incorrect!')</script>";  
	//  echo"<script>window.open('staff.html','_self')</script>";
    }  
}  
?>
