<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8" />
    <!-- <base href="/"> -->
    <?php wp_head(); ?>
    <title>Автозапчасти</title>
    <meta name="description" content="" />

    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

    <!-- Template Basic Images Start -->
    <meta property="og:image" content="path/to/image.jpg" />
    <link rel="icon" href="<?php echo get_template_directory_uri()?>/img/favicon/favicon.png" />
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri()?>/img/favicon/apple-touch-icon-180x180.png" />
    <!-- Template Basic Images End -->

    <!-- Custom Browsers Color Start -->
    <meta name="theme-color" content="#E5E5E5" />
    <meta name="msapplication-navbutton-color" content="#E5E5E5" />
    <meta name="apple-mobile-web-app-status-bar-style" content="#E5E5E5" />

  </head>

  <body class="ishome">
    <div id="my-page">
      <div id="my-header">
        <header class="site-header">
          <div class="callback-container">
            <div class="callback-before"></div>

            <form class="callback-header-form">
              <div class="success"><span>Спасибо за заявку!</span></div>

              <input type="hidden" name="project_name" value="Автозапчасти" />
              <input type="hidden" name="admin_email" value="example@mail.com" />
              <input type="hidden" name="form_subject" value="Заказан звонок с сайта Автозапчасти" />
              <div class="close">
                <span>×</span>
              </div>
              <div class="formhead">Заказать звонок</div>
              <label for="header-form-name">Как к вам обращаться?</label>
              <input id="header-form-name" type="text" name="Имя" placeholder="Ваше имя" />
              <label for="header-form-phone">Номер телефона</label>
              <input id="header-form-phone" type="tel" name="Телефон" placeholder="+7(XXX)XXX-XXXX" required />
              <p>
                Отправляя форму, я соглашаюсь с политикой обработки <a class="personal" href="#">персональных данных</a>
              </p>
              <button class="call-button">ЗАКАЗАТЬ ЗВОНОК</button>
            </form>
          </div>

          <div class="personal-container">
            <div class="personal-before"></div>

            <form class="personal-form">
              <div class="personal-close">
                <span>×</span>
              </div>
              <div class="formhead">Соглашение на обработку<br />персональных данных</div>
              <p>
                Если Вы разместили Ваши контактные данные на сайте http://splavstart.ru, то Вы автоматически согласились
                на дальнейшую передачу Ваших контактных данных менеджерам сайта и Вы подтверждаете свое согласие на
                обработку компанией персональных данных в соответствии с Федеральным законом № 152-ФЗ «О персональных
                данных» от 27.07.2006 года: сбор, систематизацию, накопление, хранение, уточнение (обновление,
                изменение), использование, передачу компаниям-партнерам исключительно в целях обеспечения мобильности
                обратного взаимодействия с Вами при решении вопросов, связанных с Вашим обращением.
              </p>
              <p>
                Мы гарантируем конфиденциальность получаемой информации. Обработка персональных данных осуществляется в
                целях эффективного исполнения заказов, договоров и иных обязательств, принятых компанией.
              </p>
              <p>
                Настоящее согласие распространяется на следующие Ваши персональные данные: фамилия, имя и отчество,
                адрес электронной почты, контактный телефон, платёжные реквизиты.
              </p>
              <p>
                Срок действия согласия является неограниченным. Вы можете в любой момент отозвать настоящее согласие,
                направив письменное уведомления на адрес promo@studiosplav.ru
              </p>
              <p>
                Обращаем ваше внимание, что отзыв согласия на обработку персональных данных влечёт за собой удаление
                Вашей учётной записи с Интернет-сайта http://splavstart.ru, а также уничтожение записей, содержащих ваши
                персональные данные, в системах обработки персональных данных компании.
              </p>
            </form>
          </div>

          <div class="top-line">
            <div class="container">
              <div class="row">
                <div class="col">
                  <a href="#" class="logo"><img src="<?php the_field('header_logo'); ?>" alt="Автозапчасти" />АВТОМИР</a>
                </div>
                <div class="col">
                  <div class="time">
                    <img src="<?php echo get_template_directory_uri()?>/img/clock.svg" alt="" />
                    <div class="time_info">  ЧАСЫ РАБОТЫ:<br /><?php the_field('header_worktime'); ?></div>
                  </div>
                </div>
                <div class="col">
                  <div class="mail">
                    <img src="<?php echo get_template_directory_uri()?>/img/email.svg" alt="" />
                    E-MAIL<br /><a href="#"><?php the_field('header_mail'); ?></a>
                  </div>
                </div>
                <div class="col">
                  <div class="phone">
                    <img src="<?php echo get_template_directory_uri()?>/img/phone.svg" alt="" />
                    ТЕЛЕФОН<br /><?php the_field('header_phone'); ?>
                  </div>
                </div>
                <div class="col">
                  <a href="#" class="callback">ЗАКАЗАТЬ ЗВОНОК</a>
                </div>
              </div>
            </div>
          </div>

          <div class="header-banner">
            <div class="header-flex">
              <div class="flex-center img">
                <div class="container">
                  <div class="row">
                    <div class="col-5">
                      <div class="header-composition">
                        <h1 class="h1"><?php the_title(); ?></h1>
                        <?php the_content(); ?>
                        <a href="#contact" id="header-button" class="button">ОСТАВИТЬ ЗАЯВКУ</a>
                      </div>
                    </div>
                    <div class="col-7">
                      <img id="img" src="<?php echo get_template_directory_uri()?>/img/1screen-image.png" alt="Автозапчасти" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </header>
      </div>

      <div id="my-content">
        <div class="services-callback-container">
          <div class="services-callback-before"></div>

          <form class="services-callback-form">
            <div class="success"><span>Спасибо за заявку!</span></div>

            <input type="hidden" name="project_name" value="Автозапчасти" />
            <input type="hidden" name="admin_email" value="example@mail.com" />
            <input type="hidden" name="form_subject" value="Новая заявка с сайта Автозапчасти" />
            <div class="close">
              <span>×</span>
            </div>
            <div class="formhead">Оставить заявку</div>
            <label for="services-form-name">Как к вам обращаться?</label>
            <input id="services-form-name" type="text" name="Имя" placeholder="Ваше имя" />
            <label for="services-form-phone">Номер телефона</label>
            <input id="services-form-phone" type="tel" name="Телефон" placeholder="+7(XXX)XXX-XXXX" required />
            <label for="services-form-message">Что вас интересует?</label><br />
            <textarea id="services-form-message" name="Сообщение" rows="4" placeholder="Ваш вопрос"></textarea>
            <p>
              Отправляя форму, я соглашаюсь с политикой обработки
              <a class="personal" href="#my-content">персональных данных</a>
            </p>
            <button class="call-button">ОСТАВИТЬ ЗАЯВКУ</button>
          </form>
        </div>

        <section class="services">
          <div class="container">
            <h2 class="h2">МЫ ПРЕДЛАГАЕМ СЛЕДУЮЩИЕ УСЛУГИ:</h2>
            <p class="services-text">
              Все поставщики тщательно отобраны и проверены временем,<br />что полностью исключает риск приобретения
              контрафакта.
            </p>
            <div class="container services-container">
              <div class="row services-row">
                <?php		
                  global $post;

                  $query = new WP_Query( [
                    'posts_per_page' => 8,
                    'category_name' => 'service'
                  ] );

                  if ( $query->have_posts() ) {
                    while ( $query->have_posts() ) {
                      $query->the_post();
                      ?>
                        <div class="col-lg-3 col-md-4 col-6 item">
                          <div class="services-item">
                            <div class="img-container">
                              <div class="services-callback"></div>
                              <div class="img" style=" background-image: url(<?php the_field('service_image');?>); background-repeat: no-repeat; background-size: cover;"></div>
                            </div>
                            <p><?php the_title();?></p>
                          </div>
                        </div>
                      <?php 
                    }
                  } else {
                    // Постов не найдено
                  }

                  wp_reset_postdata(); // Сбрасываем $post
                  ?>
            </div>
          </div>
        </section>

        <section class="about">
          <div class="container about-container">
            <div class="row">
              <div class="col-md-7 col-12">
                <h2 class="h2"><?php the_field('information'); ?></h2>
                <?php the_field('information_text'); ?>
              </div>
              <div class="col-md-5 col-12 img-col">
                <img src="<?php echo get_template_directory_uri()?>/img/about.png" alt="Наш магазин" />
              </div>
            </div>
          </div>
        </section>

        <section class="photo">
          <div class="big-photo-container">
            <div class="close">
              <span>×</span>
            </div>
            <div class="prev">
              <span><i class="fa fa-angle-left"></i></span>
            </div>
            <div class="next">
              <span><i class="fa fa-angle-right"></i></span>
            </div>
            <div class="photo-before"></div>
            <form class="photo-form">
              <img src="" />
            </form>
          </div>
          <div class="container photo-container">
            <h2 class="h2">ФОТО МАГАЗИНА</h2>
            <div class="row img-row">
              <div class="col-lg-3 col-6 div-img">
                <div class="img-photo-container">
                  <div class="shadow"></div>
                  <div id="photo1" class="img"></div>
                </div>
              </div>
              <div class="col-lg-3 col-6 div-img">
                <div class="img-photo-container">
                  <div class="shadow"></div>
                  <div id="photo2" class="img"></div>
                </div>
              </div>
              <div class="col-lg-3 col-6 div-img">
                <div class="img-photo-container">
                  <div class="shadow"></div>
                  <div id="photo3" class="img"></div>
                </div>
              </div>
              <div class="col-lg-3 col-6 div-img">
                <div class="img-photo-container">
                  <div class="shadow"></div>
                  <div id="photo4" class="img"></div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>

      <div id="my-footer">
        <div id="contact">
          <div class="container">
            <div class="row">
              <div class="col-md-7 col-12">
                <h2 class="h2 h2-form">Оставьте заявку и мы<br />с Вами свяжемся</h2>
                <form class="callback-form">
                  <div class="success"><span>Спасибо за заявку!</span></div>
                  <input type="hidden" name="project_name" value="Автозапчасти" />
                  <input type="hidden" name="admin_email" value="example@mail.com" />
                  <input type="hidden" name="form_subject" value="Новая заявка с сайта Автозапчасти" />
                  <div class="column">
                    <label for="name">Как к вам обращаться?</label><br />
                    <input id="name" type="text" name="Имя" placeholder="Ваше имя" /><br />
                    <label for="phone">Номер телефона</label><br />
                    <input id="phone" type="tel" name="Телефон" placeholder="+7(XXX)XXX-XXXX" required /><br />
                    <label for="email">Электронный адрес</label><br />
                    <input id="email" type="email" name="email" placeholder="e-mail" />
                    <label for="message">Что вас интересует?</label><br />
                    <textarea id="message" name="Сообщение" rows="8" placeholder="Ваш вопрос"></textarea>
                  </div>
                  <p>
                    Отправляя форму, я соглашаюсь с политикой обработки
                    <a class="personal" href="#contact">персональных данных</a>
                  </p>
                  <button class="contact-button">ОСТАВИТЬ ЗАЯВКУ</button>
                </form>
              </div>
              <div class="col-md-5 col-12 map-col">
                <h2 class="h2 h2-contact">Наши контакты</h2>
                <p class="contact-text">
                  101000, г. Москва, Сусальный переулок 5, стр 18<br />
                  Часы работы: пн-пт 9.00-18.00<br />
                  Телефон : +7(000)000-0000<br />
                  e-mail: <span>promo@studiosplav.ru</span>
                </p>
                <div class="map">
                  <script
                    type="text/javascript"
                    charset="utf-8"
                    async
                    src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A815b2ecf71e981ddd4682ef4b6f1715022f75d666d61ede27fdc0262d202714a&amp;width=100%&amp;height=218&amp;lang=ru_RU&amp;scroll=true"
                  ></script>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="top" title="Наверх"><i class="fa fa-angle-double-up"></i></div>

    <?php wp_footer(); ?>
  </body>
</html>
