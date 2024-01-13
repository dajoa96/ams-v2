<?php
$services = [
    'en' => [
        [
            'title' => 'Collision <br>Repair',
            'is_new' => true,
            'price' => '299$',
            'image' => 'assets/img/services/colission-repair.png',
            'description' => "Contact us to arrange a brief 15-minute appointment with a skilled technician. During this time, your vehicle will undergo a thorough inspection, and we'll discuss the necessary  work it requires."
        ],
        [
            'title' => 'Engine <br>Diagnostics',
            'is_new' => false,
            'price' => '199$',
            'image' => 'assets/img/services/engine-diagnostics.png',
            'description' => "Our state-of-the-art facility, we employ cutting-edge diagnostic tools and highly skilled technicians to identify and address engine-related issues with precision."
        ],
        [
            'title' => 'Paintless <br>Dent Repair',
            'is_new' => true,
            'price' => '200$',
            'image' => 'assets/img/services/paintless-dent-repair.png',
            'description' => "Our skilled technicians specialize in the art of precision dent removal, utilizing advanced techniques to seamlessly erase dents and dings from your vehicle's body."
        ],
        [
            'title' => 'Mechanical <br>Services',
            'is_new' => true,
            'price' => '299$',
            'image' => 'assets/img/services/mechanical-service.png',
            'description' => "At our state-of-the-art facility, our skilled technicians combine expertise with cutting-edge technology to address a wide spectrum of mechanical issues, ensuring your vehicle's optimal performance."
        ],
        [
            'title' => 'Paint <br>Repair',
            'is_new' => false,
            'price' => '599$',
            'image' => 'assets/img/services/paint-repair.png',
            'description' => "Our skilled technicians specialize in restoring the beauty of your vehicle's exterior through meticulous paint repairs, addressing everything from minor scratches to more extensive damage."
        ],
        [
            'title' => 'Detailing',
            'is_new' => true,
            'price' => '199$',
            'image' => 'assets/img/services/detailing.png',
            'description' => "Our skilled detailers are dedicated to elevating the appearance of your car, both inside and out, through meticulous cleaning, polishing, and protection processes."
        ]
    ],
    'es' => [
        [
            'title' => 'Reparación <br>de Colisión',
            'is_new' => true,
            'price' => '299$',
            'image' => 'assets/img/services/colission-repair.png',
            'description' => "Póngase en contacto con nosotros para concertar una breve cita de 15 minutos con un técnico cualificado. Durante este tiempo, su vehículo se someterá a una inspección completa, y vamos a discutir el trabajo necesario que requiere."
        ],
        [
            'title' => 'Diagnostico <br>de Motor',
            'is_new' => false,
            'price' => '199$',
            'image' => 'assets/img/services/engine-diagnostics.png',
            'description' => "En nuestras instalaciones de última generación, empleamos herramientas de diagnóstico de vanguardia y técnicos altamente cualificados para identificar y resolver con precisión los problemas relacionados con el motor."
        ],
        [
            'title' => 'Reparación <br>de Rayones de Pintura',
            'is_new' => true,
            'price' => '200$',
            'image' => 'assets/img/services/paintless-dent-repair.png',
            'description' => "Nuestros cualificados técnicos están especializados en el arte de la desabolladura de precisión, utilizando técnicas avanzadas para borrar a la perfección las abolladuras y golpes de la carrocería de su vehículo."
        ],
        [
            'title' => 'Servicio <br> Mecánico',
            'is_new' => true,
            'price' => '299$',
            'image' => 'assets/img/services/mechanical-service.png',
            'description' => "En nuestras instalaciones de última generación, nuestros técnicos cualificados combinan su experiencia con la tecnología más avanzada para abordar una amplia gama de problemas mecánicos, garantizando el rendimiento óptimo de su vehículo."
        ],
        [
            'title' => 'Reparación <br>de Pintura',
            'is_new' => false,
            'price' => '599$',
            'image' => 'assets/img/services/paint-repair.png',
            'description' => "Nuestros cualificados técnicos se especializan en restaurar la belleza del exterior de su vehículo mediante meticulosas reparaciones de pintura, abordando desde pequeños arañazos hasta daños más extensos."
        ],
        [
            'title' => 'Detallado',
            'is_new' => true,
            'price' => '199$',
            'image' => 'assets/img/services/detailing.png',
            'description' => "Nuestros expertos detallistas se dedican a mejorar el aspecto de su coche, tanto por dentro como por fuera, mediante meticulosos procesos de limpieza, pulido y protección."
        ]
    ]
];
global $lang_iso;
?>

<section id="services">
    <div class="container-xxl">
        <div class="row gy-4">
            <?php foreach($services[$lang_iso] as $key => $val): ?>
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