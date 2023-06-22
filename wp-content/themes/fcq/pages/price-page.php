<?php
/* Template Name: Прайс */
get_header();
?>
<style>
    .header__content{
        width: 100%;
    }
    .header__menu{
        width: 57%;
    }
</style>
<div class="header-wrapper">

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

    <section class="request">

      <div class="container">

        <h1 class="price__title contacts__title">Прайс-лист</h1>

        <p class="price__text question__text"> Для более точного расчёта стоимости упаковки, просьба отправить нам техническое задание

          любым удобным Вам способом ( <a class="price__link" href="#">

            <i>

              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">

                <g clip-path="url(#clip0_12_29)">

                  <path

                    d="M12 0C5.37253 0 0 5.37253 0 12C0 18.6275 5.37253 24 12 24C18.6275 24 24 18.6275 24 12C24 5.37253 18.6275 0 12 0Z"

                    fill="#40B3E0" />

                  <path

                    d="M17.8388 6.90272L15.6954 17.709C15.6954 17.709 15.3957 18.4584 14.5714 18.0987L9.62532 14.3067L7.82682 13.4375L4.79926 12.4182C4.79926 12.4182 4.33463 12.2534 4.28963 11.8937C4.24473 11.534 4.81426 11.3392 4.81426 11.3392L16.8495 6.61791C16.8495 6.61791 17.8388 6.18328 17.8388 6.90272Z"

                    fill="white" />

                  <path

                    d="M9.24549 17.5877C9.24549 17.5877 9.10112 17.5742 8.92121 17.0046C8.7414 16.4351 7.82715 13.4375 7.82715 13.4375L15.0962 8.82126C15.0962 8.82126 15.516 8.56645 15.501 8.82126C15.501 8.82126 15.5759 8.86616 15.3511 9.07598C15.1262 9.28588 9.64065 14.2169 9.64065 14.2169"

                    fill="#D2E5F1" />

                  <path

                    d="M11.5222 15.7606L9.56586 17.5443C9.56586 17.5443 9.41295 17.6604 9.24561 17.5876L9.62023 14.2744"

                    fill="#B5CFE4" />

                </g>

                <defs>

                  <clipPath id="clip0_12_29">

                    <rect width="24" height="24" fill="white" />

                  </clipPath>

                </defs>

              </svg>



            </i>

            Telegram

          </a>, <a class="price__link" href="#">

            <i>

              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">

                <g clip-path="url(#clip0_11_24)">

                  <path fill-rule="evenodd" clip-rule="evenodd"

                    d="M11.9965 0C5.38113 0 0 5.38264 0 11.9999C0 14.6242 0.846321 17.058 2.285 19.0335L0.789795 23.4919L5.40222 22.0178C7.2993 23.2735 9.56321 24 12.0035 24C18.6189 24 24 18.6172 24 12.0001C24 5.38285 18.6189 0.000198364 12.0035 0.000198364L11.9965 0ZM8.64642 6.09541C8.41374 5.53814 8.23739 5.51704 7.88489 5.5027C7.76486 5.49573 7.63111 5.48877 7.48282 5.48877C7.02422 5.48877 6.54473 5.62276 6.25552 5.91902C5.90302 6.27879 5.02841 7.11819 5.02841 8.8396C5.02841 10.561 6.28379 12.2259 6.45297 12.4588C6.62932 12.6914 8.90039 16.2752 12.4266 17.7357C15.1842 18.8786 16.0025 18.7727 16.63 18.6387C17.5468 18.4412 18.6965 17.7636 18.9857 16.9455C19.2749 16.127 19.2749 15.4286 19.1901 15.2805C19.1055 15.1323 18.8726 15.0479 18.5201 14.8713C18.1676 14.6949 16.4537 13.8483 16.1292 13.7354C15.8118 13.6156 15.5086 13.658 15.269 13.9967C14.9304 14.4693 14.599 14.9492 14.3309 15.2383C14.1193 15.464 13.7736 15.4923 13.4846 15.3722C13.0966 15.2102 12.0107 14.8289 10.6705 13.6367C9.63369 12.7127 8.92848 11.5629 8.72406 11.2172C8.51944 10.8646 8.70294 10.6598 8.86496 10.4694C9.04131 10.2506 9.21052 10.0955 9.38687 9.89084C9.56322 9.68636 9.66195 9.58044 9.77481 9.34053C9.89483 9.10778 9.81003 8.86787 9.72543 8.69147C9.64084 8.51507 8.93563 6.79365 8.64642 6.09541Z"

                    fill="#67C15E" />

                </g>

                <defs>

                  <clipPath id="clip0_11_24">

                    <rect width="24" height="24" fill="white" />

                  </clipPath>

                </defs>

              </svg>



            </i>

            WhatsApp

          </a>, <a class="price__link" href="#">

            <i>

              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">

                <path fill-rule="evenodd" clip-rule="evenodd" d="M21.6 5.74922L12 14.1816L2.4 5.73721V5.4H21.6V5.74922ZM2.4 18.6V8.93401L12 17.376L21.6 8.9436V18.6H2.4ZM0 21H24V3H0V21Z" fill="white"/>

                </svg>                

            </i>

            e-mail

          </a> 

          ) или оставьте заявку на сайте, мы с свяжемся с Вами в

          кратчайшие сроки.</p>

      </div>

    </section>

  </div>

  <div class="wrapper">

    <main class="main">

      <!-- 1 -->
      <!-- 1 -->
      <!-- 1 -->


      <div class="price__table-wrap question">
        <div class="container">
          <h2 class="work__title tarif_title">Тарифы</h3>
          <div class="price__table-section">
            <div class="price__table-name_section">
              <div class="price__table-header_title question__text">
                КАРГО-ДОСТАВКА
              </div>
              <div class="price__table-item_name question__text">
                Самолет
              </div>
              <div class="price__table-item_name question__text">
                Быстрое авто
              </div>
              <div class="price__table-item_name question__text">
                Обычное авто
              </div>
              <div class="price__table-item_name question__text">
                Ж/д доставка
              </div>
            </div>
            <div class="price__table_white_line"></div>
            <div class="price__table_price_section">
              <div class="price__table_header_title question__text">Стоимость</div>
              <div class="price__table-item_name question__text">
                от 10$
              </div>
              <div class="price__table-item_name question__text">
                от 3.5$
              </div>
              <div class="price__table-item_name question__text">
                от 3$
              </div>
              <div class="price__table-item_name question__text">
                от 1.5$
              </div>
            </div>
          </div>

          <h3 class="white_shipping_title">Белая доставка</h3>
          <p class="white_shipping_text">
            Расчет производится по упаковочному листу
            Все условия доставки обговариваются индивидуально
            Цена зависит от метода доставки, таможенных пошлин и документов на товар
          </p>

          <h2 class="work__title tarif_title">Складские услуги</h3>

            <div class="price__table-section">
            <div class="price__table-name_section">
              <div class="price__table-header_title question__text">
                Наименование услуги
              </div>
              <div class="price__table-item_name question__text">
                Забор груза (Южные Ворота, Садовод, Люблино) объем до 3м³
              </div>
              <div class="price__table-item_name question__text">
                Забор груза (Южные Ворота, Люблино, Садовод) объем от 3м³ до 7м³
              </div>
              <div class="price__table-item_name question__text">
                Забор груза (Южные Ворота, Люблино, Садовод) объем более 7м³
              </div>
              <div class="price__table-item_name question__text">
                Забор груза в г. Москва (в пределах МКАД)
              </div>
              <div class="price__table-item_name question__text">
                Выезд автомобиля на территорию ТК Южные ворота (при необходимости заезда на территорию для забора крупногабаритного груза)
              </div>
              <div class="price__table-item_name question__text">
                Погрузочно-разгрузочные работы на территории ТК Южные ворота
              </div>
              <div class="price__table-item_name question__text">
                Распаковка паллеты (1 паллета, до 16 коробов) из Китая с деревянной обрешеткой, дополнительно визуальный осмотр (с целью фиксации состояния груза и упаковки)
              </div>
              <div class="price__table-item_name question__text">
                Распаковка короба из Китая (с деревянной обрешеткой), дополнительно визуальный осмотр (с целью фиксации состояния груза и упаковки)
              </div>
              <div class="price__table-item_name question__text">
                Приемка/пересчет/сортировка
              </div>
              <div class="price__table-item_name question__text">
                Проверка товара на брак и работоспособность
              </div>
              <div class="price__table-item_name question__text">
                Устранение старой ШК
              </div>
              <div class="price__table-item_name question__text">
                Устранение старой бирки
              </div>
              <div class="price__table-item_name question__text">
                Маркировка
              </div>
              <div class="price__table-item_name question__text">
                Вложение вкладыша (купона, инструкции, доп. материалы и т.д.)
              </div>
              <div class="price__table-item_name question__text">
                Формирование комплекта*
              </div>
              <div class="price__table-item_name question__text">
                Укладка товара в пакеты**
              </div>
              <div class="price__table-item_name question__text">
                Запайка товара в воздушно-пузырчатую пленку (бабл пленку)*
              </div>
              <div class="price__table-item_name question__text">
                Короб 60х40х40 + маркировка
              </div>
              <div class="price__table-item_name question__text">
                Другой короб + маркировка
              </div>
              <div class="price__table-item_name question__text">
                Паллета/ поддон (размер 80х120х210)
              </div>
              <div class="price__table-item_name question__text">
                Паллетирвание ( стрейча пленка / маркировка паллеты)
              </div>
              <div class="price__table-item_name question__text">
                Погрузочно-разгрузочные работы на территории склада (1 короб)
              </div>
              <div class="price__table-item_name question__text">
                Погрузочно-разгрузочные работы на территории склада (1 паллета, до 16 коробов)
              </div>
              <div class="price__table-item_name question__text">
                Хранение*** (1 короб 60х40х40 в сутки)
              </div>
              <div class="price__table-item_name question__text">
                Хранение*** (1 паллета 80х120х210 в сутки, до 16 коробов)
              </div>
              <div class="price__table-item_name question__text">
                Формирование поставки в личном кабинете (до 15 номенклатур, каждая последующая номенклатура 50 р.)
              </div>
            </div>
            <div class="price__table_white_line"></div>
            <div class="price__table_price_section">
              <div class="price__table_header_title question__text">Стоимость</div>
              <div class="price__table-item_name question__text">
                  1 500,00 ₽
              </div>
              <div class="price__table-item_name question__text">
                  2 500,00 ₽
              </div>
              <div class="price__table-item_name question__text">
                  Договорная
              </div>
              <div class="price__table-item_name question__text">
                  2 000,00 ₽
              </div>
              <div class="price__table-item_name question__text">
                <br>
                  2 000,00 ₽
              </div>
              <div class="price__table-item_name question__text">
                  200 ₽./короб
              </div>
              <div class="price__table-item_name question__text">
                <br>
                  400,00 ₽
              </div>
              <div class="price__table-item_name question__text">
                <br>
                  50,00 ₽
              </div>
              <div class="price__table-item_name question__text">
                  6,00 ₽
              </div>
              <div class="price__table-item_name question__text">
                  от 5 ₽
              </div>
              <div class="price__table-item_name question__text">
                  10,00 ₽
              </div>
              <div class="price__table-item_name question__text">
                  4,00₽
              </div>
              <div class="price__table-item_name question__text">
                  от 3 ₽
              </div>
              <div class="price__table-item_name question__text">
                  4,00 ₽
              </div>
              <div class="price__table-item_name question__text">
                  от 5 ₽
              </div>
              <div class="price__table-item_name question__text">
                  15,00 ₽
              </div>
              <div class="price__table-item_name question__text">
                  от 5 ₽
              </div>
              <div class="price__table-item_name question__text">
                  145,00 ₽
              </div>
              <div class="price__table-item_name question__text">
                  Договорная
              </div>
              <div class="price__table-item_name question__text">
                  400,00 ₽
              </div>
              <div class="price__table-item_name question__text">
                  150,00 ₽
              </div>
              <div class="price__table-item_name question__text">
                  30,00 ₽
              </div>
              <div class="price__table-item_name question__text">
                  150,00 ₽
              </div>
              <div class="price__table-item_name question__text">
                  100,00 ₽
              </div>
              <div class="price__table-item_name question__text">
                  400,00 ₽
              </div>
              <div class="price__table-item_name question__text">
                <br>
                  1 000,00 ₽
              </div>
              
            </div>
          </div>
          <p>
              *от 2 единиц в комплекте <br>
              **Точная стоимость зависит от размера товара. <br>
              ***Хранение на складе до 7 дней бесплатно. 
          </p>

          <br><br>
          
          <div class="price__table-section">
            <div class="price__table-name_section">
              <div class="price__table-header_title question__text">
                Тарифы FBS
              </div>
              <div class="price__table-item_name question__text">
                Размер товара (Д х Ш х В) 10х5x5
              </div>
              <div class="price__table-item_name question__text">
                Размер товара (Д х Ш х В) 20х13x10
              </div>
              <div class="price__table-item_name question__text">
                Размер товара (Д х Ш х В) 40x20x10
              </div>
              <div class="price__table-item_name question__text">
                Размер товара (Д х Ш х В) 40х30x20
              </div>
            </div>
            <div class="price__table_white_line"></div>
            <div class="price__table_price_section">
              <div class="price__table_header_title question__text">Стоимость</div>
              <div class="price__table-item_name question__text">
                  40,00 ₽
              </div>
              <div class="price__table-item_name question__text">
                  45,00 ₽
              </div>
              <div class="price__table-item_name question__text">
                  55,00 ₽
              </div>
              <div class="price__table-item_name question__text">
                  70,00 ₽
              </div>
            </div>
          </div>

          <br><br>

          <div class="price__table-section">
            <div class="price__table-name_section">
              <div class="price__table-header_title question__text">
                *Логистика
              </div>
              <div class="price__table-item_name question__text">
                Доставка до склада Wildberries, Коледино, Подольск
              </div>
              <div class="price__table-item_name question__text">
                <br>
                Доставка до склада Wildberries, Коледино, Подольск
              </div>
              <div class="price__table-item_name question__text">
                Доставка до склада Wildberries, Электросталь
              </div>
              <div class="price__table-item_name question__text">
                <br>
                Доставка до склада Wildberries, Электросталь
              </div>
              <div class="price__table-item_name question__text">
                <br>
                Доставка до склада Wildberries, Алексин, Тула
              </div>
            </div>
            <div class="price__table_white_line"></div>
            <div class="price__table_price_section">
              <div class="price__table_header_title question__text">Стоимость</div>
              <div class="price__table-item_name question__text">
                  400₽./Короб
              </div>
              <div class="price__table-item_name question__text">
                  2200₽./Паллета до 16 коробов
              </div>
              <div class="price__table-item_name question__text">
                  400₽./Короб
              </div>
              <div class="price__table-item_name question__text">
                  2200₽./Паллета до 16 коробов
              </div>
              <div class="price__table-item_name question__text">
                  4400₽./Паллета до 16 коробов
              </div>
            </div>
          </div>
          <p>
            *Логистика вне плана тариф Х2 
          </p>

          <br><br>

          <div class="price__table-section">
            <div class="price__table-name_section">
              <div class="price__table-header_title question__text">
                Работа с Китаем
              </div>
              <div class="price__table-item_name question__text">
                Карго-Доставка (обычное авто)
              </div>
            </div>
            <div class="price__table_white_line"></div>
            <div class="price__table_price_section">
              <div class="price__table_header_title question__text">Стоимость</div>
              <div class="price__table-item_name question__text">
                  от 3$
              </div>
            </div>
          </div>
        </div>
      </div>

    </main>

<?php get_footer(); ?>