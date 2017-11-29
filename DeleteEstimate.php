<?php
$link = mysqli_connect("localhost", "root", "");
mysqli_select_db($link, "cpsc471db") or ('Unable to connect to the Database');

?>

<!DOCTYPE HTML>
<html>
    <head>
        <title>
                Delete Estimate
        </title>
        <meta http-equiv="Content-Type" content="text/html; charset=iso=8859-1">
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <form name = "EstimateDeleteForm" action="" method="post">
                <table>
                    <h2> Delete Estimate </h2>
                        <tr>
                                <td>Enter Estimate Number</td>
                                <td><input type = "number" name = "EstID" placeholder = "ID" maxlength = "10" max = "9999999999" required = "required"></td>
                        </tr>
                        <tr>
                                <td><input type = "submit" name = "deleteEstimate" value = "Delete"> </td>
                        </tr>
                </table>
        </form>
        
        <?php
        if(isset($_POST["deleteEstimate"])) {
                mysqli_query($link, "DELETE FROM estimate WHERE estimate.Est_Num = '$_POST[EstID]'");
                header('Location: View_Estimate.php');
        }

        ?>
    </body>
</html>