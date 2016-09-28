<?php include_once 'header.inc.php';?>
<div class="identification_page">

    <h1>Регистрация</h1>
    <form class="cols">
        <div class="col-2 dib">
            <div>
                <a href="#" class="toggle_step color_dark active" data-event="slidetoggle" data-id="#step1">Основные данные о заведении *</a>
                <div class="step open" id="step1">
                    <input type="text" placeholder="Название ресторана *">
                    <input type="text" placeholder="Сеть *">
                    <input type="text" placeholder="Дата открытия *">
                    <input type="text" placeholder="Телефон *">
                    <input type="text" placeholder="Адрес *">
                    <input type="text" placeholder="Сайт *">
                    <input type="text" placeholder="Средний чек (руб) *">
                    <input type="text" placeholder="Шеф повар *">
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
                </div>
            </div>
            <div class="holder_for_logo">
                    <label class="label_file color_dark dib" for="file"><img src="img/plus_yellow_big.svg" class="dibm" alt="">Логотип</label><i class="dibm">(200x200 px, jpg или png)</i>
                    <input type="file" id="file">
            </div>

            <p class="color_dark">*  —  поля, обязательные для заполнения</p>

        </div>
        <div class="col-2 dib">

            <div>
                <a href="#" class="toggle_step color_dark active" data-event="slidetoggle" data-id="#step10">Личные данные (администратор заведения) *</a>
                <div class="step open" id="step10">
                    <input type="text" placeholder="Имя, Фамилия *">
                    <input type="text" placeholder="+7 (---) --- -- -- *" class="phone">
                    <input type="text" placeholder="Ваш e-mail *">
                    <input type="text" placeholder="Пароль *">
                    <input type="text" placeholder="Подтвердите пароль *">
                </div>
            </div>

            <div>
                <a href="#" class="toggle_step color_dark active" data-event="slidetoggle" data-id="#step11">Менеджер (бронирование столиков) *</a>
                <div class="step open" id="step11">
                    <input type="text" placeholder="Имя, Фамилия *">
                    <input type="text" placeholder="+7 (---) --- -- -- *" class="phone">
                    <input type="text" placeholder="E-mail *">
                </div>
            </div>

            <div>
                <a href="#" class="toggle_step color_dark" data-event="slidetoggle" data-id="#step12">Менеджер (заказ банкета) *</a>
                <div class="step" id="step12">
                    <input type="text" placeholder="Имя, Фамилия *">
                    <input type="text" placeholder="+7 (---) --- -- -- *" class="phone">
                    <input type="text" placeholder="E-mail *">
                </div>
            </div>

            <div>
                <a href="#" class="toggle_step color_dark" data-event="slidetoggle" data-id="#step13">Менеджер (доставка еды) *</a>
                <div class="step" id="step13">
                    <input type="text" placeholder="Имя, Фамилия *">
                    <input type="text" placeholder="+7 (---) --- -- -- *" class="phone">
                    <input type="text" placeholder="E-mail *">
                </div>
            </div>

            <br>
            <input type="submit" value="Зарегистрировать" class="green_btn">
        </div>
    </form><!-- end cols-->
</div>
<?php include_once 'footer.inc.php';?>