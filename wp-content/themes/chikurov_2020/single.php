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
    $date_now = strtotime('now');
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
    <section class="doctor seminar text-center" id="seminar">
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
                    <span class="fa fa-globe"></span> <span class="place_info">Онлайн семинар</span>
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
            <div class="item_wrap" style="background: #F7FAFC;">
              <div class="seminar_params clearfix">
                <div class="params_photo">
                  <?php $autor = get_field('autor'); ?>
                  <?php 
                    if (is_array($autor)) {
                      $autor = array_shift($autor);
                    }
                  ?>
                  <?php if ($autor == 'Юрий Чикуров') {?>
                    <img src="<?php bloginfo('template_url'); ?>/img/chi_img_.jpg" alt="">
                    <div class="params_author"><a target="_blank" href="/"><?php the_field('autor'); ?></a></div>
                  <?php } else if ($autor == 'Ирина Иванова') { ?>
                    <img src="<?php bloginfo('template_url'); ?>/img/ivanova.jpg" alt="">
                    <div class="params_author"><a target="_blank" href="http://www.yuchikurov.info/members/irina_ivanova/"><?php the_field('autor'); ?></a></div>
                  <?php } else if ($autor == 'Василий Киселев') { ?>
                    <img src="<?php bloginfo('template_url'); ?>/img/kiselev.jpg" alt="">
                    <div class="params_author"><a target="_blank" href="http://www.yuchikurov.info/members/Bazilevs/"><?php the_field('autor'); ?></a></div>
                  <?php } else if ($autor == 'Оксана Антонова') { ?>
                    <img src="<?php bloginfo('template_url'); ?>/img/antonova.png" alt="">
                    <div class="params_author"><a target="_blank" href="http://www.yuchikurov.info/members/oks331/"><?php the_field('autor'); ?></a></div>
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
                  <?php } else if ($autor == 'Семён Доля') { ?>
                    <img src="<?php bloginfo('template_url'); ?>/img/dolya.jpeg" alt="">
                    <div class="params_author"><a target="_blank" href="https://semendolia.ru"><?php the_field('autor'); ?></a></div>
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
                <?php if ($autor == 'Юрий Чикуров') { ?>
                  <div class="socials">
                    <a href="https://telegram.me/chikurov_school" class="socials_link socials_link_tg"><i class="fa fa-telegram"></i></a>
                    <a href="https://api.whatsapp.com/send?phone=79855381468" target="_blank" class="socials_link socials_link_wh"><i class="fa fa-whatsapp"></i></a>
                    <a href="viber://chat?number=+79855381468" class="socials_link socials_link_vb"><i class="fab fa-viber"></i></a>
                    <a href="mailto:orders@chikurov.com" target="_blank" class="socials_link socials_link_mail"><i class="fa fa-envelope"></i></a>
                  </div>
                <?php } else { ?>
                  <a class="email_info" href="mailto:<?php the_field('email'); ?>"><span class="fa fa-envelope"></span> <?php the_field('email'); ?></a>
                <?php } ?>
              </div>
              </div>
              <?php if ($date_now > $date_formated_end) { ?>
                <div class="seminar_params clearfix">
                  <div class="order_closed">
                    <span class="fa fa-pencil-square-o"></span> Запись закрыта. Семинар уже прошел.
                  </div>
                  <a href="#seminars_else" class="seminar_order btn btn-success">Другие даты</a>
                </div>
              <?php } else if (get_field('order_closed')) { ?>
                <div class="seminar_params clearfix">
                  <div class="order_closed">
                    <span class="fa fa-pencil-square-o"></span> Запись закрыта
                  </div>
                  <a href="#seminars_else" class="seminar_order btn btn-success">Другие даты</a>
                  <a href="#seminars_chain" class="chain_list_link btn btn-primary">Лист ожидания</a>
                </div>
              <?php } else { ?>
                <div class="seminar_params clearfix">
                  <div class="order_open">
                    <span class="fa fa-pencil-square-o"></span> Запись открыта
                  </div>
                  <a href="#seminars_chain" class="seminar_order btn btn-success">Записаться</a>
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
            <?php if ($autor == 'Юрий Чикуров') { ?>
            <div class="col-md-12" style="padding: 0;">
              <h5 class="age" id="seminars_chain">Внимание! Семинар рассчитан на аудиторию достигшую возраста 18 лет</h5>
            </div>
          <?php } ?>
          <div class="col-md-12 order_seminar" id="seminars_chain">
            <h4 class="content_center" id="order">Запись на семинар</h4>
            <div class="row">
              <?php if ($date_now > $date_formated_end) { ?>
                <div class="order_closed_text">
                  Сожалеем, но запись на этот семинар закрыта так как он уже прошел.<br>
                  <div class="seminar_else_text">Кликните  по <a href="#seminars_else" class="else_seminars_link">этой ссылке</a>, и ознакомьтесь с расписанием следующих семинаров "<?php the_title(); ?>"</div>
                  <div>
                  </div>
                </div>
              <?php } else if (get_field('order_closed')) { ?>
                <div class="order_closed_text">
                  Сожалеем, но запись на этот семинар уже закрыта.<br>
                  <div class="seminar_else_text">Кликните по <a href="#seminars_chain" class="else_seminars_link chain_list_link">этой ссылке</a> для записи в лист ожидания (<i>если место освободится мы дадим вам знать в первую очередь</i>) или по <a href="#seminars_else" class="else_seminars_link">этой ссылке</a> и ознакомьтесь с расписанием следующих семинаров "<?php the_title(); ?>"</div>
                  <div>
                    <div class="chain_list hidden">
                      <h5 class="content_center" id="chain">Лист ожидания</h5>
                      <div class="chain_list_acent">Запись в лист ожидания не является подтверждением записи на семинар и не гарантирует участия в нем</div>
                      <?php echo do_shortcode('[contact-form-7 id="10184" title="Запись в лист ожидания"]'); ?>
                    </div>
                  </div>
                </div>
              <?php } else { ?>
                <?php if ($autor == 'Юрий Чикуров' && $city == 'Санкт-Петербург') {?>
                  <?php echo do_shortcode('[contact-form-7 id="1209" title="Запись на семинар_Илья"]'); ?>
                <?php } else if ($autor == 'Юрий Чикуров') { ?>
                  <?php echo do_shortcode('[contact-form-7 id="4" title="Запись на семинар"]'); ?>
                <?php } else if ($autor == 'Ирина Иванова' && $city == 'Москва') { ?>
                  <?php echo do_shortcode('[contact-form-7 id="3941" title="Запись на семинар_Иванова_Москва"]'); ?>
                <?php }  else if ($autor == 'Ирина Иванова') { ?>
                  <?php echo do_shortcode('[contact-form-7 id="170" title="Запись на семинар_Иванова"]'); ?>
                <?php }  else if ($autor == 'Оксана Антонова') { ?>
                  <?php echo do_shortcode('[contact-form-7 id="9084" title="Запись на семинар (Антонова)"]'); ?>
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
                <?php } else if ($autor == 'Семён Доля') { ?>
                  <?php echo do_shortcode('[contact-form-7 id="11251" title="Запись на семинар_Доля"]'); ?>
                <?php } else if ($autor == 'Вячеслав Павленок') { ?>
                  <?php echo do_shortcode('[contact-form-7 id="5968" title="Запись на семинар_Павленок_Москва"]'); ?>
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
  <section class="doctor seminar text-center" id="seminars_else">
    <div class="container">
      <div class="col-md-12 seminar_wrap seminar_next">
        <h4 class="content_center">Этот семинар так же состоится:</h4>
        <div class="row">
          <?php
            $wp_query = new WP_Query( array(
                'category_name' => 'seminary',
                'order' => 'ASC',
                'post_type' => 'post',
                'title' => esc_html(get_the_title()),
                'orderby' => 'meta_value',
                'meta_key' => 'seminar_start',
                'meta_query' => array(
                    array(
                        'key' => 'seminar_end',
                        'value' => date('Y-m-d'),
                        'compare' => '>=',
                        'type' => 'DATE'
                    )
                )
            ));
            $cur_month = 0;
            while ($wp_query->have_posts()) : $wp_query->the_post();
                get_template_part( 'seminar');
            endwhile;
            wp_reset_postdata();
          ?>
        </div>
      </div>
    </div>
  </section>
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
