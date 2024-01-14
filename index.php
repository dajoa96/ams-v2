<?php

//Graba un token de session para asegurar que es la sesion activa
ob_start();
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

global $newguid;
if (function_exists('com_create_guid') === true)
{
    $newguid = trim(com_create_guid(), '{}');
} else {
    $newguid = sprintf('%04X%04X-%04X-%04X-%04X-%04X%04X%04X', mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(16384, 20479), mt_rand(32768, 49151), mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(0, 65535));
}

$_SESSION["link"] = $newguid;


include_once "functions/definitions.php";
include_once "functions/misc.php";
include_once "functions/translator.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php echo SITE_NAME; ?></title>
    <?php include_once "partials/head.php"; ?>
</head>
<body>
    <?php include_once "partials/spinner.php"; ?>
    <header>
        <?php include_once "partials/menu.php"; ?>
    </header>
    <main>
        <?php include_once "partials/banner.php"; ?>
        <?php include_once "partials/services.php"; ?>
        <?php include_once "partials/schedule.php"; ?>
        <?php include_once "partials/about-process.php"; ?>
        <?php include_once "partials/contact.php"; ?>
    </main>
    <?php include_once "partials/footer.php"; ?>
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    <?php include_once "partials/requerido.php"; ?>
</body>

</html>