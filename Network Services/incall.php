   <?php
	
	$cal=$_POST['name'];
	$na=filter_input(INPUT_POST, 'nam');
	$amt=filter_input(INPUT_POST, 'namee');
	$phno=filter_input(INPUT_POST, 'ph');
    /* Attempt MySQL server connection. Assuming you are running MySQL

    server with default setting (user 'root' with no password) */

    $link = mysqli_connect("localhost", "root", "", "network");

     

    // Check connection

    if($link === false){

        die("ERROR: Could not connect. " . mysqli_connect_error());

    }

    // Attempt insert query execution
if(@$_POST['subm']){
	
	
    $sql = "INSERT INTO subscriptions (plan_id,Username,amount,phone) VALUES ('$cal','$na','$amt','$phno')";
	
    if(mysqli_query($link, $sql)){
 echo "<script>alert('Records inserted successfully')</script>";
        
		echo "<script>window.open('pay.php','_self')</script>"; 

    } else{

        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

    }
	

}

    // Close connection

    mysqli_close($link);

    ?>

