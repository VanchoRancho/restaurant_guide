<?php include_once 'header.inc.php';?>
<div class="simple_page auth_page">


    <div class="cols">
        <div class="col-2 dib">
            <p class="h1">Вход</p>
            <p>Для входа, пожалуйста, введите почту и пароль, указанные при регистрации на сайте.</p>
            <div class="big_holder_form">
                <form>
                    <input type="text" placeholder="Ваш e-mail">
                    <input type="password" placeholder="Пароль">
                    <input type="submit" value="Войти на сайт" class="dibm"> <a href="#" class="forgot_link dibm color_dark">Забыли пароль?</a>
                </form>
            </div>
            <div class="soc_auth">
                <p class="h1">Вход через соцсети</p>
                <div class="item dibm"><img src="img/share_fb.svg" alt=""></div>
                <div class="item dibm"><img src="img/share_odno.svg" alt=""></div>
                <div class="item dibm"><img src="img/share_vk.svg" alt=""></div>
                <div class="item dibm"><img src="img/share_google.svg" alt=""></div>
            </div>
        </div>
        <div class="col-2 dib">
            <p class="h1">Регистрация</p>
            <p>Если вы впервые на сайте, пожалуйста зарегистрируйтесь, и вы получите доступ к Личному кабинету и его функциям.</p>
            <div class="big_holder_form">
                <form>
                    <input type="text" placeholder="Имя *">
                    <input type="text" placeholder="Фамилия *">
                    <input type="text" placeholder="+7 (---) --- -- -- *">
                    <input type="text" placeholder="Ваш e-mail">
                    <input type="password" placeholder="Пароль *">
                    <input type="password" placeholder="Подтвердите пароль *">
                    <input type="submit" value="Зарегистрироваться">
                </form>
            </div>
            <p class="color_dark">*  —  поля, обязательные для заполнения</p>
        </div>
    </div><!-- end cols-->
</div>
<?php include_once 'footer.inc.php';?>