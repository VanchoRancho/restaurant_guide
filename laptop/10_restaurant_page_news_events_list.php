<?php include_once 'header.inc.php';?>



    <div class="item_rest row_restaurant">
        <div class="back_to_parent"><a href="02_catalog_by_list.php" class="color_dark"><img src="img/arrow_gray_left.svg" alt="" class="dibm">Обратно в Каталог</a></div>
            <div class="col_1 dib">
                <a href="#" class="img_holder"><img src="img/restaurant_logo_sample_01.svg" alt=""></a>
            </div>
            <div class="col_2 dib">
                <div class="desc">
                    <h1>Osteria Bianca</h1>
                    <p>Адрес: Санкт-Петербург, Богатырский пр., 4</p>
                    <p>Кухня: Итальянская / Европейская / Американская</p>
                    <p>Открыто: пн-пт 10.00-20.00, сб-вс выходной</p>
                </div>
                <div class="contacts dib">
                    <p class="color_dark">+7 812 652 86 60</p>
                    <p class="soc_links"><a href="#">vkontakte</a><a href="#">facebook</a><a href="#">twitter</a></p>
                    <p class="domain"><a href="#">www.osteriabianca.ru</a></p>
                </div>
                <div class="date_open dib">
                    <p>Дата открытия:</p>
                    <p>20.09.2016</p>
                </div>

                <div class="tabs">
                    <ul class="dib">
                        <li class="dib active"><a href="#">Доставка еды</a></li>
                        <li class="dib"><a href="#">Заказ банкета</a></li>
                    </ul>
                </div>

                <div class="main_desc dib">
                    <p><span class="title_param dib">Мин. сумма заказа:</span><span class="value_param color_dark dib">700 р.</span></p>
                    <p><span class="title_param dib">Стоимость доставки:</span><span class="value_param color_dark dib">бесплатно</span></p>
                    <p><span class="title_param dib">Время доставки:</span><span class="value_param color_dark dib">от 50 мин.</span></p>
                    <p><span class="title_param dib">Средний счет:</span><span class="value_param color_dark dib">1200 р.</span></p>
                </div>
                <div class="payment dib">
                    <img src="img/mastercard.svg" class="dibm" alt="">
                    <img src="img/visa.svg" class="dibm" alt="">
                    <p>картой курьеру</p>
                    <p>картой онлайн</p>
                </div>
            </div>
            <div class="col_3 dib">
                <div class="param favorite">
                    <a href="#" class="add_favorite dib"  data-title="Добавить в Избранное">
                        <img src="img/favorites_gray.svg" class="icon_grey"  alt="">
                        <img src="img/favorites_yellow.svg" class="icon_color"  alt="">
                    </a>
                    <a href="#" class="dib" data-event="show" data-id=".review_holder,.fog" data-title="Написать отзыв">
                        <img src="img/message_gray.svg" class="icon_grey" alt="">
                        <img src="img/message_green.svg" class="icon_color" alt="">
                    </a>
                </div>
                <div class="param"><div class="dib" data-title="Рейтинг Ресторанного Гида"><img src="img/rating_rg.svg" class="dibm" alt=""><i class="dibm">7,6</i></div></div>
                <div class="param"><div class="dib" data-title="Рейтинг пользователей"><img src="img/rating_users.svg" class="dibm" alt=""><i class="dibm">7,3</i></div></div>
                <div class="param"><img src="img/profile.svg" class="dibm" alt=""><i class="dibm">7,3</i><a href="#" class="edit dibm">Изменить</a></div>
                <div class="param comments"><div class="dib" data-title="Отзывы пользователей"><img src="img/comments.svg" class="dibm" alt=""><i class="dibm">58</i></div></div>
                <div class="param links">
                    <a href="#" class="dibm"><img src="img/order_food.svg" alt="" data-title="Заказ еды"></a>
                    <a href="#" class="dibm" data-event="show" data-id=".order_table_holder_id_1,.fog" data-title="Заказ столика"><img src="img/order_table.svg" alt=""></a>
                    <a href="#" class="dibm" data-event="show" data-id=".order_banket_holder_id_1,.fog" data-title="Заказ банкета"><img src="img/order_banket.svg" alt=""></a>
                    <div class="order_holder order_table_holder_id_1 in_center_window">
                        <?php include 'order_table_form.inc.php';?>
                    </div>
                    <div class="order_holder order_banket_holder_id_1 in_center_window">
                        <?php include 'order_banket_form.inc.php';?>
                    </div>
                    <div class="order_holder review_holder in_center_window">
                        <?php include 'review_form.inc.php';?>
                    </div>
                </div>
            </div>
    </div><!--item_rest-->

    <div class="tabs">
        <ul class="dib">
            <li class="dib"><a href="06_restaurant_page_about.php">Описание</a></li>
            <li class="dib"><a href="04_restaurant_page_menu.php">Меню</a></li>
            <li class="dib"><a href="07_restaurant_page_feedback.php">Отзывы</a></li>
            <li class="dib active"><a href="08_restaurant_page_news_akcii_list.php">Новости, акции</a></li>
        </ul>
    </div>
    <div class="page_rest">
        <ul class="list_links">
            <li class="dib item"><a href="08_restaurant_page_news_akcii_list.php">Текущие акции</a></li>
            <li class="dib item"><a href="10_restaurant_page_news_events_list.php" class="active">События</a></li>
            <li class="dib item"><a href="#">Новости</a></li>
        </ul>

        <div class="share_list">
            <div class="item">
                <p class="color_middle">Концерт</p>
                <p><a href="11_restaurant_page_news_events_one.php" class="color_dark">Концерт Михаила Шуфутинского</a></p>
                <p class="color_middle">25 августа  20:00 ч</p>
                <p> Уникальный концерт заслуженного артиста РФ, пианиста, композитора, и эстрадного певца — Михаила Шуфутинского.</p>
            </div>

            <div class="item">
                <p class="color_middle">Трансляции</p>
                <p><a href="11_restaurant_page_news_events_one.php" class="color_dark">Спортивные онлайн трансляции</a></p>
                <p class="color_middle">05 августа  22:00 ч</p>
                <p>Трансляции всех важных спортивных событий на экранах. Профессиональная аппаратура, качественный звук.</p>
            </div>
        </div>

        <a href="#" class="link_more color_dark"><img src="img/plus_yellow_small.svg" class="dibm">Все события</a>
    </div>











<?php include_once 'footer.inc.php';?>