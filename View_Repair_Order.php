<?php
$link = mysqli_connect("localhost", "root", "", "cpsc471db");

if(!$link) {
	die('Unable to connect'. mysqli_error($link));
}

?>



<!DOCTYPE HTML>
<html>
	<head>
                <title>View Parts </title>
                <meta http-equiv="Content-Type" content="text/html; charset=iso=8859-1">
                <link rel="stylesheet" type="text/css" href="style.css">
        </head>
        <body>
             <div class = "heading">
                <a href="http://localhost/cpsc471/Home.php"><img src="https://d2oeydowngaei1.cloudfront.net/resources/front/images/carstar-logo.png"></a>
                <h1> Parts </h1>
            </div>
            <div class ="taskbar">
            <a href="http://localhost/cpsc471/Parts.php">
                    <img src="img/insert-modify-del-parts.png"> 
            </a>
            </div>
            <div class ="tableview">
		<table width="900" border="1" cellpadding="1" cellspacing="1">
			<tr>
				<th>RO_Num</th>
				<th>ID</th>
				<th>Est_Num</th>
				<th>Hours</th>
				<th>Cost</th>
				<th>Job_Class</th>
				<th>Status</th>
				<th>Scheduled_In</th>
				<th>Scheduled_Out</th>
			</tr>

			<?php

			$query="SELECT * FROM repair_order";
			$result = mysqli_query($link, $query);
				
			while($RO=mysqli_fetch_assoc($result)) {
				echo "<tr>";

				echo "<td>".$RO['RO_Num']."</td>";

				echo "<td>".$RO['ID']."</td>";

				echo "<td>".$RO['Est_Num']."</td>";

				echo "<td>".$RO['Hours']."</td>";

				echo "<td>".$RO['Cost']."</td>";

				echo "<td>".$RO['Job_Class']."</td>";

				echo "<td>".$RO['Status']."</td>";

				echo "<td>".$RO['Scheduled_In']."</td>";

				echo "<td>".$RO['Scheduled_Out']."</td>";

				echo "</tr>";
			} //End While
			?>
		</table>

		<br>

		<table width="200" border="1" cellpadding="1" cellspacing="1">
			<tr>
				<th>RO_Num</th>
				<th>ID</th>
			</tr>

			<?php

			$query1="SELECT * FROM works_on";
			$result1 = mysqli_query($link, $query1);
				
			while($WO=mysqli_fetch_assoc($result1)) {
				echo "<tr>";

				echo "<td>".$WO['RO_Num']."</td>";

				echo "<td>".$WO['ID']."</td>";

				echo "</tr>";
			} //End While
			?>
		</table>
	</body>
</html>
