<?php
include("../back_end_php/db.php");
// echo "sadfs";
extract($_POST);
$countercheck = 0;
// $extension=array("png");
$file_name=str_replace(' ', '', $_FILES["logofile"]["name"]);
      
$file_tmp=$_FILES["logofile"]["tmp_name"];
$ext=pathinfo($file_name,PATHINFO_EXTENSION);
// echo "<script>alert('1212')</script>";
// echo $file_name;
    if(!file_exists("./logo_folder/".$file_name)) {
      $file_name = str_replace("'", '', $file_name);
    //   echo "<script>alert('".$file_name."')</script>";
        if(move_uploaded_file($file_tmp=$_FILES["logofile"]["tmp_name"],"./logo_folder/".$file_name)){
            $sql = "UPDATE logo SET logofilename='$file_name'";
          if ($conn->query($sql) === TRUE) {
            $countercheck++;
          }
          
          // echo $file_name;
        }
    }
    else {
        $filename=basename($file_name,$ext);
        $filename=$filename.time().".".$ext;
        
        $newFileName = str_replace(' ', '', $filename);
      $newFileName = str_replace("'", '', $newFileName);
    //   echo "<script>alert('".$newFileName."')</script>";
        // echo $newFileName;
        if(move_uploaded_file($file_tmp=$_FILES["logofile"]["tmp_name"],"./logo_folder/".$newFileName)){
          // echo "File uploaded with time function";
          $sql = "UPDATE logo SET logofilename='$newFileName'";

          if ($conn->query($sql) === TRUE) {    
            $countercheck++;
          }
        //   if (!$conn -> query($sql)) {
        //     echo("Error description: " . $conn -> error);
        //   }
                          // echo $newFileName;
        }
    }

    if($countercheck > 0){
        echo "<script>
        Swal.fire({
          icon: 'success',
          title: 'Done...',
          text: 'Logo has been updated!',
          allowOutsideClick: false
        })
        $( 'button.swal2-confirm' ).click(function() {
          location.reload();
        });
        </script>";
      }
?>