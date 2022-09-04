<?php

?>

<div class="col-12">
    <h3 class="text-center">
        Upload Logo
        </h3>
        <form id="uploadlogo">
            <div class="mb-3 col-md-6 mx-auto">
                <label for="logofile" class="form-label">Upload Logo Image</label>
                <input class="form-control" type="file" id="logofile" name="logofile" accept="image/png">
            </div>
            <div class="mb-3 col-md-6 mx-auto text-center">
                <button type="submit" class="btn btn-outline-dark">Submit</button>
            </div>
        </form>
</div>
<div id="div11"></div>
<script>
    var request;

        $("#uploadlogo").submit(function (event) {

            // Prevent default posting of form - put here to work in case of errors
            event.preventDefault();

            // Abort any pending request
            if (request) {
                request.abort();
            }
            // setup some local variables
            var formData = new FormData(this);
            document.getElementById("loader1").style.visibility = "visible";
            $.ajax({
                type: "post",
                data: formData,
                url: "savelogo.php",
                success: function (result) {
                    $("#div11").html(result);
                    document.getElementById("loader1").style.visibility = "hidden";
                },
            cache: false,
            contentType: false,
            processData: false
                });
            });
    </script>