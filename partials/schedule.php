<?php
global $lang_iso;
include_once "translations/{$lang_iso}.php";
global $services;
?>
<section id="schedule">         
    <div class="container-xxl">
        <div class="box border-radius bg-white">                        
            <h2 class="section-title"><?php echo tr("GET_FREE_APPOINTMENT"); ?></h2>                    
            <form id="frSchedule">
                <div class="row g-3">
                    <div class="col-sm-6 col-lg-4 appfield">
                        <div class="border">
                            <label for="NOMBRE"><?php echo tr("NAME"); ?></label>
                            <input type="text" class="form-control" id="NOMBRE" name="NOMBRE" value="" placeholder="<?php echo tr("NAME"); ?>" required>
                        </div>
                    </div> 
                    <div class="col-sm-6 col-lg-4 appfield">
                        <div class="border">
                            <label for="EMAIL"><?php echo tr("EMAIL"); ?></label>
                            <input type="email" class="form-control" name="EMAIL" id="EMAIL" value="" placeholder="<?php echo tr("EMAIL"); ?>" required>
                        </div>
                    </div> 
                    <div class="col-sm-6 col-lg-4 appfield">
                        <div class="border">
                            <label for="PHONE"><?php echo tr("CONTACT_NUMBER"); ?></label>
                            <input type="text" class="form-control" name="PHONE" id="PHONE" value="" placeholder="<?php echo tr("CONTACT_NUMBER"); ?>" required>
                        </div>
                    </div> 
                    <div class="col-sm-6 col-lg-4 appfield">
                        <div class="border">
                            <label for="CARMODEL"><?php echo tr("CAR_MODEL"); ?></label>
                            <input type="text" class="form-control" name="CARMODEL" id="CARMODEL" value="" placeholder="<?php echo tr("CAR_MODEL"); ?>" required>
                        </div>   
                    </div> 
                    <div class="col-sm-6 col-lg-4 appfield">
                        <div class="border">
                            <label for="SERVICES"><?php echo tr("SERVICES"); ?></label>
                            <select id="SERVICES" class="form-select" name="SERVICES" id="SERVICES" value="" placeholder="<?php echo tr("SERVICES"); ?>" required>
                                <?php foreach($services as $key => $val): ?>
                                    <option value="<?php echo $key ?>"><?php echo $val['title']; ?></option>
                                <?php endforeach; ?> 
                            </select>
                        </div>
                    </div> 
                    <div class="col-sm-6 col-lg-4 appfield">
                        <div class="border">
                            <label for="FECHA"><?php echo tr("DATE"); ?></label>
                            <input type="date" name="FECHA" class="form-control" id="FECHA" value="" placeholder="<?php echo tr("DATE"); ?>" required>
                        </div>
                    </div>
                    <div class="col-12" id="mensajes-schedule"></div>
                </div>
                <div class="d-flex justify-content-center justify-content-md-end">
                    <input type="hidden" id="TOKEN" value="<?php global $newguid; echo $newguid; ?>">
                    <button id="btAppoiment" class="btn btn-primary float-right"><?php echo tr("GET_APPOIMENT"); ?></button>
                </div>                 
            </form>                        
        </div>         
    </div>
</section>