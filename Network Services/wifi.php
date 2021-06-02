<?php
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"network");
?>
<html>
<head>
<style>

h1{
  font-size: 30px;
  color: #fff;
  text-transform: uppercase;
  font-weight: 300;
  text-align: center;
  margin-bottom: 15px;
}
table{
  width:100%;
  table-layout: fixed;
}
.tbl-header{
  background-color:#896d93;
 }
.tbl-content{
  height:300px;
  overflow-x:auto;
  margin-top: 0px;
  border: 1px solid rgba(255,255,255,0.3);
}
th{
  padding: 20px 15px;
  text-align: left;
  font-weight: 500;
  font-size: 20px;
  color: #fff;
  text-transform: uppercase;
}
td{
  padding: 15px;
  text-align: left;
  vertical-align:middle;
  font-weight: 300;
  font-size: 20px;
  color: #fff;
  border-bottom: solid 1px rgba(255,255,255,0.1);
}


/* demo styles */

@import url(https://fonts.googleapis.com/css?family=Roboto:400,500,300,700);
body{
  background: -webkit-linear-gradient(left, #bcb3c5, #b295ae);
  background: linear-gradient(to right, #bcb3c5, #b295ae);
  font-family: 'Roboto', sans-serif;
}
section{
  margin: 50px;
}





/* for custom scrollbar for webkit browser*/

::-webkit-scrollbar {
    width: 6px;
} 
::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
} 
::-webkit-scrollbar-thumb {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
}
// '.tbl-content' consumed little space for vertical scrollbar, scrollbar width depend on browser/os/platfrom. Here calculate the scollbar width .
$(window).on("load resize ", function() {
  var scrollWidth = $('.tbl-content').width() - $('.tbl-content table').width();
  $('.tbl-header').css({'padding-right':scrollWidth});
}).resize();

</style>
</head>
<body>
<form action="inwifi.php" method="post">
  <h1>Wifi Plans</h1>
  <table>
<tr>NAME <input type="text" name="nam"></tr>
<tr>PHONE_NO<input type="text" name="ph"></tr>
</table>
  <div class="tbl-header">
    <table cellpadding="0" cellspacing="0" border="0">
      <thead>
        <tr>
          <th>Amount</th>
		  <th>confirm</th>
          <th>Description</th>
          </tr>
      </thead>
    </table>
  </div>
  <div class="tbl-content">
    <table cellpadding="0" cellspacing="0" border="0">
		<?php
		$query="SELECT * FROM wifi_plans ORDER BY w_id asc";
		$result=mysqli_query($link,$query);
		if(mysqli_num_rows($result)>0)
		{
		while($row=mysqli_fetch_array($result))
		{
		?>
      <tbody>
        <tr>
          <td><input type="radio" name="name" value="<?php echo $row["w_id"];?>"><?php echo $row["w_amount"];?></td></td>
		  <td><input type="radio" name="namee" value="<?php echo $row["w_amount"];?>"></td>
          <td><?php echo $row["w_description"];?> </td>
          
        </tr>

        <?php
		}
		}
		?>
      </tbody>

	
	
	</table>
	
  </div>
  <center> <input type="submit" name="subm" value="submit"></center></td></tr>
  


</form>
</body>
</html>











