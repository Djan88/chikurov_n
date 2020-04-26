<?php add_theme_support('post-thumbnails'); ?>
<?php
//fix for cookie error while login.
setcookie(TEST_COOKIE, 'WP Cookie check', 0, COOKIEPATH, COOKIE_DOMAIN); 
if ( SITECOOKIEPATH != COOKIEPATH ) 
setcookie(TEST_COOKIE, 'WP Cookie check', 0, SITECOOKIEPATH, COOKIE_DOMAIN);
?>
<?php
    if (function_exists('add_theme_support')) {
        add_theme_support('menus');
    }
?>
<?php
function true_loadmore_scripts() {
    wp_enqueue_script('jquery'); // скорее всего он уже будет подключен, это на всякий случай
    wp_enqueue_script( 'true_loadmore', get_stylesheet_directory_uri() . '/js/loadmore.js', array('jquery') );
}
add_action( 'wp_enqueue_scripts', 'true_loadmore_scripts' );
?>
<?php
function true_load_posts(){
    $args = unserialize( stripslashes( $_POST['query'] ) );
    $args['paged'] = $_POST['page'] + 1; // следующая страница
    $args['post_status'] = 'publish';
    // обычно лучше использовать WP_Query, но не здесь
    query_posts( $args );
    // если посты есть
    if( have_posts() ) :
        // запускаем цикл
        while( have_posts() ): the_post();
            get_template_part( 'seminar', get_post_format() );
        endwhile;
    endif;
    die();
}
add_action('wp_ajax_loadmore', 'true_load_posts');
add_action('wp_ajax_nopriv_loadmore', 'true_load_posts');
?>
