<?php include_once 'header.inc.php';?>
<div class="order_page">
    <div class="advs">
        <div class="item dib">
            <div class="holder">
                <div class="img_holder">
                    <img src="img/adv_call.svg" alt="">
                </div>
                <p class="title">Консультация<br/>специалиста</p>
            </div>
        </div>
        <div class="item dib">
            <div class="holder">
                <div class="img_holder">
                    <img src="img/adv_free.svg" alt="">
                </div>
                <p class="title">Абсолютно<br/>бесплатно</p>
            </div>
        </div>
        <div class="item dib">
            <div class="holder">
                <div class="img_holder">
                    <img src="img/adv_quantity.svg" alt="">
                </div>
                <p class="title">Более 1200<br/>ресторанов</p>
            </div>
        </div>
        <div class="item dib">
            <div class="holder">
                <div class="img_holder">
                    <img src="img/adv_approach.svg" alt="">
                </div>
                <p class="title">Индивидуальный<br/>подход</p>
            </div>
        </div>
    </div><!-- end advs-->


    <div class="cols">
        <div class="col-2 dib">
            <h1>Заказ банкета</h1>
            <p>Ресторанный гид предлагает удобный и простой способ заказа банкета. Вам всего лишь нужно заполнить форму заявки, располо- женную справа, а наши менеджеры подберут для вас и предложат оптимальные варианты, исходя из ваших параметров, и вышлют их вам на почту или свяжутся иным удобным для вас способом.</p>

            <div class="slider_holder">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide"><img src="img/content/06_order_banket/order_banket_01.jpg" alt=""></div>
                        <div class="swiper-slide"><img src="img/content/06_order_banket/order_banket_01.jpg" alt=""></div>
                        <div class="swiper-slide"><img src="img/content/06_order_banket/order_banket_01.jpg" alt=""></div>
                    </div>
                    <div class="swiper-button-next green-arrow"></div>
                    <div class="swiper-button-prev green-arrow"></div>
                </div>
            </div>

        </div>
        <div class="col-2 dib">
            <div class="big_holder_form">
                <form>
                    <p class="color_dark">Форма заявки</p>
                    <input type="text" placeholder="Имя, Фамилия">
                    <input type="text" placeholder="+7 (---) --- -- --" class="phone">
                    <input type="text" placeholder="Ваш e-mail">
                    <input type="text" placeholder="Количество человек">
                    <input type="text" placeholder="Планируемый бюджет (руб.)">
                    <input type="text" class="datepicker" value="22 сентября">
                    <textarea placeholder="Напишите рестораны, которые вам нравятся"></textarea>
                    <textarea placeholder="Ваш комментарий, пожелание к заявке"></textarea>
                    <input type="submit" value="Отправить заявку">
                </form>
            </div>
        </div>
    </div><!-- end cols-->
</div>
<?php include_once 'footer.inc.php';?>