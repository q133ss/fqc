<?php
/* Template Name: Shipping */
get_header();
?>
<div class="header-wrapper delivery_header">

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

          </div>

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
<section class="request delivery">

  <div class="container">

    <div class="delivery__inner">

      <h1 class="request__title delivery__title">Доставка товаров <br> из Китая</h1>

      <div class="request_btns delivery__btns">

        <a class="request__btn delivery__btn" href="#form">Заказать расчет</a>
        <a class="request__btn" href="#modal">Тарифы</a>

      </div>

      <div class="delivery__info">

        <p class="delivery__info-text">Найдём, выкупим и проверим ваш <br> товар в Китае</p>

        <p class="delivery__info-text">Доставим в Россию в сжатые сроки</p>

        <p class="delivery__info-text">Предложим оптимальный вариант <br> доставки</p>

      </div>

    </div>

    <div class="delivery__bottom">

      <button class="request__bottom-btn delivery__bottom-btn">

        <i>

          <svg width="38" height="36" viewBox="0 0 38 36" fill="none" xmlns="http://www.w3.org/2000/svg">

            <path

              d="M21.5 3C21.5 1.61929 20.3807 0.5 19 0.5C17.6193 0.5 16.5 1.61929 16.5 3L21.5 3ZM17.2322 34.7678C18.2085 35.7441 19.7915 35.7441 20.7678 34.7678L36.6777 18.8579C37.654 17.8816 37.654 16.2986 36.6777 15.3223C35.7014 14.346 34.1184 14.346 33.1421 15.3223L19 29.4645L4.85786 15.3223C3.88155 14.346 2.29864 14.346 1.32233 15.3223C0.34602 16.2986 0.34602 17.8816 1.32233 18.8579L17.2322 34.7678ZM16.5 3L16.5 33L21.5 33L21.5 3L16.5 3Z"

              fill="white" />

          </svg>

        </i>

      </button>

    </div>

  </div>

</section>

</div>

<div class="wrapper">

<main class="main">

  <section class="benefit">

    <div class="container">

      <div class="benefit__inner">

        <h2 class="question__title benefit__title">Почему с нами выгодно</h2>

        <p class="question__text benefit__text">Компания Fulfillmsk доставит ваши грузы из Китая в Россию. Перевозим сборные и генеральные грузы, оформляем. Выполним грузоперевозку авиа, морским, железнодорожным и автомобильным транспортом.</p>

        <div class="benefit__item">

          <img class="benefit__item-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/benefit-img.png" alt="">

          <p class="benefit__item-text">Предложим индивидуальные условия перевозки грузов

        </div>

        <div class="benefit__item">

          <img class="benefit__item-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/benefit-img.png" alt="">

          <p class="benefit__item-text">Поможем с оформлением и решением вопросов, связанных с ведением ВЭД в Китае.

        </div>

        <p class="benefit__info">

          Мы самостоятельно найдем нужный вам товар, обговорим все нюансы и выкупим для дальнейшей доставки в Россию. Позвоните нам, чтобы узнать о всех преимуществах работы по телефону <a href="tel:89032508383">8 (903) 250-83-83</a> или <a href="tel:89265829145">8 (926) 582-91-45</a>

        </p>

      </div>

    </div>

  </section>

  <section class="order">

    <div class="container">

      <div class="order__inner">

        <h2 class="order__title">Оставьте заявку на услуги “Фулфилмента”</h2>

        <form class="order__form">

          <input class="order__input" type="text" placeholder="Ваше имя">

          <input class="order__input" type="text" placeholder="Ваш e-mail">

          <input class="order__input" type="tel" placeholder="Ваш телефон">

          <button class="order__btn" type="submit">Отправить</button>

        </form>

      </div>

      <img class="order__img" src="<?php echo get_template_directory_uri(); ?>/assets/images/order-img.png" alt="">

    </div>

  </section>

  <section class="delivery-types">

    <div class="container">

      <div class="delivery-types__inner">

        <h2 class="delivery-types__title">Виды доставки</h2>

        <div class="delivery-types__content">

          <div class="delivery-types__item">

            <div class="delivery-types__item-box">

              <img class="delivery-types__item-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/delivery-types-img.png" alt="">

              <p class="delivery-types__item-title">КАРГО-ДОСТАВКА</p>

              <p class="delivery-types__item-text">Самолет, быстрое авто, обычное авто, ж-д доставка</p>

            </div>

            <a class="delivery-types__item-btn" href="/">Заказать</a>

          </div>

          <div class="delivery-types__item">

            <div class="delivery-types__item-box">

              <img class="delivery-types__item-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/delivery-types-img.png" alt="">

              <p class="delivery-types__item-title">Самолет, быстрое авто, обычное авто, ж-д доставка</p>

              <p class="delivery-types__item-text">Авто, самолет и Жд, контейнерные перевозки</p>

            </div>

            <a class="delivery-types__item-btn" href="/">Заказать</a>

          </div>

          <div class="delivery-types__item">

            <div class="delivery-types__item-box">

              <img class="delivery-types__item-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/delivery-types-img.png" alt="">

              <p class="delivery-types__item-title">ДОСТАВКА ТОВАРА ПОД <br> ОТДЕЛ РАСТОМОЖКИ</p>

              <p class="delivery-types__item-text">Авто, самолет и Жд, контейнерные перевозки</p>

            </div>

            <a class="delivery-types__item-btn" href="/">Заказать</a>

          </div>

        </div>

      </div>

    </div>

  </section>

  <section class="stages">

    <div class="container">

      <div class="stages__inner">

        <h2 class="stages__title">Этапы работы</h2>

        <div class="stages__content">

          <div class="stages__item">

            <p class="stages__item-text">Оставьте заявку</p>

            <p class="stages__item-num">01</p>

          </div>

          <div class="stages__item">

            <p class="stages__item-text">Расчет стоимости</p>

            <p class="stages__item-num">02</p>

          </div>

          <div class="stages__item">

            <p class="stages__item-text">Подпишем договор</p>

            <p class="stages__item-num">03</p>

          </div>

          <div class="stages__item">

            <p class="stages__item-text">Отправим товар на склад маркетплейса</p>

            <p class="stages__item-num">06</p>

          </div>

          <div class="stages__item">

            <p class="stages__item-text">Приведем товар <br>

              в надлжающий вид</p>

            <p class="stages__item-num">05</p>

          </div>

          <div class="stages__item">

            <p class="stages__item-text">Отправьте товар <br>

              на наш склад</p>

            <p class="stages__item-num">04</p>

          </div>

        </div>

      </div>

    </div>

  </section>

  <section class="shipping">

    <div class="container">

      <div class="shipping__inner">

        <h5 class="shipping__title">Доставка товара из Китая</h5>

        <p class="shipping__text">Китай — основной поставщик продукции для российских и мировых маркетплейсов,

          магазинов. Именно в КНР находится огромное количество фабрик, выпускающих товары в разных категориях.

          Здесь можно найти практически любое изделие, включая уникальные позиции, еще не представленные на рынке.

          Чтобы избежать трудностей при поиске, заказе и доставке товаров, начните сотрудничать с компанией

          Fulfillmsk. Мы возьмем на себя поиск фабрики, договоримся о стоимости товара и сроках доставки, проверим

          качество и оформим необходимые документы. Получайте качественный товар от китайских производителей без

          брака и по разумным ценам.</p>

        <h5 class="shipping__title">Проблемы работы с Китаем</h5>

        <p class="shipping__text">Для того, чтобы заказывать оптовые партии товар. необходимо пройти ряд процедур

        </p>

        <div class="shipping__item">

          <img class="shipping__item-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/benefit-img.png" alt="">

          <p class="shipping__item-text">Найти фабрику</p>

        </div>

        <div class="shipping__item">

          <img class="shipping__item-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/benefit-img.png" alt="">

          <p class="shipping__item-text">Посетить ее, обратить внимание на производственные мощности и условия труда

          </p>

        </div>

        <div class="shipping__item">

          <img class="shipping__item-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/benefit-img.png" alt="">

          <p class="shipping__item-text">Договориться о стоимости продукции, сроках поставки</p>

        </div>

        <div class="shipping__item last">

          <img class="shipping__item-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/benefit-img.png" alt="">

          <p class="shipping__item-text">Организовать контроль качества</p>

        </div>

        <p class="shipping__text">Для большинства продавцов проблему представляет уже первый пункт списка - поиск

          фабрик. В Китае много предприятий, однако также немало посредников, живущих за счет накрутки. Можно

          заключить договор с организацией, которая вообще не имеет производственных мощностей и закупает продукцию

          у реальной фабрики. Поэтому после того, как выбран производитель, нужно совершить инспекцию.</p>

        <p class="shipping__text">Английский язык в КНР знают не очень хорошо, а русский вообще не знают.

          Коммуникация с производителями будет серьезно затруднена, поторговаться тоже не получится. О контроле

          качества можно вообще забыть.</p>

        <h5 class="shipping__title">Решение проблемы</h5>

        <p class="shipping__text">Компания Fulfillmsk предлагает полный комплекс услуг по организации деловых

          отношений с китайской стороной. Мы занимаемся:</p>

        <div class="shipping__item">

          <img class="shipping__item-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/benefit-img.png" alt="">

          <p class="shipping__item-text">Поиском надежных фабрик</p>

        </div>

        <div class="shipping__item">

          <img class="shipping__item-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/benefit-img.png" alt="">

          <p class="shipping__item-text">Инспекциями на территорию предприятий</p>

        </div>

        <div class="shipping__item">

          <img class="shipping__item-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/benefit-img.png" alt="">

          <p class="shipping__item-text">Согласованием всех мелочей</p>

        </div>

        <div class="shipping__item last">

          <img class="shipping__item-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/benefit-img.png" alt="">

          <p class="shipping__item-text">Логистическими вопросами</p>

        </div>

        <p class="shipping__text">Наши специалисты могут найти китайского производителя разными способами. Мы

          подбираем фабрики на специализированных китайских интернет-площадках, выставках, форумах, а также через

          ответственных партнеров в КНР. У нас уже есть собственная база производителей, с которыми сотрудничают

          клиенты Fulfillmsk.</p>

        <p class="shipping__text">Осуществляются инспекции на территорию предприятий. Зачем это нужно? Во время

          первой инспекции можно обнаружить, что:</p>

        <div class="shipping__item">

          <img class="shipping__item-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/benefit-img.png" alt="">

          <p class="shipping__item-text">Фабрики нет. Представитель компании оказался посредником</p>

        </div>

        <div class="shipping__item">

          <img class="shipping__item-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/benefit-img.png" alt="">

          <p class="shipping__item-text">Фабрика не принадлежит компании, с которой вы связались. Важно выяснить это

            до подписания договора. Здесь важно владеть китайским языком, знать о возможности обмана, уметь

            проверять</p>

        </div>

        <div class="shipping__item end">

          <img class="shipping__item-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/benefit-img.png" alt="">

          <p class="shipping__item-text">Производственные мощности старые, предприятие работает с нарушениями. Это

            означает, что брака будет много</p>

        </div>

        <h5 class="shipping__title">Доставка продукции</h5>

        <p class="shipping__text">Мало найти фабрику и избежать подводных камней при заключении договора. Необходимо

          организовать контроль качества, продумать логистику, согласовать вопросы возврата брака или получения

          компенсации за товар с дефектами. Больше всего проблем у продавцов вызывает логистика - от нее зависят

          затраты на доставку и конечная стоимость единицы товара. <br>

          Мы организуем весь процесс - от упаковки товара до получения кго оптовиком. Компания может осуществить

          выкуп товара, в этом случае вопрос доставки полностью ложатся на Fulfillmsk. <br>

          Сотрудничая с нами. вы сможете получить качественный товар от китайского производителя, который прошел

          проверку. Это означает, что возвратов будет мало - процент брака при контроле качества сведен к минимуму.

          Мы поможем найти фабрику, которая предлагает продукцию на максимально выгодных условиях. Как правило, это

          и есть настоящий производитель</p>

      </div>

    </div>

  </section>

</main>
<?php get_footer(); ?>