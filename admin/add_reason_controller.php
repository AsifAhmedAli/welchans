<?php 
include("../back_end_php/db.php");
$reason_name = $_POST['new_reason'];
// $id = $_POST['id'];
// echo "<script>alert('".$address.$phonenumber."')</script>";
$sql = "INSERT INTO reason_for_visit(reason_name) VALUES ('$reason_name')";

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