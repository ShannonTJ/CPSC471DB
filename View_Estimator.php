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
			View Estimator
		</title>
		<meta http-equiv="Content-Type" content="text/html; charset=iso=8859-1">
	</head>
	<body>
		<table width="200" border="1" cellpadding="1" cellspacing="1">
			<tr>
				<th>ID</th>
				<th>Salary</th>
			</tr>

			<?php

			$query="SELECT * FROM estimator";
			$result = mysqli_query($link, $query);
				
			while($estimator=mysqli_fetch_assoc($result)) {
				echo "<tr>";

				echo "<td>".$estimator['ID']."</td>";

				echo "<td>".$estimator['Hourly_Rate']."</td>";

				echo "</tr>";
			} //End While
			?>
		</table>
	</body>
</html>
