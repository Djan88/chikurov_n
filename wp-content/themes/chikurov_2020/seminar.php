<?php
/**
 * Template part for displaying seminars
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
$seminar_start = get_field('seminar_start');
$date_formated_start = strtotime($seminar_start);
$seminar_start_d = date('d',$date_formated_start);
$seminar_start_m = $seminar_start_months = date('m',$date_formated_start);
$seminar_start_y = date('Y',$date_formated_start);
if ($seminar_start_m == 1) {
  $seminar_start_m = ' января ';
} else if ($seminar_start_m == 2) {
  $seminar_start_m = ' февраля ';
} else if ($seminar_start_m == 3) {
  $seminar_start_m = ' марта ';
} else if ($seminar_start_m == 4) {
  $seminar_start_m = ' апреля ';
} else if ($seminar_start_m == 5) {
  $seminar_start_m = ' мая ';
} else if ($seminar_start_m == 6) {
  $seminar_start_m = ' июня ';
} else if ($seminar_start_m == 7) {
  $seminar_start_m = ' июля ';
} else if ($seminar_start_m == 8) {
  $seminar_start_m = ' августа ';
} else if ($seminar_start_m == 9) {
  $seminar_start_m = ' сентября ';
} else if ($seminar_start_m == 10) {
  $seminar_start_m = ' октября ';
} else if ($seminar_start_m == 11) {
  $seminar_start_m = ' ноября ';
} else if ($seminar_start_m == 12) {
  $seminar_start_m = ' декабря ';
}

$seminar_price = get_field('seminar_price');
$seminar_end = get_field('seminar_end');
$date_formated_end = strtotime($seminar_end);
$seminar_end_d = date('d',$date_formated_end);
$seminar_end_m = date('m',$date_formated_end);
$seminar_end_y = date('Y',$date_formated_end);

if ($seminar_end_m == 1) {
  $seminar_end_m = ' января ';
} else if ($seminar_end_m == 2) {
  $seminar_end_m = ' февраля ';
} else if ($seminar_end_m == 3) {
  $seminar_end_m = ' марта ';
} else if ($seminar_end_m == 4) {
  $seminar_end_m = ' апреля ';
} else if ($seminar_end_m == 5) {
  $seminar_end_m = ' мая ';
} else if ($seminar_end_m == 6) {
  $seminar_end_m = ' июня ';
} else if ($seminar_end_m == 7) {
  $seminar_end_m = ' июля ';
} else if ($seminar_end_m == 8) {
  $seminar_end_m = ' августа ';
} else if ($seminar_end_m == 9) {
  $seminar_end_m = ' сентября ';
} else if ($seminar_end_m == 10) {
  $seminar_end_m = ' октября ';
} else if ($seminar_end_m == 11) {
  $seminar_end_m = ' ноября ';
} else if ($seminar_end_m == 12) {
  $seminar_end_m = ' декабря ';
}

$month_names = array(
  '01' => 'Январь',
  '02' => 'Февраль',
  '03' => 'Март',
  '04' => 'Апрель',
  '05' => 'Май',
  '06' => 'Июнь',
  '07' => 'Июль',
  '08' => 'Август',
  '09' => 'Сентябрь',
  '10' => 'Октябрь',
  '11' => 'Ноябрь',
  '12' => 'Декабрь' 
);

$seminar_city = get_field('city');
if ($seminar_city == 'Москва') {
  $seminar_filter = 'seminar_item__msk';
} else if ($seminar_city == 'Санкт-Петербург') {
  $seminar_filter = 'seminar_item__spb';
} else if ($seminar_city == 'Киев') {
  $seminar_filter = 'seminar_item__kiev';
} else if ($seminar_city == 'Рига') {
  $seminar_filter = 'seminar_item__riga';
} else if (get_field('seminar_online')) {
  $seminar_filter = 'seminar_item__online';
}

$seminar_autor = get_field('autor');
if (is_array($seminar_autor)) {
  $seminar_autor = array_shift($seminar_autor);
}
if ($seminar_autor == 'Юрий Чикуров') {
  $seminar_filter_a = 'seminar_item__ch';
} else if ($seminar_autor == 'Ирина Иванова') {
  $seminar_filter_a = 'seminar_item__iv';
} else if ($seminar_autor == 'Василий Киселев') {
  $seminar_filter_a = 'seminar_item__ks';
} else if ($seminar_autor == 'Оксана Антонова') {
  $seminar_filter_a = 'seminar_item__an';
} else if ($seminar_autor == 'Елена Зукуле') {
  $seminar_filter_a = 'seminar_item__zk';
} else if ($seminar_autor == 'Марина Салехова') {
  $seminar_filter_a = 'seminar_item__sh';
} else if ($seminar_autor == 'Никита Истомин') {
  $seminar_filter_a = 'seminar_item__is';
} else if ($seminar_autor == 'Сергей Стеканов') {
  $seminar_filter_a = 'seminar_item__st';
} else if ($seminar_autor == 'Олег Плотников') {
  $seminar_filter_a = 'seminar_item__pl';
} else if ($seminar_autor == 'Галина Москаленко') {
  $seminar_filter_a = 'seminar_item__ms';
} else if ($seminar_autor == 'Вячеслав Павленок') {
  $seminar_filter_a = 'seminar_item__pa';
} else if ($seminar_autor == 'Семён Доля') {
  $seminar_filter_a = 'seminar_item__dl';
}

global $cur_month;
if ($cur_month != $seminar_start_months) {
  echo '<div class="col-md-12 seminar_heading_wrap seminar_heading_wrap_';
  echo $cur_month;
  echo '">';
  echo '<h3 class="seminar_heading">';
  $cur_month = date('m',$date_formated_start);
  echo $month_names[$cur_month];
  echo ' ';
  echo $seminar_start_y;
  echo '</h3>';
  echo "</div>";
}
echo '<a class="seminar_item seminar_in ';
echo $seminar_filter;
echo ' ';
echo $seminar_filter_a;
if (get_field('seminar_acent')) {
  echo ' seminar_acent';
}
if (get_field('seminar_online')) {
  echo ' seminar_online';
}
echo ' col-md-12"';
echo 'data-start="';
echo $seminar_start;
echo'" target="_blank" href="';
echo the_permalink();
echo '">';
echo '<div class="row">';
echo '<div class="seminar_time col-md-4 col-sm-5 col-xs-12">';
echo '<div class="seminar_date" style="margin-bottom: 10px;">';
echo '<span class="fa fa-calendar"></span> ';
echo $seminar_start_d;
echo $seminar_start_m;
echo $seminar_start_y;
echo ' — ';
if($seminar_end){
 echo $seminar_end_d;
 echo $seminar_end_m;
 echo $seminar_end_y;
} else {
 echo $seminar_start_d;
 echo $seminar_start_m;
 echo $seminar_start_y;
}
echo ' </div>';
echo '<div class="seminar_date">';
if (get_field('seminar_online')) {
  echo ' <span class="fa fa-globe"></span> ';
  echo '<span class="seminar_online_title">Онлайн семинар</span>';
} else {
  echo ' <span class="fa fa-map-marker"></span>Город: ';
  echo '<span class="seminar_city_name">';
  echo $seminar_city;
  if(current_user_can('administrator')){
    echo ' <span class="adm_price" style="color: #ddd"> ';
    echo $seminar_price;
    echo '</span>';
  }
  echo '</span>';
}
if ($seminar_autor != 'Юрий Чикуров') {
  echo '<div class="seminar_lector">';
  echo '<span class="fa fa-user"></span> Читает: ';
  echo '<span class="seminar_lector_name">';
  echo $seminar_autor;
  echo  '</span>';
  echo  '</div>';
}
if (get_field('seminar_acent')) {
  echo '<span class="seminar_new">';
  echo 'NEW';
  echo  '</span>';
}
// echo ' | ';
// if (get_field('seminar_online')) {
  // echo ' <span class="fa fa-user"></span>Автор: ';
// } else {
  // echo ' <span class="fa fa-user"></span>Читает: ';
// }
// the_field('autor');
echo '</div>';
echo '</div>';
echo '<div class="seminar_head col-md-8 col-sm-7 col-xs-12">';
// echo '<a target="_blank" href="';
// echo the_permalink();
// echo '">';
echo the_title();
if (get_field('order_closed')) {
  echo '<div class="seminar_closed">';
  echo 'Запись закрыта ';
  echo '<span class="chain_link">(лист ожидания)</span></div>';
}
// echo '</a>';
echo '</div>';
echo '</div>';
echo '</a>';
?>
