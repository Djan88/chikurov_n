<?php get_header(); ?>
<?php if (is_page(546)) { ?>
    <section class="seminars text-center" id="seminars">
    <div class="container">
      <div class="row">
        <div class="col-md-12"><h2>Расписание семинаров</h2></div>
        <div class="col-md-12 seminar_wrap">
          <div class="row">
            <?php
            // The Query
            $wp_query = new WP_Query( array(
                'category_name' => 'seminary',
                'order' => 'ASC',
                'orderby' => 'meta_value',
                'meta_key' => 'seminar_start',
                'meta_query' => array(
                    array(
                        'key' => 'seminar_start',
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
            <?php if (  $wp_query->max_num_pages > 1 ) : ?>
              <script>
                var ajaxurl = '<?php echo site_url() ?>/wp-admin/admin-ajax.php';
                var true_posts = '<?php echo serialize($wp_query->query_vars); ?>';
                var current_page = <?php echo (get_query_var('paged')) ? get_query_var('paged') : 1; ?>;
                var max_pages = '<?php echo $wp_query->max_num_pages; ?>';
              </script>
              <div id="loadSeminar" class="btn btn-primary btn-lg">Загрузить ещё</div>
            <?php endif; ?>
          </div>
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
