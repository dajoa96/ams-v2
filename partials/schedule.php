<?php
global $lang_iso;
include_once "translations/{$lang_iso}.php";
global $services;

?>

<section id="schedule" class = "d-none">         
    <div class = "container-xxl">
        <div class="box-sm border-radius bg-white p-3">                        
            <h3 class = "text-center"><?php echo tr("GET_FREE_APPOINTMENT"); ?></h3>                    
            <form id = "frSchedule">
                <div class = "row">
                    <div class = "col-md-2 appfield">
                        <div class = "border">
                            <label><?php echo tr("NAME"); ?></label>
                            <input type = "text" id = "NOMBRE" name = "NOMBRE" value = "" placeholder="<?php echo tr("NAME"); ?>" required>
                        </div>
                    </div> 
                    <div class = "col-md-2 appfield">
                        <div class = "border">
                            <label><?php echo tr("EMAIL"); ?></label>
                            <input type = "email" name = "EMAIL" id = "EMAIL" value = "" placeholder="<?php echo tr("EMAIL"); ?>" required>
                        </div>
                    </div> 
                    <div class = "col-md-2 appfield">
                        <div class = "border">
                            <label><?php echo tr("CONTACT_NUMBER"); ?></label>
                            <input type = "text" name = "PHONE" id = "PHONE" value = "" placeholder="<?php echo tr("CONTACT_NUMBER"); ?>" required>
                        </div>
                    </div> 
                    <div class = "col-md-2 appfield">
                        <div class = "border">
                        <label><?php echo tr("CAR_MODEL"); ?></label>
                        <input type = "text" name = "CARMODEL" id = "CARMODEL" value = "" placeholder="<?php echo tr("CAR_MODEL"); ?>" required>
                        </div>   
                    </div> 
                    <div class = "col-md-2 appfield">
                        <div class = "border">
                            <label><?php echo tr("SERVICES"); ?></label>
                            <select id = "SERVICES" name = "SERVICES" id = "SERVICES" value = "" placeholder="<?php echo tr("SERVICES"); ?>" required>
                            <?php foreach($services as $key => $val): ?>
                                <option value = "<?php echo $key ?>"><?php echo $val['title']; ?></option>
                            <?php endforeach; ?> 
                            </select>
                        </div>
                    </div> 
                    <div class = "col-md-2 appfield">
                        <div class = "border">
                            <label><?php echo tr("DATE"); ?></label>
                            <input type = "date" name = "FECHA" id = "FECHA" value = "" placeholder="<?php echo tr("DATE"); ?>" required>
                        </div>
                    </div> 
                </div>
                <div class = "d-flex pt-5">
                    <input type = "hidden" id = "TOKEN" value = "<?php global $newguid; echo $newguid; ?>">
                    <button id="btAppoiment" class="btn btn-primary float-right"><?php echo tr("GET_APPOIMENT"); ?></button>
                </div>                 
            </form>                        
        </div>         
    </div>
</section>