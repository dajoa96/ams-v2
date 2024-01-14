<?php
include_once "functions/definitions.php";
include_once "functions/misc.php";
include_once "functions/translator.php";
if (isset($_POST)){       
    ob_start();
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }

    if ($_SESSION["link"] === $_POST["TOKEN"]){        
       //Valida si la fecha es valida        
        $fecha_actual = strtotime(date("d-m-Y",date()));
        $fecha_entrada = strtotime($_POST["FECHA"]);
        if ($fecha_entrada < $fecha_actual){
            echo tr("DATE_NOT_VALID"); 
        }        
        //Envia el correo
       echo "*****" . enviarcorreo(implode('<br>', $_POST), 'eduardocolmenares@gmail.com', 'Prueba', []) . "#####";
    }    else {
       //Token no valido
       return tr("TOKEN_NOT_VALID"); 
    }
}