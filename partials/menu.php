<?php
global $lang_iso;
global $available_languages;
?>
<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg navbar-dark justify-content-center justify-content-start-sm py-0">
    <div class="container-xxl">
        <div class="logo-wrapper">
            <a href="" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
                <img src="assets/img/logo.png" width="318px" alt="Logo" class="logo">
            </a>
            <button type="button" class="navbar-toggler me-1" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="#services" class="btn btn-sm btn-primary text-start justify-content-start"><i class="fas fa-bars"></i><?php echo tr("SERVICES"); ?></a>
                <a href="#about-process" class="nav-item nav-link"><?php echo tr("ABOUT_US"); ?></a>
                <a href="#contact" class="nav-item nav-link"><?php echo tr("CONTACT"); ?></a>
                <a href="#schedule" class="nav-item nav-link schedule" data-key="-1"><?php echo tr("SCHEDULE_A_REPAIR"); ?></a>
                <a href="tel:17868177712" class="nav-item nav-link">+1 (786) 817-7712</a>
                <?php if (is_array($available_languages) && count($available_languages)): ?>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><img src="assets/img/<?php echo $lang_iso; ?>.png" alt="Selected Language" width="30px" height="20px"></a>
                    <div class="dropdown-menu dropdown-menu-end fade-up m-0" style="left: unset; right: 0;">
                        <?php foreach($available_languages as $key): ?>
                            <?php if($key == $lang_iso): ?>
                            <a class="dropdown-item">
                            <?php else: ?>
                            <a href="?lang=<?php echo $key; ?>" class="dropdown-item">
                            <?php endif;?>
                                <img src="assets/img/<?php echo $key; ?>.png" alt="<?php echo tr(strtoupper($lang_iso)); ?>" width="30px" height="20px"> <?php echo tr(strtoupper($key)); ?>
                            </a>
                        <?php endforeach; ?>
                    </div>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <?php include_once "partials/se-habla-espanol.php"; ?>
</nav>
<!-- Navbar End -->