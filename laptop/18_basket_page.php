<?php include_once 'header.inc.php';?>

<div class="basket_page">
    <h1>Корзина</h1>
    <a href="#" class="toggle_step color_dark active" data-event="slidetoggle" data-id="#step1">Ваш заказ</a>
    <div class="step open" id="step1">
        <div class="basket_list">
            <div class="item">
                <div class="name dib"><p>Спайси Самба 1040 г 35 см с сыром и ветчиной (традиционное тесто)</p></div>
                <div class="amount dib">
                    <form>
                        <span class="minus dib">-</span>
                        <input type="text" class="input_count dib" value="2">
                        <span class="plus dib">+</span>
                    </form>
                </div>
                <div class="price dib"><p>750 руб.</p></div>
                <div class="subtotal dib"><p class="color_dark">1500 руб.</p></div>
                <div class="delete dib"><a href="#"><img src="img/cross.svg" alt=""></a></div>
            </div>



            <div class="item">
                <div class="name dib"><p>Альфредо 730 г 35 см (тонкое тесто)</p></div>
                <div class="amount dib">
                    <form>
                        <span class="minus dib">-</span>
                        <input type="text" class="input_count dib" value="1">
                        <span class="plus dib">+</span>
                    </form>
                </div>
                <div class="price dib"><p>650 руб.</p></div>
                <div class="subtotal dib"><p class="color_dark">650 руб.</p></div>
                <div class="delete dib"><a href="#"><img src="img/cross.svg" alt=""></a></div>
            </div>



            <div class="item">
                <div class="name dib"><p>Примавера Флорентина 730 г 35 см (тонкое тесто)</p></div>
                <div class="amount dib">
                    <form>
                        <span class="minus dib">-</span>
                        <input type="text" class="input_count dib" value="1">
                        <span class="plus dib">+</span>
                    </form>
                </div>
                <div class="price dib"><p>800 руб.</p></div>
                <div class="subtotal dib"><p class="color_dark">800 руб.</p></div>
                <div class="delete dib"><a href="#"><img src="img/cross.svg" alt=""></a></div>
            </div>



            <div class="item">
                <div class="name dib"><p>Примавера Флорентина 980 г 35 см (традиционное тесто)</p></div>
                <div class="amount dib">
                    <form>
                        <span class="minus dib">-</span>
                        <input type="text" class="input_count dib" value="2">
                        <span class="plus dib">+</span>
                    </form>
                </div>
                <div class="price dib"><p>800 руб.</p></div>
                <div class="subtotal dib"><p class="color_dark">800 руб.</p></div>
                <div class="delete dib"><a href="#"><img src="img/cross.svg" alt=""></a></div>
            </div>

            <div class="total">
                <i class="total_title dib">Стоимость заказа</i><i class="total_value dib color_dark">3750 руб.</i>
            </div>
        </div>


        <a href="#" class="dib btn_step" data-event="slidedown" data-id="#step2">Продолжить</a>
    </div><!--end step-->
    <a href="#" class="toggle_step color_dark" data-event="slidetoggle" data-id="#step2">Доставка</a>
    <div class="step" id="step2">
        <form class="delivery_form">
            <input class="dib" placeholder="Имя, Фамилия*">
            <input class="dib" placeholder="+7 (---) --- -- -- *" class="phone">
            <input class="" placeholder="Санкт-Петербург, наб. Канала Грибоедова, д. 64">
            <input class="dib" placeholder="Подъезд">
            <input class="dib" placeholder="Квартира / офис *">
            <input class="dib" placeholder="Этаж">
            <input class="dib" placeholder="Домофон">
            <input type="text" class="dib datepicker" placeholder="доставить 30 сентября *">
            <input type="text" class="dib" placeholder="08.00 - 10.00 *">
            <textarea placeholder="Комментарий к заказу или уточнение по доставке"></textarea>
            <div class="total">
                <i class="total_title dib">Стоимость доставки</i><i class="total_value dib color_dark">500 руб.</i>
            </div>
            <input type="submit" value="Продолжить">
        </form>
    </div><!--end step-->
</div>

<?php include_once 'footer.inc.php';?>