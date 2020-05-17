  <footer class="footer clearfix">
    <div class="container">
      <div class="row footer-area">
        <div class="col-xs-6 footer-para">
          <p>&copy; Юрий Чикуров <?php echo date('Y'); ?></p>
        </div>
        <div class="col-xs-6 col-sm-3 pull-right text-right footer-social">
          <a target="_blank" href="https://vk.com/id139677998"><i class="fa fa-vk" aria-hidden="true"></i></a>
          <a target="_blank" href="https://www.facebook.com/profile.php?id=100012253260685&pnref"><i class="fa fa-facebook" aria-hidden="true"></i></a>
          <a target="_blank" href="https://www.youtube.com/user/ThePractik01/"><i class="fa fa-youtube" aria-hidden="true"></i></a>
          <a target="_blank" href="https://www.instagram.com/dr.chikurov/"><i class="fa fa-instagram" aria-hidden="true"></i></a>
        </div>
        <div class="clearfix"></div>

        <div class="menu_footer">
          <a href="/seminary">Семинары Доктора Чикурова |</a>
          <a href="/video">Видео |</a>
          <a href="category/otzyvy">Отзывы |</a>
          <a href="/kniga" target="_blank">Книги Доктора Чикурова |</a>
          <a href="/oferta" target="_blank">Оферта</a>
        </div>
      </div>
    </div>
  </footer>
  <?php wp_footer(); ?>
  <!-- script tags
  ============================================================= -->
  <script src="<?php bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>
  <script src="<?php bloginfo('template_url'); ?>/js/loadmore.js"></script>
  <!-- <script src="<?php //bloginfo('template_url'); ?>/js/conversation.js"></script>   -->
  <!-- <script src="<?php //bloginfo('template_url'); ?>/js/peekobot.js"></script> -->
  <script src="<?php bloginfo('template_url'); ?>/js/slick.min.js"></script>
  <script src="<?php bloginfo('template_url'); ?>/js/script.js"></script>
  <?php if (!is_front_page()) { ?>
    <script>
      jQuery(function($){
        $(window).scroll(function(){
                var bottomOffset = 4000;
                console.log('test');
                var data = {
                  'action': 'loadmore',
                  'query': true_posts,
                  'page' : current_page
                };
                var cur_offset = +$(document).height() - bottomOffset;
                if( $(document).scrollTop() > cur_offset && !$('body').hasClass('loading')){
                  console.log('Ding!!!!');
                  $.ajax({
                    url:ajaxurl, // обработчик
                    data:data, // данные
                    type:'POST', // тип запроса
                    beforeSend: function( xhr){
                      $('body').addClass('loading');
                    },
                    success:function(data){
                      if( data ) {
                        $('#loadSeminar').before(data);
                        $('body').removeClass('loading');
                        current_page++;
                      }
                      // var filter_param = jQuery('.btn_city_filter.active').data('filter');
                      // if (filter_param == 'all') {
                      //   jQuery('.seminar_in').removeClass('hidden');
                      // } else if (filter_param == 'msk') {
                      //   jQuery('.seminar_in').addClass('hidden');
                      //   jQuery('.seminar_item__msk').removeClass('hidden');
                      // } else if (filter_param == 'spb') {
                      //   jQuery('.seminar_in').addClass('hidden');
                      //   jQuery('.seminar_item__spb').removeClass('hidden');
                      // } else if (filter_param == 'kiev') {
                      //   jQuery('.seminar_in').addClass('hidden');
                      //   jQuery('.seminar_item__kiev').removeClass('hidden');
                      // } else if (filter_param == 'ast') {
                      //   jQuery('.seminar_in').addClass('hidden');
                      //   jQuery('.seminar_item__ast').removeClass('hidden');
                      // }
                      var filter_param = jQuery('.btn_seminar_filter.active').data('filter_s');

                      if (filter_param == 'all') {
                        jQuery('.seminar_in').removeClass('hidden');
                      } else if (filter_param == 'msk') {
                        jQuery('.seminar_in').addClass('hidden');
                        jQuery('.seminar_item__msk').removeClass('hidden');
                      } else if (filter_param == 'spb') {
                        jQuery('.seminar_in').addClass('hidden');
                        jQuery('.seminar_item__spb').removeClass('hidden');
                      } else if (filter_param == 'kiev') {
                        jQuery('.seminar_in').addClass('hidden');
                        jQuery('.seminar_item__kiev').removeClass('hidden');
                      } else if (filter_param == 'riga') {
                        jQuery('.seminar_in').addClass('hidden');
                        jQuery('.seminar_item__riga').removeClass('hidden');
                      } else if (filter_param == 'ch') {
                        jQuery('.seminar_in').addClass('hidden');
                        jQuery('.seminar_item__ch').removeClass('hidden');
                      } else if (filter_param == 'iv') {
                        jQuery('.seminar_in').addClass('hidden');
                        jQuery('.seminar_item__iv').removeClass('hidden');
                      } else if (filter_param == 'ks') {
                        jQuery('.seminar_in').addClass('hidden');
                        jQuery('.seminar_item__ks').removeClass('hidden');
                      } else if (filter_param == 'zk') {
                        jQuery('.seminar_in').addClass('hidden');
                        jQuery('.seminar_item__zk').removeClass('hidden');
                      } else if (filter_param == 'sh') {
                        jQuery('.seminar_in').addClass('hidden');
                        jQuery('.seminar_item__sh').removeClass('hidden');
                      } else if (filter_param == 'is') {
                        jQuery('.seminar_in').addClass('hidden');
                        jQuery('.seminar_item__is').removeClass('hidden');
                      } else if (filter_param == 'st') {
                        jQuery('.seminar_in').addClass('hidden');
                        jQuery('.seminar_item__st').removeClass('hidden');
                      } else if (filter_param == 'pl') {
                        jQuery('.seminar_in').addClass('hidden');
                        jQuery('.seminar_item__pl').removeClass('hidden');
                      } else if (filter_param == 'ms') {
                        jQuery('.seminar_in').addClass('hidden');
                        jQuery('.seminar_item__ms').removeClass('hidden');
                      }  else if (filter_param == 'pa') {
                        jQuery('.seminar_in').addClass('hidden');
                        jQuery('.seminar_item__pa').removeClass('hidden');
                      } else if (filter_param == 'online') {
                        jQuery('.seminar_in').addClass('hidden');
                        jQuery('.seminar_item__online').removeClass('hidden');
                      }
                    }
                  });
                }
              });
            });
    </script>
  <?php } ?>
  <div class="modal fade" id="consult" tabindex="-1" role="dialog" aria-labelledby="videoCoursLabel" aria-hidden="true">
      <div class="modal-dialog modal-sm">
          <div class="modal-content">
              <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  <h4 class="modal-title" id="videoCoursLabel">Заявка на консультацию</h4>
              </div>
              <div class="modal-body">
                  <?php echo do_shortcode('[contact-form-7 id="6950" title="Заявка на консультацию"]')?>
              </div>
          </div>
      </div>
  </div>
  <div class="modal fade" id="book_down" tabindex="-1" role="dialog" aria-labelledby="videoCoursLabel" aria-hidden="true">
      <div class="modal-dialog styled_form">
          <div class="modal-content">
              <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  <h4 class="modal-title" id="videoCoursLabel">Получить книгу бесплатно</h4>
              </div>
              <div class="modal-body">
                  <h4>"Биологическое центрирование. Практическое руководство"</h4>
                  <div class="clearfix">
                    <div class="col-md-4" style="text-align: center;">
                      <!-- <img style="max-width: 100%;" class="img-responsive pull-left content_img colorbox-147" src="/wp-content/themes/chikurov/img/oblojka.png" alt=""> -->
                    </div>
                    <div class="col-md-8">
                      <script id="8ef7af9574fa734129cd56c349d840febd4766c2" src="https://school-bc.ru/pl/lite/widget/script?id=24256&rand=adgaas"></script>
                    </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <div class="modal fade" id="book_down_8" tabindex="-1" role="dialog" aria-labelledby="videoCoursLabel" aria-hidden="true">
      <div class="modal-dialog styled_form">
          <div class="modal-content">
              <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  <h4 class="modal-title" id="videoCoursLabel">Получить книгу бесплатно</h4>
              </div>
              <div class="modal-body">
                  <h4>"Практическая Писхосоматика"</h4>
                  <div class="clearfix">
                    <div class="col-md-4" style="text-align: center;">
                      <img style="max-width: 100%;" class="img-responsive pull-left content_img colorbox-147" src="/wp-content/themes/chikurov/img/psichosomatics_rus.png" alt="">
                    </div>
                    <div class="col-md-8">
                      <script id="8ef7af9574fa734129cd56c349d840febd4766c2" src="https://school-bc.ru/pl/lite/widget/script?id=24256&rand=eyref"></script>
                    </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <div class="modal fade" id="book_down_7" tabindex="-1" role="dialog" aria-labelledby="videoCoursLabel" aria-hidden="true">
      <div class="modal-dialog styled_form">
          <div class="modal-content">
              <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  <h4 class="modal-title" id="videoCoursLabel">Download the book for free</h4>
              </div>
              <div class="modal-body">
                  <h4>"Practical Psychosomatics"</h4>
                  <div class="clearfix">
                    <div class="col-md-4" style="text-align: center;">
                      <img style="max-width: 100%;" class="img-responsive pull-left content_img colorbox-147" src="/wp-content/themes/chikurov/img/pp_.png" alt="">
                    </div>
                    <div class="col-md-8">
                      <script id="2de8da5d11141991a4cd0b64ffe0927d263aff0e" src="https://school-bc.ru/pl/lite/widget/script?id=112752&rand=teree"></script>
                    </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <?php if (is_page('527')) { ?>
  <div class="modal fade" id="book_down_2" tabindex="-1" role="dialog" aria-labelledby="videoCoursLabel" aria-hidden="true">
      <div class="modal-dialog styled_form">
          <div class="modal-content">
              <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  <h4 class="modal-title" id="videoCoursLabel">Получить книгу бесплатно</h4>
              </div>
              <div class="modal-body">
                  <h4>"Остеопатическое лечение внутрикостных дисфункций"</h4>
                  <div class="clearfix">
                    <div class="col-md-4" style="text-align: center;">
                      <img style="max-width: 100%;" class="img-responsive pull-left content_img colorbox-147" src="/wp-content/uploads/2018/09/1008800977.png" alt="">
                    </div>
                    <div class="col-md-8">
                      <script id="8ef7af9574fa734129cd56c349d840febd4766c2" src="https://school-bc.ru/pl/lite/widget/script?id=24256&rand=sdgaer"></script>
                    </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <div class="modal fade" id="book_down_3" tabindex="-1" role="dialog" aria-labelledby="videoCoursLabel" aria-hidden="true">
      <div class="modal-dialog styled_form">
          <div class="modal-content">
              <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  <h4 class="modal-title" id="videoCoursLabel">Получить книгу бесплатно</h4>
              </div>
              <div class="modal-body">
                  <h4>"Мягкие мануальные техники"</h4>
                  <div class="clearfix">
                    <div class="col-md-4" style="text-align: center;">
                      <img style="max-width: 100%;" class="img-responsive pull-left content_img colorbox-147" src="/wp-content/uploads/2018/09/1003575676.png" alt="">
                    </div>
                    <div class="col-md-8">
                      <script id="8ef7af9574fa734129cd56c349d840febd4766c2" src="https://school-bc.ru/pl/lite/widget/script?id=24256&rand=adfallsr"></script>
                    </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <div class="modal fade" id="book_down_4" tabindex="-1" role="dialog" aria-labelledby="videoCoursLabel" aria-hidden="true">
      <div class="modal-dialog styled_form">
          <div class="modal-content">
              <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  <h4 class="modal-title" id="videoCoursLabel">Получить книгу бесплатно</h4>
              </div>
              <div class="modal-body">
                  <h4>"Краниосакральная терапия висцеральные техники, обучение остеопатии"</h4>
                  <div class="clearfix">
                    <div class="col-md-4" style="text-align: center;">
                      <img style="max-width: 100%;" class="img-responsive pull-left content_img colorbox-147" src="/wp-content/uploads/2018/09/1002164298.png" alt="">
                    </div>
                    <div class="col-md-8">
                      <script id="8ef7af9574fa734129cd56c349d840febd4766c2" src="https://school-bc.ru/pl/lite/widget/script?id=24256&rand=teadfar"></script>
                    </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <div class="modal fade" id="book_down_5" tabindex="-1" role="dialog" aria-labelledby="videoCoursLabel" aria-hidden="true">
      <div class="modal-dialog styled_form">
          <div class="modal-content">
              <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  <h4 class="modal-title" id="videoCoursLabel">Получить книгу бесплатно</h4>
              </div>
              <div class="modal-body">
                  <h4>"Лечение внутренних органов методами висцеральной остеопатии"</h4>
                  <div class="clearfix">
                    <div class="col-md-4" style="text-align: center;">
                      <img style="max-width: 100%;" class="img-responsive pull-left content_img colorbox-147" src="/wp-content/uploads/2018/09/1000794416.png" alt="">
                    </div>
                    <div class="col-md-8">
                      <script id="8ef7af9574fa734129cd56c349d840febd4766c2" src="https://school-bc.ru/pl/lite/widget/script?id=24256&rand=sdfal"></script>
                    </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <div class="modal fade" id="book_down_6" tabindex="-1" role="dialog" aria-labelledby="videoCoursLabel" aria-hidden="true">
      <div class="modal-dialog styled_form">
          <div class="modal-content">
              <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  <h4 class="modal-title" id="videoCoursLabel">Получить книгу бесплатно</h4>
              </div>
              <div class="modal-body">
                  <h4>"Эстетическое мануальное моделирование лица и тела"</h4>
                  <div class="clearfix">
                    <div class="col-md-4" style="text-align: center;">
                      <img style="max-width: 100%;" class="img-responsive pull-left content_img colorbox-147" src="/wp-content/uploads/2018/09/8734-thickbox_default.jpg" alt="">
                    </div>
                    <div class="col-md-8">
                      <script id="8ef7af9574fa734129cd56c349d840febd4766c2" src="https://school-bc.ru/pl/lite/widget/script?id=24256&rand=allaserk"></script>
                    </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <?php } ?>
  <div class="modal fade" id="lovushka_down" tabindex="-1" role="dialog" aria-labelledby="videoCoursLabel" aria-hidden="true">
      <div class="modal-dialog styled_form">
          <div class="modal-content">
              <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  <h4 class="modal-title" id="videoCoursLabel">Антистресс Визард-ловушка</h4>
              </div>
              <div class="modal-body">
                  <?php //echo do_shortcode('[contact-form-7 id="449" title="Купить ловушку"]')?>
                  <div class="clearfix">
                    <div class="col-md-4" style="text-align: center;">
                    <img style="max-width: 100%;" class="img-responsive pull-left content_img colorbox-147" src="httpsrov.com/wp-content/uploads/2018/03/IMG_3817-167x300.jpg" alt="">
                    </div>
                    <div class="col-md-8">
                      <script id="b85b70eafb20cae19a3f8910bfeaf0f331d89c4d" src="https://school-bc.ru/pl/lite/widget/script?id=24443&rand=kajr"></script>
                    </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <div class="modal fade" id="order_session" tabindex="-1" role="dialog" aria-labelledby="videoCoursLabel" aria-hidden="true">
      <div class="modal-dialog modal-sm">
          <div class="modal-content styled_form_alt">
              <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  <h4 class="modal-title" id="videoCoursLabel">Персональная сессия</h4>
              </div>
              <div class="modal-body">
                  <?php echo do_shortcode('[contact-form-7 id="4279" title="Терапевтическая сессия"]')?>
              </div>
          </div>
      </div>
  </div>
  <div class="modal fade modal_link" id="banner_one" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog modal_menu">
          <div class="modal-content">
              <div class="modal-body">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  <a href="https://school-bc.ru/" target="_blank"><img src="<?php bloginfo('template_url'); ?>/img/banner_april.png" alt="banner_april"></a> 
              </div>
          </div>
      </div>
  </div>
  <!-- Yandex.Metrika counter -->
  <script type="text/javascript" >
      (function (d, w, c) {
          (w[c] = w[c] || []).push(function() {
              try {
                  w.yaCounter46945023 = new Ya.Metrika({
                      id:46945023,
                      clickmap:true,
                      trackLinks:true,
                      accurateTrackBounce:true,
                      webvisor:true
                  });
              } catch(e) { }
          });

          var n = d.getElementsByTagName("script")[0],
              s = d.createElement("script"),
              f = function () { n.parentNode.insertBefore(s, n); };
          s.type = "text/javascript";
          s.async = true;
          s.src = "https://mc.yandex.ru/metrika/watch.js";

          if (w.opera == "[object Opera]") {
              d.addEventListener("DOMContentLoaded", f, false);
          } else { f(); }
      })(document, window, "yandex_metrika_callbacks");
  </script>
  <noscript><div><img src="https://mc.yandex.ru/watch/46945023" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
  <!-- /Yandex.Metrika counter -->
</body>
</html>
