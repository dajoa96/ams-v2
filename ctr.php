<?php
include_once "functions/definitions.php";
include_once "functions/misc.php";
include_once "functions/translator.php";
if (isset($_POST)){       
    ob_start();
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
    ob_end_flush();
    if ($_SESSION["link"] === $_POST["TOKEN"]){        
       //Valida si la fecha es valida        
        $fecha_actual = strtotime(date("d-m-Y",date()));
        $fecha_entrada = strtotime($_POST["FECHA"]);
        if ($fecha_entrada < $fecha_actual){
            echo tr("DATE_NOT_VALID"); 
        }        
        //Arma el cuerpo
        ob_start();
           echo tr("MAIL_OPENING_APPOIMENT");
           ?>
           <table>                 
              <tbody>
                 <tr><td><strong>Nombre:</strong></td><td>Nombre</td>
                     <td><strong>Teléfono:</strong></td><td><a href = "tel://">Correo:</a></td>
                     <td><strong>Correo:</strong></td><td><a href = "mailto://">Correo:</a></td>
                     <td><strong>Car Model:</strong></td><td>Car Model</td>
                     <td><strong>Services:</strong></td><td>Services</td>
                     <td><strong>Fecha:</strong></td><td>Fecha</td>
                </tr>
              </tbody>  
           </table>
           <?php
           $cuerpo = ob_get_contents();
        ob_end_clean();        
        //Configura el template
        $cuerpocorreo = configurartemplatecorreo($cuerpo, $titulo);
        //Envia el correo        
       echo "*****" . enviarcorreo(implode('<br>', $_POST), 'eduardocolmenares@gmail.com', 'Prueba', []) . "#####";
    }    else {
       //Token no valido
       return tr("TOKEN_NOT_VALID"); 
    }
}