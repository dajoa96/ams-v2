<section id="contact">         
    <div class="container-xxl">
        <div class="box border-radius bg-white">                        
            <h2 class="section-title"><?php echo tr("CONTACT_US"); ?></h2>                    
            <form class="row" id = "frContact">
                <div class="col-md-6">
                    <div class="d-flex flex-column h-100">
                        <div class="text-primary">
                            <p>
                                <i class="fas fa-phone-square"></i>&nbsp;
                                <a href="tel:17868177712">+1 (786) 817-7712</a>                        
                            </p>
                            <p>
                                <i class="fas fa-envelope"></i>&nbsp;
                                <a href="mailto:info@automotionmiami.com">info@automotionmiami.com</a>					
                            </p>
                            <p>
                                <i class="far fa-clock"></i>&nbsp;
                                <label><?php echo tr("HOUR_LABOR_DAYS") ?> 9.00AM - 5.00PM</label>
                            </p>
                            <p>
                                <address>
                                    <i class="fas fa-map-marker-alt"></i>&nbsp;
                                    <a href="https://maps.app.goo.gl/fJ8VKfvHFzDKfqwQA" target="_blank">9605 NW 79TH AVE UNIT 4-5 Hialeah Gardens, Fl, 33016</a>
                                </address>
                            </p>
                        </div>
                        <div class="map flex-grow-1">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3590.2617348408307!2d-80.3247268!3d25.860861699999994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88d9bb008d995f51%3A0x33ed9c710acd106e!2s9605%20NW%2079th%20Ave%204%205%2C%20Hialeah%20Gardens%2C%20FL%2033016%2C%20EE.%20UU.!5e0!3m2!1ses-419!2sve!4v1705259085291!5m2!1ses-419!2sve"
                                class="w-100 h-100"
                                allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row g-3">
                        <div class="col-12">
                            <div class="appfield">
                                <div class="border">
                                    <label for="CONTACT_NOMBRE"><?php echo tr("NAME"); ?></label>
                                    <input type="text" class="form-control" id="CONTACT_NOMBRE" maxlength="200" name="NOMBRE" value="" placeholder="<?php echo tr("NAME"); ?>" required>
                                </div>
                            </div> 
                        </div>
                        <div class="col-12">
                            <div class="appfield">
                                <div class="border">
                                    <label for="CONTACT_EMAIL"><?php echo tr("EMAIL"); ?></label>
                                    <input type="mail" class="form-control" id="CONTACT_EMAIL" maxlength="200" name="EMAIL" value="" value="" placeholder="<?php echo tr("EMAIL"); ?>" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="appfield">
                                <div class="border">
                                    <label for="CONTACT_MESSAGE"><?php echo tr("MESSAGE"); ?></label>                            
                                    <textarea name="MENSAJE" class="form-control" id="CONTACT_MESSAGE" maxlength="2000" value="" value="" placeholder="<?php echo tr("MESSAGE"); ?>" required rows="8"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-12" id="mensajes-contact"></div>
                        <div class="col-12">
                            <div class="d-flex justify-content-center justify-content-md-end">
                                <input type="hidden" id="TOKEN" value="<?php global $newguid; echo $newguid; ?>">  
                                <input type="hidden" id="actioncontact" value="contact"> 
                                <button type="submit" class="btn btn-primary float-right"><?php echo tr("CONTACT_US"); ?></button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>