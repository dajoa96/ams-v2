<?php
global $translations;
global $services;

$translations = [
    'LOADING' => 'Cargando',
    'HOME' => 'Inicio',
    'ABOUT' => 'Nosotros',
    'SERVICES' => 'Servicios',
    'LANGUAGE' => 'Lenguaje',
    'CONTACT' => 'Contacto',
    'EN' => 'Ingl&eacute;s',
    'ES' => 'Espa&ntilde;ol',
    'ABOUT_US' => 'Sobre Nosotros',
    'ABOUT_US_PARAGRAPH_1' => "Creando Excelencia Automotriz con Usted como Protagonista",
    'ABOUT_US_PARAGRAPH_2' => "En Miami AutoMotion, Vamos más allá de ser solo un taller de carrocería, somos su socio de confianza en preservar y mejorar la belleza y el rendimiento de su vehículo. Nuestro compromiso con la excelencia no es solo un lema; es una fuerza impulsora que alimenta cada servicio que ofrecemos.",
    'ABOUT_US_PARAGRAPH_3' => "Miami AutoMotion es un destacado taller de reparación y carrocería emplazado en la vibrante ciudad de Miami, Florida. Como un referente de conocimiento automotriz, hemos forjado una reputación por brindar servicios incomparables ajustados a las variadas necesidades de la prospera comunidad que atendemos.",
    'ABOUT_US_FIND_CHANNEL' => 'Encuentra el canal de tu preferencia',
    'SCEDULE_APPOINTMENT' => 'Programar una Cita',
    'SCEDULE_APPOINTMENT_DESCRIPTION' => "Comuníquese con nosotros para agendar una breve cita de 15 minutos con un técnico experto. Durante este tiempo, su vehículo recibirá una inspección detallada, y le explicaremos el trabajo que necesita.",
    'GET_YOUR_CAR_FIXED' => "Repara tu auto",
    'GET_YOUR_CAR_FIXED_DESCRIPTION' => "Confía en nosotros para un cuidado integral, desde las piezas y las reparaciones hasta la gestión del seguro, los alquileres y recibir actualizaciones frecuentes durante el proceso de reparación",
    'VEHICLE_READY' => "Vehículo Listo",
    'VEHICLE_READY_DESCRIPTION' => "Cuenta con nosotros para todo lo que tu auto necesita, desde reparaciones y piezas hasta gestión de seguros, alquileres y actualizaciones frecuentes.",
    'READY_TO_START' => "¿Listo para empezar?",
    'READY_TO_START_PARAGRAPH_1' => "Confía en nosotros para obtener lo mejor en tu vehículo, garantizando que no solo satisfaga sino que sobrepase tus expectativas. Miami Auto Motion",
    'READY_TO_START_PARAGRAPH_2' => "¡Donde el potencial de tu auto cobra vida!",
    'CALL_US_NOW' => "Llamanos ahora",
    'VISIT_US_TODAY' => "¡Visitanos hoy!",
    'OUR_SKILLS' => "Nuestras Habilidades",
    'OUR_SKILLS_DESCRIPTION' => "Usted es nuestra prioridad, Comprendiendo su visión y superando sus expectativas",
    'OUR_VISION' => "Nuestra Visión",
    'OUR_VISION_DESCRIPTION' => "Nuestros servicios integrales, desde reparaciones de colisiones hasta rotulaciones personalizadas, cubrimos todas tus necesidades automotrices.",
    'OUR_GOAL' => "Nuestro Objetivo",
    'OUR_GOAL_DESCRIPTION' => "Nuestros profesionales especializados garantizan precisión y calidad en cada proyecto.",
    'OUR_PURPOSE' => "Nuestro proposito",
    'OUR_PURPOSE_DESCRIPTION' => "Tu satisfacción es nuestro compromiso inquebrantable con la excelencia",
    'DEVELOPED_BY' => "Desarrollado por",
    'GET_FREE_APPOINTMENT' => 'Pide tu cita gratis',
    'NAME' => 'Nombre',
    'EMAIL' => 'Correo',
    'CONTACT_NUMBER' => 'Teléfono',
    'CAR_MODEL' => 'Modelo del Auto',
    'SERVICES' => 'Servicios',
    'GET_APPOIMENT' => 'Solicitar Cita'
];

$services = [
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
];

?>