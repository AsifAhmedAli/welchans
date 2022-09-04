<?php
include("../back_end_php/db.php");
                                $sql = "SELECT * FROM contactdetails";
                                $result = $conn->query($sql);

                                if ($result->num_rows > 0) {
                                // output data of each row
                                while($row = $result->fetch_assoc()) {
                                    $address = $row['address'];
                                    $phonenumber = $row['phonenumber'];
                                }
                                }
                                // $logoname = "./logo_folder/".$logoname;
                            
?>
<div>
    <h3 class="text-center">
        Edit Contact Details
    </h3>
    <form id="addproject">
<div class="input-group mb-3 col-md-6 mt-4 mx-auto">
  <input type="text" name="address" class="form-control" placeholder="Address" value="<?php echo $address; ?>">
    <!-- <input type="text" id="inputemployeelastname" class="form-control" placeholder="Enter Last Name"> -->
</div>
<div class="input-group mb-3 col-md-6 mt-4 mx-auto">
  <input type="number" name="phonenumber" class="form-control" placeholder="Phone Number" value="<?php echo $phonenumber; ?>">
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

        $("#addproject").submit(function (event) {

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
                url: "save_contact_details.php",
                success: function (result) {
                  // alert(result);
                    $("#div13").html(result);
                }
            });
        });
</script>
