<!DOCTYPE html>
<?php
$link = mysqli_connect("localhost", "root", "");
mysqli_select_db($link, "cpsc471db") or ('Unable to connect to the Database');
?>
<html>
    <head>
        <title>New Estimate</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <div class = "heading">
            <img src="https://d2oeydowngaei1.cloudfront.net/resources/front/images/carstar-logo.png">
            <h1> New Estimate </h1>
        </div>
        <div class ="row">
            <div class ="column">
                <form name="InsertNewCustomer" action="" method="post">
                    <table>
                        <tr>
                            <h3> Customer Information </h3>
                        </tr>
                        <tr>
                            <td> First Name </td>
                            <td><input type = "text" name = "fName" maxlength = "25" required = "required"></td>
                        </tr>
                        <tr>
                            <td> Middle Initial</td>
                            <td><input type = "text" name = "midinit"  maxlength = "1"></td>
                        </tr>
                        <tr>
                            <td>Last Name</td>
                            <td><input type = "text" name = "lName" maxlength = "25" required = "required"></td>
                        </tr>
                        <tr>
                            <td>Phone Number</td>
                            <td><input type = "tel" name = "phNum" required="required"></td>
                        </tr>                
                        <tr>
                            <td>Address</td>
                            <td><input type = "text" name = "addr" maxlength = "60" required = "required"></td>
                        </tr>
                        <tr>
                            <td>Rental?</td>
                            <td><input type="text" name="rental" maxlength="3" required="required"></td> 
                        </tr>
                        <tr>
                            <td>Customer ID</td>
                                <td><input type = "number" name = "custID" maxlength = "10" max = "9999999999" required = "required"></td>
                        </tr>
                    </table>
                <!--</form>-->
            </div>
            <div class =" column">
                 <!--<form name="InsertNewVehicle" action="" method="post">-->
                    <table>
                        <tr>
                        <h3> Vehicle Information </h3>
                        </tr>
                        <tr>
                            <td> Plate Number </td>
                            <td><input type = "text" name = "plateNum" maxlength = "9" required = "required"></td>
                        </tr>
                        <tr>
                            <td> Color </td>
                            <td><input type = "text" name = "color"  maxlength = "20" required="required"></td>
                        </tr>
                        <tr>
                            <td>Type </td>
                            <td><input type = "text" name = "type" maxlength = "25" required = "required"></td>
                        </tr>
                        <tr>
                            <td>Make</td>
                            <td><input type = "text" name = "make" maxlength = "25" required ="required" ></td>
                        </tr>                
                        <tr>
                            <td>VIN</td>
                            <td><input type = "text" name = "vin" maxlength = "50" required = "required"></td>
                        </tr>
                        <tr>
                            <td>Year</td>
                            <td><input type="number" name="year" maxlength="5" required="required"></td> 
                        </tr>
                        <tr>
                            <td>Mileage</td>
                                <td><input type = "number" name = "miles" maxlength = "15" max = "9999999999" required = "required"></td>
                        </tr>
                        <tr>
                            <td><input type = "submit" name = "SubmitEstimate" value = "Submit"> </td>
                        </tr>
                    </table>
                 </form>
            </div>       
            <div class =" column">
                <!--<form name="InsertNewInsurance" action="" method="post">
                    <table>
                        <tr>
                                <h3> Insurance Information </h3>
                        </tr>
                        <tr>
                            <td> Insurance Company </td>
                            <td><input type = "text" name = "Company" maxlength = "60" required = "required"></td>
                        </tr>
                        <tr>
                            <td> Insurance Phone </td>
                            <td><input type = "tel" name = "iPNum"></td>
                        </tr>
                        <tr>
                            <td> Insurance ID </td>
                            <td><input type = "number" name = "insID" maxlength = "10" required = "required"></td>
                        </tr>
                        <tr>
                            <td>Customer Deductible </td>
                            <td><input type = "number" name = "deduct" placeholder="$" maxlength = "10"  ></td>
                        </tr>                
                        <tr>
                            <td>Claim Number</td>
                            <td><input type = "number" name = "claimNum" maxlength = "30"></td>
                        </tr>  
                        <tr>
                            <td><input type = "submit" name = "SubmitEstimate" value = "Submit"> </td>
                        </tr>
                    </table>
                 </form> -->
            </div>
        </div>
        <?php
            if(isset($_POST["SubmitEstimate"])) {
                mysqli_query($link, "INSERT into Customer VALUES('$_POST[custID]','$_POST[fName]', '$_POST[midinit]', '$_POST[lName]', '$_POST[phNum]', '$_POST[addr]', '$_POST[rental]')");
                mysqli_query($link, "INSERT into Vehicle VALUES ('$_POST[plateNum]', $_POST[color]', '$_POST[type]', '$_POST[make]', '$_POST[vin]', '$_POST[year]', '$_POST[vin]', '$_POST[miles]')");
                //mysqli_query($link, "insert into insurance values('$_POST[insID]','$_POST[Company]', '$_POST[iPNum]')");
                //mysqli_query($link, "insert into insured_by values('$_POST[insID]','$_POST[plateNum]', '$_POST[claimNum]')");
                //mysqli_query($link, "insert into insured_with values('$_POST[insID]','$_POST[custID]', '$_POST[deduct]')");
            }
            
            ?>
    </body>
</html>