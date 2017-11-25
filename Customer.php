<?php
$link = mysqli_connect("localhost", "root", "");
mysqli_select_db($link, "cpsc471db") or ('Unable to connect to the Database');

?>



<!DOCTYPE HTML>
<html>
	<head>
		<title>
			Customer Table
		</title>
		<meta http-equiv="Content-Type" content="text/html; charset=iso=8859-1">
	</head>