<?php
$link = mysqli_connect("localhost", "root", "");
mysqli_select_db($link, "cpsc471db") or ('Unable to connect to the Database');

?>


<!DOCTYPE html>
<html>
  <center>
    <form name="Login form" method="post" action="">
      <table>
        <tr>
          <td><b>Username</b></td>
          <td><input type="text" name="user" placeholder="Username" required></td>
        </tr>
        <tr>
          <td><b>Password</b></td>
          <td><input type="password" name="pass" placeholder="Password" required></td>
        </tr>
        <tr>
          <td colspan="2" align = "center">
            <input type="submit" name="submitLogin" value="Log in">
          </td>
        </tr>
      </table>
    </form>

    <?php



    if(isset($_POST["submitLogin"])) {
      if($_POST['pass'] == (mysqli_query($link, "SELECT Password FROM employee WHERE '$_POST[user]' = 'Username'"))) {
        header('Location: Home.php');
      } else {
        header('Location: FailedLog.php');
      }
    }

    ?>
  </center>
</html>

