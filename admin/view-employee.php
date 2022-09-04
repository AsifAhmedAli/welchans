<style>
    .mupointer:hover{
        cursor:pointer;
    }
</style>
<?php
include("../back_end_php/db.php");
$sql = "SELECT * FROM appointments order by id desc";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
?>
<style>
@media screen and (max-width: 3000px){
    #showhere{
          overflow: auto;
          white-space: nowrap;       
    }
}
</style>
<table class="table table-hover text-center table-bordered table-striped">
    <thead>
      <tr>
        <th>First Name</th>
        <th>Last Name</th>        
        <th>Email Address</th>
        <th>Date of Birth</th>        
        <th>Gender</th>                
        <th>Phone Number</th>
        <th>City</th>        
        <th>State</th>        
        <th>Zip</th>        
        <th>Address</th>        
        <th>Allergies</th>        
        <th>Health Conditions</th>        
        <th>Medications</th>      
        <th>Reason Of Visit</th>      
        <th>Time for Visit</th>      
        <th>Description</th>
      </tr>
    </thead>
    <tbody>
<?php
  while($row = $result->fetch_assoc()) {
      $idofappointment = $row['id'];
    //   $usernameofemplouee = $row['username'];
    //   $comma = ",";
      ?>

      <tr>
        <td><?php echo $row['fname']; ?></td>
        <td><?php echo $row['lname']; ?></td>
        <td><?php echo $row['email1']; ?></td>
        <td><?php echo $row['DOB']; ?></td>
        <td><?php echo $row['gender']; ?></td>
        <td><?php echo $row['phonenumber']; ?></td>
        <td><?php echo $row['city']; ?></td>
        <td><?php echo $row['state']; ?></td>
        <td><?php echo $row['zip']; ?></td>
        <td><?php echo $row['address']; ?></td>
        <td><?php echo $row['allergies']; ?></td>
        <td><?php echo $row['health_conditions']; ?></td>
        <td><?php echo $row['medicines_using']; ?></td>
        <td><?php echo $row['reason_of_visit']; ?></td>
        <td><?php echo $row['time_of_visit']; ?></td>
        <td><?php echo $row['message']; ?></td>
        <!-- <td onclick="emapliye_details('<?php //echo $usernameofemplouee; ?>')"  class="asdfas"><?php //echo $row['username']; ?></td> -->
        <!-- <td><?php //echo $row['pass']; ?></td> -->
        <!-- <td><?php //echo $row['email']; ?></td>         -->
        <td class="mupointer" onclick="delete_employee('<?php echo $idofappointment; ?>')"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
  <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
  <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
</svg></td>
<!-- <td class="mupointer" onclick="edit_employee('<?php //echo $idofemployee; ?>')"><i class="fa fa-edit"></i></td> -->
      </tr>

      <?php
  }
  ?>
      </tbody>
  </table>
  <?php
} else {
  echo "0 results";
}
?>
<div id="div33"></div>
<script>
    function delete_employee(x){
          $.ajax({
                type: "post",
                data: {x:x},
                url: "delete_employee.php",
                success: function (result) {
                    $("#div33").html(result);
                }
            });
    }
</script>