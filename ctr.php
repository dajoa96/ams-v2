<?php
include_once "functions/definitions.php";
include_once "functions/misc.php";
include_once "functions/translator.php";
    ob_start();
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
    ob_end_flush();
    if ($_SESSION["link"] === $_POST["TOKEN"]){              
      if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        //Limpia la matriz
        array_walk($_POST, 'limpiarCadena');
        //Determina si esta recibiendo la validacion de usuario
        if (isset($_POST["action"])) {
            switch ($_POST["action"]) {            
                case "appoinment":
                    if (validarcaptcha()) {
                       echo makeappoiment();
                    } else {
                       echo json_encode(array(1, tr("ERROR_CAPTCHA"))); 
                    }
                    break;
                case "contact":                     
                    echo makecontact();
                    break;
            } //end switch
        } //Valida que haya action
      } //Pregunta si es POST
    }    else {
       //Token no valido
       return json_encode(array(1, tr("TOKEN_NOT_VALID"))); 
    }


function makeappoiment(){
    global $services;
    global $available_languages;
    $lang = isset($_POST['LANG']) && $_POST['LANG'] != "" && in_array($_POST['LANG'], $available_languages) ? $_POST['LANG'] : 'en';
   //Arma el cuerpo
    ob_start();           
    ?>        
        <h3>You have a new appointment request:</h3>
        <div style = "text-align:center; width:100%;display:grid">
            <table>                                      
                <tr style="background-color:silver">
                    <td><strong>Name:</strong></td><td><?php echo $_POST["NOMBRE"]; ?></td>
                </tr>
                <tr>
                    <td><strong>Phone:</strong></td><td><a href = "tel://<?php echo $_POST['PHONE']; ?>"><?php echo $_POST["PHONE"]; ?></a></td>       
                </tr>
                <tr style="background-color:silver">
                    <td><strong>Mail:</strong></td><td><a href = "mailto://<?php echo $_POST['EMAIL']; ?>"><?php echo $_POST["EMAIL"]; ?></a></td>
                </tr>                                    
                <tr>
                    <td><strong>Car Model:</strong></td><td><?php echo $_POST["CARMODEL"]; ?></td>
                </tr>
                <tr style="background-color:silver">                       
                    <td><strong>Services:</strong></td><td><?php echo $services[$_POST["SERVICES"]]["title"]; ?></td>
                </tr>
                <tr>
                    <td><strong>Selected Date:</strong></td><td><?php echo $_POST["FECHA"]; ?></td>
                </tr>                                
            </table>
        </div>
    <?php
    $cuerpo = ob_get_contents();
    ob_end_clean();        
    //Configura el template
    $titulo = 'NEW APPOINTMENT REQUEST';
    $cuerpocorreo = configurartemplatecorreo($cuerpo, $titulo);
    //Envia el correo        
    $rs = enviarcorreo($cuerpocorreo, 'eduardocolmenares@gmail.com', 'New Appointment Request', []);
    if ($rs == 1) return json_encode(array(0, tr("EXITO_CORREO", $lang)));
    return json_encode(array(1, tr("ERROR_CORREO", $lang) . " " . $rs));
}

function makecontact(){
    global $available_languages;
    $lang = isset($_POST['LANG']) && $_POST['LANG'] != "" && in_array($_POST['LANG'], $available_languages) ? $_POST['LANG'] : 'en';
    //Arma el cuerpo
    ob_start();
    ?>        
        <h3>You have a new contact message:</h3>
        <div style = "text-align:center; width:100%;display:grid">
            <table>                                      
                <tr>
                    <td><strong>Name:</strong></td><td><?php echo $_POST["NOMBRE"]; ?></td>
                </tr>                   
                <tr>
                    <td><strong>Mail:</strong></td><td><a href = "mailto://<?php echo $_POST['EMAIL']; ?>"><?php echo $_POST["EMAIL"]; ?></a></td>
                </tr>                   
                <tr>
                    <td><strong>Customer Date:</strong></td><td><?php echo $_POST["FECHA"] . " " . $_POST["HORA"];?></td>
                </tr>                                                 
                <tr>
                    <td><strong>Message:</strong></td><td><?php echo $_POST["CONTACT_MESSAGE"]; ?></td>
                </tr>                                      
            </table>
        </div>
    <?php
    $cuerpo = ob_get_contents();
    ob_end_clean();        
    //Configura el template
    $titulo = 'NEW CONTACT MESSAGE';
    $cuerpocorreo = configurartemplatecorreo($cuerpo, $titulo);
    //Envia el correo        
    $rs = enviarcorreo($cuerpocorreo, 'eduardocolmenares@gmail.com', 'New Contact Message', []);
    if ($rs == 1) return json_encode(array(0, tr("EXITO_CORREO", $lang)));
    return json_encode(array(1, tr("ERROR_CORREO", $lang) . " " . $rs));
}

function configurartemplatecorreo($cuerpo, $titulo){
   $template          = file_get_contents("templates/template.html");
   $noreply  = "<p>This is an automatic email, sent by <strong>Auto Motion Services</strong>. Please do not reply.</p>";

   $protocolo = $_SERVER['REQUEST_SCHEME'].'://';
   $host = $_SERVER['HTTP_HOST'];
   $rutalogo = $protocolo.$host. "/assets/img/logo.png";

   $logo     = "<img src='{$rutalogo}' alt='Logo' class='logo'>";
   $template = str_replace("%%NO_REPLY%%",  $noreply,$template);
   $template = str_replace("%%TITULO%%",    $titulo, $template);
   $template = str_replace("%%CUERPO%%",    $cuerpo, $template);
   $template = str_replace("%%LOGO%%",      $logo,   $template);
   return $template;
}

function validarcaptcha() {
    //Valida si el post recibio la respuesta
    $respuesta = "";
    if (isset($_POST['g-recaptcha-response'])) {
        $respuesta = $_POST['g-recaptcha-response'];
    }
    if ($respuesta != "") {
        //La ip del usuario
        $ipuser = $_SERVER['REMOTE_ADDR'];
        //Tu clave secretra de recaptcha
        $clavesecreta = '6Le17VEpAAAAAAnDf3D8ElEZa1AinAYqp3pllCOA';
        //La url preparada para enviar
        $urlrecaptcha = "https://www.google.com/recaptcha/api/siteverify?secret=" . $clavesecreta . "&response=" . $respuesta . "&remoteip=" . $ipuser;

        //Leemos la respuesta (suele funcionar solo en remoto)
        $respuesta = file_get_contents($urlrecaptcha);

        //Comprobamos el success
        $dividir = explode('"success":', $respuesta);
        $obtener = explode(',', $dividir[1]);

        //Obtenemos el estado
        $estado = trim($obtener[0]);

        if ($estado == 'true') {
            //Si es ok
            return (true);
        } else if ($estado == 'false') {
            //Si es error
            return (false);
        }
    } else {
        return (false);
    }
} //Validar captcha  

?>