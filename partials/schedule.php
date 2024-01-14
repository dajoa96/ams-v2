<?php
global $lang_iso;
include_once "translations/{$lang_iso}.php";
global $services;
?>

<section id="schedule" class = "d-none">         
    <div class = "container-xxl">
        <div class="box-sm border-radius bg-white">
            
                <form class="row">
                    <div class = "col-md-2">
                        <h3><?php echo tr("GET_FREE_APPOINTMENT"); ?></h3>
                    </div> 
                    <div class = "col-md-2 appfield">
                        <label><?php echo tr("NAME"); ?></label>
                        <input type = "text" name = "NOMBRE" value = "" required>
                    </div> 
                    <div class = "col-md-2 appfield">
                        <label><?php echo tr("EMAIL"); ?></label>
                        <input type = "mail" name = "EMAIL" value = "" required>
                    </div> 
                    <div class = "col-md-2 appfield">
                        <label><?php echo tr("CONTACT_NUMBER"); ?></label>
                        <input type = "text" name = "PHONE" value = "" required>
                    </div> 
                    <div class = "col-md-2 appfield">
                        <label><?php echo tr("CAR_MODEL"); ?></label>
                        <input type = "text" name = "CARMODEL" value = "" required>
                    </div> 
                    <div class = "col-md-2 appfield">
                        <label><?php echo tr("SERVICES"); ?></label>
                        <select name = "SERVICES" required>
                           <?php foreach($services as $key => $val): ?>
                              <option value = "<?php echo $key ?>"><?php echo $val['title']; ?></option>
                           <?php endforeach; ?> 
                        </select>
                    </div> 
                    <div class = "col-12">
                        <button class="btn btn-md btn-primary w-100"><?php echo tr("GET_APPOIMENT"); ?></button>
                    </div> 
                </form>
            
        </div>         
    </div>
</section>