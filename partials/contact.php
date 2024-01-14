<section id="contact">         
    <div class = "container-xxl">
        <div class="box-sm border-radius bg-white p-3">                        
            <h3 class = "text-center"><?php echo tr("CONTACT_US"); ?></h3>                    
            <form class="row">
                <div class = "col-md-6">
                    <div class="nav-item nav-link">
                        <i class="fas fa-phone-square"></i>				                        
                        <a href="tel:17869316389" >(786) 931-6389</a>                        
                    </div>
                    <div class="nav-item nav-link">
                        <i class="fas fa-envelope"></i>														  
                        <a href = "mailto:info@automotionmiami.com">info@automotionmiami.com</a>					
			        </div>
                    <div class="nav-item nav-link">
                        <i class="far fa-clock"></i>
                        <label>monday-friday 9.00AM-5.00PM</label>
			        </div>
                    <div class="nav-item nav-link">
                        <i class="fas fa-map-marker-alt"></i>
                        <a href = "https://maps.app.goo.gl/fJ8VKfvHFzDKfqwQA" target="_blank">9605 NW 79TH AVE UNIT 4-5 hialeah gardens, Fl, 33016</a>
			        </div>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3590.2617348408307!2d-80.3247268!3d25.860861699999994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88d9bb008d995f51%3A0x33ed9c710acd106e!2s9605%20NW%2079th%20Ave%204%205%2C%20Hialeah%20Gardens%2C%20FL%2033016%2C%20EE.%20UU.!5e0!3m2!1ses-419!2sve!4v1705259085291!5m2!1ses-419!2sve" width="600" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class = "col-md-6">                    
                    <div class = "appfield">
                        <div class = "border">
                            <label><?php echo tr("NAME"); ?></label>
                            <input type = "text" id = "NOMBRE" name = "NOMBRE" value = "" placeholder="<?php echo tr("NAME"); ?>" required>
                        </div>
                    </div> 
                    <div class = "appfield">
                        <div class = "border">
                            <label><?php echo tr("EMAIL"); ?></label>
                            <input type = "mail" name = "EMAIL" value = "" value = "" placeholder="<?php echo tr("EMAIL"); ?>" required>
                        </div>
                    </div> 
                    <div class = "appfield">
                        <div class = "border">
                            <label><?php echo tr("MESSAGE"); ?></label>                            
                            <textarea name = "MENSAJE" value = "" value = "" placeholder="<?php echo tr("MESSAGE"); ?>" required></textarea>
                        </div>
                    </div> 
                    <div class = "d-flex pt-5">
                       <button class="btn btn-primary float-right"><?php echo tr("CONTACT_US"); ?></button>
                    </div>                 
                </div>
            </form>                        
        </div>         
    </div>
</section>