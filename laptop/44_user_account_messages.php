<?php include_once 'header.inc.php';?>
<div class="identification_page">

    <h1>Личный кабинет</h1>


    <ul class="list_links">
        <li class="dib item"><a href="#">Профиль</a></li>
        <li class="dib item"><a href="#">Избранные рестораны</a></li>
        <li class="dib item"><a href="#">История заказов</a></li>
        <li class="dib item"><a href="#">Отзывы</a></li>
        <li class="dib item"><a href="#" class="active">Сообщения</a></li>
    </ul>

    <div class="cols">
        <div class="col-2 dib">
            <div class="dialogs">
                <div class="item active">
                    <p class="color_dark name">Якитория <i class="color_middle">сегодня в 7:44</i></p>
                    <p>Спасибо большое за ответ. Очень рад был узнать детали вашей работы. В будущем буду выбирать вас.</p>
                </div>
                <div class="item">
                    <p class="color_dark name">Yoshida <i class="color_middle">сегодня в 6:32</i></p>
                    <p>Герман, наш ресторан с радостью поможет вам провести вашу свадьбу. Свяжитесь с нашим менеджером по тел. ...</p>
                </div>
                <div class="item">
                    <p class="color_dark name">Две Палочки <i class="color_middle">сегодня в 22:28</i></p>
                    <p>Александр, официальной автограф-сессии не объявлено, но у вас всегда есть все шансы.</p>
                </div>
                <div class="item">
                    <p class="color_dark name">Ollis Pizza <i class="color_middle">сегодня в 22:28</i></p>
                    <p>Спасибо за ответ. В следующий раз буду иметь ввиду.</p>
                </div>
            </div>
        </div>
        <div class="col-2 dib">
            <div class="dialog">
                <div class="item">
                    <p class="color_dark name">Владимир <i class="color_middle">вчера в 7:44</i></p>
                    <p>Вы прислали нам много лишнего в заказе. Нужно ли за это доплачивать?</p>
                </div>
                <div class="item">
                    <p class="color_dark name">Якитория <i class="color_middle">вчера в 10:32</i></p>
                    <p>Нет, для постоянных покупателей мы стараемся делать небольшые бонусы, поэтому всё это бесплатно.</p>
                </div>
                <div class="item">
                    <p class="color_dark name">Владимир <i class="color_middle">сегодня в 10:52</i></p>
                    <p>Спасибо большое за ответ. Очень рад был узнать детали вашей работы. В будущем буду выбирать вас.</p>
                </div>
            </div>
            <form class="dialog_form">
                <p class="user_name"><img src="img/profile.svg" class="dibm"><i class="dibm color_dark">Владимир</i></p>
                <textarea placeholder="Ваш ответ"></textarea>
                <input type="submit" value="Ответить" class="green_btn">
            </form>
        </div>
    </div><!-- end cols-->


</div>
<?php include_once 'footer.inc.php';?>