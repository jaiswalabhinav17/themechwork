<?php
require_once 'PHPMailerAutoload.php';

     // define variables and set to empty values
     $name = $email = $phone = $profile = $website = "";
         
     if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = test_input($_POST["name"]);
        $email = test_input($_POST["email"]);
        $phone = test_input($_POST["phone"]);
        $profile = test_input($_POST["profile"]);
        
     }
     
     function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
     }

    $email_body = "Dear Team,<br><br>" . $name .
        " has submitted a booking request. Below are the booking details,<br><br>" .
        "<b>Email Id:</b> " . $email . "<br><br>" .
        "<b>Contact:</b> " . $phone . "<br><br>" .
    "";
    sendMail($email, false, $email_body);
   



function sendMail($email_id, $is_customerCopy, $email_body)
{
    $mail = new PHPMailer;
    $mail->SMTPDebug = 3;
    $mail->isSMTP();
    $mail->Host = 'sg2plcpnl0046.prod.sin2.secureserver.net';
    $mail->SMTPAuth = true;
    $mail->Username = 'c03vkdujp9us'; // This was my GoDaddy cPanel username
    $mail->Password = 'Doodle@123'; // And my GoDaddy cPanel password
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;

    if ($is_customerCopy ) {
        $mail->setFrom('sainacalldrivers@gmail.com', 'Saina Call Drivers');
        $mail->addAddress($email_id); // Add a recipient, Name is optional
    } else {
        $mail->setFrom($email_id, 'Cab Request');
        $mail->addAddress('karthikneeliyan@gmail.com');
    }

    $mail->isHTML(true);

    $mail->Subject = 'Saina Call Drivers';
    $mail->Body = $email_body;

    if (!$mail->send()) {
        echo 'Message could not be sent.';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
      
            $result='<div class="alert alert-success">Thank You! I will be in touch</div>';
        echo 'Message has been sent';
    }
}
?>