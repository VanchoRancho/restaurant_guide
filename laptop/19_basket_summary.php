<?php include_once 'header.inc.php';?>

<div class="basket_page">
    <h1>Корзина</h1>
    <p class="title_step"><i class="color_dark dib">Ваш заказ</i><a href="#" class="dib">Изменить</a></p>

    <div class="order_list">

        <div class="item">
            <div class="name dib"><p>Спайси Самба 1040 г 35 см с сыром <br>и ветчиной (традиционное тесто)</p></div>
            <div class="price dib"><p>750 руб. х 2</p></div>
            <div class="subtotal dib"><p class="color_dark">1500 руб.</p></div>
        </div>


        <div class="item">
            <div class="name dib"><p>Альфредо 730 г 35 см (тонкое тесто)</p></div>
            <div class="price dib"><p>650 руб.</p></div>
            <div class="subtotal dib"><p class="color_dark">650 руб.</p></div>
        </div>


        <div class="item">
            <div class="name dib"><p>Примавера Флорентина 730 г 35 см (тонкое тесто)</p></div>
            <div class="price dib"><p>800 руб.</p></div>
            <div class="subtotal dib"><p class="color_dark">800 руб.</p></div>
        </div>


        <div class="item">
            <div class="name dib"><p>Примавера Флорентина 980 г 35 см (традиционное тесто)</p></div>
            <div class="price dib"><p>800 руб.</p></div>
            <div class="subtotal dib"><p class="color_dark">800 руб.</p></div>
        </div>

    </div><!--end order_list-->


    <p class="title_step"><i class="color_dark dib">Доставка</i><a href="#" class="dib">Изменить</a></p>
    <div class="result_delivery">
        <p>Владимир Долгопрудный</p>
        <p>+7 921 106-88-80</p>
        <p>Санкт-Петербург, наб. Канала Грибоедова, д. 64, кв. 54, 2 этаж</p>
        <p>Доставка: 30 августа, 08.00 - 10.00 ч</p>
        <p>Комментарий: добавьте, пожалуйста, побольше салфеток.</p>
    </div>

    <form class="discount_form">
        <input type="text" placeholder="Введите промокод" class="dib"><input type="submit" value="OK" class="dib">
    </form>

    <p class="title_subtotal"><i class="color_middle dib">Стоимость заказа</i><span class="color_dark">3750 руб.</span></p>
    <p class="title_subtotal"><i class="color_middle dib">Стоимость доставки</i><span class="color_dark">500 руб.</span></p>
    <p class="title_subtotal"><i class="color_middle dib">Скидка по промокоду</i><span class="color_dark">200 руб.</span></p>
    <p class="title_subtotal"><i class="color_middle dib">Вам будет начислено (бонусных баллов)</i><span class="color_dark">250 баллов</span></p>
    <p class="title_subtotal"><i class="color_dark dib">Итого</i><span class="color_dark">4050 руб.</span></p>
    <br>
    <a href="#" class="green_btn">Оформить заказ</a>
</div>

<?php include_once 'footer.inc.php';?>