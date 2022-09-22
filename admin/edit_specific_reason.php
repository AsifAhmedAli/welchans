<?php
include("../back_end_php/db.php");
$id = $_POST['x'];
                                $sql = "SELECT * FROM reason_for_visit where id = '$id'";
                                $result = $conn->query($sql);

                                if ($result->num_rows > 0) {
                                // output data of each row
                                while($row = $result->fetch_assoc()) {
                                    $reason_name = $row['reason_name'];
                                }
                                }
                                // $logoname = "./logo_folder/".$logoname;
                            
?>
<div>
    <h3 class="text-center">
        Edit Reason Details
    </h3>
    <form id="editreason">
    <div class="input-group col-md-6 mt-4 mx-auto">
        <input type="text" name="reason_name" class="form-control" value="<?php echo $reason_name; ?>">
    </div>
    <div class="input-group col-md-6 mt-4 mx-auto" style="visibility: hidden;">
        <input type="text" name="id" class="form-control" value="<?php echo $id; ?>">
    </div>
  <div class="input-group-append">
    <button class="btn btn-outline-secondary mx-auto"  type="submit">Save</button>
  </div>
  </form>
</div>
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

        $("#editreason").submit(function (event) {

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

            // const array = $($inputs).serializeArray(); // Encodes the set of form elements as an array of names and values.
            // const serializedData = {};
            // $.each(array, function () {
            //   serializedData[this.name] = this.value || "";
            // });
            // console.log(serializedData);

            $.ajax({
                type: "post",
                data: serializedData,
                url: "save_reason_details.php",
                success: function (result) {
                  // alert(result);
                    $("#div13").html(result);
                }
            });
        });
</script>
