<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


function printpre($pre) {
    echo "<pre>";
    print_r($pre);
    echo "</pre>";
}

function enviarcorreo($cuerpo, $destinatario, $asunto, $cco){
             
    require 'PHPMailer/PHPMailer/PHPMailermaster/src/PHPMailer.php';
    require 'PHPMailer/PHPMailer/PHPMailermaster/src/SMTP.php';
     
    $mail = new PHPMailer(true);
    try {
        //$mail->SMTPDebug = 2;  // Sacar esta línea para no mostrar salida debug
        $mail->isSMTP();
        $mail->Host = 'smtp.mi.com.co';  // Host de conexión SMTP
        $mail->SMTPAuth = true;
        $mail->Username = 'noreply@ingasdelcaribe.com';                 // Usuario SMTP
        $mail->Password = 'Ingas2021';                           // Password SMTP
        $mail->SMTPSecure = 'ssl';                            // Activar seguridad TLS
        $mail->Port = 465;     // Puerto SMTP

     
        $mail->setFrom('noreply@ingasdelcaribe.com');     // Mail del remitente
        $mail->addAddress($destinatario);     // Mail del destinatario
        
        foreach ($cco as $key) {
            $mail->addBCC($key);            
        }
        
        $mail->isHTML(true);
        $mail->Subject = $asunto;  // Asunto del mensaje
        $mail->Body    = $cuerpo;    // Contenido del mensaje (acepta HTML)
        $mail->AltBody = 'Para poder visualizar este correo correctamente debe visualizarlo desde un navegador moderno, o en outlook';    // Contenido del mensaje alternativo (texto plano)
     
        $exito = $mail->send();
        if ($exito){
           return ("1");}
        else{
           return ("");} 
        
    } catch (Exception $e) {
        return($mail->ErrorInfo);
    }
}

?>