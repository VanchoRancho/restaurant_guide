<?php include_once 'header.inc.php';?>
<div class="identification_page">

    <h1>Личный кабинет</h1>

    <ul class="list_links">
        <li class="dib item"><a href="#">Профиль</a></li>
        <li class="dib item"><a href="#">Меню</a></li>
        <li class="dib item"><a href="#" class="active">Новости</a></li>
        <li class="dib item"><a href="#">Сообщения</a></li>
        <li class="dib item"><a href="#">Платные опции</a></li>
        <li class="dib item"><a href="#">Статистика</a></li>
    </ul>

    <div class="tabs profile_tabs">
        <ul class="dib">
            <li class="dib active"><a href="#">Акции</a></li>
            <li class="dib"><a href="#">События</a></li>
            <li class="dib"><a href="#">Новости</a></li>
        </ul>
    </div>
    <div class="cols admin_action_list">
        <div class="col-2 dib">
            <div class="item">
                <a href="#" class="toggle_step color_dark" data-event="slidetoggle" data-id="#step1">Подарки на сумму до 10 000 руб</a>
                <form class="step edit_article" id="step1">
                    <label class="color_dark title_image"><img src="img/plus_yellow_small.svg" alt="" class="dibm">Основное фото <i class="color_middle">(690x460 px, jpg или png)</i>
                        <input type="file" id="title_img_article">
                    </label>
                    <div class="type">
                        <a href="#" class="toggle_step color_dark active" data-event="slidetoggle" data-id="#add_step_1_1">Тип акции *   <i class="color_middle">(Скидка)</i></a>
                        <div class="step open" id="add_step_1_1">
                            <label><input type="radio" name="action1" >Купон</label>
                            <label><input type="radio" name="action1" checked>Скидка</label>
                            <label><input type="radio" name="action1" >Промокод</label>
                            <label><input type="radio" name="action1" >Подарок</label>
                        </div>
                    </div>
                    <input type="text" value="Подарки на сумму до 10 000 руб">
                    <textarea>Подарки на сумму до 10 000 руб.</textarea>
                    <input type="submit" class="green_btn dib" value="Сохранить"><input type="submit" class="reset dib" value="Удалить">
                </form>
            </div>


            <div class="item">
                <a href="#" class="toggle_step color_dark" data-event="slidetoggle" data-id="#step2">Скидка на банкеты</a>
                <form class="step edit_article" id="step2">
                    <label class="color_dark title_image"><img src="img/plus_yellow_small.svg" alt="" class="dibm">Основное фото <i class="color_middle">(690x460 px, jpg или png)</i>
                        <input type="file" id="title_img_article">
                    </label>
                    <div class="type">
                        <a href="#" class="toggle_step color_dark active" data-event="slidetoggle" data-id="#add_step_2_1">Тип акции *   <i class="color_middle">(Купон)</i></a>
                        <div class="step open" id="add_step_2_1">
                            <label><input type="radio" name="action2" checked>Купон</label>
                            <label><input type="radio" name="action2" >Скидка</label>
                            <label><input type="radio" name="action2" >Промокод</label>
                            <label><input type="radio" name="action2" >Подарок</label>
                        </div>
                    </div>
                    <input type="text" value="Скидка на банкеты">
                    <textarea>Скидка на банкеты</textarea>
                    <input type="submit" class="green_btn dib" value="Сохранить"><input type="submit" class="reset dib" value="Удалить">
                </form>
            </div>

            <div class="item">
                <a href="#" class="toggle_step color_dark" data-event="slidetoggle" data-id="#step3">Вино за полцены</a>
                <form class="step edit_article" id="step3">
                    <label class="color_dark title_image"><img src="img/plus_yellow_small.svg" alt="" class="dibm">Основное фото <i class="color_middle">(690x460 px, jpg или png)</i>
                        <input type="file" id="title_img_article">
                    </label>
                    <div class="type">
                        <a href="#" class="toggle_step color_dark active" data-event="slidetoggle" data-id="#add_step_3_1">Тип акции *   <i class="color_middle">(Скидка)</i></a>
                        <div class="step open" id="add_step_3_1">
                            <label><input type="radio" name="action3" >Купон</label>
                            <label><input type="radio" name="action3" checked>Скидка</label>
                            <label><input type="radio" name="action3" >Промокод</label>
                            <label><input type="radio" name="action3" >Подарок</label>
                        </div>
                    </div>
                    <input type="text" value="Вино за полцены">
                    <textarea>Вино за полцены</textarea>
                    <input type="submit" class="green_btn dib" value="Сохранить"><input type="submit" class="reset dib" value="Удалить">
                </form>
            </div>

            <div class="item">
                <a href="#" class="toggle_step color_dark" data-event="slidetoggle" data-id="#step4">Пятничный беспредел</a>
                <form class="step edit_article" id="step4">
                    <label class="color_dark title_image"><img src="img/plus_yellow_small.svg" alt="" class="dibm">Основное фото <i class="color_middle">(690x460 px, jpg или png)</i>
                        <input type="file" id="title_img_article">
                    </label>
                    <div class="type">
                        <a href="#" class="toggle_step color_dark active" data-event="slidetoggle" data-id="#add_step_4_1">Тип акции *   <i class="color_middle">(Скидка)</i></a>
                        <div class="step open" id="add_step_4_1">
                            <label><input type="radio" name="action4" >Купон</label>
                            <label><input type="radio" name="action4" checked>Скидка</label>
                            <label><input type="radio" name="action4" >Промокод</label>
                            <label><input type="radio" name="action4" >Подарок</label>
                        </div>
                    </div>
                    <input type="text" value="Пятничный беспредел">
                    <textarea>Пятничный беспредел</textarea>
                    <input type="submit" class="green_btn dib" value="Сохранить"><input type="submit" class="reset dib" value="Удалить">
                </form>
            </div>

            <div class="item">
                <a href="#" class="toggle_step color_dark" data-event="slidetoggle" data-id="#step5">Суббота для «Виски-Кола»</a>
                <form class="step edit_article" id="step5">
                    <label class="color_dark title_image"><img src="img/plus_yellow_small.svg" alt="" class="dibm">Основное фото <i class="color_middle">(690x460 px, jpg или png)</i>
                        <input type="file" id="title_img_article">
                    </label>
                    <div class="type">
                        <a href="#" class="toggle_step color_dark active" data-event="slidetoggle" data-id="#add_step_5_1">Тип акции *   <i class="color_middle">(Скидка)</i></a>
                        <div class="step open" id="add_step_5_1">
                            <label><input type="radio" name="action5" >Купон</label>
                            <label><input type="radio" name="action5" checked>Скидка</label>
                            <label><input type="radio" name="action5" >Промокод</label>
                            <label><input type="radio" name="action5" >Подарок</label>
                        </div>
                    </div>
                    <input type="text" value="Суббота для «Виски-Кола»">
                    <textarea>Суббота для «Виски-Кола»</textarea>
                    <input type="submit" class="green_btn dib" value="Сохранить"><input type="submit" class="reset dib" value="Удалить">
                </form>
            </div>

            <div class="item">
                <a href="#" class="toggle_step color_dark" data-event="slidetoggle" data-id="#step6">Подарки на сумму до 10 000 руб</a>
                <form class="step edit_article" id="step6">
                    <label class="color_dark title_image"><img src="img/plus_yellow_small.svg" alt="" class="dibm">Основное фото <i class="color_middle">(690x460 px, jpg или png)</i>
                        <input type="file" id="title_img_article">
                    </label>
                    <div class="type">
                        <a href="#" class="toggle_step color_dark active" data-event="slidetoggle" data-id="#add_step_6_1">Тип акции *   <i class="color_middle">(Скидка)</i></a>
                        <div class="step open" id="add_step_6_1">
                            <label><input type="radio" name="action6" >Купон</label>
                            <label><input type="radio" name="action6" checked>Скидка</label>
                            <label><input type="radio" name="action6" >Промокод</label>
                            <label><input type="radio" name="action6" >Подарок</label>
                        </div>
                    </div>
                    <input type="text" value="Подарки на сумму до 10 000 руб">
                    <textarea>Подарки на сумму до 10 000 руб.</textarea>
                    <input type="submit" class="green_btn dib" value="Сохранить"><input type="submit" class="reset dib" value="Удалить">
                </form>
            </div>

            <a class="green_btn dib view_form_add_new_article" data-event="slidetoggle" data-id="#add_new_article_form">Добавить акцию</a>

            <form id="add_new_article_form">
                <label class="color_dark title_image"><img src="img/plus_yellow_small.svg" alt="" class="dibm">Основное фото <i class="color_middle">(690x460 px, jpg или png)</i>
                    <input type="file" id="title_img_article">
                </label>

                <div class="type">
                    <a href="#" class="toggle_step color_dark active" data-event="slidetoggle" data-id="#add_step_1">Тип акции *   <i class="color_middle">(Скидка)</i></a>
                    <div class="step open" id="add_step_1">
                        <label><input type="radio" name="action5" >Купон</label>
                        <label><input type="radio" name="action5" >Скидка</label>
                        <label><input type="radio" name="action5" >Промокод</label>
                        <label><input type="radio" name="action5" >Подарок</label>
                    </div>
                </div>
                <input type="text" placeholder="Заголовок *" class="title_article">
                <textarea placeholder="Текст акции"></textarea>
                <input type="submit" class="green_btn dib" value="Опубликовать"><input type="submit" class="reset dib" value="Отменить">

            </form>

        </div>
    </div><!-- end cols-->
</div>
<?php include_once 'footer.inc.php';?>