<?php include_once 'header.inc.php';?>
<div class="identification_page">

    <h1>Личный кабинет</h1>

    <ul class="list_links">
        <li class="dib item"><a href="#">Профиль</a></li>
        <li class="dib item"><a href="#" class="active">Меню</a></li>
        <li class="dib item"><a href="#">Новости</a></li>
        <li class="dib item"><a href="#">Сообщения</a></li>
        <li class="dib item"><a href="#">Платные опции</a></li>
        <li class="dib item"><a href="#">Статистика</a></li>
    </ul>
    <div class="text400">
        <p>Подключив функцию заказа еды, вы получаете готовый канал продаж. Вы размещаете ваше меню на нашем сайте, и платите только за полученные заказы. Наша система обрабатывает и передаёт вам готовые заказы без ошибок. </p>
        <p>Редактирование меню будет доступно после оплаты. Получить подробную информацию и подключить эту опцию вы можете на вкладке <a href="#">Платные опции.</a></p>
    </div>
        <br>
    <div class="cols">
        <div class="col-2 dib">
            <p class="color_dark">Меню</p><br>
            <ul class="list_menu">
                <li class="item">
                    <div class="holder_item">
                    <i class="dib color_dark"  id="editable_item_1">Роллы</i>
                    <div class="control dib">
                        <img src="img/edit.svg" class="edit dib" data-id="item_1" data-title="Редактировать" alt="">
                        <img src="img/delete.svg"  data-title="Удалить" class="delete dib" alt="">
                        <span class="dib green_btn save_edit">Ok</span>
                    </div>
                    <a href="#" class="toggle_sub_list dib"  data-event="slidetoggle" data-id="#sublist_1"><img src="img/arrow_gray_down.svg" alt=""></a>
                    </div>
                    <ul class="sub_list" id="sublist_1">
                        <li class="item">
                            <div class="holder_item">
                            <i class="dib color_dark"  id="editable_item_1_2">Роллы теплые</i>
                            <div class="control dib">
                                <img src="img/edit.svg" class="edit" data-id="item_1_2" data-title="Редактировать" alt="">
                                <img src="img/delete.svg"  data-title="Удалить" class="delete" alt="">
                                <span class="dib green_btn save_edit">Ok</span>
                            </div>
                            <a href="#" class="toggle_sub_list dib"  data-event="slidetoggle" data-id="#sublist_1_1"><img src="img/arrow_gray_down.svg" alt=""></a>
                            </div>
                            <ul class="sub_list"  id="sublist_1_1">
                                <li class="item">
                                    <div class="holder_item">
                                        <a class="dib color_dark edit_product" data-event="toggle" data-id="#form_edit_product_1">Хияши унаги</a>
                                    </div>
                                    <div class="form_edit_product">
                                        <form class="form_product" id="form_edit_product_1">
                                            <div class="col_1 dib">
                                                <span class="label_image color_dark"><img src="img/content/03_restaurant_menu/roll_03.jpg" alt=""></span>
                                                <label class="label_new_image color_dark" for="img_product_1"><img src="img/plus_yellow_big.svg" class="dibm">Новое фото</label>
                                                <input type="file" id="img_product_1">
                                            </div>
                                            <div class="col_2 dib">
                                                <input type="text" placeholder="Название товара" value="Хияши унаги">
                                                <input type="text" placeholder="Цена (руб.)" value="100 (руб.)">
                                                <textarea placeholder="Описание (max 200 символов)">С угрем, салатом «чука», мягким сыром, тобико и кунжутом, 6 шт.</textarea>
                                                <input type="submit" value="Сохранить" class="dib green_btn">
                                                <input type="submit" value="Удалить" class="dib reset">
                                            </div>
                                        </form>
                                    </div>
                                </li>

                                <li class="item">
                                    <div class="holder_item">
                                        <a class="dib color_dark edit_product" data-event="toggle" data-id="#form_edit_product_2">Мексиканский ролл</a>
                                    </div>
                                    <div class="form_edit_product">
                                        <form class="form_product" id="form_edit_product_2">
                                            <div class="col_1 dib">
                                                <span class="label_image color_dark"><img src="img/content/03_restaurant_menu/roll_02.jpg" alt=""></span>
                                                <label class="label_new_image color_dark" for="img_product_1"><img src="img/plus_yellow_big.svg" class="dibm">Новое фото</label>
                                                <input type="file" id="img_product_1">
                                            </div>
                                            <div class="col_2 dib">
                                                <input type="text" placeholder="Название товара" value="Мексиканский ролл">
                                                <input type="text" placeholder="Цена (руб.)" value="200 (руб.)">
                                                <textarea placeholder="Описание (max 200 символов)">С угрем, салатом «чука», мягким сыром, тобико и кунжутом, 6 шт.</textarea>
                                                <input type="submit" value="Сохранить" class="dib green_btn">
                                                <input type="submit" value="Удалить" class="dib reset">
                                            </div>
                                        </form>
                                    </div>
                                </li>
                                <li class="item_form">
                                    <div class="add_product">
                                        <a href="#" class="view_form_product color_dark" data-event="toggle"  data-id="#add_new_product_1"><img src="img/plus_green_big.svg" class="dibm" alt="">Добавить товар</a>
                                        <form class="form_product" id="add_new_product_1">
                                            <div class="col_1 dib">
                                                <label class="label_image color_dark" for="img_product_1"><img src="img/plus_yellow_big.svg" alt="">Добавить изображение</label>
                                                <input type="file" id="img_product_1">
                                            </div>
                                            <div class="col_2 dib">
                                                <input type="text" placeholder="Название товара">
                                                <input type="text" placeholder="Цена (руб.)">
                                                <textarea placeholder="Описание (max 200 символов)"></textarea>
                                                <input type="submit" value="Сохранить" class="dib green_btn">
                                                <input type="submit" value="Отменить" class="dib reset">
                                            </div>
                                        </form>
                                    </div>
                                </li>
                            </ul>
                        </li>

                        <li class="item">
                            <div class="holder_item">
                                <i class="dib color_dark"  id="editable_item_2_1">Традиционные роллы</i>
                                <div class="control dib">
                                    <img src="img/edit.svg" class="edit" data-id="item_2_1" data-title="Редактировать" alt="">
                                    <img src="img/delete.svg"  data-title="Удалить" class="delete" alt="">
                                    <span class="dib green_btn save_edit">Ok</span>
                                </div>
                                <a href="#" class="toggle_sub_list dib"  data-event="slidetoggle" data-id="#sublist_2_1"><img src="img/arrow_gray_down.svg" alt=""></a>
                            </div>
                            <ul class="sub_list"  id="sublist_2_1">
                                <li class="item_form">
                                    <div class="add_product">
                                        <a href="#" class="view_form_product color_dark" data-event="toggle"  data-id="#add_new_product_2"><img src="img/plus_green_big.svg" class="dibm" alt="">Добавить товар</a>
                                        <form class="form_product" id="add_new_product_2">
                                            <div class="col_1 dib">
                                                <label class="label_image color_dark" for="img_product_1"><img src="img/plus_yellow_big.svg" alt="">Добавить изображение</label>
                                                <input type="file" id="img_product_1">
                                            </div>
                                            <div class="col_2 dib">
                                                <input type="text" placeholder="Название товара">
                                                <input type="text" placeholder="Цена (руб.)">
                                                <textarea placeholder="Описание (max 200 символов)"></textarea>
                                                <input type="submit" value="Сохранить" class="dib green_btn">
                                                <input type="submit" value="Отменить" class="dib reset">
                                            </div>
                                        </form>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class="item_form">
                            <div class="add_category">
                                <a href="#" class="view_form_sub_category color_dark" data-event="changeview" data-hide=".view_form_sub_category" data-id=".form_sub_category"><img src="img/plus_yellow_big.svg" class="dibm" alt="">Добавить подкатегорию</a>
                                <form class="form_sub_category hide">
                                    <a href="#" class="dib" data-event="changeview" data-hide=".form_sub_category" data-id=".view_form_sub_category"><img src="img/cross_gray_big.svg" alt=""></a>
                                    <input type="text" class="dib" placeholder="Добавить подкатегорию">
                                    <input type="submit" value="OK" class="dib green_btn">
                                </form>
                            </div>
                        </li>
                    </ul>
                </li>


                <li class="item_form">
                    <div class="add_category">
                        <a href="#" class="view_form_category color_dark" data-event="changeview" data-hide=".view_form_category" data-id=".form_category"><img src="img/plus_yellow_big.svg" class="dibm" alt="">Добавить категорию</a>
                        <form class="form_category hide">
                            <a href="#" class="dib" data-event="changeview" data-hide=".form_category" data-id=".view_form_category"><img src="img/cross_gray_big.svg" alt=""></a>
                            <input type="text" class="dib" placeholder="Добавить категорию">
                            <input type="submit" value="OK" class="dib green_btn">
                        </form>
                    </div>
                </li>
            </ul>

        </div>
    </div><!-- end cols-->


</div>
<?php include_once 'footer.inc.php';?>