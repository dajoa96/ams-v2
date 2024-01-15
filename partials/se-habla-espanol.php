<?php
global $lang_iso;

if($lang_iso != 'es'): ?>
    <div class="se-habla-espanol hidden">
        <p class="m-2">¡Hola! ¡Tambien se Habla <a href="?lang=es">Español! <img src="assets/img/es.png" alt="Español" width="30px" height="20px"></a></p>
        <hr class="m-0">
        <div class="btn-group w-100" role="group">
            <button type="button" class="btn btn-sm btn-outline-primary border-0 border-radius-0 w-50" role="close-se-habla-espanol"><?php echo tr("CLOSE"); ?></button>
            <button type="button" class="btn btn-sm btn-outline-primary w-50 border-0 border-radius-0 border-start" role="never-show-se-habla-espanol"><?php echo tr("NEVER_SHOW"); ?></button>
        </div>
    </div>
<?php endif; ?>