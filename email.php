 <!-- SweetAlert 2 -->
 <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require './PHPMailer/src/Exception.php';
require './PHPMailer/src/PHPMailer.php';
require './PHPMailer/src/SMTP.php';

if (isset($_POST["submit"])) {

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

        if($mail->send()){
            echo "<script>
                setTimeout(function() {
                    Swal.fire({
                        icon: 'success',
                        title: 'Mensaje enviado correctamente',
                        showConfirmButton: false,
                        timer: 1500
                    });
                }, 100);
            </script>";
        
            // Redirigir después de mostrar la alerta
            echo "<script>
                setTimeout(function() {
                    window.location.href = 'http://localhost:8012/CURRICULUM_WEB/';
                }, 1600); // Esperar 1.6 segundos antes de redirigir
            </script>";
        }else{

                    echo "<script>
                    Swal.fire({
                        icon: 'error',
                        title: 'Error al enviar el mensaje',
                        showConfirmButton: false,
                        timer: 1500
                      })

                      </script>";
                }

    } catch (Exception $e) {

        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
