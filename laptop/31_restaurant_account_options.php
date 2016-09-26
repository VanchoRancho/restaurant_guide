<?php include_once 'header.inc.php';?>
<div class="identification_page">

    <h1>Личный кабинет</h1>

    <ul class="list_links">
        <li class="dib item"><a href="#">Профиль</a></li>
        <li class="dib item"><a href="#">Меню</a></li>
        <li class="dib item"><a href="#">Новости</a></li>
        <li class="dib item"><a href="#">Сообщения</a></li>
        <li class="dib item"><a href="#" class="active">Платные опции</a></li>
        <li class="dib item"><a href="#">Статистика</a></li>
    </ul>
    <div class="tabs profile_tabs">
        <ul class="dib">
            <li class="dib active"><a href="#">Профиль</a></li>
            <li class="dib"><a href="#">Заказ столика</a></li>
            <li class="dib"><a href="#">Заказ банкета</a></li>
            <li class="dib"><a href="#">Заказ еды</a></li>
            <li class="dib"><a href="#">Реклама</a></li>
        </ul>
    </div>

    <form class="cols config_profile">
        <div class="item item_title">
            <div class="col-3 dib"></div>
            <div class="col-3 dib"></div>
            <div class="col-3 dib">
                <div class="line">
                    <span class="dib discount param"></span>
                    <span class="dib discount param"><i class="dib">-10%</i></span>
                    <span class="dib discount param"><i class="dib">-20%</i></span>
                </div>
            </div>
        </div>



        <div class="item item_sub_title">
            <div class="col-3 dib">
                <p>Описание</p>
            </div>
            <div class="col-3 dib">
                <p>Что это дает</p>
            </div>
            <div class="col-3 dib">
                <div class="line">
                    <span class="dib param">1 мес.</span>
                    <span class="dib param">6 мес.</span>
                    <span class="dib param">12 мес.</span>
                </div>
            </div>
        </div>




        <div class="item">
            <div class="col-3 dib">
                <p class="color_dark">Доступ к редактированию страницы для администратора ресторана</p>
            </div>
            <div class="col-3 dib">
                <p>Мы хотели бы, чтобы все рестораны следили за своими страницами и поэтому мы предоставляем бесплатный доступ для того, чтобы информация была актуальная</p>
            </div>
            <div class="col-3 dib">
                <div class="line">
                    <span class="dib param">Беспл.</span>
                    <span class="dib param">Беспл.</span>
                    <span class="dib param">Беспл.</span>
                </div>
            </div>
        </div>



        <div class="item">
            <div class="col-3 dib">
                <p class="color_dark">Создание 1 галереи</p>
            </div>
            <div class="col-3 dib">
                <p>Бесплатное размещение до 10 фотографий в 1 галерее</p>
            </div>
            <div class="col-3 dib">
                <div class="line">
                    <span class="dib param">Беспл.</span>
                    <span class="dib param">Беспл.</span>
                    <span class="dib param">Беспл.</span>
                </div>
            </div>
        </div>




        <div class="item">
            <div class="col-3 dib">
                <p class="color_dark">Неограниченное количество галерей и фотографий</p>
            </div>
            <div class="col-3 dib">
                <p>Вы можете создавать до 10 галерей у каждого объекта, у каждой галереи может быть не больше 20 фотографий</p>
            </div>
            <div class="col-3 dib">
                <div class="line">
                    <span class="dib param"><i class="color_dark value">50р.</i><label><input type="radio" name="price1"></label></span>
                    <span class="dib param"><i class="color_dark value">270р.</i><label><input type="radio" name="price1"></label></span>
                    <span class="dib param"><i class="color_dark value">480р.</i><label><input type="radio" name="price1"></label></span>
                </div>
            </div>
        </div>






        <div class="item">
            <div class="col-3 dib">
                <p class="color_dark">Подключение персонального менеджера ресторана</p>
            </div>
            <div class="col-3 dib">
                <p>Обработка всей почты, заявок на изменение информации, размещение новостей</p>
            </div>
            <div class="col-3 dib">
                <div class="line">
                    <span class="dib param"><i class="color_dark value">100р.</i><label><input type="radio" name="price2"></label></span>
                    <span class="dib param"><i class="color_dark value">5400р.</i><label><input type="radio" name="price2"></label></span>
                    <span class="dib param"><i class="color_dark value">9600р.</i><label><input type="radio" name="price2"></label></span>
                </div>
            </div>
        </div>




        <div class="item">
            <div class="col-3 dib">
                <p class="color_dark">Адрес ресторана вида:<br> www.ресторанныйгид.рф/ваш-ресторан</p>
            </div>
            <div class="col-3 dib">
                <p>данный адрес позволяет пользователям быстро перейти к вашему ресторану зная лишь название, а также позволяет выгодно выделить его в процессе поиска ресторана через поисковые системы (яндекс, гугл)</p>
            </div>
            <div class="col-3 dib">
                <div class="line">
                    <span class="dib param"><i class="color_dark value">10р.</i><label><input type="radio" name="price3"></label></span>
                    <span class="dib param"><i class="color_dark value">54р.</i><label><input type="radio" name="price3"></label></span>
                    <span class="dib param"><i class="color_dark value">96р.</i><label><input type="radio" name="price3"></label></span>
                </div>
            </div>
        </div>




        <div class="item">
            <div class="col-3 dib">
                <p class="color_dark">Вывод ресторана в топ 5 в каждой категории</p>
            </div>
            <div class="col-3 dib">
                <p>Вас будут видеть большоее количество пользователей, и вы получаете больше заказов</p>
            </div>
            <div class="col-3 dib">
                <div class="line">
                    <span class="dib param"><i class="color_dark value">300р.</i><label><input type="radio" name="price4"></label></span>
                    <span class="dib param"><i class="color_dark value">1620р.</i><label><input type="radio" name="price4"></label></span>
                    <span class="dib param"><i class="color_dark value">2880р.</i><label><input type="radio" name="price4"></label></span>
                </div>
            </div>
        </div>




        <div class="item">
            <div class="col-3 dib">
                <p class="color_dark">Активная ссылка на сайт и на группы</p>
            </div>
            <div class="col-3 dib">
                <p>Сайт и группы отображаются в виде ссылок на странице ресторана</p>
            </div>
            <div class="col-3 dib">
                <div class="line">
                    <span class="dib param"><i class="color_dark value">10р.</i><label><input type="radio" name="price5"></label></span>
                    <span class="dib param"><i class="color_dark value">54р.</i><label><input type="radio" name="price5"></label></span>
                    <span class="dib param"><i class="color_dark value">96р.</i><label><input type="radio" name="price5"></label></span>
                </div>
            </div>
        </div>




        <div class="item">
            <div class="col-3 dib">
                <p class="color_dark">Задать вопрос ресторатору</p>
            </div>
            <div class="col-3 dib">
                <p>Подключение функции «Задать вопрос ресторатору» с возможностью ответить. Уведомление о запросе высылается на почту</p>
            </div>
            <div class="col-3 dib">
                <div class="line">
                    <span class="dib param"><i class="color_dark value">300р.</i><label><input type="radio" name="price6"></label></span>
                    <span class="dib param"><i class="color_dark value">1620р.</i><label><input type="radio" name="price6"></label></span>
                    <span class="dib param"><i class="color_dark value">2880р.</i><label><input type="radio" name="price6"></label></span>
                </div>
            </div>
        </div>





        <div class="item">
            <div class="col-3 dib"></div>
            <div class="col-3 dib"></div>
            <div class="col-3 dib">
                <div class="line">
                    <input type="submit" value="Подключить опции" class="green_btn">
                </div>
            </div>
        </div>



    </form>


</div>
<?php include_once 'footer.inc.php';?>