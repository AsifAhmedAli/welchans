<?php 
include("../back_end_php/db.php");
$address = $_POST['address'];
$heading = $_POST['heading'];

$phonenumber = $_POST['phonenumber'];
// echo "<script>alert('".$address.$phonenumber."')</script>";
$sql = "UPDATE contactdetails SET address='$address', phonenumber='$phonenumber', heading = '$heading'";

if ($conn->query($sql) === TRUE) {
    echo "<script>
    Swal.fire({
      icon: 'success',
      title: 'Done...',
      text: 'Details have been updated!',
      allowOutsideClick: false
    })
    $( 'button.swal2-confirm' ).click(function() {
      location.reload();
    });
    </script>";
//   echo "Record updated successfully";
}
// echo("Error description: " . $conn -> error);

?>