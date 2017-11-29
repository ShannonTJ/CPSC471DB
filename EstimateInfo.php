<!DOCTYPE html>
<?php
$link = mysqli_connect("localhost", "root", "");
mysqli_select_db($link, "cpsc471db") or ('Unable to connect to the Database');
?>

<html>
    <head>
        <title>New Estimate </title>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <div class = "heading">
            <img src="https://d2oeydowngaei1.cloudfront.net/resources/front/images/carstar-logo.png">
            <h1> Estimate Information </h1>
        </div>
     
        <div class="estimate">
            <form name="InsertNewEstimate" action="" method="post">
                <table>
                    <tr>
                        <td> Estimate Number </td>
                        <td><input type = "number" name = "est_num" maxlength = "10" max="9999999999" required = "required"></td>
                    </tr>
                    <tr>
                        <td> Estimator ID </td>
                        <td><input type = "number" name = "est_id"  maxlength="10" required="required"></td>
                    </tr> 
                    <tr>
                        <td>Plate Number</td>
                        <td><input type = "text" name = "plate_num" maxlength = "10" required = "required"></td>
                   </tr> 
                    <tr>
                        <td>Job Class</td>
                        <td><input type = "text" name = "job_class" required="required"></td>
                    </tr>
                    <tr>
                        <td>Hours</td>
                        <td><input type = "number" name = "hours" maxlength = "4"></td>
                    </tr>
                    <tr>
                        <td>Status</td>
                        <td><input type="text" name="status" maxlength="25" default="Not Assigned" required="required"></td> 
                    </tr>
                    <tr>
                        <td>Cost</td>
                        <td><input type = "number" name = "cost" maxlength = "6" placeholder="$$$" max = "9999999999" required = "required"></td>
                    </tr>
                    <tr>
                            <td><input type = "submit" name = "submitInfo" value = "Finish"> </td>
                    </tr>
                </table>
            </form>
        </div>
        <?php
    
            if(isset($_POST["submitInfo"])) {
                mysqli_query($link, "INSERT into estimate VALUES('$_POST[est_num]','$_POST[est_id]', '$_POST[plate_num]', '$_POST[job_class]', '$_POST[hours]', '$_POST[status]', '$_POST[cost]')");
                header('Location: View_Estimate.php');
            }
            
            ?>
    </body>

