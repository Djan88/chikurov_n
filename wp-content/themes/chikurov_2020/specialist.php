<?php
/**
 * Template part for displaying specialists
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>
<?php
$specilist_phone = get_field('specilist_phone');
$specilist_phone_alt = get_field('specilist_phone_alt');
$specilist_email = get_field('specilist_email');
$specilist_country = get_field('specilist_country');

echo '<div class="specilist_item col-md-3 col-sm-4 col-xs-12">';
echo '<img src="';
echo the_field('specilist_foto');
echo '" alt="">';
echo '<h2>';
echo the_title();
echo '</h2>';
echo '<h3>';
echo $specilist_country;
echo '</h3>';\
echo '<a class="specilist_tel" href="tel:';
echo $specilist_phone_alt;
echo '">';
echo $specilist_phone;
echo '</a>';
echo '<a class="specilist_email" href="mailto:';
echo $specilist_email;
echo '">';
echo $specilist_email;
echo '</a>';
echo '</div>';
?>
