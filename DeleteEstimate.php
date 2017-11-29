<?php
$link = mysqli_connect("localhost", "root", "");
mysqli_select_db($link, "cpsc471db") or ('Unable to connect to the Database');

?>

<!DOCTYPE HTML>
<html>
    <head>
        <title>
                Delete/Modify Estimate
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
        
        <h2> Modify Estimate </h2>
        <form name = "EstimateModifyForm" action="" method="post">
            <table>
                    <tr>
                            <td>Enter Estimate Number</td>
                            <td><input type = "number" name = "EstNum" placeholder = "Estimate Number" maxlength = "10" max = "9999999999" required = "required"></td>
                    </tr>

                    <tr>
                            <td>Enter New Estimator ID</td>
                            <td><input type = "number" name = "estimatorID" placeholder = "ID" maxlength = "10" max = "9999999999"></td>
                    </tr>

                    <tr>
                            <td>Enter New Plate Number</td>
                            <td><input type = "text" name = "plate_num" placeholder = "ABC 1234" maxlength = "9"></td>
                    </tr>

                    <tr>
                            <td>Enter New Job Class</td>
                            <td><input type = "text" name = "Job Class" placeholder = "Light? Medium? Heavy?" maxlength = "25"></td>
                    </tr>

                    <tr>
                            <td>Enter New Hours</td>
                            <td><input type = "number" name = "hours" placeholder = "Number Hours" maxlength = "5" required = "required"></td>
                    </tr>

                    <tr>
                            <td>Enter New Status</td>
                            <td><input type = "text" name = "status" placeholder = "Assigned" maxlength = "25"></td>
                    </tr>

                    <tr>
                            <td>Enter New Cost</td>
                            <td><input type = "number" name = "cost" placeholder = "$$$" maxlength = "10"></td>
                    </tr>
                    <tr>
                        <td><input type = "submit" name = "modifyEstimateSubmit" value = "Modify"> </td>
                    </tr>
            </table>
        </form>
     
        <?php
        if(isset($_POST["deleteEstimate"])) {
                mysqli_query($link, "DELETE FROM estimate WHERE estimate.Est_Num = '$_POST[EstID]'");
                header('Location: View_Estimate.php');
        }
        if(isset($_POST["modifyEstimateSubmit"])) {
            mysqli_query($link, "");
        }
        
        ?>
    </body>
</html>