<?php include_once 'header.inc.php';?>

    <div class="contacts">

    <h1 class="rating_title">Контакты</h1>

    <p>Вы можете связаться по любым интересующим вас вопросам через форму обратной связи, расположенную ниже. Мы с радостью рассмотрим ваши предложения и ответим на вопросы!</p>

    <form id="feedback_form">
        <select id="feedback_select">
            <option value="" disabled selected>Выберите тему обращения</option>
            <option value="advertisement">реклама на сайте</option>
            <option value="new_restaurant">добавление в базу нового заведения</option>
            <option value="site_bugs">ошибки и не точности на сайте</option>
            <option value="else">другое</option>
        </select>
        <input id="name" type="text" placeholder="Имя, Фамилия *">
        <input id="phone" type="text" placeholder="+7 (---) --- -- -- *" class="phone">
        <input id="email" type="text" placeholder="Ваш e-mail *">
        <textarea id="text" placeholder="Текст *" rows="3"></textarea>
        <div class="holder_for_file">
                <label class="label_file color_dark dib" for="file"><img src="img/plus_yellow_big.svg" class="dibm" alt="">Приложить файл</label>
                <input type="file" id="file">
        </div>

        <p class="color_dark">*  —  поля, обязательные для заполнения</p>
        <p> ООО «Сервис Гид» <br>
            194214, СПб, пр.Тореза, д. 95-177 <br>
            ИНН 7802786173 КПП 780201001
        </p>
        <p>Электронная почта: <a href="mailto:info@restsguide.ru">info@restsguide.ru</a></p>
    </form>
    </div>


<?php include_once 'footer.inc.php';?>
