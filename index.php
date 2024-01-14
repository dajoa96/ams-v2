<?php
include_once "functions/definitions.php";
include_once "functions/misc.php";
include_once "functions/translator.php";
// echo $lang_iso;
// exit;
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
        <?php include_once "partials/banner.php"; ?>
    </header>
    <main>
        <?php include_once "partials/services.php"; ?>
        <?php include_once "partials/schedule.php"; ?>
        <?php include_once "partials/about-process.php"; ?>
    </main>
    <?php include_once "partials/footer.php"; ?>
    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    <?php include_once "partials/requerido.php"; ?>
</body>

</html>