<?php include_once 'header.inc.php';?>
<div class="identification_page">

    <h1>Личный кабинет</h1>

    <ul class="list_links">
        <li class="dib item"><a href="#" class="active">Профиль</a></li>
        <li class="dib item"><a href="#">Меню</a></li>
        <li class="dib item"><a href="#">Новости</a></li>
        <li class="dib item"><a href="#">Сообщения</a></li>
        <li class="dib item"><a href="#">Платные опции</a></li>
        <li class="dib item"><a href="#">Статистика</a></li>
    </ul>

    <div class="text400">
        <p>Вы можете редактировать базовую информацию по<br> профилю вашего заведения, либо заполнить графы,<br> пропущенные при регистрации.</p>
    </div>
    <br>
    <form class="cols">
        <div class="col-2 dib">
            <div>
                <a href="#" class="toggle_step color_dark active" data-event="slidetoggle" data-id="#step1">Основные данные о заведении *</a>
                <div class="step open" id="step1">
                    <input type="text" value="Сытный обед">
                    <input type="text" value="Сеть">
                    <input type="text" value="20.02.2006">
                    <input type="text" value="+7 (812) 452 92 64">
                    <input type="text" value="ул. Матроса Железняка, 57А">
                    <input type="text" value="www.sytniyobed.ru">
                    <input type="text" value="2000">
                    <input type="text" value="Анатолий Васильев">
                </div>
            </div>



            <div>
                <a href="#" class="toggle_step_with_param color_dark dib" data-event="slidetoggle" data-id="#step2">Тип заведения *</a>
                <div class="dib added_param" id="added_step2">(<i>Кафе</i>)</div>
                <div class="step" id="step2">
                    <label><input type="checkbox">Банкетный зал</label>
                    <label><input type="checkbox">Бар</label>
                    <label><input type="checkbox">Бистро</label>
                    <label><input type="checkbox">Винный бар</label>
                    <label><input type="checkbox">Кафе</label>
                    <label><input type="checkbox">Кондитерская</label>
                </div>
            </div>

            <div>
                <a href="#" class="toggle_step_with_param color_dark dib" data-event="slidetoggle" data-id="#step3">Метро *</a>
                <div class="dib added_param" id="added_step3">(<i>Центральный</i>)</div>
                <div class="step" id="step3">
                    <input type="text" placeholder="Выберите метро">
                    <label><input type="checkbox">Комендантский пр.</label>
                    <label><input type="checkbox">Гостинный Двор</label>
                    <label><input type="checkbox">Спортивная</label>
                    <label><input type="checkbox">Адмиралтейская</label>
                    <label><input type="checkbox">Черная Речка</label>
                    <label><input type="checkbox">Приморская</label>
                </div>
            </div>

            <div>
                <a href="#" class="toggle_step_with_param color_dark dib" data-event="slidetoggle" data-id="#step4">Район *</a>
                <div class="dib added_param" id="added_step4">(<i>Центральный</i>)</div>
                <div class="step" id="step4">
                    <label><input type="checkbox">Адмиралтейский</label>
                    <label><input type="checkbox">Василеостровский</label>
                    <label><input type="checkbox">Всеволожск</label>
                    <label><input type="checkbox">Выборгский</label>
                    <label><input type="checkbox">Калининский</label>
                    <label><input type="checkbox">Кировский</label>
                </div>
            </div>



            <div>
                <a href="#" class="toggle_step_with_param color_dark dib" data-event="slidetoggle" data-id="#step5">Кухня *</a>
                <div class="dib added_param" id="added_step5">(<i>Европейстая</i>, <i>Азиатская</i>, <i>+еще 3</i>)</div>
                <div class="step" id="step5">
                    <label><input type="checkbox">Итальянская</label>
                    <label><input type="checkbox">Европейская</label>
                    <label><input type="checkbox">Американская</label>
                    <label><input type="checkbox">Мексиканская</label>
                    <label><input type="checkbox">Японская</label>
                    <label><input type="checkbox">Китайская</label>
                </div>
            </div>


            <div>
                <a href="#" class="toggle_step_with_param color_dark dib" data-event="slidetoggle" data-id="#step6">Особенности *</a>
                <div class="dib added_param" id="added_step6">(<i>Детская комната</i>, <i>+еще 2</i>)</div>
                <div class="step" id="step6">
                    <label><input type="checkbox">Детская комната</label>
                    <label><input type="checkbox">Для некурящих</label>
                    <label><input type="checkbox">Постное меню</label>
                    <label><input type="checkbox">Сигарная карта</label>
                    <label><input type="checkbox">Англоговор. персонал</label>
                    <label><input type="checkbox">Панорамный вид</label>
                </div>
            </div>


            <div>
                <a href="#" class="toggle_step_with_param color_dark dib" data-event="slidetoggle" data-id="#step7">Развлечения *</a>
                <div class="dib added_param" id="added_step7">(<i>Джаз</i>, <i>Караоке</i>, <i>+еще 3</i>)</div>
                <div class="step" id="step7">
                    <label><input type="checkbox">Дартс</label>
                    <label><input type="checkbox">Бильярд</label>
                    <label><input type="checkbox">Джаз</label>
                    <label><input type="checkbox">Танцпол</label>
                    <label><input type="checkbox">Караоке</label>
                    <label><input type="checkbox">Живая музыка</label>
                </div>
            </div>


            <div>
                <a href="#" class="toggle_step_with_param color_dark dib" data-event="slidetoggle" data-id="#step8">Время работы *</a>
                <div class="dib added_param" id="added_step8"></div>
                <div class="step" id="step8">
                    <div class="range_holder">
                        <i class="dib">пн</i><input type="text" placeholder="09.00"><i class="dib">-</i><input type="text" placeholder="24.00"><i class="dib">ч</i>
                    </div>
                    <div class="range_holder">
                        <i class="dib">вт</i><input type="text" placeholder="09.00"><i class="dib">-</i><input type="text" placeholder="24.00"><i class="dib">ч</i>
                    </div>
                </div>
            </div>



            <div>
                <a href="#" class="toggle_step_with_param color_dark dib" data-event="slidetoggle" data-id="#step9">Социальные сети *</a>
                <div class="dib added_param" id="added_step9">(<i>Facebook</i>,<i>Vkontakte</i>)</div>
                <div class="step" id="step9">
                    <input type="text" placeholder="Facebook">
                    <input type="text" placeholder="Vkontakte">
                    <input type="text" placeholder="Instagram">
                    <input type="text" placeholder="Twitter">
                    <label class="label_file color_dark dib" for="file"><img src="img/plus_yellow_big.svg" class="dibm" alt="">Логотип</label><i class="dibm">(200x200 px, jpg или png)</i>
                    <input type="file" id="file">
                </div>
            </div>



            <a href="#" class="dib green_btn" data-event="slidedown" data-id="#window_2">Продолжить</a><br>

            <div class="step" id="window_2">

                <div>
                    <a href="#" class="toggle_step color_dark active" data-event="slidetoggle" data-id="#step2_1">Описание заведения *</a>
                    <div class="step open" id="step2_1">
                        <textarea placeholder="Текст с описанием заведения"></textarea>
                    </div>
                </div>

                <!-- start albums-->
                <div>
                    <a href="#" class="toggle_step color_dark" data-event="slidetoggle" data-id="#step2_2">Фотогалерея</a>
                    <div class="step" id="step2_2">
                        <div class="text">
                            <p>Блок с кратким описанием вашего заведения и<br>возможностью добавления фото (1 галерея на 10 фото<br> бесплатно). Добавление дополнительных галерей — платная опция. </p>
                            <p>Получить подробную информацию и подключить эту опцию<br>вы можете на вкладке <a href="#" class="color_dark">Платные опции.</a></p>
                        </div>

                        <div class="edit_album">
                            <a href="#"  id="editable_step2_3" class="toggle_step_with_param color_dark dib" data-event="slidetoggle" data-id="#step2_3">Банкетный зал</a>
                            <div class="dib added_param" id="added_step2_3">(<i>8 фото</i>)</div>
                            <div class="control dib">
                                <img src="img/edit.svg" class="edit" data-id="step2_3" data-title="Редактировать" alt="">
                                <img src="img/delete.svg"  data-title="Удалить" class="delete" alt="">
                                <span class="dib green_btn save_edit">Ok</span>
                            </div>
                            <div class="step album" id="step2_3">
                                <a href="#" class="dib">
                                    <span class="delete"><img src="img/delete.svg" alt="" class="dibm"></span>
                                    <img src="img/content/10_blog_articles/articles_recomended_02.jpg"  alt="">
                                </a>
                                <a href="#" class="dib">
                                    <span class="delete"><img src="img/delete.svg" alt="" class="dibm"></span>
                                    <img src="img/content/10_blog_articles/articles_recomended_02.jpg"  alt="">
                                </a>
                                <a href="#" class="dib">
                                    <span class="delete"><img src="img/delete.svg" alt="" class="dibm"></span>
                                    <img src="img/content/10_blog_articles/articles_recomended_02.jpg"  alt="">
                                </a>
                                <a href="#" class="dib">
                                    <span class="delete"><img src="img/delete.svg" alt="" class="dibm"></span>
                                    <img src="img/content/10_blog_articles/articles_recomended_02.jpg"  alt="">
                                </a>
                                <a href="#" class="dib">
                                    <span class="delete"><img src="img/delete.svg" alt="" class="dibm"></span>
                                    <img src="img/content/10_blog_articles/articles_recomended_02.jpg"  alt="">
                                </a>
                                <a href="#" class="dib">
                                    <span class="delete"><img src="img/delete.svg" alt="" class="dibm"></span>
                                    <img src="img/content/10_blog_articles/articles_recomended_02.jpg"  alt="">
                                </a>
                                <a href="#" class="dib">
                                    <span class="add"><img src="img/plus_yellow_big.svg" alt="" class="dibm"></span>
                                </a>
                            </div>
                        </div>


                    <div class="edit_album">
                        <a href="#"  id="editable_step2_4" class="toggle_step_with_param color_dark dib" data-event="slidetoggle" data-id="#step2_4">Барная стойка</a>
                        <div class="dib added_param" id="added_step2_4">(<i>6 фото</i>)</div>
                        <div class="control dib">
                            <img src="img/edit.svg" class="edit" data-id="step2_4" data-title="Редактировать" alt="">
                            <img src="img/delete.svg"  data-title="Удалить" class="delete" alt="">
                            <span class="dib green_btn save_edit">Ok</span>
                        </div>
                        <div class="step album" id="step2_4">
                            <a href="#" class="dib">
                                <span class="delete"><img src="img/delete.svg" alt="" class="dibm"></span>
                                <img src="img/content/10_blog_articles/articles_recomended_02.jpg"  alt="">
                            </a>
                            <a href="#" class="dib">
                                <span class="delete"><img src="img/delete.svg" alt="" class="dibm"></span>
                                <img src="img/content/10_blog_articles/articles_recomended_02.jpg"  alt="">
                            </a>
                            <a href="#" class="dib">
                                <span class="add"><img src="img/plus_yellow_big.svg" alt="" class="dibm"></span>
                            </a>
                        </div>
                    </div>






                    <div class="edit_album">
                        <a href="#"  id="editable_step2_5" class="toggle_step_with_param color_dark dib" data-event="slidetoggle" data-id="#step2_5">Блюда</a>
                        <div class="dib added_param" id="added_step2_5">(<i>6 фото</i>)</div>
                        <div class="control dib">
                            <img src="img/edit.svg" class="edit" data-id="step2_5" data-title="Редактировать" alt="">
                            <img src="img/delete.svg"  data-title="Удалить" class="delete" alt="">
                            <span class="dib green_btn save_edit">Ok</span>
                        </div>
                        <div class="step album" id="step2_5">
                            <a href="#" class="dib">
                                <span class="delete"><img src="img/delete.svg" alt="" class="dibm"></span>
                                <img src="img/content/10_blog_articles/articles_recomended_02.jpg"  alt="">
                            </a>
                            <a href="#" class="dib">
                                <span class="delete"><img src="img/delete.svg" alt="" class="dibm"></span>
                                <img src="img/content/10_blog_articles/articles_recomended_02.jpg"  alt="">
                            </a>
                            <a href="#" class="dib">
                                <span class="add"><img src="img/plus_yellow_big.svg" alt="" class="dibm"></span>
                            </a>
                        </div>
                    </div>



                        <div class="new_album">
                            <a href="#" class="color_dark plus dib" data-event="slidetoggle" data-id=".holder_new_album"><img src="img/plus_yellow_big.svg" alt="" class="dibm">Добавить альбом <i class="color_middle">(мин. размер фото - 450х300 px)</i></a>
                            <div class="holder_new_album">
                                <img src="img/cross_gray_big.svg" alt="" class="cancel dibm"><input type="text" class="dibm" placeholder="Название нового альбома"><span class="ok dibm green_btn">OK</span>

                            <div class="new_photos">
                                <a href="#" class="dib">
                                    <span class="delete"><img src="img/delete.svg" alt="" class="dibm"></span>
                                    <img src="img/content/10_blog_articles/articles_recomended_02.jpg"  alt="">
                                </a>
                                <a href="#" class="dib">
                                    <span class="delete"><img src="img/delete.svg" alt="" class="dibm"></span>
                                    <img src="img/content/10_blog_articles/articles_recomended_02.jpg"  alt="">
                                </a>
                                <a href="#" class="dib">
                                    <span class="add"><img src="img/plus_yellow_big.svg" alt="" class="dibm"></span>
                                </a>
                            </div>
                            </div>
                        </div>
                </div><!--end current step-->
             </div> <!-- end albums-->


                <div>
                    <a href="#" class="toggle_step color_dark active" data-event="slidetoggle" data-id="#step10">Личные данные (администратор заведения) *</a>
                    <div class="step open" id="step10">
                        <input type="text" placeholder="Имя, Фамилия *">
                        <input type="text" placeholder="+7 (---) --- -- -- *">
                        <input type="text" placeholder="Ваш e-mail *">
                        <input type="text" placeholder="Пароль *">
                        <input type="text" placeholder="Подтвердите пароль *">
                    </div>
                </div>

                <div>
                    <a href="#" class="toggle_step color_dark" data-event="slidetoggle" data-id="#step11">Менеджер (бронирование столиков) *</a>
                    <div class="step" id="step11">
                        <input type="text" placeholder="Имя, Фамилия *">
                        <input type="text" placeholder="+7 (---) --- -- -- *">
                        <input type="text" placeholder="E-mail *">
                    </div>
                </div>

                <div>
                    <a href="#" class="toggle_step color_dark" data-event="slidetoggle" data-id="#step12">Менеджер (заказ банкета) *</a>
                    <div class="step" id="step12">
                        <input type="text" placeholder="Имя, Фамилия *">
                        <input type="text" placeholder="+7 (---) --- -- -- *">
                        <input type="text" placeholder="E-mail *">
                    </div>
                </div>

                <div>
                    <a href="#" class="toggle_step color_dark" data-event="slidetoggle" data-id="#step13">Менеджер (доставка еды) *</a>
                    <div class="step" id="step13">
                        <input type="text" placeholder="Имя, Фамилия *">
                        <input type="text" placeholder="+7 (---) --- -- -- *">
                        <input type="text" placeholder="E-mail *">
                    </div>
                </div>



                <div>
                    <a href="#" class="toggle_step color_dark" data-event="slidetoggle" data-id="#step14">Заказ банкета</a>
                    <div class="step" id="step14">
                        <div class="text">
                            <p>Опция заказа банкета дает вам возможность получать новые заказы напрямую с нашего сайта. Данная функция пре- дусматривает фиксированный комиссионный сбор (10%). Настройки будут доступны после оплаты.</p>
                            <p>Получить подробную информацию и подключить эту опцию<br>вы можете на вкладке <a href="#" class="color_dark">Платные опции.</a></p>
                        </div>
                        <input type="text" placeholder="Цена на 1 человека (руб.)">
                        <input type="text" placeholder="Пробковый сбор (руб./1 чел.)">
                        <input type="text" placeholder="Максимальное количество человек">
                        <label><input type="checkbox">Аренда заведения полностью</label>
                        <label><input type="checkbox">Охраняемая парковка</label>
                        <label><input type="checkbox">Свой алкоголь</label>
                    </div>
                </div>


                <div>
                    <a href="#" class="toggle_step color_dark" data-event="slidetoggle" data-id="#step15">Заказ еды</a>
                    <div class="step" id="step15">
                        <div class="text">
                            <p>Опция заказа столика дает вам возможность получать новые заказы напрямую с нашего сайта. Данная функция преду- сматривает разовый сбор 50 руб. за 1 заказ, либо комиссионный сбор (10% от чека). </p>
                            <p>Настройки будут доступны после оплаты. Получить подробную информацию и подключить эту опцию вы можете на вкладке <a href="#" class="color_dark">Платные опции.</a></p>
                        </div>
                        <input type="text" placeholder="Мин. сумма заказа (руб.)">
                        <input type="text" placeholder="Время доставки (мин.)">
                        <input type="text" placeholder="Стоимость доставки (руб.)">
                        <label><input type="checkbox">Бесплатно</label>
                        <div><label class="dib"><input type="checkbox">Бесплатно при заказе от</label><div class="range_holder dib pad0 min_price"><input type="text" value="800"></div><i class="dib">руб.</i></div>
                        <div><label class="dib"><input type="checkbox">От </label><div class="range_holder dib pad0 min_price"><input type="text" value="250"></div><i class="dib">руб.</i></div>
                    </div>
                </div>

                <br>
                <input type="submit" value="Сохранить" class="green_btn">
            </div><!-- end #window_2-->

        </div>
    </form><!-- end cols-->

    <form class="cols">
        <div class="col-2">
            <a href="#" class="toggle_step color_dark" data-event="slidetoggle" data-id="#step_3_1">Сменить пароль</a>
            <div class="step marg0" id="step_3_1">
                <input type="password" placeholder="Новый пароль">
                <input type="password" placeholder="Подтвердите пароль">

                <input type="submit" value="Сохранить" class="green_btn">
            </div>
        </div>
    </form>
</div>
<?php include_once 'footer.inc.php';?>