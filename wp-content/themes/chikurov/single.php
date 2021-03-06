<?php get_header(); ?>
<?php if (in_category(2) || in_category(3)) { ?>
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <?php
    $seminar_start = get_field('seminar_start');
    $date_formated_start = strtotime($seminar_start);
    $seminar_start_d = date('d',$date_formated_start);
    $seminar_start_m = strval(date('m',$date_formated_start));
    $seminar_start_y = date('Y',$date_formated_start);
    if ($seminar_start_m == '01') {
      $seminar_start_m = ' января ';
    } else if ($seminar_start_m == '02') {
      $seminar_start_m = ' февраля ';
    } else if ($seminar_start_m == '03') {
      $seminar_start_m = ' марта ';
    } else if ($seminar_start_m == '04') {
      $seminar_start_m = ' апреля ';
    } else if ($seminar_start_m == '05') {
      $seminar_start_m = ' мая ';
    } else if ($seminar_start_m == '06') {
      $seminar_start_m = ' июня ';
    } else if ($seminar_start_m == '07') {
      $seminar_start_m = ' июля ';
    } else if ($seminar_start_m == '08') {
      $seminar_start_m = ' августа ';
    } else if ($seminar_start_m == '09') {
      $seminar_start_m = ' сентября ';
    } else if ($seminar_start_m == '10') {
      $seminar_start_m = ' октября ';
    } else if ($seminar_start_m == '11') {
      $seminar_start_m = ' ноября ';
    } else if ($seminar_start_m == '12') {
      $seminar_start_m = ' декабря ';
    }

    $seminar_end = get_field('seminar_end');
    $date_formated_end = strtotime($seminar_end);
    $seminar_end_d = date('d',$date_formated_end);
    $seminar_end_m = strval(date('m',$date_formated_end));
    $seminar_end_y = date('Y',$date_formated_end);
    if ($seminar_end_m == '01') {
      $seminar_end_m = ' января ';
    } else if ($seminar_end_m == '02') {
      $seminar_end_m = ' февраля ';
    } else if ($seminar_end_m == '03') {
      $seminar_end_m = ' марта ';
    } else if ($seminar_end_m == '04') {
      $seminar_end_m = ' апреля ';
    } else if ($seminar_end_m == '05') {
      $seminar_end_m = ' мая ';
    } else if ($seminar_end_m == '06') {
      $seminar_end_m = ' июня ';
    } else if ($seminar_end_m == '07') {
      $seminar_end_m = ' июля ';
    } else if ($seminar_end_m == '08') {
      $seminar_end_m = ' августа ';
    } else if ($seminar_end_m == '09') {
      $seminar_end_m = ' сентября ';
    } else if ($seminar_end_m == '10') {
      $seminar_end_m = ' октября ';
    } else if ($seminar_end_m == '11') {
      $seminar_end_m = ' ноября ';
    } else if ($seminar_end_m == '12') {
      $seminar_end_m = ' декабря ';
    }
    ?>
    <section class="doctor seminar text-center" id="doctor">
      <div class="container">
        <div class="row">
          <div class="col-md-12" style="padding: 5px;">
            <h2 class="page_title"><span class="title_info"><?php the_title(); ?></span><span class="price_info hidden"><?php the_field('seminar_price'); ?></span></h2>
            <div class="hidden page_url"><?php the_permalink(); ?></div>
          </div>
          <div class="col-md-5 col-sm-5 col-xs-12 seminar_article">
            <div class="item_wrap">
              <div class="seminar_params clearfix">
                <div class="params_title_high">Где и когда:</div>
                <div class="params_content">
                  <span class="date_info"> <span class="fa fa-calendar"></span> 
                    <?php
                      echo $seminar_start_d;
                      echo ' ';
                      echo $seminar_start_m;
                    ?> — 
                    <?php if ($seminar_end) {
                      echo $seminar_end_d;
                      echo ' ';
                      echo $seminar_end_m;
                      echo ' ';
                      echo $seminar_end_y;
                    } else {
                      echo $seminar_start_d;
                      echo ' ';
                      echo $seminar_start_m;
                      echo ' ';
                      echo $seminar_start_y;
                    }
                    ?>
                  </span>
                  <?php if (get_field('seminar_time_start')&& get_field('time_true')) { ?>
                    <br><i class="fa fa-clock-o" aria-hidden="true"> </i> <span class="time_info"> <?php the_field('seminar_time_start'); ?> — <?php the_field('seminar_time_end'); ?></span>
                  <?php } ?>
                </div>
                <div class="params_content" style="margin-top: 10px; font-size: 16px;">
                  <?php if (get_field('seminar_online')) { ?>
                    <span class="fa fa-globe"></span> <span class="place_info">ОНЛАЙН "ШКОЛА ДОКТОРА ЧИКУРОВА"</span>
                  <?php } else { ?>
                    <span class="fa fa-map-marker"></span> <span class="place_info"> <?php the_field('city'); ?>, <?php the_field('adres'); ?></span>
                  <?php } ?>
                </div>
              </div>
              <?php $coords_seminar = get_field('coords');?>
              <?php if ($coords_seminar) { ?>
              <div class="seminar_params clearfix">
                  <a href="#the_map" class="seminar_map btn btn-primary">Карта проезда</a>
              </div>
              <?php } ?>
            </div>
          </div>
          <div class="col-md-2 col-sm-2 col-xs-12 seminar_article">
            <div class="item_wrap" style="background: #fff;">
              <div class="seminar_params clearfix">
                <div class="params_photo">
                  <?php $autor = get_field('autor'); ?>
                  <?php 
                    if (is_array($autor)) {
                      $autor = array_shift($autor);
                    }
                  ?>
                  <?php if ($autor == 'Юрий Чикуров') {?>
                    <img src="<?php bloginfo('template_url'); ?>/img/chi_img.jpg" alt="">
                    <div class="params_author"><a target="_blank" href="/"><?php the_field('autor'); ?></a></div>
                  <?php } else if ($autor == 'Ирина Иванова') { ?>
                    <img src="<?php bloginfo('template_url'); ?>/img/ivanova.jpg" alt="">
                    <div class="params_author"><a target="_blank" href="http://www.yuchikurov.info/members/irina_ivanova/"><?php the_field('autor'); ?></a></div>
                  <?php } else if ($autor == 'Василий Киселев') { ?>
                    <img src="<?php bloginfo('template_url'); ?>/img/kiselev.jpg" alt="">
                    <div class="params_author"><a target="_blank" href="http://www.yuchikurov.info/members/Bazilevs/"><?php the_field('autor'); ?></a></div>
                  <?php } else if ($autor == 'Елена Зукуле') { ?>
                    <img src="<?php bloginfo('template_url'); ?>/img/zukule.jpeg" alt="">
                    <div class="params_author"><a target="_blank" href="http://www.yuchikurov.info/members/zukule-elena/"><?php the_field('autor'); ?></a></div>
                  <?php } else if ($autor == 'Марина Салехова') { ?>
                    <img src="<?php bloginfo('template_url'); ?>/img/salechova.jpg" alt="">
                    <div class="params_author"><a target="_blank" href="http://www.yuchikurov.info/members/salehova_marina/"><?php the_field('autor'); ?></a></div>
                  <?php } else if ($autor == 'Сергей Стеканов') { ?>
                    <img src="<?php bloginfo('template_url'); ?>/img/stekanov.png" alt="">
                    <div class="params_author"><a target="_blank" href="http://www.yuchikurov.info/members/e1e7e/"><?php the_field('autor'); ?></a></div>
                  <?php } else if ($autor == 'Олег Плотников') { ?>
                    <img src="<?php bloginfo('template_url'); ?>/img/plotnikov.jpg" alt="">
                    <div class="params_author"><a target="_blank" href="http://www.yuchikurov.info/members/plotnikov/"><?php the_field('autor'); ?></a></div>
                  <?php } else if ($autor == 'Галина Москаленко') { ?>
                    <img src="<?php bloginfo('template_url'); ?>/img/moskalenko.png" alt="">
                    <div class="params_author"><a target="_blank" href="http://www.yuchikurov.info/members/galina-63/"><?php the_field('autor'); ?></a></div>
                  <?php } else if ($autor == 'Вячеслав Павленок') { ?>
                    <img src="<?php bloginfo('template_url'); ?>/img/pavlenok.jpg" alt="">
                    <div class="params_author"><a target="_blank" href="http://www.yuchikurov.info/members/paltus/"><?php the_field('autor'); ?></a></div>
                  <?php } ?>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-5 col-sm-5 col-xs-12 seminar_article">
            <div class="item_wrap">
              <div class="seminar_params clearfix">
                <div class="params_title_high">Записаться:</div>
                <a href="tel:<?php the_field('phone'); ?>" class="params_content phone_info"><span class="fa fa-phone"></span> <?php the_field('phone'); ?></a>
                <div class="params_content" style="padding-top: 10px;">
                <a class="email_info" href="mailto:<?php the_field('email'); ?>"><span class="fa fa-envelope"></span> <?php the_field('email'); ?></a>
              </div>
              </div>
              <?php if (get_field('order_closed')) { ?>
                <div class="seminar_params clearfix">
                  <div class="order_closed">
                    <span class="fa fa-pencil-square-o"></span> Запись закрыта
                  </div>
                  <button class="disabled btn btn-primary" data-toggle="popover" data-placement="top" data-original-title="Свободные места на этот семинар исчерпаны" data-content='Ознакомьтесь с расписанием чтоб узнать когда состоится следующий семинар'>Записаться
                </button>
                </div>
              <?php } else { ?>
                <div class="seminar_params clearfix">
                  <div class="order_open">
                    <span class="fa fa-pencil-square-o"></span> Запись открыта
                  </div>
                  <?php if (get_field('seminar_online')) { ?>
                    <a target="_blank" href="<?php the_field('online_link'); ?>" class="seminar_order btn btn-primary">Перейти на сайт "Онлайн Школы"</a>
                  <?php } else { ?>
                    <a href="#order" class="seminar_order btn btn-success">Записаться</a>
                  <?php } ?>
                </div>
              <?php } ?>
            </div>
          </div>
          <div class="clearfix"></div>
          <div class="col-md-12 seminar_content">
            <h4 class="content_center">О чем этот семинар</h4>
            <?php
            the_content(__('(more...)'));
            edit_post_link(__('Edit This'));
            ?>
            <?php $city = get_field('city');?>
            <?php if ($autor == 'Юрий Чикуров' && get_field('seminar_online')) { ?>
              <h4 class="order_online_bottom">Подать заявку на участие Вы можете со <a target="_blank" href="<?php the_field('online_link'); ?>">страницы курса на сайте "Онлайн Школы"</a></h4>
            <?php } else if ($autor == 'Юрий Чикуров') { ?>
              <h5 class="age">Внимание! Семинар рассчитан на аудиторию достигшую возраста 18 лет</h5>
            <?php } ?>
          </div>
          <div class="col-md-12 order_seminar">
            <?php if (get_field('seminar_online')) { ?>
              <h4 class="content_center order_online" id="order">Что такое Онлайн "Школа Доктора Чикурова"?</h4>
            <?php } else { ?>
              <h4 class="content_center" id="order">Записаться на семинар</h4>
            <?php } ?>
            <div class="row">
              <?php if (get_field('order_closed')) { ?>
                <div class="order_closed_text">
                  Свободные места на этот семинар исчерпаны.<br>
                  Ознакомьтесь с <a href="/#seminars">расписанием</a> чтоб узнать когда состоится следующий семинар "<?php the_title(); ?>"
                </div>
              <?php } else { ?>
                <?php if (get_field('seminar_online')) { ?>
                  <div class="col-md-6 online_school_text">
                    <p>"Онлайн школа" — это возможность освоить <b>"Биологическое центрирование"</b> не отрываясь от работы/учебы, не тратя деньги на билеты и гостинницу, в уютной, домашней атмосфере!</p>
                    <p>Вы сможете учиться в удобном для Вас графике. Онлайн курс разбит на небольшие уроки. Каждый урок завершается выполнением домашнего задания. Выполнив задание Вы получаете доступ к следующиему уроку. Учебный процесс проходит легко и интересно.</p>
                    <p>В каждой группе присутствует куратор который всегда готов ответить на возникший вопрос</p>
                    <p>Более подробно узнать о том как проходит учебный процесс, а так же ознакомиться с расписанием всех онлайн курсов Вы можете на сайте <a target="_blank" href="https://school-bc.ru/#">Онлайн "Школы Доктора Чикурова"</a></p>
                  </div>
                  <div class="col-md-6 online_school_logo"><a class="online_school" target="_blank" href="https://school-bc.ru/#"><img src="<?php bloginfo('template_url'); ?>/img/logo_online_.png" alt="online school"></a></div>
                <?php } else { ?>
                  <?php if ($autor == 'Юрий Чикуров' && $city == 'Санкт-Петербург') {?>
                    <?php echo do_shortcode('[contact-form-7 id="1209" title="Запись на семинар_Илья"]'); ?>
                  <?php } else if ($autor == 'Юрий Чикуров') { ?>
                    <?php echo do_shortcode('[contact-form-7 id="4" title="Запись на семинар"]'); ?>
                  <?php } else if ($autor == 'Ирина Иванова' && $city == 'Москва') { ?>
                    <?php echo do_shortcode('[contact-form-7 id="3941" title="Запись на семинар_Иванова_Москва"]'); ?>
                  <?php }  else if ($autor == 'Ирина Иванова') { ?>
                    <?php echo do_shortcode('[contact-form-7 id="170" title="Запись на семинар_Иванова"]'); ?>
                  <?php } else if ($autor == 'Василий Киселев') { ?>
                    <?php echo do_shortcode('[contact-form-7 id="632" title="Запись на семинар_Киселев"]'); ?>
                  <?php } else if ($autor == 'Елена Зукуле') { ?>
                    <?php echo do_shortcode('[contact-form-7 id="1059" title="Запись на семинар_Зукуле"]'); ?>
                  <?php } else if ($autor == 'Марина Салехова') { ?>
                    <?php echo do_shortcode('[contact-form-7 id="2711" title="Запись на семинар_Салехова"]'); ?>
                  <?php } else if ($autor == 'Никита Истомин' && $city == 'Москва') { ?>
                    <?php echo do_shortcode('[contact-form-7 id="3818" title="Запись на семинар_Истомин_Москва"]'); ?>
                  <?php } else if ($autor == 'Никита Истомин' && $city == 'Санкт-Петербург') { ?>
                    <?php echo do_shortcode('[contact-form-7 id="4131" title="Запись на семинар_Истомин_Питер"]'); ?>
                  <?php } else if ($autor == 'Никита Истомин') { ?>
                    <?php echo do_shortcode('[contact-form-7 id="3765" title="Запись на семинар_Истомин"]'); ?>
                  <?php } else if ($autor == 'Сергей Стеканов' && $city == 'Москва') { ?>
                    <?php echo do_shortcode('[contact-form-7 id="4642" title="Запись на семинар_Стеканов_Москва"]'); ?>
                  <?php } else if ($autor == 'Олег Плотников' && $city == 'Москва') { ?>
                    <?php echo do_shortcode('[contact-form-7 id="4918" title="Запись на семинар_Плотников_Москва"]'); ?>
                  <?php } else if ($autor == 'Галина Москаленко') { ?>
                    <?php echo do_shortcode('[contact-form-7 id="4978" title="Запись на семинар_Москаленко"]'); ?>
                  <?php } else if ($autor == 'Вячеслав Павленок') { ?>
                    <?php echo do_shortcode('[contact-form-7 id="5968" title="Запись на семинар_Павленок_Москва"]'); ?>
                  <?php } ?>
                <?php } ?>
              <?php } ?>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end of doctor section -->
    <?php if ($coords_seminar) { ?>
      <section class="doctor seminar text-center" id="the_map">
        <?php $seminar_map = "[showyamap] [placemark coordinates='".$coords_seminar."'/] [/showyamap]";?>
        <?php echo do_shortcode($seminar_map); ?>
      </section>
    <?php } ?>
  <?php endwhile; else: ?>
    <?php _e('Sorry, no posts matched your criteria.'); ?>
  <?php endif; ?>
<?php } else { ?>
  <section class="doctor seminar text-center" id="doctor">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2><?php the_title(); ?></h2>
        </div>
        <div class="col-md-12">
          <?php
          the_content(__('(more...)'));
          edit_post_link(__('Edit This'));
          ?>
        </div>
      </div>
    </div>
    <?php endwhile; else: ?>
      <?php _e('Sorry, no posts matched your criteria.'); ?>
    <?php endif; ?>
  </section>
<?php } ?>
<?php get_footer(); ?>
