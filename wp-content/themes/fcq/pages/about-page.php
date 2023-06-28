<?php
/* Template Name: О нас */
get_header();
?>
<style>
    .about-us__text{
        max-width: unset!important;
    }
</style>
<div class="header-wrapper about__header-wrap">

    <header class="header">
  <div class="container">
    <div class="header__inner">
      <div class="header__content">
        <div class="header__logo">
          <a class="header__logo-link" href="/">
            FCQ
          </a>
        </div>
      </div>
      <?php get_template_part('parts/menu'); ?>
      <div class="header__btns">
        <div class="header__btn">
          <a class="header__btn-link" href="">Калькулятор</a>
        </div>
        <div class="header__btn">
          <a class="header__btn-link" href="#form">Заказать звонок</a>
        </div>
      </div>
    </div>
  </div>
</header>

    <section class="request about__section">

      <div class="container">

        <h1 class="about-us__title contacts__title">О Компании</h1>

        <p class="about-us__text question__text">
          Компания Фулфилмент является профессиональным оператором по отгрузкам на маркетплейс Вайлдберриз. Для наших клиентов мы берем на себя все этапы упаковки любой сложности и маркировки, а так же логистики из любой точки мира на склад Вайлдберриз.
          <br><br>
          Мы работаем для того, чтобы максимально упростить жизнь селлерам, сократить временные и финансовые издержки, минимизировать риски за счет грамотно организованных процессов и профессионально проведенных операций на каждом этапе поставки.
          <br><br>
          Мы обеспечиваем полный комплекс услуг по поставке товара, от поиска поставщика за рубежом и заканчивая поставкой груза на склад Вайлдберриз. Наш склад имеет площадь более 700 кв. м. Нам доверяют свои грузы десятки индивидуальных предпринимателей и организаций.
        </p>

      </div>

    </section>

  </div>

  <div class="wrapper">

    <main class="main">

      <section class="about-us">

        <div class="container">

          <div class="about-us__inner">

            <div class="about-us__img_wrap">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/photo1686911921.jpeg" alt="">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/photo1686911921.jpeg" alt="">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/photo1686911921.jpeg" alt="">

              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/photo1686911921.jpeg" alt="">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/photo1686911921.jpeg" alt="">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/photo1686911921.jpeg" alt="">
            </div>

            <div class="about-us__item">

              <h2 class="about-us__item-title question__title">Товар с Садовода и ТЯКа</h2>

              <p class="about-us__item-text about-us__text">Доставим Ваш товар с рынка, на наш склад, упакуем, промаркируем и поставим на склад Wildberries.</p>

            </div>

            <div class="about-us__item">

              <h2 class="about-us__item-title question__title">Доставка товара из Китая</h2>

              <p class="about-us__item-text about-us__text">Китай — основной поставщик продукции для российских и мировых маркетплейсов, магазинов. Именно в КНР находится огромное количество фабрик, выпускающих товары в разных категориях. Здесь можно найти практически любое изделие, включая уникальные позиции, еще не представленные на рынке. Чтобы избежать трудностей при поиске, заказе и доставке товаров, начните сотрудничать с компанией Fulfillmsk. Мы возьмем на себя поиск фабрики, договоримся о стоимости товара и сроках доставки, проверим качество и оформим необходимые документы. Получайте качественный товар от китайских производителей без брака и по разумным ценам.</p>

            </div>

            <div class="about-us__img_wrap">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/photo1686911921.jpeg" alt="">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/photo1686911921.jpeg" alt="">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/photo1686911921.jpeg" alt="">

              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/photo1686911921.jpeg" alt="">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/photo1686911921.jpeg" alt="">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/photo1686911921.jpeg" alt="">
            </div>

          </div>

        </div>

      </section>

    </main>
<?php get_footer(); ?>