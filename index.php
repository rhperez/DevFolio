<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Digitable | Home</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">
  <meta property="og:url" content="https://www.digitable.com.mx/home/index.php">
  <meta property="og:title" content="Digitable">
  <meta property="og:type" content="website">
  <meta property="og:description" content="Desarrollo full-stack web y de apps">
  <meta property="og:image" content="https://www.digitable.com.mx/home/img/og-image.jpg">
  <meta property="og:image:type" content="image/jpeg">
  <meta property="og:image:width" content="200">
  <meta property="og:image:height" content="200">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap CSS File -->
  <link href="../bootstrap-4.3.1/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="../lib/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="../lib/animate/animate.min.css" rel="stylesheet">
  <link href="../lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="../lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style-sky-blue.css" rel="stylesheet">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto+Slab&display=swap" rel="stylesheet">


</head>

<?php
  if (!isset($_GET['lang'])) {
    $lang = 'ES';
  } else {
    $lang = $_GET['lang'];
  }
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
    $posts = array(
      array(
        "title"=>"¿Son tus contraseñas seguras?",
        "description"=>"El robo de identidades digitales está a la orden del día. Probablemente en alguna ocasión te ha llegado un mensaje a la bandeja de spam de tu correo diciéndote que conocen tu contraseña, e incluso te la muestran. ¿Te has preguntado cómo pasó?",
        "category"=>"Seguridad",
        "author"=>"Roberto",
        "date"=>"3 días",
        "imgsrc"=>"img/post-1.jpg",
      ),
      array(
        "title"=>"Error 404! Engagement not found",
        "description"=>"Está permitido tener errores. Lo que no está permitido, es no estar preparado para manejarlos. A nadie le gusta navegar por un sitio, y de repente ver una fea página de error que acaba con la experiencia de usuario.",
        "category"=>"Web Design",
        "author"=>"Roberto",
        "date"=>"2 sem",
        "imgsrc"=>"img/post-2.jpg",
      ),
      array(
        "title"=>"Seguridad y comercio en línea",
        "description"=>"Realizar compras en línea es una actividad cada vez más común. Sin embargo, también abundan los intentos de fraude, robo de identidad y de datos bancarios.",
        "category"=>"Seguridad",
        "author"=>"Roberto",
        "date"=>"3 sem",
        "imgsrc"=>"img/post-3.jpg",
      ),
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
    $posts = array(
      array(
        "title"=>"¿Son tus contraseñas seguras?",
        "description"=>"El robo de identidades digitales está a la orden del día. Probablemente en alguna ocasión te ha llegado un mensaje a la bandeja de spam de tu correo diciéndote que conocen tu contraseña, e incluso te la muestran. ¿Te has preguntado cómo pasó?",
        "category"=>"Seguridad",
        "author"=>"Roberto",
        "date"=>"3 días",
        "imgsrc"=>"img/post-1.jpg",
      ),
      array(
        "title"=>"Error 404: Engagement not found!",
        "description"=>"Está permitido tener errores. Lo que no está permitido es no estar preparado para manejarlos. A nadie le gusta navegar por un sitio, y encontrarte con una página de error que acaba con la experiencia de usuario.",
        "category"=>"Web Design",
        "author"=>"Roberto",
        "date"=>"2 sem",
        "imgsrc"=>"img/post-2.jpg",
      ),
      array(
        "title"=>"Seguridad y comercio en línea",
        "description"=>"Realizar compras en línea es una actividad cada vez más común. Sin embargo, también abundan los intentos de fraude, robo de identidad y de datos bancarios. Aprende a navegar en las tiendas de manera segura.",
        "category"=>"Seguridad",
        "author"=>"Roberto",
        "date"=>"3 sem",
        "imgsrc"=>"img/post-3.jpg",
      ),
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

<body id="page-top">

  <!--/ Nav Star /-->
  <nav class="navbar navbar-b navbar-trans navbar-expand-md fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll" href="#page-top" style="font-family: 'Roboto Slab', serif;">digitable</a>
      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault"
        aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <div class="navbar-collapse collapse justify-content-end" id="navbarDefault">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link js-scroll active" href="#home"><?php echo $titles['home'];?></a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="#service"><?php echo $titles['services'];?></a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="#portfolio"><?php echo $titles['portfolio'];?></a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="#blog"><?php echo $titles['blog'];?></a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="#about"><?php echo $titles['about'];?></a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="#contact"><?php echo $titles['contact'];?></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!--/ Nav End /-->

  <!--/ Intro Skew Start /-->
  <div id="home" class="intro route bg-image mb-5" style="background-image: url(img/intro-bg.png)">
    <div class="overlay-itro"></div>
    <div class="intro-content display-table">
      <div class="table-cell">
        <div class="container">
          <!--<p class="display-6 color-d">Hello, world!</p>-->
          <img src="img/logo-white.png" style="height:100px;" class="img-fluid b-shadow-a mb-5" alt="Digitable">
          <p class="intro-subtitle"><span class="text-slider-items">Dream it,Code it,Make it real</span><strong class="text-slider"></strong></p>
          <!-- <p class="pt-3"><a class="btn btn-primary btn js-scroll px-4" href="#about" role="button">Learn More</a></p> -->
        </div>
      </div>
    </div>
  </div>
  <!--/ Intro Skew End /-->

  <!--/ Section Services Start /-->
  <section id="service" class="services-mf route">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="title-box text-center">
            <h3 class="title-a">
              <?php echo $titles['services'];?>
            </h3>
            <p class="subtitle-a">
              Lorem ipsum, dolor sit amet consectetur adipisicing elit.
            </p>
            <div class="line-mf"></div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="service-box">
            <div class="service-ico">
              <span class="ico-circle fa-stack">
                <i class="fas fa-laptop fa-stack-1x" style="font-size:0.9em; padding-top:5px;"></i>
                <i class="fas fa-code fa-stack-1x" style="font-size:0.4em; padding-top:22px;"></i>
              </span>
            </div>
            <div class="service-content">
              <h2 class="s-title"><?php echo $labels['service_1'];?></h2>
              <p class="s-description text-center">
                <?php echo $texts['service_1'];?>
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="service-box">
            <div class="service-ico">
              <span class="ico-circle fa-stack">
                <i class="fas fa-mobile-alt fa-stack-1x"></i>
                <i class="fas fa-code fa-stack-1x" style="font-size:0.3em; padding-top:30px;"></i>
              </span>
            </div>
            <div class="service-content">
              <h2 class="s-title"><?php echo $labels['service_2'];?></h2>
              <p class="s-description text-center">
                <?php echo $texts['service_2'];?>
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="service-box">
            <div class="service-ico">
              <span class="ico-circle"><i class="fas fa-sm fa-swatchbook"></i></span>
            </div>
            <div class="service-content">
              <h2 class="s-title"><?php echo $labels['service_3'];?></h2>
              <p class="s-description text-center">
                <?php echo $texts['service_3'];?>
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="service-box">
            <div class="service-ico">
              <span class="ico-circle"><i class="fas fa-sm fa-shopping-cart"></i></span>
            </div>
            <div class="service-content">
              <h2 class="s-title"><?php echo $labels['service_4'];?></h2>
              <p class="s-description text-center">
                <?php echo $texts['service_4'];?>
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="service-box">
            <div class="service-ico">
              <span class="ico-circle fa-stack">
                <i class="fa fa-search fa-stack-1x"></i>
                <i class="fas fa-bug fa-stack-1x" style="font-size:0.3em; padding-top:30px; padding-right:12px;"></i>
              </span>
            </div>
            <div class="service-content">
              <h2 class="s-title"><?php echo $labels['service_5'];?></h2>
              <p class="s-description text-center">
                <?php echo $texts['service_5'];?>
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="service-box">
            <div class="service-ico">
              <span class="ico-circle fa-stack">
                <i class="fas fa-project-diagram fa-stack-1x" style="font-size:0.6em; padding-top:8px;"></i>
                <i class="fas fa-database fa-stack-1x" style="font-size:0.7em; padding-top:30px;"></i>

              </span>
            </div>
            <div class="service-content">
              <h2 class="s-title"><?php echo $labels['service_6'];?></h2>
              <p class="s-description text-center">
                <?php echo $texts['service_6'];?>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ Section Services End /-->

  <div class="section-counter paralax-mf bg-image" style="background-image: url(img/counters-bg.jpg)">
    <div class="overlay-mf"></div>
    <div class="container">
      <div class="row">
        <div class="col-sm-3 col-lg-3">
          <div class="counter-box counter-box pt-4 pt-md-0">
            <div class="counter-ico">
              <span class="ico-circle"><i class="fas fa-check"></i></span>
            </div>
            <div class="counter-num">
              <p class="counter">52</p>
              <span class="counter-text"><?php echo $labels["achievement_1"];?></span>
            </div>
          </div>
        </div>
        <div class="col-sm-3 col-lg-3">
          <div class="counter-box pt-4 pt-md-0">
            <div class="counter-ico">
              <span class="ico-circle"><i class="fas fa-calendar"></i></span>
            </div>
            <div class="counter-num">
              <p class="counter">7</p>
              <span class="counter-text"><?php echo $labels["achievement_2"];?></span>
            </div>
          </div>
        </div>
        <div class="col-sm-3 col-lg-3">
          <div class="counter-box pt-4 pt-md-0">
            <div class="counter-ico">
              <span class="ico-circle"><i class="fas fa-code-branch"></i></span>
            </div>
            <div class="counter-num">
              <p class="counter">248</p>
              <span class="counter-text"><?php echo $labels["achievement_3"];?></span>
            </div>
          </div>
        </div>
        <div class="col-sm-3 col-lg-3">
          <div class="counter-box pt-4 pt-md-0">
            <div class="counter-ico">
              <span class="ico-circle"><i class="fas fa-cloud-upload-alt"></i></span>
            </div>
            <div class="counter-num">
              <p class="counter">8</p>
              <span class="counter-text"><?php echo $labels["achievement_4"];?></span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!--/ Section Portfolio Start /-->
  <section id="portfolio" class="portfolio-mf sect-pt4 route">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="title-box text-center">
            <h3 class="title-a">
              <?php echo $titles['portfolio'];?>
            </h3>
            <p class="subtitle-a">
              Lorem ipsum, dolor sit amet consectetur adipisicing elit.
            </p>
            <div class="line-mf"></div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="work-box">
            <a href="img/work-1.jpg" data-lightbox="gallery-mf">
              <div class="work-img">
                <img src="img/work-1.jpg" alt="" class="img-fluid">
              </div>
              <div class="work-content">
                <div class="row">
                  <div class="col-sm-8">
                    <h2 class="w-title">Lorem impsum dolor</h2>
                    <div class="w-more">
                      <span class="w-ctegory">Web Design</span> / <span class="w-date">18 Sep. 2018</span>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="w-like">
                      <span class="ion-ios-plus-outline"></span>
                    </div>
                  </div>
                </div>
              </div>
            </a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="work-box">
            <a href="img/work-2.jpg" data-lightbox="gallery-mf">
              <div class="work-img">
                <img src="img/work-2.jpg" alt="" class="img-fluid">
              </div>
              <div class="work-content">
                <div class="row">
                  <div class="col-sm-8">
                    <h2 class="w-title">Loreda Cuno Nere</h2>
                    <div class="w-more">
                      <span class="w-ctegory">Web Design</span> / <span class="w-date">18 Sep. 2018</span>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="w-like">
                      <span class="ion-ios-plus-outline"></span>
                    </div>
                  </div>
                </div>
              </div>
            </a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="work-box">
            <a href="img/work-3.jpg" data-lightbox="gallery-mf">
              <div class="work-img">
                <img src="img/work-3.jpg" alt="" class="img-fluid">
              </div>
              <div class="work-content">
                <div class="row">
                  <div class="col-sm-8">
                    <h2 class="w-title">Mavrito Lana Dere</h2>
                    <div class="w-more">
                      <span class="w-ctegory">Web Design</span> / <span class="w-date">18 Sep. 2018</span>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="w-like">
                      <span class="ion-ios-plus-outline"></span>
                    </div>
                  </div>
                </div>
              </div>
            </a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="work-box">
            <a href="img/work-4.jpg" data-lightbox="gallery-mf">
              <div class="work-img">
                <img src="img/work-4.jpg" alt="" class="img-fluid">
              </div>
              <div class="work-content">
                <div class="row">
                  <div class="col-sm-8">
                    <h2 class="w-title">Bindo Laro Cado</h2>
                    <div class="w-more">
                      <span class="w-ctegory">Web Design</span> / <span class="w-date">18 Sep. 2018</span>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="w-like">
                      <span class="ion-ios-plus-outline"></span>
                    </div>
                  </div>
                </div>
              </div>
            </a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="work-box">
            <a href="img/work-5.jpg" data-lightbox="gallery-mf">
              <div class="work-img">
                <img src="img/work-5.jpg" alt="" class="img-fluid">
              </div>
              <div class="work-content">
                <div class="row">
                  <div class="col-sm-8">
                    <h2 class="w-title">Studio Lena Mado</h2>
                    <div class="w-more">
                      <span class="w-ctegory">Web Design</span> / <span class="w-date">18 Sep. 2018</span>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="w-like">
                      <span class="ion-ios-plus-outline"></span>
                    </div>
                  </div>
                </div>
              </div>
            </a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="work-box">
            <a href="img/work-6.jpg" data-lightbox="gallery-mf">
              <div class="work-img">
                <img src="img/work-6.jpg" alt="" class="img-fluid">
              </div>
              <div class="work-content">
                <div class="row">
                  <div class="col-sm-8">
                    <h2 class="w-title">Studio Big Bang</h2>
                    <div class="w-more">
                      <span class="w-ctegory">Web Design</span> / <span class="w-date">18 Sep. 2017</span>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="w-like">
                      <span class="ion-ios-plus-outline"></span>
                    </div>
                  </div>
                </div>
              </div>
            </a>
          </div>
        </div>

      </div>
    </div>
  </section>
  <!--/ Section Portfolio End /-->

  <!--/ Section Testimonials Start /-->
  <div class="testimonials paralax-mf bg-image" style="background-image: url(img/overlay-bg.jpg)">
    <div class="overlay-mf"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div id="testimonial-mf" class="owl-carousel owl-theme">
            <div class="testimonial-box">
              <div class="author-test">
                <img src="img/testimonial-2.jpg" alt="" class="rounded-circle b-shadow-a">
                <span class="author">Xavi Alonso</span>
              </div>
              <div class="content-test">
                <p class="description lead">
                  Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Lorem ipsum dolor sit amet,
                  consectetur adipiscing elit.
                </p>
                <span class="comit"><i class="fa fa-quote-right"></i></span>
              </div>
            </div>
            <div class="testimonial-box">
              <div class="author-test">
                <img src="img/testimonial-4.jpg" alt="" class="rounded-circle b-shadow-a">
                <span class="author">Marta Socrate</span>
              </div>
              <div class="content-test">
                <p class="description lead">
                  Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Lorem ipsum dolor sit amet,
                  consectetur adipiscing elit.
                </p>
                <span class="comit"><i class="fa fa-quote-right"></i></span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/ Section Testimonials End /-->

  <!--/ Section Blog Start /-->
  <section id="blog" class="blog-mf sect-pt4 route">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="title-box text-center">
            <h3 class="title-a">
              Blog
            </h3>
            <p class="subtitle-a">
              Lorem ipsum, dolor sit amet consectetur adipisicing elit.
            </p>
            <div class="line-mf"></div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="card card-blog">
            <div class="card-img">
              <a href="blog-single.html"><img src="<?php echo $posts[0]['imgsrc'];?>" alt="" class="img-fluid"></a>
            </div>
            <div class="card-body">
              <div class="card-category-box">
                <div class="card-category">
                  <h6 class="category"><?php echo $posts[0]['category'];?></h6>
                </div>
              </div>
              <h3 class="card-title"><a href="blog-single.html"><?php echo $posts[0]['title'];?></a></h3>
              <p class="card-description">
                <?php echo $posts[0]['description'];?>
              </p>
            </div>
            <div class="card-footer">
              <div class="post-author">
                <a href="#">
                  <img src="img/testimonial-2.jpg" alt="" class="avatar rounded-circle">
                  <span class="author"><?php echo $posts[0]['author'];?></span>
                </a>
              </div>
              <div class="post-date">
                <span class="ion-ios-clock-outline"></span> <?php echo $posts[0]['date'];?>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card card-blog">
            <div class="card-img">
              <a href="blog-single.html"><img src="<?php echo $posts[1]['imgsrc'];?>" alt="" class="img-fluid"></a>
            </div>
            <div class="card-body">
              <div class="card-category-box">
                <div class="card-category">
                  <h6 class="category"><?php echo $posts[1]['category'];?></h6>
                </div>
              </div>
              <h3 class="card-title"><a href="blog-single.html"><?php echo $posts[1]['title'];?></a></h3>
              <p class="card-description">
                <?php echo $posts[1]['description'];?>
              </p>
            </div>
            <div class="card-footer">
              <div class="post-author">
                <a href="#">
                  <img src="img/testimonial-2.jpg" alt="" class="avatar rounded-circle">
                  <span class="author"><?php echo $posts[1]['author'];?></span>
                </a>
              </div>
              <div class="post-date">
                <span class="ion-ios-clock-outline"></span> <?php echo $posts[1]['date'];?>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card card-blog">
            <div class="card-img">
              <a href="blog-single.html"><img src="<?php echo $posts[2]['imgsrc'];?>" alt="" class="img-fluid"></a>
            </div>
            <div class="card-body">
              <div class="card-category-box">
                <div class="card-category">
                  <h6 class="category"><?php echo $posts[2]['category'];?></h6>
                </div>
              </div>
              <h3 class="card-title"><a href="blog-single.html"><?php echo $posts[2]['title'];?></a></h3>
              <p class="card-description">
                <?php echo $posts[2]['description'];?>
              </p>
            </div>
            <div class="card-footer">
              <div class="post-author">
                <a href="#">
                  <img src="img/testimonial-2.jpg" alt="" class="avatar rounded-circle">
                  <span class="author"><?php echo $posts[2]['author'];?></span>
                </a>
              </div>
              <div class="post-date">
                <span class="ion-ios-clock-outline"></span> <?php echo $posts[2]['date'];?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ Section Blog End /-->

  <!--/ Section About Start /-->
  <section id="about" class="about-mf sect-pt4 route">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="box-shadow-full">
            <div class="row">
              <div class="col-md-6">
                <div class="row">
                  <div class="col-sm-3 col-md-3">
                    <div class="about-img">
                      <img src="img/profile.jpg" class="img-fluid rounded b-shadow-a" alt="">
                    </div>
                  </div>
                  <div class="col-sm-9 col-md-9">
                    <div class="about-info">
                      <div class="row"><div class="title-s col-sm-3 col-md-4"><?php echo $labels['name'];?>: </div> <div class="col text-Left"><?php echo $texts['name'];?></div></div>
                      <div class="row"><div class="title-s col-sm-3 col-md-4"><?php echo $labels['profile'];?>: </div> <div class="col text-left"><?php echo $texts['profile'];?></div></div>
                      <div class="row"><div class="title-s col-sm-3 col-md-4"><?php echo $labels['email'];?>: </div> <div class="col text-left"><?php echo $texts['email'];?></div></div>
                      <div class="row"><div class="title-s col-sm-3 col-md-4"><?php echo $labels['phone'];?>: </div> <div class="col text-left"><?php echo $texts['phone'];?></div></div>
                    </div>
                  </div>
                </div>
                <div class="skill-mf">
                  <p class="title-s"><?php echo $labels['skills'];?></p>
                  <?php
                    foreach($skills as $skill) {
                      ?>
                      <div class="progress" style="height:20px;">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width:<?php echo $skill[1]; ?>%; height:100%;" aria-valuenow="90" aria-valuemin="0"
                          aria-valuemax="100">
                          <div class="row">
                            <div class="col text-left" style="margin-left:10px;"><b><?php echo $skill[0]; ?></b></div>
                            <div class="col text-right" style="margin-right:10px;"><b><?php echo $skill[1]; ?>%</b></div>
                          </div>
                        </div>
                      </div>
                      <?php
                    }
                  ?>

                </div>
              </div>
              <div class="col-md-6">
                <div class="about-me pt-4 pt-md-0">
                  <div class="title-box-2">
                    <h5 class="title-left">
                      <?php echo $titles['about'];?>
                    </h5>
                  </div>
                  <p class="lead">
                    <?php echo $texts['about_me_p1'];?>
                  </p>
                  <p class="lead">
                    <?php echo $texts['about_me_p2'];?>
                  </p>
                  <p class="lead">
                    <?php echo $texts['about_me_p3'];?>
                  </p>
                  <p class="lead">
                    <?php echo $texts['about_me_p4'];?>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ Section About End /-->

  <!--/ Section Contact-Footer Start /-->
  <section class="paralax-mf footer-paralax bg-image sect-mt4 route" style="background-image: url(img/overlay-bg.jpg)">
    <div class="overlay-mf"></div>
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="contact-mf">
            <div id="contact" class="box-shadow-full">
              <div class="row">
                <div class="col-md-6">
                  <div class="title-box-2">
                    <h5 class="title-left">
                      <?php echo $titles['message_me'];?>
                    </h5>
                  </div>
                  <div>
                      <form action="" method="post" role="form" class="contactForm">
                        <input type="hidden" name="lang" id="lang" value="<?php echo $lang;?>"></input>
                      <div id="sendmessage" class="alert alert-primary">
                        <?php echo $labels['message_sent'];?>
                      </div>
                      <div id="errormessage" class="alert alert-danger"></div>
                      <div class="row">
                        <div class="col-md-12 mb-3">
                          <div class="form-group">
                            <input type="text" name="name" class="form-control" id="name" placeholder="<?php echo $labels['your_name'];?>" data-rule="minlen:4" data-msg="<?php echo $labels['your_name_validation'];?>" />
                            <div class="validation"></div>
                          </div>
                        </div>
                        <div class="col-md-12 mb-3">
                          <div class="form-group">
                            <input type="email" class="form-control" name="email" id="email" placeholder="<?php echo $labels['your_email'];?>" data-rule="email" data-msg="<?php echo $labels['your_email_validation'];?>" />
                            <div class="validation"></div>
                          </div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <div class="form-group">
                              <input type="text" class="form-control" name="subject" id="subject" placeholder="<?php echo $labels['subject'];?>" data-rule="minlen:4" data-msg="<?php echo $labels['subject_validation'];?>" />
                              <div class="validation"></div>
                            </div>
                        </div>
                        <div class="col-md-12 mb-3">
                          <div class="form-group">
                            <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="<?php echo $labels['message_validation'];?>" placeholder="<?php echo $labels['message'];?>"></textarea>
                            <div class="validation"></div>
                          </div>
                        </div>
                        <div class="col-md-12">
                          <button type="submit" class="button button-a button-big button-rouded"><?php echo $labels['send_message'];?></button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="title-box-2 pt-4 pt-md-0">
                    <h5 class="title-left">
                      <?php echo $titles['contact'];?>
                    </h5>
                  </div>
                  <div class="more-info">
                    <p class="lead">
                      <?php echo $texts['contact'];?>
                    </p>
                    <ul class="list-ico">
                      <li><span class="fas fa-map-marker-alt"></span><?php echo $texts['address'];?></li>
                      <li><span class="fas fa-phone"></span><a href="<?php echo $contact['phone'][1];?>" target="_blank"><?php echo $contact['phone'][0];?></a></li>
                      <li><span class="fab fa-whatsapp"></span><a href="<?php echo $contact['whatsapp'][1];?>" target="_blank"><?php echo $contact['whatsapp'][0];?></a></li>
                      <li><span class="fas fa-envelope"></span><a href="<?php echo $contact['email'][1];?>" target="_blank"><?php echo $contact['email'][0];?></a></li>
                    </ul>
                  </div>
                  <div class="socials">
                    <ul>
                      <li><a href="<?php echo $contact['facebook'][1];?>" target="_blank"><span class="ico-circle"><i class="fab fa-facebook-f"></i></span></a></li>
                      <li><a href="<?php echo $contact['instagram'][1];?>" target="_blank"><span class="ico-circle"><i class="fab fa-instagram"></i></span></a></li>
                      <li><a href="<?php echo $contact['linkedin'][1];?>" target="_blank"><span class="ico-circle"><i class="fab fa-linkedin-in"></i></span></a></li>
                      <li><a href="<?php echo $contact['github'][1];?>" target="_blank"><span class="ico-circle"><i class="fab fa-github"></i></span></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="copyright-box">
              <p class="copyright">&copy; Copyright <strong>Digitable</strong>. Todos los derechos reservados. <a href="https://digitable.com.mx/home/privacidad.html"><strong>Aviso de privacidad</strong></a></p>

            </div>
          </div>
        </div>
      </div>
    </footer>
  </section>
  <!--/ Section Contact-footer End /-->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <div id="preloader"></div>

  <!-- JavaScript Libraries -->
  <script src="../lib/jquery/jquery.min.js"></script>
  <script src="../lib/jquery/jquery-migrate.min.js"></script>
  <script src="../lib/popper/popper.min.js"></script>
  <script src="../bootstrap-4.3.1/js/bootstrap.min.js"></script>
  <script src="../lib/easing/easing.min.js"></script>
  <script src="../lib/counterup/jquery.waypoints.min.js"></script>
  <script src="../lib/counterup/jquery.counterup.js"></script>
  <script src="../lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="../lib/lightbox/js/lightbox.min.js"></script>
  <script src="../lib/typed/typed.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>
</html>
