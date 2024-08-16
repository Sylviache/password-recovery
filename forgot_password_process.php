<?php
if(isset($_POST['reset'])){
    $email = $_POST['email'];
}
else{
    exit();

}
?>

<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'mail/Exception.php';
require 'mail/PHPMailer.php';
require 'mail/SMTP.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings                     
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'chesylvie196@gmail.com';                     //SMTP username
    $mail->Password   =   "sylvie";                                     //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('chesylvie196@gmail.com', 'Admin');
    $mail->addAddress($email);     //Add a recipient
    
$code = substr(str_shuffle('123456790QWERTYUIOPASDFGHJKLZXCVBNM'),0,10 );

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Password Reset';
    $mail->Body    = 'To reset your password click <a href="http://localhost/login_system/change_password.php?code='.$code.'";>here</a>.
     </br> Reset your password in a day.';
    
     $conn = new mysqli('localhost','root','' ,'test');
     if($conn->connect_error){
        die('could not connect to the database');
     }

     $verifyQuery = $conn->query("SELECT * FROM user WHERE email ='$email'");
if($verifyQuery->num_rows) {
    $codeQuery = $conn->query("UPDATE user SET code = '$code' WHERE email = '$email'");
    
    $mail->send();
    echo 'Message has been sent,check your email';

}
$conn->close();

} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}




?>