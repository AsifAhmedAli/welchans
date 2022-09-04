<?php 
include("../back_end_php/db.php");
$address = $_POST['address'];

$phonenumber = $_POST['phonenumber'];
// echo "<script>alert('".$address.$phonenumber."')</script>";
$sql = "UPDATE contactdetails SET address='$address',phonenumber='$phonenumber'";

if ($conn->query($sql) === TRUE) {
//   echo "Record updated successfully";
}
// echo("Error description: " . $conn -> error);

?>