<?php 
include("./back_end_php/db.php");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home - San Antonio Prime Welness</title>
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<style>

@media screen and (max-width: 630px){
    .nav-link1{
      padding-left: 12px !important;
      padding-right: 12px !important;
    }
  }
</style>
  </head>
  <body>
    <header>
      <div class="container-fluid">
        <nav>
          <!-- <a href="#" class="logo text-decoration-none">
            <img
              src="./assets/images/logo.svg"
              class="d-sm-block d-none"
              alt="Logo"
            />
            <div class="d-sm-none d-flex gap-3 mb-3">
              <img
                src="./assets/images/logo_alt.png"
                height="40px"
                class="w-auto"
                alt="Logo"
              />
              <div>
                <h5 class="mb-1 fw-semibold text-secondary">
                  San Antonio Prime Wellness
                </h5>
                <p class="mb-0 text-dark text-uppercase">Find Your Prime</p>
              </div>
            </div>
          </a> -->
          <a href="index.php" class="logo text-decoration-none">
            <?php
            $sql = "SELECT logofilename FROM logo";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                $logoname = $row['logofilename'];
            }
            }
            $logoname = "admin/logo_folder/".$logoname;
            // echo $logoname;
            ?>
            <img
              src="<?php echo $logoname; ?>"
              class="d-block"
              alt="Logo"
              style="max-width:140px;height:auto;"
            />
          </a>
          <ul class="nav-right ps-0 mb-0">
            <!-- <li>
              <a href="" class="nav-link active">Home</a>
            </li> -->
            <li>
              <a href="#why-chose-us" class="nav-link nav-link1">Why Choose Us</a>
            </li>
            <li>
              <a href="#book-an-appointment-heading" class="nav-link nav-link1">Book Now</a>
            </li>
          </ul>
        </nav>
      </div>
    </header>

    <section class="home">
      <div class="container">
        <div class="row">
          <div class="col-xl-12 mx-auto">
            <div class="row gy-5 justify-content-between align-items-center">
              <div class="col-lg-6">
                <div class="text-lg-start text-center">
                  <h1 class="heading">
                        
                     BOOK <span class="text-primary">AN APPOINTMENT</span> WITH AN
                    <br />
                    <span class="text-secondary"
                      >EXPERIENCED LOCAL PROVIDER.</span
                    >
                  </h1>
                  <p class="punch">We care about your health.</p>
                </div>
                <a href="#book-an-appointment-heading" class="btn btn-secondary book-apoointment" >
                  Book An Appointment Now
                </a>
              </div>
              <div class="col-lg-6">
                <div class="text-xl-end text-center">
                  <img
                    src="./assets/images/home_feature.png"
                    height="310px"
                    width="auto"
                    alt=""
                  />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- <section class="counts">
      <div class="container">
        <div class="row gx-md-4 gx-3 gy-5">
          <div class="col-lg-3 col-md-6 col-12">
            <div class="text-center">
              <h3>
                <span class="material-icons material-icons-outlined">call</span>
                24/7
              </h3>
              <h4>Support</h4>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-12">
            <div class="text-center">
              <h3>
                <span class="material-icons material-icons-outlined"
                  >sentiment_satisfied</span
                >
                10,000
              </h3>
              <h4>Happy Patients</h4>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-12">
            <div class="text-center">
              <h3>
                <span class="material-icons material-icons-outlined"
                  >calendar_month</span
                >
                10,000
              </h3>
              <h4>Years in Service</h4>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-12">
            <div class="text-center">
              <h3>
                <span class="material-icons material-icons-outlined"
                  >how_to_reg</span
                >
                10,000
              </h3>
              <h4>Registered Doctos</h4>
            </div>
          </div>
        </div>
      </div>
    </section> -->

    <section class="why-chose-us" id="why-chose-us">
      <div class="container">
        <div class="row align-items-center gx-4 gy-0">
          <div class="col-lg-6 order-lg-0 order-1 text-lg-start text-center">
            <img
              src="./assets/images/why_chose_us.png"
              class="img-fluid"
              alt=""
            />
          </div>
          <div class="col-lg-6 order-lg-1 order-0">
            <div>
              <h2 class="heading mb-md-5 mb-4">
                Why <span class="text-primary">choose</span> us?
              </h2>
              <ul class="list-points list-unstyled mb-0">
                <li>
                  <h3>
                    <span
                      class="material-icons my-icon material-icons-outlined text-primary"
                      >check_circle</span
                    >
                    LOCAL PROVIDERS
                  </h3>
                  <p>
                    Unlike many online providers, our providers are local.  If your condition would better be treated with an in-person visit, it can be scheduled with us.
                  </p>
                </li>
                <li>
                  <h3>
                    <span
                      class="material-icons my-icon material-icons-outlined text-primary"
                      >check_circle</span
                    >
                    BETTER CARE
                  </h3>
                  <p>
                    Because we use local providers, our providers are well aware of unique local heath trends.  It is also easier for our patients to follow up with their providers when necessary.
                  </p>
                </li>
                <li>
                  <h3>
                    <span
                      class="material-icons my-icon material-icons-outlined text-primary"
                      >check_circle</span
                    >
                    QUICK AND CONVENIENT
                  </h3>
                  <p>
                    Our telehealth services put you on a call list immediately without the hassle of coming in for an in-person appointment.
                  </p>
                </li>
                <li>
                  <h3>
                    <span
                      class="material-icons my-icon material-icons-outlined text-primary"
                      >check_circle</span
                    >
                    AFFORDABLE
                  </h3>
                  <p>
                    Our services are competitively priced, and often less expensive than an in-person visit.  We do accept most insurance plans.
                  </p>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="book-an-appointment-heading" class="book-an-appointment-heading">
      <div class="container">
        <h2 class="heading text-center">
          BOOK <span class="text-primary">APPOINTMENT</span>
        </h2>
      </div>
    </section>

    <section class="book-an-appointment">
      <div class="container">
        <div class="my-container">
          <h3 class="heading text-center mb-4 pb-3">Book your Appointment</h3>
          <form id="formsubmit">
            <div class="row gx-md-5 gx-sm-3 gx-4 gy-4">
              <div class="col-lg-6 col-md-12 col-sm-6 col-12">
                <label for="fname" class="form-label">First Name</label>
                <input
                value="fname"
                  id="fname"
                  type="text"
                  class="form-control"
                  name="fname"
                  placeholder="First Name"
                />
              </div>
              <div class="col-lg-6 col-md-12 col-sm-6 col-12">
                <label for="lname" class="form-label">Last Name</label>
                <input
                value="fname"
                  id="lname"
                  type="text"
                  name="lname"
                  class="form-control"
                  placeholder="Last Name"
                />
              </div>
              <div class="col-lg-6 col-md-12 col-sm-6 col-12">
                <label for="email1" class="form-label">Email Address</label>
                <input
                value="fname"
                id="email1"
                  type="text"
                  name="email1"
                  class="form-control"
                  placeholder="Email Address"
                />
              </div>
              <div class="col-lg-6 col-md-12 col-sm-6 col-12">
                <label for="DOB" class="form-label">Date of Birth</label>
                <input
                id="DOB"
                  name="DOB"
                  type="date"
                  class="form-control"
                  placeholder="Date of Birth"
                />
                <!-- <select name="" id="" class="form-select dob">
                  <option value="" selected>Date of Birth</option>
                </select> -->
              </div>
              <div class="col-12">
                <label for="gender" class="form-label">Gender</label>
                <select name="gender" id="gender" class="form-select">
                  <option value="" disabled >Gender</option>
                  <option value="Male" selected>Male</option>
                  <option value="Female">Female</option>
                </select>
              </div>
              <div class="col-lg-6 col-md-12 col-sm-6 col-12">
                
                  <label for="phonenumber" class="form-label">Phone Number</label>
                  <input
                  value="fname"
                  id="phonenumber"
                  name="phonenumber"
                    type="text"
                    class="form-control"
                    placeholder="Phone Number"
                  />
              </div>
              <div class="col-lg-6 col-md-12 col-sm-6 col-12">
                <label for="city" class="form-label">City</label>
                <input
                value="fname"
                id="city"
                  name="city"
                  type="text"
                  class="form-control"
                  placeholder="City"
                />
              </div>
              <div class="col-lg-6 col-md-12 col-sm-6 col-12">
                <label for="state" class="form-label">State</label>
                <input
                value="fname"
                id="state"
                name="state"
                type="text"
                class="form-control"
                placeholder="State"
              />
              </div>
              <div class="col-lg-6 col-md-12 col-sm-6 col-12">
                <label for="zip" class="form-label">Zip</label>
                <input value="122" type="number" id="zip" class="form-control" name="zip" placeholder="Zip" />
              </div>
              <div class="col-12">
                <label for="address" class="form-label">Address</label>
                <input value="fname" type="text" id="address" class="form-control" name="address" placeholder="Address" />
              </div>
              <div class="col-12">
                <label value="fname" for="allergies" class="form-label">Allergies</label>
                <input
                value="fname"
                id="allergies"
                  name="allergies"
                  type="text"
                  class="form-control"
                  placeholder="Allergies"
                />
              </div>
              <div class="col-12">
                <label for="health_conditions" class="form-label">Health Conditions</label>
                <input
                value="fname"
                id="health_conditions"
                name="health_conditions"
                  type="text"
                  class="form-control"
                  placeholder="Health Conditions"
                />
              </div>
              <div class="col-12">
                <label for="medicines_using" class="form-label">Medications</label>
                <input
                value="fname"
                id="medicines_using"
                  type="text"
                  name="medicines_using"
                  class="form-control"
                  placeholder="Medications"
                />
              </div>
              <div class="col-12">
                <label for="reason_of_visit" class="form-label">Reason Of Visit</label>
                <select name="reason_of_visit" id="reason_of_visit" class="form-select">
                  <option disabled selected>Reason for Visit</option>
                  <option value="Rashes">Rashes</option>
                  <option value="Back Pain (non-opiate)">Back Pain (non-opiate)</option>
                  <option value="Upper Respiratory Infection">Upper Respiratory Infection</option>
                  <option value="Urinary Tract Infection">Urinary Tract Infection</option>
                  <option value="Nausea, Vomiting, Diarrehea">Nausea, Vomiting, Diarrehea</option>
                  <option value="Heart burn, Acid Reflux">Heart burn, Acid Reflux</option>
                  <option value="Pink Eye">Pink Eye</option>
                  <option value="Ear Reflux">Ear Reflux</option>
                  <option value="Weight Loss">Weight Loss</option>
                  <option value="Men Health">Men’s Health</option>
                  <option value="Women Health">Women’s Health</option>
                  <option value="PREP">PREP</option>
                </select>
              </div>
              <div class="col-12">
                <label for="time_of_visit" class="form-label">Time for Visit</label>
                <select name="time_of_visit" id="time_of_visit" class="form-select">
                  <option  disabled selected>Time for Visit</option>
                  <option value="Now (ASAP)">Now (ASAP)</option>
                  <option value="Today">Today</option>
                  <option value="Tomorrow">Tomorrow</option>
                  <option value="Specific Time">Specific Time</option>
                </select>
              </div>
              <div class="col-12">
                <label for="message" class="form-label">Description of Problem/ Symptoms you are facing</label>
                <textarea
                id="message"
                  name="message"
                  cols="30"
                  rows="8"
                  class="form-control"
                  placeholder="Description of Problem/ Symptoms you are facing"
                >value="fname"</textarea>
              </div>
              <div class="col-12">
                <div class="text-center">
                  <button
                    class="btn btn-primary submit"
                    type="submit"
                  >
                    Submit
                  </button>
                </div>
              </div>
            </div>
            <!-- <section id="confirmation_popup" class="confirmation-popup">
              <div class="container">
                <div class="popup">
                  <p>
                    Your request for a telehealth appointmnet has been received.
                    We wil be calling soon to confirm the appointment and gather
                    any additional information necessary to complete the
                    appointmnet.
                  </p>
                  <h2>
                    Thankyou for trusting us to help you with your healthcare
                    needs.
                  </h2>
                  <h6>
                    If you have not heard from us within 30 minutes, Please Call
                    the Office at 210-455-3309.
                  </h6>
                  <button class="btn btn-outline-light" onclick="closePopup()">
                    Close
                  </button>
                </div>
              </div>
            </section> -->
          </form>
        </div>
      </div>
    </section>

    <footer>
      <div class="container">
        <div class="row gy-5 gx-xl-5 gx-4">
          <div class="col-lg-5">
            <h3 class="heading mb-3">SAN ANTONIO PRIME WELLNESS</h3>
            <p class="footer-desctiption">
              FIND YOUR PRIME <br>
              <?php
                                $sql = "SELECT * FROM contactdetails";
                                $result = $conn->query($sql);

                                if ($result->num_rows > 0) {
                                // output data of each row
                                while($row = $result->fetch_assoc()) {
                                    $addressa = $row['address'];
                                    $phonea = $row['phonenumber'];
                                }
                                }
              ?>
              <span id="addressa">
                <?php echo $addressa; ?>
              </span><br>
              <span id="phonea">
                <?php echo $phonea; ?>
              </span>
              <!-- 1303 McCullough, STE 138<br>
              San Antonio, TX 78212<br>
              (210)455-3309 -->

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
          <div class="col-lg-4">
            <h3 class="heading mb-3">Useful Links</h3>
            <ul class="list-unstyled ps-0 mb-0">
              <li class="mb-3">
                <a href="" class="footer-desctiption text-decoration-none"
                  >FAQ's</a
                >
              </li>
              <li class="mb-3">
                <a href="" class="footer-desctiption text-decoration-none"
                  >Book Appointment</a
                >
              </li>
              <li class="mb-0">
                <a href="" class="footer-desctiption text-decoration-none"
                  >Privacy Policy</a
                >
              </li>
            </ul>
          </div>
          <div class="col-lg-3">
            <div class="text-center">
              <h3 class="heading mb-3">Address</h3>
              <div>
                <iframe
                  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4985.274326423463!2d-98.49428184560956!3d29.4410003323206!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x865c5f5bc27a0cc1%3A0x6dda8aa7465c630b!2sMethodist%20Hospital%20Metropolitan!5e0!3m2!1sen!2s!4v1659180521308!5m2!1sen!2s"
                  width="100%"
                  height="208"
                  class="map"
                  style="border: 0"
                  allowfullscreen=""
                  loading="lazy"
                  referrerpolicy="no-referrer-when-downgrade"
                ></iframe>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <div id="div11" style="display: block;">
      
    </div>
    <div class="loading" id="loader1" style="visibility: hidden;">Loading&#8230;</div>
<script>
    var request;

$("#formsubmit").submit(function (event) {

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
        url: "back_end_php/create_appointment.php",
        success: function (result) {
            $("#div11").html(result);
            // showPopup();
            document.getElementById("loader1").style.visibility = "hidden";
            Swal.fire({
              icon: 'success',
              html: '<h2>Thankyou for trusting us to help you with your healthcare needs.</h2><p>Your request for a telehealth appointmnet has been received. We wil be calling soon to confirm the appointment and gather any additional information necessary to complete the appointmnet. </p><h6>If you have not heard from us within 30 minutes, Please Call the Office at 210-455-3309.</h6>',
              allowOutsideClick: false
            })
            $( 'button.swal2-confirm' ).click(function() {
              // window.location.replace('./new-project.php');
              // location.reload();
            });
        }
    });
});
</script>
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
      integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
      integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
      crossorigin="anonymous"
    ></script>

    <script>
      function showPopup() {
        document.getElementById("confirmation_popup").style.display = "block";
      }
      function closePopup() {
        // document.getElementById("confirmation_popup").style.display = "none";
      }
    </script>
  </body>
</html>
