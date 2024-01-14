<?php
global $lang_iso;
include_once "translations/{$lang_iso}.php";
global $services;
?>

<section id="services">
    <div class="container-xxl">
        <div class="row gy-4">            
            <?php foreach($services as $key => $val): ?>
                <div class="col-md-6 col-lg-4">
                    <div class="flip-card">
                        <div class="flip-card-inner border-radius">
                            <div class="flip-card-front-side">
                                <div class="flip-card-container border-radius overflow-hidden <?php echo $val['is_new'] ? 'is-new' : ''; ?>" style="background-image: url('<?php echo $val['image']; ?>');">
                                    <h3 class="flip-card-title text-start"><?php echo $val['title']; ?></h3>
                                    <?php if($val['is_new']): ?>
                                        <div class="flip-card-new">
                                            <span>New</span>
                                        </div>
                                    <?php endif; ?>
                                    <p class="flip-card-price text-start">From <?php echo $val['price']; ?></p>
                                </div>
                            </div>
                            <div class="flip-card-back-side">
                                <div class="flip-card-container">
                                    <p class="flip-card-description"><?php echo $val['description']; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>