<?php include_once 'header.inc.php';?>
<div class="identification_page">

    <h1>Личный кабинет</h1>


    <ul class="list_links">
        <li class="dib item"><a href="#">Профиль</a></li>
        <li class="dib item"><a href="#">Избранные рестораны</a></li>
        <li class="dib item"><a href="#" class="active">История заказов</a></li>
        <li class="dib item"><a href="#">Отзывы</a></li>
        <li class="dib item"><a href="#">Сообщения</a></li>
    </ul>

    <div class="tabs profile_tabs">
        <ul class="dib">
            <li class="dib"><a href="#">Заказ еды</a></li>
            <li class="dib active"><a href="#">Заказ столика</a></li>
            <li class="dib"><a href="#">Заказ банкета</a></li>
        </ul>
    </div>
    <div class="cols">
        <div class="col-2">
            <div class="history_list">
                <div class="item">
                    <a href="#" class="toggle_step color_dark" data-event="slidetoggle" data-id="#step1"><i class="color_dark date dib">10.08.2016</i><i class="name dib">Хива. Мир плова и шашлыка</i></a>
                    <div class="step desc" id="step1">
                        <div class="text400">
                            <p>3 человека, 20:00 ч</p>
                            <p>Санкт-Петербург, Серебристый бульвар, 29</p>
                            <p>Комментарий: желательно в глубине зала</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <a href="#" class="toggle_step color_dark" data-event="slidetoggle" data-id="#step2"><i class="color_dark date dib">02.08.2016</i><i class="name dib">Ресторан Бричмула</i></a>
                    <div class="step desc" id="step2">
                        <div class="text400">
                            <p>3 человека, 20:00 ч</p>
                            <p>Санкт-Петербург, Серебристый бульвар, 29</p>
                            <p>Комментарий: желательно в глубине зала</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <a href="#" class="toggle_step color_dark" data-event="slidetoggle" data-id="#step3"><i class="color_dark date dib">24.07.2016</i><i class="name dib">Мобильные палки</i></a>
                    <div class="step desc" id="step3">
                        <div class="text400">
                            <p>3 человека, 20:00 ч</p>
                            <p>Санкт-Петербург, Серебристый бульвар, 29</p>
                            <p>Комментарий: желательно в глубине зала</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include_once 'footer.inc.php';?>