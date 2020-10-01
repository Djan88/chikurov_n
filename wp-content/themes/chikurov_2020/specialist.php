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
$specilist_city = get_field('specilist_city');

echo '<div class="specilist_item col-md-3 col-sm-4 col-xs-12">';
echo '<div class="specilist_item_inner">';
echo '<img src="';
echo the_field('specilist_foto');
echo '" alt="">';
echo '<h3>';
echo the_title();
echo '</h3>';
echo '<h4>';
echo $specilist_country;
echo '</br>';
echo $specilist_city;
echo '</h4>';
echo '<a class="specilist_tel hidden" href="tel:';
echo $specilist_phone_alt;
echo '">';
echo $specilist_phone;
echo '</a>';
echo '</br>';
echo '<a class="specilist_email hidden" href="mailto:';
echo $specilist_email;
echo '">';
echo $specilist_email;
echo '</a>';
echo '<span class="specilist_item_content">';
echo the_content();
echo '</span">';
echo '</div>';
echo '</div>';
?>
