<?php
$template1 = '<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../assets/images/logo.svg">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
</head>

<body>
  <div class="mx-auto col-12 col-md-8 col-lg-6">
    <div class="mx-auto text-center"><img class="mx-auto" src="../assets/images/logo.svg" width="135" height="auto" alt=""></div>
    <h2 class="mx-auto text-center">New Appointment Details</h2>
    <table class="text-start table">
      <tbody>
        <tr class="text-start">
          <th>Key</th>
          <th>Value</th>
        </tr>
        <tr>
          <td>First Name:</td>
          <td>'.$fname.'</td>
        </tr>
        <tr>
          <td>Last Name:</td>
          <td>'.$lname.'</td>
        </tr>
        <tr>
          <td>Email Address:</td>
          <td>'.$email.'</td>
        </tr>
        <tr>
          <td>Date of Birth:</td>
          <td>'.$DOB.'</td>
        </tr>
        <tr>
          <td>Gender:</td>
          <td>'.$gender.'</td>
        </tr>
        <tr>
          <td>Phone Number:</td>
          <td>'.$phonenumber.'</td>
        </tr>
        <tr>
          <td>City:</td>
          <td>'.$city.'</td>
        </tr>
        <tr>
          <td>State:</td>
          <td>'.$state.'</td>
        </tr>
        <tr>
          <td>Zip:</td>
          <td>'.$zip.'</td>
        </tr>
        <tr>
          <td>Address:</td>
          <td>'.$address.'</td>
        </tr>
        <tr>
          <td>Allergies:</td>
          <td>'.$allergies.'</td>
        </tr>
        <tr>
          <td>Health Conditions:</td>
          <td>'.$health_conditions.'</td>
        </tr>
        <tr>
          <td>Medicins you are using:</td>
          <td>'.$medicines_using.'</td>
        </tr>
        <tr>
          <td>Reason of Visit:</td>
          <td>'.$reason_of_visit.'</td>
        </tr>
        <tr>
          <td>Time of Visit:</td>
          <td>'.$time_of_visit.'</td>
        </tr>
        <tr>
          <td>Description of Problem/Symptoms:</td>
          <td>'.$message.'</td>
        </tr>
      </tbody>
    </table>
  </div>
  <hr>
  <div class="col-md-5 mx-auto">
            <h3 class="heading mb-3 text-center">SAN ANTONIO PRIME WELLNESS</h3>
            <p class="footer-desctiption">
              FIND YOUR PRIME <br>
              1303 McCullough, STE 138<br>
              San Antonio, TX 78212<br>
              (210)455-3309

            </p>
            <div class="d-flex align-items-center gap-3">
              <a href="">
                <img src="./assets/images/facebook.svg" alt="" />
              </a>
              <a href="">
                <img src="./assets/images/twitter.svg" alt="" />
              </a>
              <a href="">
                <img src="./assets/images/instagram.svg" alt="" />
              </a>
            </div>
          </div>
</body>

</html>';
?>