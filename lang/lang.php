<?php
switch($lang) {
  case 'EN':
  $titles = array(
    "home"=>"Home",
    "about"=>"About me",
    "services"=>"Services",
    "blog"=>"Blog",
    "contact"=>"Contact",
    "portfolio" => "DevFolio",
    "message_me" => "Send message"
  );
  $labels = array(
    "name" => "Name",
    "profile" => "Profile",
    "email" => "Email",
    "phone" => "Phone",
    "skills" => "Skills",
    "service_1" => "Web Development",
    "service_2" => "App Development",
    "service_3" => "UX Design",
    "service_4" => "E-Commerce",
    "service_5" => "Software Consulting",
    "service_6" => "Database Development",
    "achievement_1" => "Projects Completed",
    "achievement_2" => "Years of Experience",
    "achievement_3" => "Git Contributions",
    "achievement_4" => "Apps Published",
    "your_name" => "Your name",
    "your_email" => "Your email",
    "subject" => "Subject",
    "message" => "Message",
    "your_name_validation" => "Please enter at least 4 characters",
    "your_email_validation" => "Please enter a valid email",
    "subject_validation" => "Please enter at least 8 characters",
    "message_validation" => "Please enter your message",
    "send_message" => "Send message",
    "message_sent" => "Thank you! I will be contacting you soon"
  );
  $texts = array(
    "name" => "Roberto H. Pérez",
    "profile" => "Full Stack Developer",
    "email" => "roberto@digitable.com.mx",
    "phone" => "(55) 7671 2560",
    "address" => "Marina Nacional 200, Miguel Hidalgo, CDMX",
    "about_me_p1" => "I am a full stack web and app developer, with more than 5 years of experience providing services for the public and private sectors.",
    "about_me_p2" => "I have been actively involved in a large amount of diverse projects, including management systems, payroll accounting, geolocation mobile native and hybrid apps, online payment stores and data analysis systems, among others.",
    "about_me_p3" => "I have also worked as a software consultant, helping organizations to make decicions concerning to their information systems.",
    "about_me_p4" => "I have great experience implementing agile development methods in work teams, and using version control and cooperative tools.",
    "service_1" => "Full-stack web-based application development. Website launching. Web Services implementation and integration.",
    "service_2" => "Full-stack native and hybrid mobile applications, ready to publish on digital distribution platforms.",
    "service_3" => "Design and redesign of responsive, functional visual interfaces, focused on granting the best user experience.",
    "service_4" => "WordPress/WooCommerce online stores development and improvement. Online payment services integration.",
    "service_5" => "Analysis, correction and maintenance of pre-existing systems and processes. Vulnerability and growth opportunity detection.",
    "service_6" => "Design, development and maintenance of relational database systems. Database normalization and cleansing.",
    "contact" => "Have a project in mind? Let's get a coffee and discuss your ideas.",
  );
  break;
  case 'ES':
  default:
  $lang = 'ES';
  $titles = array(
    "home"=>"Inicio",
    "about"=>"Acerca de mí",
    "services"=>"Servicios",
    "blog"=>"Blog",
    "contact"=>"Contacto",
    "portfolio" => "DevFolio",
    "message_me" => "Envíame un mensaje"
  );
  $labels = array(
    "name" => "Nombre",
    "profile" => "Perfil",
    "email" => "Email",
    "phone" => "Teléfono",
    "skills" => "Habilidades",
    "service_1" => "Desarrollo Web",
    "service_2" => "Desarrollo Móvil",
    "service_3" => "Diseño UX",
    "service_4" => "Comercios en Línea",
    "service_5" => "Consultoría en Sistemas",
    "service_6" => "Desarrollo DB",
    "achievement_1" => "Proyectos Completados",
    "achievement_2" => "Años de Experiencia",
    "achievement_3" => "Contribuciones",
    "achievement_4" => "Apps Publicadas",
    "your_name" => "Tu nombre",
    "your_email" => "Tu email",
    "subject" => "Asunto",
    "message" => "Mensaje",
    "your_name_validation" => "Por favor, introduce al menos 4 caracteres",
    "your_email_validation" => "Por favor, introduce una dirección de email válida",
    "subject_validation" => "Por favor, introduce al menos 8 caracteres",
    "message_validation" => "Por favor, introduce tu mensaje",
    "send_message" => "Enviar",
    "message_sent" => "¡Muchas gracias! Pronto me pondré en contacto contigo."
  );
  $texts = array(
    "name" => "Roberto H. Pérez",
    "profile" => "Desarrollador Full Stack",
    "email" => "roberto@digitable.com.mx",
    "phone" => "(55) 7671 2560",
    "address" => "Marina Nacional 200, Miguel Hidalgo, CDMX",
    "about_me_p1" => "Soy un desarrollador full stack de sistemas y aplicaciones web y móviles, con más de 5 años de experiencia desempeñándome tanto en instituciones públicas como en la iniciativa privada.",
    "about_me_p2" => "He participado activamente en una gran cantidad y diversidad de proyectos que incluyen sistemas de gestión interna, cálculo de nómina, aplicaciones móviles con funciones de geolocalización, tiendas con pagos en línea y sistemas de análisis de información, entre otros.",
    "about_me_p3" => "Me he desempeñado además como consultor de software, ayudando a organizaciones en la toma de decisiones con respecto a sistemas de información.",
    "about_me_p4" => "Cuento con gran experiencia en la implementación de metodologías ágiles en equipos de trabajo, y en el manejo de herramientas de colaboración y de control de versiones.",
    "service_1" => "Desarrollo de aplicaciones basadas en web. Levantamiento de sitios. Integración de Web Services.",
    "service_2" => "Desarrollo full-stack de aplicaciones móviles nativas e híbridas, listas para su distribución en plataformas digitales.",
    "service_3" => "Diseño y rediseño de interfaces visuales responsivas y funcionales, orientadas a ofrecer la mejor experiencia de usuario.",
    "service_4" => "Desarrollo y mejoramiento de comercios basados en WordPress/WooCommerce. Integración de diversos servicios de pagos en línea.",
    "service_5" => "Análisis, corrección y mantenimiento de sistemas y procesos existentes. Detección de vulnerabilidades y oportunidades de crecimiento.",
    "service_6" => "Diseño, desarrollo e implementación de sistemas de bases de datos relacionales. Normalización y saneamiento de bases de datos ya existentes.",
    "contact" => "¿Tienes un proyecto en mente? Tomemos un café y discutamos tus ideas.",
  );
  break;
}
$skills = array(
  array("PHP", 95),
  array("HTML5/CSS3/Bootstrap", 80),
  array("JS/jQuery/Ajax", 85),
  array("Java/Android", 90),
  array("WordPress/WooCommerce", 85),
  array("Laravel/React", 75),
  array("Angular/Ionic/Cordova", 80),
  array("MySQL/PostgreSQL/Oracle", 95),
  array("Node.js", 75),
  array("Linux Servers", 85),
);

$contact = array(
  "phone" => array("(55) 7671 2560", "tel:5576712560"),
  "email" => array("roberto@digitable.com.mx", "mailto:roberto@digitable.com.mx"),
  "whatsapp" => array("+52 1 (55) 7671 2560", "https://wa.me/+5215576712560"),
  "linkedin" => array("linkedin.com/in/rhperez/", "https://www.linkedin.com/in/rhperez/"),
  "facebook" => array("facebook.com/robertohciencias", "https://www.facebook.com/robertohciencias"),
  "instagram" => array("instagram.com/robertsfoobar", "https://www.instagram.com/robertsfoobar"),
  "github" => array("github.com/rhperez", "https://github.com/rhperez"),
);
 ?>
