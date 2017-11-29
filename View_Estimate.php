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
                    View Estimate
            </title>
            <meta http-equiv="Content-Type" content="text/html; charset=iso=8859-1">
            <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        
        <a href="http://localhost/cpsc471/NewEstimate.php">
            <img src="img/insert-estimate.png">
        </a>
        
        <a href="http://localhost/cpsc471/DeleteEstimate.php">
            <img src="img/delete-estimate.png">
        </a>
        
        <table width="700" border="1" cellpadding="1" cellspacing="1">
                <tr>
                        <th>Est_Num</th>
                        <th>ID</th>
                        <th>Plate_Num</th>
                        <th>Job_Class</th>
                        <th>Hours</th>
                        <th>Status</th>
                        <th>Cost</th>
                </tr>

                <?php

                $query="SELECT * FROM estimate";
                $result = mysqli_query($link, $query);

                while($estimate=mysqli_fetch_assoc($result)) {
                        echo "<tr>";

                        echo "<td>".$estimate['Est_Num']."</td>";

                        echo "<td>".$estimate['ID']."</td>";

                        echo "<td>".$estimate['Plate_Num']."</td>";

                        echo "<td>".$estimate['Job_Class']."</td>";

                        echo "<td>".$estimate['Hours']."</td>";

                        echo "<td>".$estimate['Status']."</td>";

                        echo "<td>".$estimate['Cost']."</td>";

                        echo "</tr>";
                } //End While
                ?>
        </table>
</body>
</html>
