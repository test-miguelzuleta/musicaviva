<?php
$emailSubject = 'Pregunta de Mama';
$sendTo = 'julianaparra@musicavivacolombia.com';

$name = $_POST['daname'];
$email = $_POST['daemail'];
$phone = $_POST['daphone'];
$kidsname = $_POST['dakidsname'];
$details = $_POST['dadetails'];

$body = <<<EOD
<br><hr><br>
Email: $email <br>
Name: $name <br>
Phone: $phone <br>
Kids-Name: $kidsname <br>
Details: $details <br>
EOD;

$headers = "From: $email\r\n";
$headers .= "Content-type: text/html\r\n";
$success = mail($sendTo, $emailSubject, $body, $headers);
//$success = mail($sendTo, $emailSubject, $body, 'From: ' . $name. '<' . $email. '>');


//to, subject, message, header
//mail('zzuleta@hotmail.com', 'Pregunta de Mama', $details, 'From: ' . $name. '<' . $email. '>');

header('Location: thankyouform.html');
?>