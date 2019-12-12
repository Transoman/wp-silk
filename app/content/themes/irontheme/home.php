<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/img/favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/img/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/img/favicon/favicon-16x16.png">
  <link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/img/favicon/site.webmanifest">
  <link rel="mask-icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon/safari-pinned-tab.svg" color="#000">
  <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon/favicon.ico">
  <meta name="msapplication-TileColor" content="#000">
  <meta name="msapplication-config" content="<?php echo get_template_directory_uri(); ?>/img/favicon/browserconfig.xml">
  <meta name="theme-color" content="#000">
	<?php wp_head(); ?>
</head>
<body id="top">

<header class="header">
  <div class="container">
    <div class="header__wrap">
      <a href="#top" class="logo">
        <img src="<?php echo get_template_directory_uri(); ?>/images/general/logo.svg" width="120" alt="Silk Дизайн">
      </a>
      <nav class="header__nav nav">
        <ul class="nav-list">
          <li><a href="#services">Услуги</a></li>
          <li><a href="#portfolio">Портфолио</a></li>
          <li><a href="#advantages">Решения</a></li>
          <li><a href="#faq">ФАК</a></li>
        </ul>

        <div class="nav__phone phone">
          <a href="tel:+380967410050" class="phone__link">+380 96 741 00 50</a>
          <a href="mailto:silkdesign.info@gmail.com" class="phone__callback">Напишите нам</a>
        </div>
      </nav>
      <div class="header__phone phone">
        <a href="tel:+380967410050" class="phone__link">+380 96 741 00 50</a><br>
        <a href="mailto:silkdesign.info@gmail.com" class="phone__callback">Напишите нам</a>
      </div>

      <button class="nav-toggle">
        <span class="nav-toggle__line"></span>
      </button>
    </div>
  </div>
</header>

<section class="hero">
  <div class="container">
    <div class="row">

      <div class="col-lg-12">
        <div class="hero__content">
          <h1>Вам нужен <br>сайт…</h1>
          <p>Иначе зачем бы Вы к нам заглянули?</p>
        </div>

        <div class="hero__form">
          <h3>Оставьте заявку</h3>
          <p>и мы с вами свяжемся</p>
          <form class="form form--hr repeat-form">
            <div class="form-group">
              <input type="text" name="name" class="form__field" placeholder="Имя" required>
            </div>
            <div class="form-group">
              <input type="email" name="email" class="form__field" placeholder="E-mail" required>
            </div>
            <div class="form-group form-group--btn">
              <button type="submit" class="btn form__btn">Отправить</button>
            </div>
            <input type="hidden" name="subject" value="Заявка с первого экрана">
            <input type="hidden" name="r2d2">
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- /.container -->
</section>
<!-- /.hero -->
<section class="services" id="services">
  <div class="container">

    <div class="services__wrap">
      <h2 class="section-title">Мы делаем</h2>

      <div class="services-list row">
        <div class="services-list__item col-sm-6 col-xl-4">
          <div class="services-list__inner">
            <div class="services-list__icon services-list__icon--green">
              <img src="<?php echo get_template_directory_uri(); ?>/images/general/icon-services-1.svg" width="90" height="70" alt="">
            </div>
            <h3>Лендинг пейдж и сайты визитки</h3>
            <p>Создаем инструменты для продаж <br>в интернете, а также знакомим <br>клиентов с Вами.</p>
            <a href="#order-form" class="btn-trs">Заказать</a>
          </div>
        </div>
        <div class="services-list__item col-sm-6 col-xl-4">
          <div class="services-list__inner">
            <div class="services-list__icon services-list__icon--pink">
              <img src="<?php echo get_template_directory_uri(); ?>/images/general/icon-services-2.svg" width="70" height="75" alt="">
            </div>
            <h3>Интернет магазин</h3>
            <p>Мы обеспечиваем множество клиентов <br>большим объемом продаж</p>
            <a href="#order-form" class="btn-trs">Заказать</a>
          </div>
        </div>
        <div class="services-list__item col-sm-6 col-xl-4">
          <div class="services-list__inner">
            <div class="services-list__icon services-list__icon--blue">
              <img src="<?php echo get_template_directory_uri(); ?>/images/general/icon-services-3.svg" width="70" height="80" alt="">
            </div>
            <h3>Корпоративные сайты</h3>
            <p>Лицо компании. Упакуем Ваш бизнес под ключ</p>
            <a href="#order-form" class="btn-trs">Заказать</a>
          </div>
        </div>
        <div class="services-list__item col-sm-6 col-xl-4">
          <div class="services-list__inner">
            <div class="services-list__icon services-list__icon--orange">
              <img src="<?php echo get_template_directory_uri(); ?>/images/general/icon-services-4.svg" width="65" height="70" alt="">
            </div>
            <h3>Полиграфия</h3>
            <p>Разработка полиграфической продукции <br>в поддержку рекламной компании <br>и промо материалов.</p>
            <a href="#order-form" class="btn-trs">Заказать</a>
          </div>
        </div>
      </div>

      <div class="services__count">
        <p class="services__count--number"><span class="counter">99</span>%</p>
        <p class="services__count--desc">Довольных клиентов <br>стали нашими партнерами <br>и рекомендуют нас</p>
      </div>
    </div>

  </div>
  <!-- /.container -->
  <img src="<?php echo get_template_directory_uri(); ?>/images/general/star-ship.png" alt="" class="parallax parallax-ship">
</section>
<!-- /.services -->

<section class="portfolio" id="portfolio">
  <div class="container">
    <h2 class="section-title">Примеры наших работ</h2>
    <p class="section-desc">Мы практикуем исключительно индивидуальный подход и отталкиваемся <br>от маркетинговых целей и задач клиента.</p>

  </div>
  <!-- /.container -->

  <div class='portfolio-list'>
		<?php
		$terms = get_terms( array(
			'taxonomy' => 'portfolio_cat',
			'orderby' => 'id',
			'order' => 'ASC'
		));

		if ($terms && !is_wp_error( $terms )): ?>
      <ul class="portfolio-list__tabs">
        <li><a href="#all">Все</a></li>
				<?php foreach ($terms as $term): ?>
          <li><a href="#<?php echo $term->slug; ?>"><?php echo $term->name; ?></a></li>
				<?php endforeach; ?>
      </ul>
		<?php endif; ?>

	  <?php
	  $args = array(
		  'post_type' => 'portfolio',
		  'posts_per_page' => -1,
		  'order' => 'ASC'
	  );

	  $posts = new WP_Query( $args );

	  if ($posts->have_posts()): ?>
      <div id='all' class="portfolio-list__item">
        <div class="portfolio-slider swiper-container">
          <div class="swiper-wrapper">
            <?php while ($posts->have_posts()): $posts->the_post(); ?>
              <div class="portfolio-slider__item swiper-slide" data-simplebar>
                <?php the_post_thumbnail('full', array('class' => 'portfolio-slider__img')); ?>
              </div>
            <?php endwhile; wp_reset_postdata(); ?>
          </div>
          <div class="swiper-pagination"></div>
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>
        </div>
      </div>
	  <?php endif; ?>

		<?php if ($terms && !is_wp_error( $terms )): ?>
			<?php foreach ($terms as $term): ?>
        <div id='<?php echo $term->slug; ?>' class="portfolio-list__item">
          <div class="portfolio-slider swiper-container">
            <div class="swiper-wrapper">
							<?php
							$args = array(
								'post_type' => 'portfolio',
								'posts_per_page' => -1,
								'order' => 'ASC',
								'tax_query' => array(
									array(
										'taxonomy' => 'portfolio_cat',
										'field' => 'term_id',
										'terms' => $term->term_id
									)
								)
							);

							$posts = new WP_Query( $args );

							if ($posts->have_posts()): ?>
								<?php while ($posts->have_posts()): $posts->the_post(); ?>
                  <div class="portfolio-slider__item swiper-slide" data-simplebar>
										<?php the_post_thumbnail('full', array('class' => 'portfolio-slider__img')); ?>
                  </div>
								<?php endwhile; wp_reset_postdata(); ?>
							<?php endif; ?>
            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
          </div>
        </div>
			<?php endforeach; ?>
		<?php endif; ?>
  </div>
  <!-- /.portfolio-list -->

  <div class="section-form" id="order-form">
    <div class="container">
      <h3>Закажи сайт который уже завтра <br>даст поток Вашему бизнесу!</h3>
      <p class="section-desc">Обращаясь к нам, Вы получаете продуманное решение, которое позволит клиентам определиться с выбором в Вашу сторону, и поддержку 7 дней в неделю.</p>

      <div class="section-form__form">
        <form class="form form--hr repeat-form">
          <div class="form-group">
            <input type="text" name="name" class="form__field" placeholder="Имя" required>
          </div>
          <div class="form-group">
            <input type="email" name="email" class="form__field" placeholder="E-mail" required>
          </div>
          <div class="form-group form-group--btn">
            <button type="submit" class="btn form__btn">Отправить</button>
          </div>
          <input type="hidden" name="subject" value="Заявка с портфолио">
          <input type="hidden" name="r2d2">
        </form>
      </div>
    </div>
    <!-- /.container -->
  </div>
  <!-- /.section-form -->

</section>
<!-- /.portfolio -->
<section class="advantages" id="advantages">
  <div class="container">
    <div class="advantages__head">
      <h2 class="section-title">Наши сайты загрузят ваш отдел продаж на <span>101%</span></h2>
      <p class="section-desc">Инструменты для продаж которые проектируем мы, продают с конверсией от 11%, а в сочетании с нашей рекламой вы получите интернет бизнес под ключ в два клика.</p>
    </div>

    <ul class="advantages-list">

      <li class="advantages-list__item">
        <div class="advantages-list__icon">
          <img src="<?php echo get_template_directory_uri(); ?>/images/general/icon-advantages-1.png" alt="">
        </div>
        <h3>Digital</h3>
        <p>Специалисты UX и UI дизайна <br>знают что будет продавать</p>
      </li>

      <li class="advantages-list__item">
        <div class="advantages-list__icon">
          <img src="<?php echo get_template_directory_uri(); ?>/images/general/icon-advantages-2.png" alt="">
        </div>
        <h3>Креативные концепции</h3>
        <p>Можно сопротивляться вторжению армий, нельзя сопротивляться вторжению идей. <br>Виктор Гюго</p>
      </li>

      <li class="advantages-list__item">
        <div class="advantages-list__icon">
          <img src="<?php echo get_template_directory_uri(); ?>/images/general/icon-advantages-3.png" alt="">
        </div>
        <h3>Web - программирование</h3>
        <p>Всегда адаптивный, валидный и кросс-браузерный код</p>
      </li>

      <li class="advantages-list__item">
        <div class="advantages-list__icon">
          <img src="<?php echo get_template_directory_uri(); ?>/images/general/icon-advantages-4.png" alt="">
        </div>
        <h3>Электронная коммерция</h3>
        <p>Подключим VISA, 1C, настроим автоматизации.</p>
      </li>

      <li class="advantages-list__item">
        <div class="advantages-list__icon">
          <img src="<?php echo get_template_directory_uri(); ?>/images/general/icon-advantages-5.png" alt="">
        </div>
        <h3>Продвижение</h3>
        <p>От контекстной рекламы до СЕО продвижения, работаем по KPI</p>
      </li>

      <li class="advantages-list__item">
        <div class="advantages-list__icon">
          <img src="<?php echo get_template_directory_uri(); ?>/images/general/icon-advantages-6.png" alt="">
        </div>
        <h3>Поддержка</h3>
        <p>По телефону с 9 до 18, по почте 24 часа</p>
      </li>

    </ul>
  </div>
  <!-- /.container -->

  <img src="<?php echo get_template_directory_uri(); ?>/images/general/death-star.png" alt="" class="parallax parallax-star">
</section>
<!-- /.advantages -->

<section class="mountain">
  <ul class="mountain-scene" id="scene">
    <li class="layer" data-depth="0.0"></li>
    <li class="layer" data-depth="0.1">
      <div class="mountain-item mountain-item-1"></div>
    </li>
    <li class="layer" data-depth="0.4">
      <div class="mountain-item mountain-item-2"></div>
    </li>
    <li class="layer" data-depth="0.4">
      <div class="mountain-item mountain-item-3"></div>
    </li>
    <li class="layer" data-depth="-0.2">
      <div class="mountain-item mountain-item-4"></div>
    </li>
    <li class="layer" data-depth="-0.25">
      <div class="mountain-item mountain-item-5"></div>
    </li>
    <li class="layer" data-depth="-0.3">
      <div class="mountain-item mountain-item-6"></div>
    </li>
    <li class="layer" data-depth="0.2">
      <div class="mountain-item mountain-item-7"></div>
    </li>
  </ul>
</section>
<!-- /.mountain -->

<section class="faq" id="faq">
  <div class="container">
    <div class="faq__head">
      <h2 class="section-title">ТОП 5 <br>ответов на самые часто задаваемые вопросы</h2>
      <p class="section-desc">Ответы на вопросы помогут Вам определиться!</p>
    </div>

    <ul class="faq-list">
      <li class="faq-list__item">
        <div class="faq-list__number">
          01
          <img src="<?php echo get_template_directory_uri(); ?>/images/general/scale-1.svg" width="30" alt="">
        </div>
        <h3>Почему нет цен?</h3>
        <div class="faq-list__content">
          <p>К каждому проекту наша команда подходит индивидуально. У вас свои требования к дизайну, цвету, срокам, наполнению сайта и прочих важных нюансов. Цена формируется уже при первом звонке.</p>
        </div>
      </li>
      <li class="faq-list__item">
        <div class="faq-list__number">
          02
          <img src="<?php echo get_template_directory_uri(); ?>/images/general/scale-2.svg" width="30" alt="">
        </div>
        <h3>У меня небольшой бюджет, что делать?</h3>
        <div class="faq-list__content">
          <p>Мы предлагаем вам рассрочку до 6 месяцев без процентов или подберем решение исходя из вашего бюджета. Также обращаем внимание, что качественная работа не может стоить ниже 25 000 рублей.</p>
        </div>
      </li>
      <li class="faq-list__item">
        <div class="faq-list__number">
          03
          <img src="<?php echo get_template_directory_uri(); ?>/images/general/scale-3.svg" width="45" alt="">
        </div>
        <h3>Можно подарок или скидку?</h3>
        <div class="faq-list__content">
          <p>Их есть у нас =) К любому нашему сайту  контекстную рекламу мы настраиваем в подарок! Также вы получите дополнительную скидку в 5% на все наши услуги, от рекламы до полиграфии.</p>
        </div>
      </li>
      <li class="faq-list__item">
        <div class="faq-list__number">
          04
          <img src="<?php echo get_template_directory_uri(); ?>/images/general/scale-4.svg" width="80" alt="">
        </div>
        <h3>Хочу встретиться и обсудить проект?</h3>
        <div class="faq-list__content">
          <p>Будем Вам только рады! Но для начала нужно определить цели нашей встречи и в этом нам поможет небольшая анкета которую мы вам направим. После чего мы сформируем цену и будем ждать вас в согласованное время.</p>
        </div>
      </li>
      <li class="faq-list__item">
        <div class="faq-list__number">
          05
          <img src="<?php echo get_template_directory_uri(); ?>/images/general/scale-5.svg" width="95" alt="">
        </div>
        <h3>Сроки или когда будет готов мой сайт?</h3>
        <div class="faq-list__content">
          <p>Разработка простого проекта занимает не более 20 рабочих дней с момента оплаты, но бывают и более сложные решения требующие больших временных затрат.</p>
        </div>
      </li>
    </ul>
    <!-- /.faq-list -->
  </div>
  <!-- /.container -->
</section>
<!-- /.faq -->
<section class="contact">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <h2 class="section-title">Наши <br>контакты</h2>
        <div class="contact__content">
          <div class="contact__phone phone">
            <a href="tel:+380967410050" class="phone__link">+380 96 741 00 50</a><br>
            <a href="mailto:silkdesign.info@gmail.com" class="phone__email">silkdesign.info@gmail.com</a>
          </div>
          <p>Украина, г. Ровно, ул. Фабричная 12</p>
        </div>
      </div>

      <div class="col-lg-6">
        <div class="contact__form">
          <h3>Задайте вопрос</h3>
          <p>и получите лучшее предложение</p>

          <form class="form form--hr repeat-form">
            <div class="form-group">
              <input type="text" name="name" class="form__field" placeholder="Имя" required>
            </div>
            <div class="form-group">
              <input type="email" name="email" class="form__field" placeholder="E-mail" required>
            </div>
            <div class="form-group form-group--textarea">
              <textarea name="message" class="form__textarea" placeholder="Ваше сообщение" required></textarea>
            </div>
            <div class="form-group form-group--btn">
              <button type="submit" class="btn form__btn">Отправить</button>
            </div>
            <input type="hidden" name="subject" value="Вопрос">
            <input type="hidden" name="r2d2">
          </form>
        </div>
      </div>

    </div>
  </div>
  <!-- /.container -->
</section>
<!-- /.contact -->

<footer class="footer">
  <div class="container">
    <p class="copyright">&copy; 2015-<?php echo date('Y'); ?> Silk Дизайн</p>
  </div>
  <!-- /.container -->

  <img src="<?php echo get_template_directory_uri(); ?>/images/general/r2d2.png" alt="" class="parallax parallax-r2d2">
</footer>
<!-- /.footer -->

<div id="thanks" class="modal">
  <button class="thanks_close modal__close">
    Close
    <span class="modal__close-line"></span>
  </button>
  <h3>Спасибо за заявку</h3>
  <p>Скоро мы с Вами свяжемся!</p>
</div>

<?php wp_footer()?>
</body>
</html>