<?php include_once 'header.inc.php';?>
<div class="identification_page">

    <h1>Личный кабинет</h1>

    <ul class="list_links">
        <li class="dib item"><a href="#" class="active">Профиль</a></li>
        <li class="dib item"><a href="#">Избранные рестораны</a></li>
        <li class="dib item"><a href="#">История заказов</a></li>
        <li class="dib item"><a href="#">Отзывы</a></li>
        <li class="dib item"><a href="#">Сообщения</a></li>
    </ul>

    <div class="text400">
        <p>Вы можете отредактировать личную информацию о себе или сменить пароль.</p>
    </div>
    <br>
    <form class="cols">
        <div class="col-2 dib">

            <div>
                <a href="#" class="toggle_step color_dark" data-event="slidetoggle" data-id="#step1">Личный данные *</a>
                <div class="step" id="step1">
                    <input type="text" value="Владимир *">
                    <input type="text" value="Константиновский *">
                    <input type="text" value="Возраст">
                    <input type="text" value="+7 (921) 322 55 99">
                    <input type="text" value="iwannaeat@gmail.com">
                    <label><input type="checkbox">Получать письма о новинках и спецпредложениях</label>
                    <label><input type="checkbox">Получать SMS о новинках и спецпредложениях</label>
                </div>
            </div>

            <div>
                <a href="#" class="toggle_step color_dark" data-event="slidetoggle" data-id="#step2">Мои соцсети</a>
                <div class="step" id="step2">
                    <input type="text" value="Facebook">
                    <input type="text" value="Vkontakte">
                    <input type="text" value="Instagram">
                </div>
            </div>


            <div>
                <a href="#" class="toggle_step color_dark" data-event="slidetoggle" data-id="#step3">Сменить пароль</a>
                <div class="step" id="step3">
                    <input type="password" placeholder="Новый пароль">
                    <input type="password" placeholder="Подтвердите пароль">
                </div>
            </div>


            <div>
                <a href="#" class="toggle_step color_dark" data-event="slidetoggle" data-id="#step4">Адрес доставки</a>
                <div class="step delivery_address" id="step4">
                    <input type="text" value="Санкт-петербург">
                    <input type="text" value="Улица">
                    <div class="delivery_address">
                        <input type="text" value="Дом, корпус" class="dib">
                        <input type="text" value="Квартира, офис" class="dib">
                    </div>
                    <p>Начните вводить название и выберите нужный вариант из автоматической подсказки</p>
                </div>
            </div>

            <br>
            <input type="submit" value="Сохранить" class="green_btn">
            <br>
            <p class="color_dark">*  —  поля, обязательные для заполнения</p>
        </div>
    </form><!-- end cols-->

</div>
<?php include_once 'footer.inc.php';?>