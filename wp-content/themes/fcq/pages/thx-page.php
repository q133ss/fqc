<?php
get_header();
/* Template Name: Спасибо */
?>
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

            <?php get_template_part('parts/menu'); ?>

          <div class="header__btns">

            <div class="header__btn">

              <a class="header__btn-link" href="">Калькулятор</a>

            </div>

            <div class="header__btn">

              <a class="header__btn-link" href="#modal">Заказать звонок</a>

            </div>

          </div>

        </div>

      </div>

    </header>

    <section class="request about__section">

      <div class="container">

        <h1 class="about-us__title contacts__title">Заявка успешно отправлена!</h1>

        <p class="about-us__text question__text">
          Мы свяжемся с вами в ближайшее время <br>
          <a href="/" style="color: #FFFFFF; border-bottom: 1px solid #FFFFFF;">На главную</a>
        </p>

      </div>

    </section>

  </div>
<?php
get_footer();
?>