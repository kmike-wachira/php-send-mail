<?php
session_start();
?>
<?php
if(isset($_POST['send'])){
session_destroy();
    $sender_email=$_POST['email'];
    $sender_message=$_POST['message'];
    $sender_subject=$_POST['subject'];
    $sender_name=$_POST['name'];
    $recipient_mail='mwkariuki2e@gmail.com';

$to      = $recipient_mail;
$subject = $sender_subject;
$message = $sender_message;
$headers = array(
    'From' => $sender_email,
    'Reply-To' => $sender_email,
    'X-Mailer' => 'PHP/' . phpversion()
);
mail($to, $subject, $message, $headers);
 header('Location:../index.php');
$_SESSION['success']="Message Sent succesfully";
}
?>
