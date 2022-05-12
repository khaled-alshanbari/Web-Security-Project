<?php
ob_start();
include('SMTP.php');
include('PHPMailer.php');
include('Exception.php');
$from = $_POST['FROM'];
$msg = $_POST["MSG"];
use \PHPMailer\PHPMailer\PHPMailer;
use \PHPMailer\PHPMailer\Exception;



$mail=new PHPMailer(); // Passing `true` enables exceptions

try {
    //settings
    $mail->SMTPDebug=1; // Enable verbose debug output
    $mail->isSMTP(); // Set mailer to use SMTP
    $mail->Mailer = "smtp";
    $mail->SMTPDebug  = 1;  
    $mail->SMTPAuth   = TRUE;
    $mail->SMTPSecure = "tls";
    $mail->Port       = 587;
    $mail->Host       = "smtp.gmail.com";
    $mail->Username   = "khaledalshareef99@gmail.com";
    $mail->Password   = "178954321";

$mail->IsHTML(true);
$mail->AddAddress('khaled_alshanbri@hotmail.com', "khaled");
$mail->SetFrom("khaledalshareef99@gmail.com", "Falcon Cafe");
$mail->Subject = "Customer Query";
$content = "Customer Email : ".$from."<br> Message: ".$msg;
$mail->MsgHTML($content); 
if(!$mail->Send()) {
  echo "Error while sending Email.";
} else {
  
  header('Location: index.html');
}
    
} 
catch(Exception $e) {
    echo '<script>alert("Message could not be sent.")</script>';
    
}
ob_end_flush();
?>