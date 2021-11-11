<?php 
// Import PHPMailer classes into the global namespace 
use PHPMailer\PHPMailer\PHPMailer; 
use PHPMailer\PHPMailer\Exception; 
 
// Include PHPMailer library files 
require 'PHPMailer/Exception.php'; 
require 'PHPMailer/PHPMailer.php'; 
require 'PHPMailer/SMTP.php'; 

// Create an instance of PHPMailer class 

if(isset($_POST['email'])) {
    $subject = $_POST['subject']; // not required
    $email_subject = "Re: " . $subject;
    $name = $_POST['name']; // required
    $email_to = $_POST['email']; // required

    function clean_string($string) {
    $bad = array("content-type","bcc:","to:","cc:","href");
    return str_replace($bad,"",$string);
    }

    $email_message = "<h2>HealthYou Help Centre</h2><p>Hello ";
    $email_message .= clean_string($name).",</p>";
    $email_message .= "<p>Thank you for your feedback!\n We will get back to you in 3 working days.</p>
    <p>Best Regards, <br>
    HealthYou Help Centre</p>";




$mail = new PHPMailer;

// SMTP configuration
$mail->isSMTP();
$mail->Host     = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'healthyou345@gmail.com';
$mail->Password = 'wadboomboom';
$mail->SMTPSecure = 'tls';
$mail->Port     = 587;

// Sender info 
$mail->setFrom('healthyou345@gmail.com', 'HealthYou'); 
// $mail->addReplyTo('reply@example.com', 'SenderName'); 
 
// Add a recipient 
$mail->addAddress($email_to); 
 
// Add cc or bcc  
// $mail->addCC('cc@example.com'); 
// $mail->addBCC('bcc@example.com'); 
 
// Email subject 
$mail->Subject = $email_subject; 
 
// Set email format to HTML 
$mail->isHTML(true); 
 
// Email body content 
$mailContent = $email_message; 
$mail->Body = $mailContent; 

$result = array('status' => true);

// Send email 
if(!$mail->send()){
    $result["status"] = false;
//     // echo `Message could not be sent. Mailer Error: `.$mail->ErrorInfo; 
}else{ 
    $result["status"] = true;
}
// header("Location: ../index.html#contact");
}

// if ($status)
//     $result["status"] = "Post added successfully";
// else 
//     $result["status"] = "Post was not added";

// $postJSON = json_encode($result);
// echo $postJSON;

?>
