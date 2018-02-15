<!DOCTYPE html>
<html lang="en"> 
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
  <title><?php the_title(); ?></title>
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css">
  <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
  <?php wp_head(); ?>
  <script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body>
  
  <!-- ====================================================
  header section -->
  <header class="top-header">
    <div class="container">
      <div class="row contacts_wrap">
        <div class="media_area col-md-1 col-xs-1 col-sm-2">
          <a target="_blank" href="http://vk.com/id139677998" class="media_area_item media_area_item-vk"><i class="fa fa-vk" aria-hidden="true"></i></a>
          <a target="_blank" href="https://www.facebook.com/profile.php?id=100012253260685&pnref" class="media_area_item media_area_item-facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
          <a target="_blank" href="https://www.youtube.com/user/ThePractik01/" class="media_area_item media_area_item-youtube"><i class="fa fa-youtube" aria-hidden="true"></i></a>
          <a target="_blank" href="https://www.instagram.com/dr.chikurov/" class="media_area_item media_area_item-instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a>
        </div>
        <div class="col-md-6 col-md-offset-2 col-sm-8 col-sm-offset-1 col-xs-12 contacts">
          <a class="contacts_email pull-left" href="mailto:info@chikurov.com">info@chikurov.com</a>
          <span class="contacts_phone pull-right">+7 (495) 135-25-48</span>
          <a class="contacts_home" href="/"> Школа Доктора Чикурова </a>
        </div>
        <div class="col-xs-2 col-sm-1 col-sm-offset-1 col-md-1 col-md-offset-2 header-logo">
          <br>
          <a href="/"><img src="<?php bloginfo('template_url'); ?>/img/bc_2.png" alt="" class="img-responsive logo"></a>
        </div>
      </div>
      <div class="row">
        <div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-12 main-menu">
          <div class="row">
            <div class="col-md-12">
              <nav class="navbar navbar-default">
                <div class="container-fluid nav-bar">
                  <!-- Brand and toggle get grouped for better mobile display -->
                  <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                      <span class="sr-only">Toggle navigation</span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                    </button>
                  </div>

                  <!-- Collect the nav links, forms, and other content for toggling -->
                  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <!-- <div id="bs-example-navbar-collapse-1"> -->
                    
                    <ul class="nav navbar-nav navbar-left">
                      <li><a class="menu" href="/#seminars">Семинары</a></li>
                      <!-- <li><a class="menu" href="#about">Биологическое центрирование</a></li> -->
                      <li><a class="menu video_cours hidden" href="" data-toggle="modal" data-target="#videoCours">Заказать видеокурс</a></li>
                      <li><a class="menu" target="_blank" href="http://www.yuchikurov.info/reestr/">Реестр специалистов</a></li>
                      <li><a class="menu" target="_blank" href="http://www.yuchikurov.info/">Визардтерапия</a></li>
                    </ul>
                  </div><!-- /navbar-collapse -->
                </div><!-- / .container-fluid -->
              </nav>
            </div>     
          </div>
        </div>
      </div>
    </div>
  </header> 
  <!-- end of header area -->
