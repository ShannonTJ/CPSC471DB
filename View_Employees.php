<?php
$link = mysqli_connect("localhost", "root", "", "cpsc471db");

if(!$link) {
	die('Unable to connect'. mysqli_error($link));
}

?>



<!DOCTYPE HTML>
<html>
	<head>
		<title>
			View Employees
		</title>
		<meta http-equiv="Content-Type" content="text/html; charset=iso=8859-1">
	</head>
	<body>
		<table width="1200" border="1" cellpadding="1" cellspacing="1">
			<tr>
				<th>ID</th>
				<th>SIN</th>
				<th>F_Name</th>
				<th>M_Init</th>
				<th>L_Name</th>
				<th>Sex</th>
				<th>Birth_Date</th>
				<th>Address</th>
				<th>Start_Date</th>
				<th>Phone_Num</th>
			</tr>

			<?php

			$query="SELECT * FROM employee";
			$result = mysqli_query($link, $query);
				
			while($employee=mysqli_fetch_assoc($result)) {
				echo "<tr>";

				echo "<td>".$employee['ID']."</td>";

				echo "<td>".$employee['SIN']."</td>";

				echo "<td>".$employee['F_Name']."</td>";

				echo "<td>".$employee['M_Init']."</td>";

				echo "<td>".$employee['L_Name']."</td>";

				echo "<td>".$employee['Sex']."</td>";

				echo "<td>".$employee['Birth_Date']."</td>";

				echo "<td>".$employee['Address']."</td>";

				echo "<td>".$employee['Start_Date']."</td>";

				echo "<td>".$employee['Phone_Num']."</td>";

				echo "</tr>";
			} //End While
			?>
		</table>
	</body>
</html>
