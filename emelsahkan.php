<?php
require 'phpmailer/PHPMailerAutoload.php';
$idpelanggan = $_GET['idpelanggan'];
$sql = "SELECT * FROM pelanggan WHERE idpelanggan = $idpelanggan";
$row = $conn->query($sql)->fetch_assoc();
$emel = $row['emel'];
$nama = $row['nama'];
$tarikh = $row['tarikhbeli'];
$trackingnum = $row['trackingnumber'];

$mail = new PHPMailer;

//$mail->SMTPDebug = 1;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'azrulizwan97@gmail.com';                 // SMTP username
$mail->Password = '0174421269';                           // SMTP password
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;                                    // TCP port to connect to

$mail->setFrom('no-reply@aneyssfragrance.com', 'Aneyss Fragrance Enterprise');
$mail->addAddress($emel);     // Add a recipient
//$mail->addAddress('ellen@example.com');               // Name is optional
$mail->addReplyTo('no-reply@aneyssfragrance.com');
$mail->addCC($emel);
//$mail->addBCC('bcc@example.com');

//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Aneyss Fragrance Enterprise';
$mail->Body    =
'Assalamualaikum Encik/Puan <b>'.$nama.'</b>, Sila klik pautan ini <a href="" untuk aktifkan akaun anda.Terima Kasih';
$mail->AltBody = '';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}
