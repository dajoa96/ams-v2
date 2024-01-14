<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
         
require 'PHPMailer/PHPMailermaster/src/PHPMailer.php';
require 'PHPMailer/PHPMailermaster/src/SMTP.php';
 
$mail = new PHPMailer(true);
try {
    //$mail->SMTPDebug = 2;  // Sacar esta línea para no mostrar salida debug
    $mail->isSMTP();
    $mail->Host = 'salvadorstore.com';  // Host de conexión SMTP
    $mail->SMTPAuth = true;
    $mail->Username = 'prueba@salvadorstore.com';                 // Usuario SMTP
    $mail->Password = '1curwC11*.';                           // Password SMTP
    $mail->SMTPSecure = 'ssl';                            // Activar seguridad TLS
    $mail->Port = 465;                                    // Puerto SMTP

    #$mail->SMTPOptions = ['ssl'=> ['allow_self_signed' => true]];  // Descomentar si el servidor SMTP tiene un certificado autofirmado
    #$mail->SMTPSecure = false;				// Descomentar si se requiere desactivar cifrado (se suele usar en conjunto con la siguiente línea)
    #$mail->SMTPAutoTLS = false;			// Descomentar si se requiere desactivar completamente TLS (sin cifrado)
 
    $mail->setFrom('prueba@salvadorstore.com');		// Mail del remitente
    $mail->addAddress('eduardocolmenares@gmail.com');     // Mail del destinatario
 
    $mail->isHTML(true);
    $mail->Subject = 'Contacto desde formulario';  // Asunto del mensaje
    $mail->Body    = 'Este es el contenido del mensaje <b>en negrita!</b>';    // Contenido del mensaje (acepta HTML)
    $mail->AltBody = 'Este es el contenido del mensaje en texto plano';    // Contenido del mensaje alternativo (texto plano)
 
    $mail->send();
    echo 'El mensaje ha sido enviado';
} catch (Exception $e) {
    echo 'El mensaje no se ha podido enviar, error: ', $mail->ErrorInfo;
}
