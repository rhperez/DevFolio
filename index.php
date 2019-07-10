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
  include_once "controllers/main_ctrlr.php";

  function displayTime($timestampdiff) {
    if ($timestampdiff < 60) {
      return $timestampdiff."m";
    }
    if ($timestampdiff < 60*24) {
      return floor($timestampdiff / 60)."h";
    }
    if ($timestampdiff < 60*24*7) {
      return floor($timestampdiff / (60*24))."d";
    }
    return floor($timestampdiff / (60*24*7))."w";
  }

  $posts = getMainPosts();

  if (!isset($_GET['lang'])) {
    $lang = 'ES';
  } else {
    $lang = $_GET['lang'];
  }
  include_once "lang/lang.php";
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
        <?php
          foreach ($posts as $post) {
            ?>
            <div class="col-md-4">
              <div class="card card-blog">
                <div class="card-img">
                  <a href="blog.php?title=<?php echo $post['href'];?>"><img src="<?php echo $post['imgsrc'];?>" alt="" class="img-fluid"></a>
                </div>
                <div class="card-body">
                  <div class="card-category-box">
                    <div class="card-category">
                      <h6 class="category"><?php echo $post['tag'];?></h6>
                    </div>
                  </div>
                  <h3 class="card-title"><a href="blog.php?title=<?php echo $post['href'];?>"><?php echo $post['title'];?></a></h3>
                  <p class="card-description">
                    <?php echo $post['description'];?>
                  </p>
                </div>
                <div class="card-footer">
                  <div class="post-author">
                    <a href="#">
                      <img src="img/testimonial-2.jpg" alt="" class="avatar rounded-circle">
                      <span class="author"><?php echo $post['author'];?></span>
                    </a>
                  </div>
                  <div class="post-date" data-toggle="tooltip" data-placement="top" title="<?php echo $post['created_at'];?>">
                    <span class="ion-ios-clock-outline"></span> <?php echo displayTime($post['timestampdiff']);?>
                  </div>
                </div>
              </div>
            </div>
            <?php
          }
        ?>
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

  <script>
    $(function () {
      $('[data-toggle="tooltip"]').tooltip()
    })
  </script>

</body>
</html>
