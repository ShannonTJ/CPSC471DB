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
                        Customer, Vehicle, Insurance Info
                </title>
                <meta http-equiv="Content-Type" content="text/html; charset=iso=8859-1">
                <link rel="stylesheet" type="text/css" href="style.css">
        </head>
        <body>
            <div class = "heading">
                <a href="http://localhost/cpsc471/Home.php"><img src="https://d2oeydowngaei1.cloudfront.net/resources/front/images/carstar-logo.png"></a>
            </div>   
            <div class="tableview">
                <table width="700" border="1" cellpadding="1" cellspacing="1">
                    <h2> Customer Information </h2>    
                    <tr>
                                <th>Cust_Num</th>
                                <th>F_Name</th>
                                <th>M_Init</th>
                                <th>L_Name</th>
                                <th>Phone_Num</th>
                                <th>Address</th>
                                <th>Rental</th>
                        </tr>

                        <?php

                        $query="SELECT * FROM Customer";
                        $result = mysqli_query($link, $query);

                        while($Customer=mysqli_fetch_assoc($result)) {
                                echo "<tr>";

                                echo "<td>".$Customer['Cust_Num']."</td>";

                                echo "<td>".$Customer['F_Name']."</td>";

                                echo "<td>".$Customer['M_Init']."</td>";

                                echo "<td>".$Customer['L_Name']."</td>";

                                echo "<td>".$Customer['Phone_Num']."</td>";

                                echo "<td>".$Customer['Address']."</td>";

                                echo "<td>".$Customer['Rental']."</td>";

                                echo "</tr>";
                        } //End While
                        ?>
                </table>

                <br>
                <h2> Vehicle Information </h2>
                <table width="800" border="1" cellpadding="1" cellspacing="1">
                        <tr>
                                <th>Plate_Num</th>
                                <th>Cust_Num</th>
                                <th>Color</th>
                                <th>Type</th>
                                <th>Make</th>
                                <th>VIN</th>
                                <th>Year</th>
                                <th>Mileage</th>
                        </tr>

                        <?php

                        $query4="SELECT * FROM vehicle";
                        $result4 = mysqli_query($link, $query4);

                        while($Vehicle=mysqli_fetch_assoc($result4)) {
                                echo "<tr>";

                                echo "<td>".$Vehicle['Plate_Num']."</td>";

                                echo "<td>".$Vehicle['Cust_Num']."</td>";

                                echo "<td>".$Vehicle['Color']."</td>";

                                echo "<td>".$Vehicle['Type']."</td>";

                                echo "<td>".$Vehicle['Make']."</td>";

                                echo "<td>".$Vehicle['VIN']."</td>";

                                echo "<td>".$Vehicle['Year']."</td>";

                                echo "<td>".$Vehicle['Mileage']."</td>";

                                echo "</tr>";
                        } //End While
                        ?>
                </table>

                <br>
                <h2> Insurance Information </h2>
                <table width="300" border="1" cellpadding="1" cellspacing="1">
                        <tr>
                                <th>ID_Num</th>
                                <th>Name</th>
                                <th>Phone_Num</th>
                        </tr>

                        <?php

                        $query1="SELECT * FROM insurance";
                        $result1 = mysqli_query($link, $query1);

                        while($insurance=mysqli_fetch_assoc($result1)) {
                                echo "<tr>";

                                echo "<td>".$insurance['ID_Num']."</td>";

                                echo "<td>".$insurance['Name']."</td>";

                                echo "<td>".$insurance['Phone_Num']."</td>";

                                echo "</tr>";
                        } //End While
                        ?>
                </table>

                <br>
                <h2> Vehicle-Insurance Information </h2>
                <table width="300" border="1" cellpadding="1" cellspacing="1">
                        <tr>
                                <th>ID_Num</th>
                                <th>Plate_Num</th>
                                <th>Claim_Num</th>
                        </tr>

                        <?php

                        $query2="SELECT * FROM insured_by";
                        $result2 = mysqli_query($link, $query2);

                        while($insuredBy=mysqli_fetch_assoc($result2)) {
                                echo "<tr>";

                                echo "<td>".$insuredBy['ID_Num']."</td>";

                                echo "<td>".$insuredBy['Plate_Num']."</td>";

                                echo "<td>".$insuredBy['Claim_Num']."</td>";

                                echo "</tr>";
                        } //End While
                        ?>
                </table>

                <h2> Customer-Insurance Information </h2>
                <br>

                <table width="300" border="1" cellpadding="1" cellspacing="1">
                        <tr>
                                <th>ID_Num</th>
                                <th>Cust_Num</th>
                                <th>Deductible</th>
                        </tr>

                        <?php

                        $query3="SELECT * FROM insured_with";
                        $result3 = mysqli_query($link, $query3);

                        while($insuredWith=mysqli_fetch_assoc($result3)) {
                                echo "<tr>";

                                echo "<td>".$insuredWith['ID_Num']."</td>";

                                echo "<td>".$insuredWith['Cust_Num']."</td>";

                                echo "<td>".$insuredWith['Deductible']."</td>";

                                echo "</tr>";
                        } //End While
                        ?>
                </table>
            </div>
        </body>
</html>
