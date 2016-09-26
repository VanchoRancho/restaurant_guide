<?php include_once 'header.inc.php';?>


    <aside class="dib pad_r_30">
        <?php include 'filter.inc.php';?>
    </aside>
    <div class="dib row-n">
        <div class="sort_holder">
            <div class="dib view_param">
                <label class="color_dark">Показывать:</label>
                <select id="view_select">
                    <option>списком</option>
                    <option>на карте</option>
                </select>
            </div>

            <div class="dib sort_param">
                <label class="color_dark">Сортировать по:</label>
                <select id="sort_select">
                    <option>количеству отзывов</option>
                    <option>рейтингу</option>
                    <option>алфавиту</option>
                    <option>среднему счету</option>
                </select>
            </div>
        </div><!--end sort_holder-->


        <div class="list_rest">


            <div class="item  row_restaurant">
                <div class="col_1 dib">
                    <a href="#" class="img_holder"><img src="img/restaurant_logo_sample_01.svg" alt=""></a>
                </div>
                <div class="col_2 dib">
                    <div class="desc">
                        <a href="#" class="title_strong color_dark">Osteria Bianca</a>
                        <p>Адрес: Санкт-Петербург, Богатырский пр., 4</p>
                        <p>Кухня: Итальянская / Европейская / Американская</p>
                        <p>Открыто: пн-пт 10.00-20.00, сб-вс выходной</p>
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
                    </div>
                    <div class="param"><div class="dib" data-title="Рейтинг Ресторанного Гида"><img src="img/rating_rg.svg" class="dibm" alt=""><i class="dibm">7,6</i></div></div>
                    <div class="param"><div class="dib" data-title="Рейтинг пользователей"><img src="img/rating_users.svg" class="dibm" alt=""><i class="dibm">7,3</i></div></div>
                    <div class="param comments"><div class="dib" data-title="Отзывы пользователей"><img src="img/comments.svg" class="dibm" alt=""><i class="dibm">58</i></div></div>
                    <div class="param links">
                        <a href="#" class="dibm" data-title="Заказ еды"><img src="img/order_food.svg" alt=""></a>
                        <a href="#" class="dibm" data-event="show" data-id=".order_table_holder_id_1,.fog" data-title="Заказ столика"><img src="img/order_table.svg" alt=""></a>
                        <a href="#" class="dibm" data-event="show" data-id=".order_banket_holder_id_1,.fog" data-title="Заказ банкета"><img src="img/order_banket.svg" alt=""></a>
                        <div class="order_holder order_table_holder_id_1 in_center_window">
                            <?php include 'order_table_form.inc.php';?>
                        </div>
                        <div class="order_holder order_banket_holder_id_1 in_center_window">
                            <?php include 'order_banket_form.inc.php';?>
                        </div>
                    </div>
                </div>
            </div>


            <div class="item row_restaurant">
                <div class="col_1 dib">
                    <a href="#" class="img_holder"><img src="img/restaurant_logo_sample_01.svg" alt=""></a>
                </div>
                <div class="col_2 dib">
                    <div class="desc">
                        <a href="#" class="title_strong color_dark">Via d'Argento</a>
                        <p>Адрес: Санкт-Петербург, наб. Канала Грибоедова, д. 64</p>
                        <p>Кухня: Итальянская / Европейская / Мексиканская</p>
                        <p>Открыто: пн-пт 10.00-20.00, сб-вс выходной</p>
                    </div>
                    <div class="main_desc dib">
                        <p><span class="title_param dib">Мин. сумма заказа:</span><span class="value_param color_dark dib">800 р.</span></p>
                        <p><span class="title_param dib">Стоимость доставки:</span><span class="value_param color_dark dib">бесплатно</span></p>
                        <p><span class="title_param dib">Время доставки:</span><span class="value_param color_dark dib">от 60 мин.</span></p>
                        <p><span class="title_param dib">Средний счет:</span><span class="value_param color_dark dib">1400 р.</span></p>
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
                    </div>
                    <div class="param"><div class="dib" data-title="Рейтинг Ресторанного Гида"><img src="img/rating_rg.svg" class="dibm" alt=""><i class="dibm">7,6</i></div></div>
                    <div class="param"><div class="dib" data-title="Рейтинг пользователей"><img src="img/rating_users.svg" class="dibm" alt=""><i class="dibm">7,3</i></div></div>
                    <div class="param comments"><div class="dib" data-title="Отзывы пользователей"><img src="img/comments.svg" class="dibm" alt=""><i class="dibm">58</i></div></div>
                    <div class="param links">
                         <a href="#" class="dibm" data-event="show" data-id=".order_table_holder_id_2,.fog" data-title="Заказ столика"><img src="img/order_table.svg" alt=""></a>
                        <div class="order_holder order_table_holder_id_2 in_center_window">
                            <?php include 'order_table_form.inc.php';?>
                        </div>
                    </div>
                </div>
            </div>




            <div class="item row_restaurant">
                <div class="col_1 dib">
                    <a href="#" class="img_holder"><img src="img/restaurant_logo_sample_01.svg" alt=""></a>
                </div>
                <div class="col_2 dib">
                    <div class="desc">
                        <a href="#" class="title_strong color_dark">Якитория</a>
                        <p>Адрес: Санкт-Петербург, пл. Чернышевского, д. 11</p>
                        <p>Кухня: Японская / Китайская / Итальянская / Европейская</p>
                        <p>Открыто: пн-пт 12.00-20.00, сб-вс 14.00-00.00</p>
                    </div>
                    <div class="main_desc dib">
                        <p><span class="title_param dib">Мин. сумма заказа:</span><span class="value_param color_dark dib">1000 р.</span></p>
                        <p><span class="title_param dib">Стоимость доставки:</span><span class="value_param color_dark dib">бесплатно</span></p>
                        <p><span class="title_param dib">Время доставки:</span><span class="value_param color_dark dib">от 2 ч</span></p>
                        <p><span class="title_param dib">Средний счет:</span><span class="value_param color_dark dib">1000 р.</span></p>
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
                    </div>
                    <div class="param"><div class="dib" data-title="Рейтинг Ресторанного Гида"><img src="img/rating_rg.svg" class="dibm" alt=""><i class="dibm">7,6</i></div></div>
                    <div class="param"><div class="dib" data-title="Рейтинг пользователей"><img src="img/rating_users.svg" class="dibm" alt=""><i class="dibm">7,3</i></div></div>
                    <div class="param comments"><div class="dib" data-title="Отзывы пользователей"><img src="img/comments.svg" class="dibm" alt=""><i class="dibm">58</i></div></div>
                    <div class="param links">
                        <a href="#" class="dibm" data-title="Заказ еды"><img src="img/order_food.svg" alt="" ></a>
                        <a href="#" class="dibm" data-event="show" data-id=".order_table_holder_id_3,.fog"data-title="Заказ столика"><img src="img/order_table.svg" alt=""></a>
                        <a href="#" class="dibm" data-event="show" data-id=".order_banket_holder_id_3,.fog"data-title="Заказ банкета"><img src="img/order_banket.svg" alt=""></a>
                        <div class="order_holder order_table_holder_id_3 in_center_window">
                            <?php include 'order_table_form.inc.php';?>
                        </div>
                        <div class="order_holder order_banket_holder_id_3 in_center_window">
                            <?php include 'order_banket_form.inc.php';?>
                        </div>
                    </div>
                </div>
            </div>




            <div class="item row_restaurant">
                <div class="col_1 dib">
                    <a href="#" class="img_holder"><img src="img/restaurant_logo_sample_01.svg" alt=""></a>
                </div>
                <div class="col_2 dib">
                    <div class="desc">
                        <a href="#" class="title_strong color_dark">Yoshida</a>
                        <p>Адрес: Санкт-Петербург, Коломяжский пр., д. 34</p>
                        <p>Кухня: Японская / Китайская</p>
                        <p>Открыто: вт-вс 12.00-22.00</p>
                    </div>
                    <div class="main_desc dib">
                        <p><span class="title_param dib">Мин. сумма заказа:</span><span class="value_param color_dark dib">1000 р.</span></p>
                        <p><span class="title_param dib">Стоимость доставки:</span><span class="value_param color_dark dib">бесплатно</span></p>
                        <p><span class="title_param dib">Время доставки:</span><span class="value_param color_dark dib">от 60 мин.</span></p>
                        <p><span class="title_param dib">Средний счет:</span><span class="value_param color_dark dib">800 р.</span></p>
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
                    </div>
                    <div class="param"><div class="dib" data-title="Рейтинг Ресторанного Гида"><img src="img/rating_rg.svg" class="dibm" alt=""><i class="dibm">7,6</i></div></div>
                    <div class="param"><div class="dib" data-title="Рейтинг пользователей"><img src="img/rating_users.svg" class="dibm" alt=""><i class="dibm">7,3</i></div></div>
                    <div class="param comments"><div class="dib" data-title="Отзывы пользователей"><img src="img/comments.svg" class="dibm" alt=""><i class="dibm">58</i></div></div>
                    <div class="param links">
                        <a href="#" class="dibm"><img src="img/order_food.svg" alt="" data-title="Заказ еды"></a>
                    </div>
                </div>
            </div>





            <div class="item row_restaurant">
                <div class="col_1 dib">
                    <a href="#" class="img_holder"><img src="img/restaurant_logo_sample_01.svg" alt=""></a>
                </div>
                <div class="col_2 dib">
                    <div class="desc">
                        <a href="#" class="title_strong color_dark">Хочу Харчо / Ginza</a>
                        <p>Адрес: Санкт-Петербург, Коломяжский пр., д. 34</p>
                        <p>Кухня: Кавказская / Узбекская</p>
                        <p>Открыто: пн-вс 14.00-00.00</p>
                    </div>
                    <div class="main_desc dib">
                        <p><span class="title_param dib">Мин. сумма заказа:</span><span class="value_param color_dark dib">1500 р</span></p>
                        <p><span class="title_param dib">Стоимость доставки:</span><span class="value_param color_dark dib">500 р.</span></p>
                        <p><span class="title_param dib">Время доставки:</span><span class="value_param color_dark dib">от 80 мин.</span></p>
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
                    </div>
                    <div class="param"><div class="dib" data-title="Рейтинг Ресторанного Гида"><img src="img/rating_rg.svg" class="dibm" alt=""><i class="dibm">7,6</i></div></div>
                    <div class="param"><div class="dib" data-title="Рейтинг пользователей"><img src="img/rating_users.svg" class="dibm" alt=""><i class="dibm">7,3</i></div></div>
                    <div class="param comments"><div class="dib" data-title="Отзывы пользователей"><img src="img/comments.svg" class="dibm" alt=""><i class="dibm">58</i></div></div>
                    <div class="param links">
                        <a href="#" class="dibm"><img src="img/order_food.svg" alt="" data-title="Заказ еды"></a>
                        <a href="#" class="dibm" data-event="show" data-id=".order_banket_holder_id_4,.fog" data-title="Заказ банкета"><img src="img/order_banket.svg" alt=""></a>

                        <div class="order_holder order_banket_holder_id_4 in_center_window">
                            <?php include 'order_banket_form.inc.php';?>
                        </div>
                    </div>
                </div>
            </div>





            <div class="item row_restaurant">
                <div class="col_1 dib">
                    <a href="#" class="img_holder"><img src="img/restaurant_logo_sample_01.svg" alt=""></a>
                </div>
                <div class="col_2 dib">
                    <div class="desc">
                        <a href="#" class="title_strong color_dark">Бочка</a>
                        <p>Адрес: Санкт-Петербург, Ул. Дыбенко, д. 15</p>
                        <p>Кухня: Русская / Украинская / Итальянская / Европейская</p>
                        <p>Открыто: пн-вс 14.00-00.00</p>
                    </div>
                    <div class="main_desc dib"></div>
                    <div class="payment dib"></div>
                </div>
                <div class="col_3 dib">
                    <div class="param favorite">
                        <a href="#" class="add_favorite dib"  data-title="Добавить в Избранное">
                            <img src="img/favorites_gray.svg" class="icon_grey"  alt="">
                            <img src="img/favorites_yellow.svg" class="icon_color"  alt="">
                        </a>
                    </div>
                    <div class="param"><div class="dib" data-title="Рейтинг Ресторанного Гида"><img src="img/rating_rg.svg" class="dibm" alt=""><i class="dibm">7,6</i></div></div>
                    <div class="param"><div class="dib" data-title="Рейтинг пользователей"><img src="img/rating_users.svg" class="dibm" alt=""><i class="dibm">7,3</i></div></div>
                    <div class="param comments"><div class="dib" data-title="Отзывы пользователей"><img src="img/comments.svg" class="dibm" alt=""><i class="dibm">58</i></div></div>
                    <div class="param links">
                       <a href="#" class="dibm" data-event="show" data-id=".order_table_holder_id_5,.fog" data-title="Заказ столика"><img src="img/order_table.svg" alt=""></a>
                       <div class="order_holder order_table_holder_id_5 in_center_window">
                            <?php include 'order_table_form.inc.php';?>
                        </div>
                    </div>
                </div>
            </div>

        </div><!--list_rest-->

        <form class="pagination mb80">
            <a href="#" class="prev dib">пред.</a>
            <input type="text" class="current_page dib" value="23">
            <span class="all_page div">из 60</span>
            <a href="#" class="next dib">след.</a>
        </form>



        <div class="row_text">
            <h1 class="title_strong">Ресторанный гид</h1>
            <p>Самый быстрый и удобный способ выбрать, в какой ресторан или кафе пойти. Здесь можно найти все о тысячах заведений Москвы, Санкт-Петербурга, а также других крупных городов России.</p>
            <p>Читайте рецензии, пишите свои отзывы или просто отметьте понравившееся место. Чтобы облегчить выбор, администраторы сайта составили и постоянно обновляют списки лучших заведений — теперь вы всегда будете знать, где самые вкусные бургеры и хинкали, куда заскочить перекусить ночью и куда ходят все.</p>
        </div>
    </div>



<?php include_once 'footer.inc.php';?>