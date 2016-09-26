<!DOCTYPE html>
<html>

	<head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Ресторанный гид</title>
        
        <link rel="shortcut icon" href="/favicon.ico" />

        <meta name="viewport" content="width=1050, initial-scale=1, maximum-scale=1, user-scalable=1" />
        <link href="css/main.css" media="all" rel="stylesheet" type="text/css" />
        <link href="css/mediaquery.css" media="all" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="js/jquery-ui-1.12.0/jquery-ui.theme.css">
        <link rel="stylesheet" href="js/swiper-master/dist/css/swiper.css">

        <script src="js/jquery-3.1.0.js"></script>
        <script src="js/jquery-ui-1.12.0/jquery-ui.min.js"></script>
        <script src="js/jquery-ui-1.12.0/i18n/datepicker-ru.js"></script>
        <script src="js/modernizr.js"></script>
        <script src="js/alternative-svg.js"></script>
        <script src="js/swiper-master/dist/js/swiper.min.js"></script>
        <script src="js/jquery.columnizer.js" type="text/javascript" charset="utf-8"></script>
        <script src="js/custom.js"></script>



        <!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js" async></script>
        <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js" async></script>
        <![endif]-->
    </head>
<body>
<div class="fog" data-event="hideall" data-id=".open_visible"></div>
<div id="wrapper">
        <header>
                <div class="wrapper">
                <div class="top">
                        <div class="dib col_1">
                        <div class="dib btn_menu hamb" data-menustatus="menu_closed">
                                <div class="ham1"></div>
                                <div class="ham2"></div>
                                <div class="ham3"></div>
                        </div>
                                <a href="/" class="logo dib">
                                        <img src="/laptop/img/logo_full.svg" alt="" class="logo_full">
                                        <img src="/laptop/img/logo_short.svg" alt="" class="logo_short">
                                </a>


                                <div class="search_holder small_form">
                                        <form>
                                                <select class="dib" data-event="change_placeholder" data-id=".search_string">
                                                        <option data-placeholder="Выберите тип поиска">Я ищу</option>
                                                        <option data-placeholder="Введите адрес доставки">По адресу доставки</option>
                                                        <option data-placeholder="Введите название ресторана">Ресторан</option>
                                                        <option data-placeholder="Введите название блюда">Блюдо</option>
                                                </select>
                                                <input type="text" name="search_string" class="search_string color_middle div" placeholder="Выберите тип поиска">
                                                <input type="submit"  class="dib" value="">
                                        </form>
                                </div>




                                <a href="#" class="dib my_city" data-event="show" data-id=".list_city">
                                        <i class="dibm color_middle">Санкт-Петербург</i>
                                        <img src="/laptop/img/map_small.svg"  class="dibm" alt="">
                                </a>
                        </div> <!-- end col_1-->
                        <div class="dib col_2">
                                <a href="#" class="dib add_restaurant">
                                        <img src="/laptop/img/plus_green_small.svg"  class="dibm" alt="">
                                        <i class="dibm color_dark">Добавить ресторан</i>
                                </a>
                                <div class="dib profile_holder">
                                        <a href="#" class="dib" data-event="toggle" data-id=".profile_tab">
                                                <img src="/laptop/img/profile.svg"  class="dibm" alt="">
                                                <i class="dibm color_dark">Владимир</i>
                                        </a>
                                        <ul class="profile_tab">
                                                <li class="item"><a href="#">Профиль</a></li>
                                                <li class="item"><a href="#">Избранные рестораны</a></li>
                                                <li class="item"><a href="#">История заказов</a></li>
                                                <li class="item active"><a href="#">Отзывы</a></li>
                                                <li class="item"><a href="#">Сообщения</a></li>
                                                <li class="item"><a href="#">Выход</a></li>
                                        </ul>
                                </div>
                                <a href="#" class="dib head_cart">
<!--                                        <img src="/laptop/img/basket_gray.svg"  class="dibm" alt="">-->
                                        <img src="/laptop/img/basket_green.svg"  class="dibm" alt="">
                                        <i class="dibm color_dark">1635 р.</i>
                                </a>
                        </div> <!--end col_2-->



                        <div class="list_city">
                                <div class="title">
                                        <p class="color_dark">Выберите ваш город</p>
                                        <a href="#" class="close" data-event="hide" data-id=".list_city"><img src="img/cross.svg" alt=""></a>
                                </div>
                                <div class="list">
                                        <div class="item"><a href="#">Москва и подмосковье</a></div>
                                        <div class="item"><a href="#" class="active">Санкт-Петербург</a></div>
                                        <div class="item"><a href="#">Архангельск</a></div>
                                        <div class="item"><a href="#">Астрахань</a></div>
                                        <div class="item"><a href="#">Барнаул</a></div>
                                        <div class="item"><a href="#">Белгород</a></div>
                                        <div class="item"><a href="#">Брянск</a></div>
                                        <div class="item"><a href="#">Великий Новгород</a></div>
                                        <div class="item"><a href="#">Владивосток</a></div>
                                        <div class="item"><a href="#">Владимир</a></div>
                                        <div class="item"><a href="#">Волгоград</a></div>
                                        <div class="item"><a href="#">Екатеринбург</a></div>
                                        <div class="item"><a href="#">Иваново</a></div>
                                        <div class="item"><a href="#">Ижевск</a></div>
                                        <div class="item"><a href="#">Иркутск</a></div>
                                        <div class="item"><a href="#">Казань</a></div>
                                </div>
                        </div><!-- end list city-->
                </div><!-- end top-->

                <nav id="menu">
                       <ul>
                               <li class="dib"><a href="02_catalog_by_list.php">Рестораны</a></li>
                               <li class="dib"><a href="#">Рейтинг</a></li>
                               <li class="dib"><a href="#">Акции</a></li>
                               <li class="dib"><a href="#">Все для ресторанов</a></li>
                               <li class="dib"><a href="#" class="active">Заказ банкета</a></li>
                               <li class="dib"><a href="#">Заказ столика</a></li>
                               <li class="dib"><a href="#">Новости</a></li>
                               <li class="dib"><a href="#">Вакансии</a></li>
                       </ul>
                </nav>

                <div class="search_holder big_form">
                        <form>
                                <select class="dib" data-event="change_placeholder" data-id=".search_string">
                                        <option data-placeholder="Выберите тип поиска">Я ищу</option>
                                        <option data-placeholder="Введите адрес доставки">По адресу доставки</option>
                                        <option data-placeholder="Введите название ресторана">Ресторан</option>
                                        <option data-placeholder="Введите название блюда">Блюдо</option>
                                </select>
                                <input type="text" name="search_string" class="search_string color_middle div" placeholder="Выберите тип поиска">
                                <input type="submit"  class="dib" value="">
                        </form>
                </div>
                </div><!--end wrapper-->
        </header>

        <div id="holder_content">