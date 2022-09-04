
<?php
include("../back_end_php/db.php");
$username = ucfirst($_POST['email']);
$password = $_POST['password'];
$sql = "SELECT * FROM adminuser where username = '$username' and pass = '$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  $row = $result->fetch_assoc();

  session_start();
  $_SESSION['username'] = $username;
  $_SESSION['password'] = $password;
  echo "<script>window.location.replace('index.php');</script>";
} else {
  echo "<script>
  Swal.fire(
  'Error',
  'Username or Password is wrong!',
  'error'
)</script>";
}
// echo "<script>alert('".$username.$password."')</script>";

?>