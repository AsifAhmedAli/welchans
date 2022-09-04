<?php
include("../back_end_php/db.php");
$id = $_POST['x'];

$sql1 = "DELETE FROM appointments WHERE id= '$id'";
  if ($conn->query($sql1) === TRUE) {        
    echo "<script>
    Swal.fire({
      icon: 'success',
      title: 'Done...',
      text: 'Appointment has been deleted successfully!',
      allowOutsideClick: false
    })
    $( 'button.swal2-confirm' ).click(function() {
      location.reload();
    });
    </script>";
} else {
  echo "<script>
  Swal.fire(
  'Error',
  'Failed!',
  'error'
)</script>";
}
?>