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
			View Parts
		</title>
		<meta http-equiv="Content-Type" content="text/html; charset=iso=8859-1">
	</head>
	<body>
		<table width="1100" border="1" cellpadding="1" cellspacing="1">
			<tr>
				<th>PO_Num</th>
				<th>RO_Num</th>
				<th>PartNum</th>
				<th>Type</th>
				<th>Status</th>
				<th>Description</th>
				<th>Order_Date</th>
				<th>Arrival_Date</th>
				<th>Invoice_Num</th>
				<th>Returned</th>
				<th>Cost</th>
			</tr>

			<?php

			$query="SELECT * FROM parts";
			$result = mysqli_query($link, $query);
				
			while($parts=mysqli_fetch_assoc($result)) {
				echo "<tr>";

				echo "<td>".$parts['PO_Num']."</td>";

				echo "<td>".$parts['RO_Num']."</td>";

				echo "<td>".$parts['PartNum']."</td>";

				echo "<td>".$parts['Type']."</td>";

				echo "<td>".$parts['Status']."</td>";

				echo "<td>".$parts['Description']."</td>";

				echo "<td>".$parts['Order_Date']."</td>";

				echo "<td>".$parts['Arrival_Date']."</td>";

				echo "<td>".$parts['Invoice_Num']."</td>";

				echo "<td>".$parts['Returned']."</td>";

				echo "<td>".$parts['Cost']."</td>";

				echo "</tr>";
			} //End While
			?>
		</table>
	</body>
</html>