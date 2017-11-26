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
			View Works On
		</title>
		<meta http-equiv="Content-Type" content="text/html; charset=iso=8859-1">
	</head>
	<body>
		<table width="200" border="1" cellpadding="1" cellspacing="1">
			<tr>
				<th>RO_Num</th>
				<th>ID</th>
			</tr>

			<?php

			$query="SELECT * FROM works_on";
			$result = mysqli_query($link, $query);
				
			while($WO=mysqli_fetch_assoc($result)) {
				echo "<tr>";

				echo "<td>".$WO['RO_Num']."</td>";

				echo "<td>".$WO['ID']."</td>";

				echo "</tr>";
			} //End While
			?>
		</table>
	</body>
</html>