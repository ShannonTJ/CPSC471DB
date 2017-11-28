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
			View Bodyman
		</title>
		<meta http-equiv="Content-Type" content="text/html; charset=iso=8859-1">
	</head>
	<body>
		<form action ="View_Bodyman.php" method="GET">
		<input type="text" name="search" placeholder="Enter a value"/>
		<input type="submit" value="Search"/>
		</form>
		<table width="200" border="1" cellpadding="1" cellspacing="1">
			<tr>
				<th>ID</th>
				<th>Hourly_Rate</th>
			</tr>

			<?php
			
			$search = $_GET["search"];
			//echo $search;
			$search = mysqli_real_escape_string($link, $search);
			//echo $search;
			
			$query = "SELECT * FROM Bodyman WHERE ID = $search or Hourly_Rate = $search";
			//echo $query;
			
			//If there are results...
			if($result = mysqli_query($link, $query))
			{
				//Print search results
				while($bodyman=mysqli_fetch_assoc($result)) 
				{
					echo "<tr>";

					echo "<td>".$bodyman['ID']."</td>";

					echo "<td>".$bodyman['Hourly_Rate']."</td>";

					echo "</tr>";
				}
				//End While
				
			}
			else if($search != NULL)
			{
				echo "No results found.";
			}

			else if($search == NULL)
			{
				$query="SELECT * FROM Bodyman";
				$result = mysqli_query($link, $query);
		
				while($bodyman=mysqli_fetch_assoc($result)) {
					echo "<tr>";

					echo "<td>".$bodyman['ID']."</td>";

					echo "<td>".$bodyman['Hourly_Rate']."</td>";

					echo "</tr>";
				} //End While
			}
			?>
		</table>
	</body>
</html>
