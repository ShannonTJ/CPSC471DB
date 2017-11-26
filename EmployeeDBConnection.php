<?php
$link = mysqli_connect("localhost", "root", "");
mysqli_select_db($link, "cpsc471db") or ('Unable to connect to the Database');

?>



<!DOCTYPE HTML>
<html>
	<head>
		<title>
			Employee Table
		</title>
		<meta http-equiv="Content-Type" content="text/html; charset=iso=8859-1">
	</head>

	<body>
		<center>
			<form name = "EmployeeInsertForm" action="" method="post">
				<table>
					<tr>
						<td>
							<font size = "5">
								<b>
									Insert Employee
								</b>
							</font>
						</td>
					</tr>

					<tr>
						<td>Enter ID</td>
						<td><input type = "number" name = "Emp_ID" placeholder = "ID" maxlength = "10" max = "9999999999" required = "required"></td>
					</tr>

					<tr>
						<td>Enter SIN</td>
						<td><input type = "number" name = "Emp_SIN" placeholder = "123456789" maxlength = "9" required = "required"></td>
					</tr>

					<tr>
						<td>Enter Username</td>
						<td><input type = "text" name = "Emp_Username" placeholder = "Username" maxlength = "25" required = "required"></td>
					</tr>

					<tr>
						<td>Enter Password</td>
						<td><input type = "password" name = "Emp_Password" placeholder = "Password" maxlength = "25" required = "required"></td>
					</tr>

					<tr>
						<td>Enter First Name</td>
						<td><input type = "text" name = "Emp_F_Name" placeholder = "First Name" maxlength = "25" required = "required"></td>
					</tr>

					<tr>
						<td>Enter Middle Initial</td>
						<td><input type = "text" name = "Emp_M_Init" placeholder = "Middle Initial" maxlength = "5"></td>
					</tr>

					<tr>
						<td>Enter Last Name</td>
						<td><input type = "text" name = "Emp_L_Name" placeholder = "Last Name" maxlength = "25" required = "required"></td>
					</tr>

					<tr>
						<td>Enter Sex</td>
						<td><input type = "text" name = "Emp_Sex" placeholder = "Sex" maxlength = "10"></td>
					</tr>

					<tr>
						<td>Enter Birth Date</td>
						<td><input type = "date" name = "Emp_Birth_Date"></td>
					</tr>

					<tr>
						<td>Enter Address</td>
						<td><input type = "text" name = "Emp_Address" placeholder = "Address" maxlength = "200"></td>
					</tr>

						<tr>
						<td>Enter Start Date</td>
						<td><input type = "date" name = "Emp_Start_Date"></td>
					</tr>

					<tr>
						<td>Enter Phone Number</td>
						<td><input type = "number" name = "Emp_Phone_Num" placeholder = "4031234567" ></td>
					</tr>

					<tr>
						<td>Select One</td>
					</tr>
					<tr>
						<td>
							<input type="radio" value="Emp_Bodyman" name="Emp_type" required="required">
							<label for="Emp_Bodyman">Bodyman</label>
						</td>
					</tr>

					<tr>
						<td>
							<input type="number" name="BM_Hourly_Wage" placeholder="hourly wage in $ (ex. 15)">
						</td>
					</tr>

					<tr>
						<td>
							<input type="radio" value="Emp_Estimator" name="Emp_type">
							<label for="Emp_Estimator">Estimator</label>
						</td>
					</tr>

					<tr>
						<td>
							<input type="number" name="Est_Salary" placeholder="Salary in $ (ex. 40000)">
						</td>
					</tr>

					<tr>
						<td>
							<input type="radio" value="Emp_Neither" name="Emp_type">
							<label for="Emp_Estimator">Neither</label>
						</td>
					</tr>

					<tr>
						<td colspan = "2" align = "center"><input type = "submit" name = "insertEmployeeSubmit" value = "insert"> </td>
					</tr>

				</table>
			</form>
			<form name = "EmployeeDeleteForm" action="" method="post">
				<table>
					<tr>
						<td>
							<br>
							<font size = "5">
								<b>
									Delete Employee
								</b>
							</font>
						</td>
					</tr>


					<tr>
						<td>Enter ID</td>
						<td><input type = "number" name = "Emp_ID_Delete" placeholder = "ID" maxlength = "10" max = "9999999999" required = "required"></td>
					</tr>

					<tr>
						<td colspan = "2" align = "center"><input type = "submit" name = "deleteEmployeeSubmit" value = "delete"> </td>
					</tr>
				</table>
			</form>

			<?php
			if(isset($_POST["insertEmployeeSubmit"])) {
				mysqli_query($link, "insert into Employee values('$_POST[Emp_ID]', '$_POST[Emp_SIN]', '$_POST[Emp_Username]', '$_POST[Emp_Password]', '$_POST[Emp_F_Name]', '$_POST[Emp_M_Init]', '$_POST[Emp_L_Name]', '$_POST[Emp_Sex]', '$_POST[Emp_Birth_Date]', '$_POST[Emp_Address]', '$_POST[Emp_Start_Date]', '$_POST[Emp_Phone_Num]')");
	
				switch($_POST['Emp_type']) {
			        case "Emp_Bodyman":
			            mysqli_query($link, "insert into Bodyman values('$_POST[Emp_ID]', '$_POST[BM_Hourly_Wage]')");
			            break;
			        case "Emp_Estimator":
			            mysqli_query($link, "insert into Estimator values('$_POST[Emp_ID]', '$_POST[Est_Salary]')");
			            break;
			        case "Emp_Neither":
			            break;
			        default:
			        	echo "error";
			            break;
    				}
			}

			if(isset($_POST["deleteEmployeeSubmit"])) {
				mysqli_query($link, "DELETE FROM employee WHERE employee.ID = '$_POST[Emp_ID_Delete]'");
			}

			?>


		</center>
	</body>
</html>
