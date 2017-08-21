<?php include_once 'header.inc.php';?>
<div class="vacancy_article">

    <div class="back_to_parent"><a href="#" class="color_dark"><img src="img/arrow_gray_left.svg" alt="" class="dibm">Обратно в Вакансии</a></div>

    <div class="cols">
        <div class="col-2 dib">
          <div class="vacancy_header">
            <h2 class="vacancy_name">Ночной повар-универсал</h2>
            <span class="vacancy_date">20.09.2016</span>
          </div>
          <p class="salary">32 000 - 42 000 руб.</p>
          <p class="rest_name color_dark">Ресторан "Мачеллис"</p>
          <p class="rest_address">Санкт-Петербург, Гороховая улица, 34</p>

          <h4 class="color_dark">Должностные обязаности:</h4>
          <ul>
            <li>Опыт работы</li>
            <li>Опыт работы</li>
          </ul>

          <h4 class="color_dark">Требования:</h4>
          <ul>
            <li>Опыт работы</li>
            <li>Опыт работы</li>
            <li>Опыт работы</li>
            <li>Опыт работы</li>
            <li>Опыт работы</li>
          </ul>

          <h4 class="color_dark">Условия:</h4>
          <ul>
            <li>Опыт работы</li>
            <li>Опыт работы</li>
            <li>Опыт работы</li>
            <li>Опыт работы</li>
            <li>Опыт работы</li>
          </ul>

        </div>
        <div class="col-2 dib">
            <form id="vacancy_form">
                <p class="color_dark form_title">Откликнуться на вакансию</p>
                <input id="name" type="text" placeholder="Имя, Фамилия *">
                <input id="phone" type="text" placeholder="+7 (---) --- -- -- *" class="phone">
                <input id="email" type="text" placeholder="Ваш e-mail *">
                <textarea id="text" placeholder="Ваш комментарий" rows="3"></textarea>
                <div class="holder_for_file">
                        <label class="label_file color_dark dib" for="file"><img src="img/plus_yellow_big.svg" class="dibm" alt="">Прикрепить резюме</label>
                        <input type="file" id="file">
                </div>

                <p class="color_dark">*  —  поля, обязательные для заполнения</p>

                <input type="submit" value="Отправить заявку" class="green_btn">

            </form>
        </div>
    </div><!-- end cols-->
</div>
<?php include_once 'footer.inc.php';?>
