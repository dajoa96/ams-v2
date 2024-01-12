<?php
global $lang_iso;
global $available_languages;
?>
<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0 justify-content-center justify-content-start-sm">
    <a href="" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
        LOGO
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            <a href="#services" class="nav-item nav-link active">BS Services</a>
            <a href="#about" class="nav-item nav-link">About Us</a>
            <a href="#contact" class="nav-item nav-link">Contact</a>
            <a href="#services" class="nav-item nav-link">Schedule a Repair</a>
            <a href="tel:17869316389" class="nav-item nav-link">(786) 931-6389</a>
            <?php if (is_array($available_languages) && count($available_languages)): ?>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Language <img src="assets/img/<?php echo $lang_iso; ?>.png" alt="Selected Language" width="30px" height="20px"></a>
                <div class="dropdown-menu fade-up m-0">
                    <?php foreach($available_languages as $key): ?>
                        <?php if($key == $lang_iso): ?>
                        <a class="dropdown-item">
                        <?php else: ?>
                        <a href="?lang=<?php echo $key; ?>" class="dropdown-item">
                        <?php endif;?>
                            <img src="assets/img/<?php echo $key; ?>.png" alt="Selected Language" width="30px" height="20px">
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </div>
</nav>
<!-- Navbar End -->