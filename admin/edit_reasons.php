<?php
include("../back_end_php/db.php");
?>
<!-- <form id="edit_reasons"> -->
  <div class="col-12 text-right mb-3">
      <button type="button" class="btn btn-outline-dark" data-toggle="modal" data-target="#exampleModal">
        Add New
      </button>
  </div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form id="addreason">
        <div class="form-group">
          <label for="exampleFormControlInput1">New Reason:</label>
          <input type="text" class="form-control" id="exampleFormControlInput1" name="new_reason" placeholder="Rashes">
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
      </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
      </div>
    </div>
  </div>
</div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Reason</th>
      <th scope="col">Delete</th>
      <th scope="col">Edit</th>
    </tr>
  </thead>
  <tbody>
<?php
$sql = "SELECT * FROM reason_for_visit";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
$i = 1;
while($row = $result->fetch_assoc()) {
    $id = $row['id'];
  ?>
      <tr>
      <th scope="row"><?php echo $i ?></th>
      <td><?php echo $row['reason_name']; ?></td>
      <td><i style="cursor: pointer;" onclick="deletefunction('<?php echo $id ?>')" class="fa fa-trash"></i></td>
      <td><i style="cursor: pointer;" onclick="editfunction('<?php echo $id ?>')" class="fa fa-edit"></i></td>
    </tr>
  <?php
  $i++;
}
}
?>
  </tbody>
</table>
<div id="div13"></div>
<script>
    // function showpriceinput(x){
    //   // alert(x);
    //   id = "divofinput" + x;
    //   x1 = document.getElementById(id);
    //   // alert(x1.style.display);
    //   if (x1.style.display === "none") {
    //       x1.style.display = "block";
    //     } else {
    //       x1.style.display = "none";
    //     }
    // }
    var request;

        // $("#addreason").submit(function (event) {

        //     // Prevent default posting of form - put here to work in case of errors
        //     event.preventDefault();

        //     // Abort any pending request
        //     if (request) {
        //         request.abort();
        //     }
        //     // setup some local variables
        //     var $form = $(this);

        //     // Let's select and cache all the fields
        //     var $inputs = $form.find("input, select, button, textarea");

        //     // Serialize the data in the form
        //     var serializedData = $form.serialize();

            // const array = $($inputs).serializeArray(); // Encodes the set of form elements as an array of names and values.
            // const serializedData = {};
            // $.each(array, function () {
            //   serializedData[this.name] = this.value || "";
            // });
            // console.log(serializedData);



            $("#addreason").submit(function (event) {

                // Prevent default posting of form - put here to work in case of errors
                event.preventDefault();

                // Abort any pending request
                if (request) {
                    request.abort();
                }
                // setup some local variables
                var $form = $(this);

                // Let's select and cache all the fields
                var $inputs = $form.find("input, select, button, textarea");

                // Serialize the data in the form
                var serializedData = $form.serialize();
                document.getElementById("loader1").style.visibility = "visible";
                $.ajax({
                    type: "post",
                    data: serializedData,
                    url: "add_reason_controller.php",
                    success: function (result) {
                        $("#div13").html(result);
                        document.getElementById("loader1").style.visibility = "hidden";
                    }
                });
                });


            function deletefunction(x){
              document.getElementById("loader1").style.visibility = "visible";
                $.ajax({
                type: "post",
                data: {x:x},
                url: "delete_reason.php",
                success: function (result) {
                  // alert(result);
                    $("#div13").html(result);
                    document.getElementById("loader1").style.visibility = "hidden";
                }
            });
            }
            function editfunction(x){
              document.getElementById("loader1").style.visibility = "visible";
                $.ajax({
                type: "post",
                data: {x:x},
                url: "edit_specific_reason.php",
                success: function (result) {
                  // alert(result);
                    $("#showhere").html(result);
                    document.getElementById("loader1").style.visibility = "hidden";
                }
            });
            }
            // function addnew()
</script>
