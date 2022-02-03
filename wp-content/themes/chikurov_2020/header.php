<!DOCTYPE html>
<html lang="en"> 
<head>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-168008792-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-168008792-1');
  </script>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <meta name="yandex-verification" content="8bf323184bf04b23" />
  <title><?php the_title(); ?></title>
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,600&display=swap" rel="stylesheet">
  <style>
    :root {
      --peekobot-height: 80vh;
      --peekobot-avatar: url();
    }
  </style>
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/peekobot.css">
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/peekobot.css">
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/slick.css">
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/slick-theme.css">
  
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css">
  <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/img/fav180.png">
  <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/img/fav32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/img/fav16.png">
  <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.ico">
  <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
  <?php wp_head(); ?>
  <script src='https://www.google.com/recaptcha/api.js'></script>
  <!-- Facebook Pixel Code -->
  <script>
    !function(f,b,e,v,n,t,s)
    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};
    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
    n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t,s)}(window, document,'script',
    'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '1517810708340892');
    fbq('track', 'PageView');
  </script>
  <noscript><img height="1" width="1" style="display:none"
    src="https://www.facebook.com/tr?id=1517810708340892&ev=PageView&noscript=1"
  /></noscript>
  <!-- End Facebook Pixel Code -->
</head>
<body>
  
  <!-- ====================================================
  header section -->
  <header class="top-header">
    <div class="container">
      <div class="row contacts_wrap">
        <!-- <div class="col-md-8 col-sm-8 col-xs-12 contacts">
          <a class="contacts_email pull-left" href="mailto:info@chikurov.com">info@chikurov.com</a>
          <a class="contacts_phone pull-right" href="tel:+74951352548">+7 (495) 135-25-48</a>
          <a class="contacts_home" href="/">Школа Доктора Чикурова</a>
        </div> -->
        <div class="col-xs-2 col-sm-2 col-md-2 header-logo pull-left">
          <br>
          <a href="/"><img src="<?php bloginfo('template_url'); ?>/img/chi_logo_studio.png" alt="" class="img-responsive logo"></a>
        </div>
        <div class="col-xs-12 col-sm-3 col-md-2 header_contacts pull-right">
          <a class="menu menu_tel" href="tel:+79855381468">+7 (985) 538-14-68</a>
          <a class="menu menu_email" href="mailto:info@chikurov.com">info@chikurov.com</a>
        </div>
        <div class="col-md-8 col-sm-7 col-xs-12 main-menu">
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
                    <div class="close_menu">×</div>
                    <a class="menu_logo" href="/"><img src="<?php bloginfo('template_url'); ?>/img/chi_logo_studio.png" alt="" class="img-responsive logo"></a>
                  <!-- <div id="bs-example-navbar-collapse-1"> -->
                    
                    <ul class="nav navbar-nav navbar-left">
                      <li><a class="menu" href="/seminary">Семинары</a></li>
                      <!-- <li><a class="menu" href="#about">Биологическое центрирование</a></li> -->
                      <li><a class="menu" href="http://school-bc.ru/" target="_blank">Онлайн Школа</a></li>
                      <!-- <li><a class="menu" target="_blank" href="http://www.yuchikurov.info/reestr/">Реестр специалистов</a></li> -->
                      <!-- <li class="dropdown_menu">Визардтерапия <i class="fa fa-caret-down"></i>
                        <ul class="submenu_wrap">
                          <li><a class="submenu" target="_blank" href="https://wizardmachine.ru/">Wizard Machine</a></li>
                          <li><a class="submenu" target="_blank" href="https://wizardduos.ru/">Wizard Duos</a></li>
                          <li><a class="submenu" target="_blank" href="https://wizard-lovushka.ru/">Wizard Ловушка</a></li>
                          <li><a class="submenu" target="_blank" href="https://tarotmachine.ru/">Tarot Machine</a></li>
                          <li><a class="submenu" target="_blank" href="https://deviatochka.ru/">Игра Девяточка</a></li>
                          <li><a class="submenu" target="_blank" href="http://marakata.ru/">Marakata</a></li>
                          <li><a class="submenu" target="_blank" href="http://braincleaner.ru/">Brain Cleaner</a></li>
                          <li><a class="submenu" target="_blank" href="https://school-bc.ru/wizardtherapy">Wizard Therapy</a></li>
                        </ul>
                      </li> -->
                      <!-- <li><a class="menu" href="/kniga">Книги</a></li> -->
                      <li><a target="_blank" class="menu" href="https://shop-bc.com/">Магазин БЦ</a></li>
					  <li><a target="_blank" class="menu" href="https://t.me/chikurov_studio">Мы в Telegram <i class="fa fa-telegram"></i></a></li>
                      <li><span class="menu consult hidden">Консультации Ю.Чикурова</span></li>
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
