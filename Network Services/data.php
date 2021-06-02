<?php
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"network");
?>
<html>
<head>
<style>
body {
    background-color: #fff;
    margin: 0;
    padding: 0;
    font-family: 'Oxygen', sans-serif;
    color: #444;
    font-size: 15px;
    line-height: 18px;
    font-weight: 300;
}

header {
    margin: 0;
    background: #000;
    height: 65px;
    padding: 1px;
}

article {
    margin: 40px 30px;
}

h1 {
    font-family: 'Open Sans Condensed', sans-serif;
    letter-spacing: 1px;
    font-size: 2.3em;
    line-height: 44px;
    text-transform: uppercase;
    color: #fff;
    font-weight: 900;
    margin: 0;
    padding: 10px 0 0 30px;
    letter-spacing: 2px;
}

h2 { margin: 20px 0 10px 0;
    font-weight: 900;
}

p {
    margin: 20px 0 5px 0;
}


/* Table Layout */

table.data {
    margin: 20px 0 0 0;
    border-collapse: collapse;
    border-spacing: 0;
    background: #212121;
    color: #fff;
}

table.data th, table.data td {
    text-align: center;
}

table.data thead {
    line-height: 12px;
    background: #2e63e7;
    text-transform: uppercase;
}

table.data thead th {
    color: #fff;
    padding: 10px;
    letter-spacing: 1px;
    vertical-align: bottom;
}

table.data thead th:nth-child(1) {
    width: 20%;
    text-align: left;
    padding-left: 20px;
}

table.data thead th:nth-child(2) {
    width: 30%;
}

table.data thead th:nth-child(3) {
    width: 35%;
}

table.data thead th:nth-child(4) {
    width: 15%;
}

table.data tbody {
    font-size: 1em;
    line-height: 15px;
}

table.data tbody tr {
    border-top: 2px solid rgba(109, 176, 231, 0.8);
    transition: background 0.6s, color 0.6s;
}

table.data tbody tr:nth-child(even) {
    background: rgba(255, 255, 255, 0.2);
}

table.data tbody tr:hover {
    color: #000;
    background: rgba(255, 255, 255, 0.7);
    font-weight: 900;
}

table.data tbody td {
    padding: 12px;
}

table.data tbody tr:hover td:first-child {
    background: rgba(0,0,0,0);
}

table.data tbody td:first-child {
    text-align: left;
    padding-left: 20px;
    font-weight: 700;
    background: rgba(109, 176, 231, 0.35);
    transition: backgrounf 0.6s;
}

table.data tfoot {
    font-size: 0.8em;
}

table.data tfoot tr {
    border-top: 2px solid #2e63e7;
}

table.data tfoot td {
    color: rgba(255,255,215,0.6);
    text-align: left;
    line-height: 15px;
    padding: 15px 20px;
}


/* Mobile Layout */

@media screen and (max-width: 400px) {
    h1 {
        font-size: 34px;
        line-height: 36px;
        padding-left: 15px;
    }

    article {
        margin: 10px 15px;
    }

    table.data {
        font-size: 0.8em;
    }
}
body{
background-image: url("background.jpg");
}
p.blocktext{
margin-left:auto;
margin-right:auto;
width:8em
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

<body>

<form action="indata.php" method="post">
<form action="addplans.php" method="post">
<header><center>
    <h1>DATA PLANS</h1></center>
</header>
<article>
    <h2>OFFERS</h2>
	<table>
          <tr>NAME <input type="text" name="name"></tr>
		  <tr>PHONE_NO<input type="text" name="ph"></tr>
		  </table>
    <table class="data">
        <thead>
            <tr>
                <th>Amount</th>
				<th>Confirm</th>
                <th>Description</th>
            </tr>
        </thead>
		<?php
		$query="SELECT * FROM data_plans ORDER BY d_id asc";
		$result=mysqli_query($link,$query);
		if(mysqli_num_rows($result)>0)
		{
		while($row=mysqli_fetch_array($result))
		{
		?>
        <tfoot>
            <tr>
                <td colspan="8">
                  
               
                </td>
            </tr>
        </tfoot>
        <tbody>
		
            <tr>
                <td><input type="radio" name="nam" value="<?php echo $row["d_id"];?>"><?php echo $row["d_amount"];?></td>
				<td><input type="radio" name="namee" value="<?php echo $row["d_amount"];?>"></td>
                <td><?php echo $row["d_description"];?></td>
            </tr>
            <?php
			}
			}
			?>
			</tbody>
			</table>
			<input type="submit" class="button" name="subb" value="submit">
			</body>
			</html>
			
			
			
