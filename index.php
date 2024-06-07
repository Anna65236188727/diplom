<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <title>Мастерская Северный игрушечник</title>
</head>

<body>
    <header class="header_main">
        <div class="container">
            <a href="index.php"><img src="img/logo.png" alt="Логотип"></a>
            <nav>
                <a href="index.php" class="menu um20_white">Главная</a>
                <a href="catalog.php" class="menu um20_white">Каталог</a>
                <a href="about_workshop.php" class="menu um20_white">О мастерской</a>
            </nav>
            <input class="ul15_white" type="search" maxlength="30" placeholder="Поиск">
            <div class="btns">
                <a href="basket.php"><img src="img/cart.png" alt="Корзина"></a>
            </div>
        </div>
    </header>
    <div class="main_banner">
        <div class="container">
            <div class="offer">
                <h1 class="ub100_white">СЕМЕЙНАЯ <span class="ub100_bej drop-shadow">МАСТЕРСКАЯ</span> </h1>
                <div class="advantages">
                    <div class="main_advantages">
                        <div class="ub25_brown">НАТУРАЛЬНОЕ ДЕРЕВО</div>
                        <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="6.5" cy="6.5" r="6.5" fill="#3D2005" />
                        </svg>
                        <div class="ub25_brown">БЕЗОПАСНОЕ ПОКРЫТИЕ</div>
                    </div>
                </div>
                <div class="ub30_bej drop-shadow">С ТЕПЛОТОЙ И ЗАБОТОЙ О ВАШЕМ РЕБЕНКЕ</div>
            </div>
        </div>
    </div>
    <div class="categories">
        <div class="container">
            <h2 class="ub55_black offering">МЫ ПРЕДЛАГАЕМ</h2>
            <p class="ur26_black mini_offering">У нас вы найдете детские игрушки для прекрасного времяпровождения</p>
            <div class="block_categories">
                <a href="?filter=new_year_collection">
                    <div class="new_year_collection"></div>
                </a>
                <div class="union">
                    <a href="?filter=Техника">
                        <div class="techno"></div>
                    </a>
                    <a href="?filter=smart_play">
                        <div class="smart_play"></div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="about">
        <div class="container">
            <div class="about_block">
                <div class="left_about">
                    <div class="ur26_white">Смотреть о компании</div>
                    <div class="ub55_white">О МАСТЕРСКОЙ СЕВЕРНЫЙ ИГРУШЕЧНИК</div>
                    <a href="about_workshop.php"><button class="button ur26_white">Подробнее</button></a>
                </div>
                <div class="right_about">
                    <svg class="round_big" width="473" height="473" viewBox="0 0 473 473" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <circle cx="236.5" cy="236.5" r="235" stroke="#CB8F50" stroke-width="3" />
                    </svg>
                    <svg class="round_mini" width="309" height="294" viewBox="0 0 309 294" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M307.5 147C307.5 227.288 239.071 292.5 154.5 292.5C69.9292 292.5 1.5 227.288 1.5 147C1.5 66.712 69.9292 1.5 154.5 1.5C239.071 1.5 307.5 66.712 307.5 147Z"
                            stroke="#CB8F50" stroke-width="3" />
                    </svg>
                    <svg class="triangle" width="71" height="95" viewBox="0 0 71 95" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M67.9592 42.5814C71.3777 44.9695 71.3777 50.0305 67.9592 52.4186L9.43613 93.3025C5.45895 96.0809 0 93.2354 0 88.3839V6.61613C0 1.76457 5.45895 -1.08094 9.43613 1.69749L67.9592 42.5814Z"
                            fill="#CB8F50" />
                    </svg>
                </div>
            </div>
        </div>
    </div>
    <div class="popular">
        <h2 class="ub55_black offering">ПОПУЛЯРНЫЕ ТОВАРЫ</h2>
        <p class="ur26_black mini_offering">Игрушки, которые полюбились вами особенно сильно</p>
        <div class="slaider">
            <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="container">
                            <div class="slaider_block">
                                <div class="left_site">
                                    <img src="img/moloco.png" alt="">
                                </div>
                                <div class="right_site">
                                    <div class="ub36_black">Игрушка из дерева Молоковоз</div>
                                    <div class="ub36_oranj">850 ₽</div>
                                    <div class="ur26_black line-height">Материалы: бук, берёза, натуральное масло.<br>
                                        Размеры: 12*5, 5*8,5 см.<br>
                                        Вес: 140 г.</div>
                                    <div class="ub26_black">О товаре</div>
                                    <div class="ur20_black line-height">Машина-корова... Оказывается, так смешно
                                        называют
                                        молоковоз
                                        её водители.
                                        Мы сделали машинку из светлых пород дерева. Как будто её вареной сгущёнкой
                                        облили.
                                        Молоковоз
                                        также представляет серию спецтехники по мотивам эскизов Вологодской фабрики
                                        игрушек.
                                    </div>
                                    <a href="product_milk.html"><button class="button ur26_white">Подробнее о
                                            товаре</button></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="container">
                            <div class="slaider_block">
                                <div class="left_site">
                                    <img src="img/set_cars.png" alt="">
                                </div>
                                <div class="right_site">
                                    <div class="ub36_black">Набор деревянных машинок техника</div>
                                    <div class="ub36_oranj">3 750 ₽</div>
                                    <div class="ur26_black line-height">Материалы: бук, берёза, грецкий орех,
                                        натуральное масло.<br>
                                        Размер: 11-12 см.<br>
                                        Вес: 140 г.</div>
                                    <div class="ub26_black">О товаре</div>
                                    <div class="ur20_black line-height">Без этого спецтранспорта не обойтись, если вы
                                        задумали большую стройку или организовали прибыльную ферму.

                                        А сколько игрушек можно сделать водителями! Безработными точно никто не
                                        останется.
                                    </div>
                                    <a href="product_milk.html"><button class="button ur26_white">Подробнее о
                                            товаре</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="container">
                            <div class="slaider_block">
                                <div class="left_site">
                                    <img src="img/horse.png" alt="">
                                </div>
                                <div class="right_site">
                                    <div class="ub36_black">Игрушка из дерева Лошадка</div>
                                    <div class="ub36_oranj">850 ₽</div>
                                    <div class="ur26_black line-height">Материалы: бук, берёза, натуральное масло.<br>
                                        Размеры: 12*3, 5*9,5 см.<br>
                                        Вес: 100 г.</div>
                                    <div class="ub26_black">О товаре</div>
                                    <div class="ur20_black line-height">Без Лошадки никуда! С ней можно играть дома, а
                                        можно и на занятиях с логопедом, педагогом.
                                        Качалка развивает чувство баланса.
                                        Расширяет представления ребёнка об окружающем мире.
                                        Знакомит малыша с понятиями "вверх", "вниз", "влево", "вправо".
                                    </div>
                                    <a href="product_milk.html"><button class="button ur26_white">Подробнее о
                                            товаре</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-button-next">
                    <img src="img/str_right.png" alt="">
                </div>
                <div class="swiper-button-prev">
                    <img src="img/str_left.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="about_write">
        <div class="container">
            <div class="about_offer">
                <h2 class="ub55_black offering">О НАС ПИШУТ</h2>
                <a class="articles ur26_black" href="about_write.html">Показать все статьи</a>
            </div>
            <div class="news">
                <a class="news_ssilki" target="_blank"
                    href="https://xn--80adde7arb.xn--p1ai/news/economy/74111/?ysclid=lp2evjjuai457146932">
                    <img src="img/about_write1.png" alt="Северный игрушечник">
                    <div class="about_text">
                        <div class="name_date">
                            <div class="name">
                                <img src="img/Vologda_rf.png" alt="">
                                <div class="um22_black">Вологда.рф</div>
                            </div>
                            <div class="um16_gray">07.11.2022</div>
                        </div>
                        <div class="um26_black">Мастера из областной столицы продолжают традиции...</div>
                        <div class="ur22_black">«Мы начинали свое дело с открытия детского магазина, для которого...
                        </div>
                    </div>
                </a>
                <a class="news_ssilki" target="_blank"
                    href="https://marketvologda.ru/journal/detail/evgeniy-i-valentina-komenkovy-verim-chto-nashi-igrushki-lyubimy-i-imenno-o-nikh-budut-vspominat-vyro/">
                    <img src="img/about_write2.png" alt="Северный игрушечник интервью">
                    <div class="about_text">
                        <div class="name_date">
                            <div class="name">
                                <img src="img/made_in_Vologda.png" alt="">
                            </div>
                            <div class="um16_gray">26.10.2023</div>
                        </div>
                        <div class="um26_black">Евгений и Валентина Коменковы: «Верим, что наши...</div>
                        <div class="ur22_black">Супруги Коменковы пять лет назад создали мастерскую по изготовлени...
                        </div>
                    </div>
                </a>
                <a class="news_ssilki" target="_blank"
                    href="https://vologda-oblast.ru/novosti/produktsiya_vologodskikh_proizvoditeley_predstavlena_na_vystavke_forume_rossiya_v_moskve/?sphrase_id=19651491">
                    <img src="img/about_write3.png" alt="Выставка ВДНХ в Москве">
                    <div class="about_text">
                        <div class="name_date">
                            <div class="name">
                                <img src="img/government_VO.png" alt="">
                            </div>
                            <div class="um16_gray">20.11.2023</div>
                        </div>
                        <div class="um26_black">На выставке-форуме «Россия» в Москве представлена продукц...</div>
                        <div class="ur22_black">На ВДНХ в павильоне №75 работает новое пространство «Универмаг». Его...
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div class="question_response" id="question_response">
        <div class="container">
            <h2 class="ub55_black offering">ВОПРОСЫ И ОТВЕТЫ</h2>
            <div class="block_accordion">
                <img src="img/question.png" alt="деревянные игрушки">
                <div class="accordion">
                    <details>
                        <summary class="um26_black">Как сделать заказ?</summary>
                        <p class="ur20_black">Какправильновыбратьдеревянную игрушку? Ведь ассортимент игрушек сегодня
                            очень разнообразен.<br>

                            При выбореигрушкиобратите внимание на следующие моменты:<br>
                            -гладкая поверхность<br>
                            -отсутствие зазубрин, шероховатостей<br>
                            -отсутствие острых углов и выступов<br>
                            -краска, сертифицированная для окрашивания детских игрушек<br>
                            -натуральное масло<br>
                        </p>
                    </details>
                    <details open>
                        <summary class="um26_black">Как ухаживать за деревянными игрушками?</summary>
                        <p class="ur20_black">При оформлении заказа в корзине напишите комментарий, что игрушки
                            необходимо выслать в
                            другую страну — мы свяжемся с вами и уточним детали доставки</p>
                    </details>
                    <details>
                        <summary class="um26_black">Как заказать игрушки из другой страны?</summary>
                        <p class="ur20_black">При оформлении заказа в корзине напишите комментарий, что игрушки
                            необходимо выслать в
                            другую страну — мы свяжемся с вами и уточним детали доставки</p>
                    </details>
                    <details>
                        <summary class="um26_black">Как сделать заказ?</summary>
                        <p class="ur20_black">При оформлении заказа в корзине напишите комментарий, что игрушки
                            необходимо выслать в
                            другую страну — мы свяжемся с вами и уточним детали доставки</p>
                    </details>
                    <details>
                        <summary class="um26_black">Как ухаживать за деревянными игрушками?</summary>
                        <p class="ur20_black">При оформлении заказа в корзине напишите комментарий, что игрушки
                            необходимо выслать в
                            другую страну — мы свяжемся с вами и уточним детали доставки</p>
                    </details>
                </div>
            </div>
        </div>
    </div>
    <?php 
    include 'footer.php'; 
    ?>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".mySwiper", {
            lazy: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    </script>
    <!-- <script>
        // фильтрация блока Мы предлагаем(новогодняя, техника, развивашки) и переход на каталог.пхп
        document.addEventListener('DOMContentLoaded', function () {
            const categories = document.querySelectorAll('.block_categories a');

            categories.forEach(function (category) {
                category.addEventListener('click', function (e) {
                    e.preventDefault(); // Предотвращаем стандартное поведение ссылки
                    const filter = this.getAttribute('href').split('?')[1].split('=')[1]; // Получаем значение фильтра из атрибута href
                    window.location.href = 'catalog.php?filter=' + encodeURIComponent(filter); // Перенаправляем на catalog.php с параметром фильтра
                });
            });
        });
    </script> -->
</body>
<script src="accordion.js"></script>

</html>