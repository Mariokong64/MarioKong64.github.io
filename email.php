<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require './PHPMailer/src/Exception.php';
require './PHPMailer/src/PHPMailer.php';
require './PHPMailer/src/SMTP.php';

class Mensaje
{

    public static function enviarMensaje()
    {

        if (isset($_POST["mensaje"])) {

            // Declaramos las variables para el mensaje
            $name = "Mario Alberto";
            $email = "as.mario.152653@gmail.com";
            $subject = "Mensaje desde el formulario de contacto";
            $message = $_POST["mensaje"] . "\n\n  | Nombre del emisor: " . $_POST["nombreEmisor"] . "\n  | Correo del emisor: " . $_POST["emailEmisor"];


            //Create an instance; passing `true` enables exceptions
            $mail = new PHPMailer(true);

            try {

                //Server settings
                $mail->CharSet = 'UTF-8';
                $mail->isSMTP();                                            //Send using SMTP
                $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
                $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                $mail->Username   = 'porfolio.form@gmail.com';                     //SMTP username
                $mail->Password   = 'miiupacvqtkqnuye';                               //SMTP password
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
                $mail->Port       = 465;                                    //Normal (465). TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

                //Recipients
                $mail->setFrom($email, $name);
                $mail->addAddress($email);     //Add a recipient

                //Content
                $mail->isHTML(true);                                  //Set email format to HTML
                $mail->Subject = $subject;
                $mail->Body    = $message;
                $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

                $mail->send();

                echo "<script>
                Swal.fire({
                    icon: 'success',
                    title: 'Mensaje enviado correctamente',
                    showConfirmButton: false,
                    timer: 1500
                  })

                  </script>";
            } catch (Exception $e) {

                echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            }
        }
    }
}
