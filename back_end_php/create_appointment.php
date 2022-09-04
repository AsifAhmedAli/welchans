<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email1'];
$DOB = $_POST['DOB'];
$gender = $_POST['gender'];
$phonenumber = $_POST['phonenumber'];
$city = $_POST['city'];
$state = $_POST['state'];
$zip = $_POST['zip'];
$address = $_POST['address'];
$allergies = $_POST['allergies'];
$health_conditions = $_POST['health_conditions'];
$medicines_using = $_POST['medicines_using'];
$reason_of_visit = $_POST['reason_of_visit'];
$time_of_visit = $_POST['time_of_visit'];
$message = $_POST['message'];
//Load Composer's autoloader
require 'vendor/autoload.php';
include("./db.php");
include("./email_template.php");

//Create an instance; passing true enables exceptions
$mail = new PHPMailer(true);
$sql = "INSERT INTO appointments(fname, lname, email1, DOB, gender, phonenumber, city, state, zip, address, allergies, health_conditions, medicines_using, reason_of_visit, time_of_visit, message) 
VALUES ('$fname','$lname','$email','$DOB','$gender','$phonenumber','$city','$state','$zip','$address','$allergies','$health_conditions','$medicines_using','$reason_of_visit','$time_of_visit','$message')";

if ($conn->query($sql) === TRUE) {
    echo "sent";
    // try {
    //     //Server settings
    //     $mail->SMTPDebug  = 1;                      //Enable verbose debug output
    //     $mail->IsSMTP();
    //     // $mail->Mailer = "smtp";
    //     $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    //     $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    //     $mail->Username   = 'cbkpharmacyrelay@gmail.com';                     //SMTP username
    //     $mail->Password   = 'evzvpnjjvjwtdiya';                               //SMTP password
    //     $mail->SMTPSecure = "tls";            //Enable implicit TLS encryption
    //     $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS
    
    //     //Recipients
    //     $mail->setFrom('cbkpharmacyrelay@gmail.com', 'Test');
    //     // $mail->addAddress("mgr@cbkpharmacy.com");     //Add a recipient
    //     $mail->addAddress("asif@mexil.it");     //Add a recipient
    //     // $mail->addAddress('ellen@example.com');               //Name is optional
    //     $mail->addReplyTo('cbkpharmacyrelay@gmail.com', 'Test');
    //     // $mail->addCC('cc@example.com');
    //     // $mail->addBCC('bcc@example.com');
    
    //     //Attachments
    //     // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    //     // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name
    
    //     //Content
    //     $mail->isHTML(true);                                  //Set email format to HTML
    //     $mail->Subject = 'New Appointment';
    //     $mail->Body    = $template1;
    //     // $mail->AltBody = $template1;
    
    //     $mail->send();
    //     echo 'Message has been sent';
    // } catch (Exception $e) {
    //     echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    // }
}
// else{
//     echo("Error description: " . $conn -> error);
// }



// echo $fname.
// $lname.
// $email.
// $DOB.
// $gender.
// $phonenumber.
// $city.
// $state.
// $zip.
// $address.
// $allergies.
// $health_conditions.
// $medicines_using.
// $reason_of_visit.
// $time_of_visit.
// $message;
?>