<?php get_header(); ?>
<?php if (is_category(9)) { ?>
  <section class="seminars text-center reviews_wrap" id="lectors">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2>Отзывы</h2>
        </div>
        <div class="col-md-12">
          <?php
          // The Query
          $query_reviews = new WP_Query( array( 'category_name' => 'otzyvy') );
          $cur_month = 0;
          while ($query_reviews->have_posts()) : $query_reviews->the_post();
              echo '<div class="review col-md-3 col-sm-6 col-xs-12">';
              echo '<div class="review_inner">';
              echo '<a href="';
              if (get_field('link_review')) {
                echo the_field('link_review');
              } else {
                echo the_permalink();
              }
              echo '" target="_blank" title="Ссылка на источник">';
              echo '<img src="';
              echo the_field('img_review');
              echo '" alt="">';
              echo '</a>';
              echo '<p>';
              echo the_content(__('(читать полностью)'));
              echo '</p>';
              echo '<a href="';
              if (get_field('link_review')) {
                echo the_field('link_review');
              } else {
                echo the_permalink();
              }
              echo '" target="_blank" title="Ссылка на источник">';
              echo the_field('name_review');
              echo '</a>';
              echo '</div>';
              echo '</div>';
          endwhile;
          wp_reset_postdata();
          ?>
        </div>
      </div>
    </div>
  </section>
<?php } else if (is_page(546) || is_page(630)) { ?>
    <section class="seminars text-center" id="seminars">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <?php if (is_page(546)) { ?>
            <h2>Расписание семинаров</h2>
            <!-- <div class="cyties col-md-12">
              <button type="button" data-filter_s="all" class="btn btn-success btn_seminar_filter active">Все семинары</button>
              <button type="button" data-filter_s="msk" class="btn btn-warning btn_seminar_filter">Москва</button>
              <button type="button" data-filter_s="spb" class="btn btn-warning btn_seminar_filter">Санкт—Петербург</button>
              <button type="button" data-filter_s="kiev" class="btn btn-warning btn_seminar_filter">Киев</button>
              <button type="button" data-filter_s="riga" class="btn btn-warning btn_seminar_filter">Рига</button>
              <button type="button" data-filter_s="online" class="btn btn-info btn_seminar_filter">Онлайн школа</button>
            </div> -->
            <!-- <div class="autors col-md-12">
              <button type="button" data-filter_s="ch" class="btn btn-warning btn_seminar_filter">Юрий Чикуров</button>
              <button type="button" data-filter_s="iv" class="btn btn-warning btn_seminar_filter">Ирина Иванова</button>
              <button type="button" data-filter_s="ks" class="btn btn-warning btn_seminar_filter">Василий Киселев</button>
              <button type="button" data-filter_s="zk" class="btn btn-warning btn_seminar_filter">Елена Зукуле</button>
              <button type="button" data-filter_s="sh" class="btn btn-warning btn_seminar_filter">Марина Салехова</button>
              <button type="button" data-filter_s="pl" class="btn btn-warning btn_seminar_filter">Олег Плотников</button>
              <button type="button" data-filter_s="st" class="btn btn-warning btn_seminar_filter">Сергей Стеканов</button>
              <button type="button" data-filter_s="ms" class="btn btn-warning btn_seminar_filter">Галина Москаленко</button>
              <button type="button" data-filter_s="pa" class="btn btn-warning btn_seminar_filter">Вячеслав Павленок</button>
            </div> -->
          <?php } ?> 
          <?php if (is_page(630)) { ?>
            <h2>Расписание семинаров мастеров</h2>
          <?php } ?> 
        </div>
        <div class="col-md-12 seminar_wrap">
          <div class="row">
            <?php
            // The Query
            if (is_page(546)) {
              $wp_query = new WP_Query( array(
                  'category_name' => 'seminary',
                  'order' => 'ASC',
                  'orderby' => 'meta_value',
                  'meta_key' => 'seminar_start',
                  'meta_query' => array(
                      array(
                          'key' => 'seminar_end',
                          'value' => date('Y-m-d'),
                          'compare' => '>=',
                          'type' => 'DATE'
                      ),
                      array(
                          'key' => 'autor',
                          'value' => 'Юрий Чикуров',
                          'compare' => '=',
                          'type' => 'CHAR'
                      )
                  )
              ));
            } else if (is_page(630)) {
              $wp_query = new WP_Query( array(
                  'category_name' => 'seminary',
                  'order' => 'ASC',
                  'orderby' => 'meta_value',
                  'meta_key' => 'seminar_start',
                  'meta_query' => array(
                      array(
                          'key' => 'seminar_end',
                          'value' => date('Y-m-d'),
                          'compare' => '>=',
                          'type' => 'DATE'
                      ),
                      array(
                          'key' => 'autor',
                          'value' => 'Юрий Чикуров',
                          'compare' => 'NOT LIKE',
                          'type' => 'CHAR'
                      )
                  )
              ));
            }
            
            $cur_month = 0;
            while ($wp_query->have_posts()) : $wp_query->the_post();
                get_template_part( 'seminar');
            endwhile;
            wp_reset_postdata();
            ?>
            <?php if (  $wp_query->max_num_pages > 1 ) : ?>
              <script>
                var ajaxurl = '<?php echo site_url() ?>/wp-admin/admin-ajax.php';
                var true_posts = '<?php echo serialize($wp_query->query_vars); ?>';
                var current_page = <?php echo (get_query_var('paged')) ? get_query_var('paged') : 1; ?>;
              </script>
              <div id="loadSeminar" class="btn btn-primary btn-lg hidden">Загрузить ещё</div>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php } else if (is_page(6923) || is_page(6885) || is_page(6889) || is_page(6891) || is_page(6893) || is_page(6895) || is_page(6899) || is_page(6901) || is_page(6906) || is_page(6908) || is_page(6915) || is_page(6917) || is_page(6919) || is_page(6921)) { ?>
  <section class="seminar text-center" id="seminar">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2><?php the_title(); ?></h2>
        </div>
        <div class="col-md-6 seminar_type"><i class="fa fa-bookmark" aria-hidden="true"> </i> <?php the_field('seminar_type'); ?> <span class="seminar_timing"><i class="fa fa-clock-o" aria-hidden="true"> </i> <?php the_field('seminar_hours'); ?></span></div>
        <div class="col-md-12 seminar_content">
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
    <div class="container">
      <div class="row">
        <div class="col-md-12" style="padding: 0;">
          <h5 class="age">Внимание! Семинар рассчитан на аудиторию достигшую возраста 18 лет</h5>
        </div>
        <div class="col-md-12 seminar_wrap seminar_next">
          <h4 class="content_center">Ближайшие даты проведения</h4>
          <div class="row">
            <?php if (is_page(6885)) { ?>
              <?php
                $wp_query = new WP_Query( array(
                    'category_name' => 'seminary',
                    'order' => 'ASC',
                    'post_type' => 'post',
                    'title' => 'БЦ2. Продвинутый семинар по биологическому центрированию',
                    'orderby' => 'meta_value',
                    'meta_key' => 'seminar_start',
                    'meta_query' => array(
                        array(
                            'key' => 'seminar_end',
                            'value' => date('Y-m-d'),
                            'compare' => '>=',
                            'type' => 'DATE'
                        ),
                        array(
                            'key' => 'autor',
                            'value' => 'Юрий Чикуров',
                            'compare' => '=',
                            'type' => 'CHAR'
                        )
                    )
                ));
                $cur_month = 0;
                while ($wp_query->have_posts()) : $wp_query->the_post();
                    get_template_part( 'seminar');
                endwhile;
                wp_reset_postdata();
              ?>
            <?php } else if (is_page(6889)) { ?>
              <?php
                $wp_query = new WP_Query( array(
                    'category_name' => 'seminary',
                    'order' => 'ASC',
                    'post_type' => 'post',
                    'title' => 'MARAKATA – Мастер реальности',
                    'orderby' => 'meta_value',
                    'meta_key' => 'seminar_start',
                    'meta_query' => array(
                        array(
                            'key' => 'seminar_end',
                            'value' => date('Y-m-d'),
                            'compare' => '>=',
                            'type' => 'DATE'
                        ),
                        array(
                            'key' => 'autor',
                            'value' => 'Юрий Чикуров',
                            'compare' => '=',
                            'type' => 'CHAR'
                        )
                    )
                ));
                $cur_month = 0;
                while ($wp_query->have_posts()) : $wp_query->the_post();
                    get_template_part( 'seminar');
                endwhile;
                wp_reset_postdata();
              ?>
            <?php } ?> 
          </div>
        </div>
      </div>
    </div>
  </section>
<?php } else { ?>
  <section class="seminar text-center" id="seminar">
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h2><?php the_title(); ?></h2>
      </div>
      <div class="col-md-12 seminar_content">
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
