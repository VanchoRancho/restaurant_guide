<?php include_once 'header.inc.php';?>

    <div class="tabs articles_category">
        <ul class="dib">
            <li class="dib"><a href="06_restaurant_page_about.php">Новости</a></li>
            <li class="dib active"><a href="04_restaurant_page_menu.php">Афиша</a></li>
            <li class="dib"><a href="07_restaurant_page_feedback.php">Статьи</a></li>
        </ul>
    </div>

    <a href="#" class="random_date dib">Любая дата</a>
    <form class="calendar dib">
        <label class="color_dark"><input type="radio" name="date_article">22 <i class="color_middle">пн</i></label>
        <label class="color_dark"><input type="radio" name="date_article">23 <i class="color_middle">вт</i></label>
        <label class="color_dark"><input type="radio" name="date_article">24 <i class="color_middle">ср</i></label>
        <label class="color_dark"><input type="radio" name="date_article">25 <i class="color_middle">чт</i></label>
        <label class="color_dark"><input type="radio" name="date_article">26 <i class="color_middle">пт</i></label>
        <label class="color_dark"><input type="radio" name="date_article">27 <i class="color_green">сб</i></label>
        <label class="color_dark"><input type="radio" name="date_article">28 <i class="color_green">вс</i></label>
        <input type="text" class="datepicker" placeholder="Выбрать дату" id="calendar">
    </form>


    <div class="cols list_articles">
        <div class="col-2 dib item">
            <a href="#" class="img_holder">
                <img src="img/content/09_blog_afisha/afisha_cover_01.jpg" alt="">
            </a>
            <div class="params">
                <span class="rubric">Афиша</span>
                <div class="param">
                    <span class="views dibm">2060</span>
                    <span class="comments dibm">56</span>
                </div>
            </div>
            <a href="#" class="h1">Выступление Bob Sinclar</a>
            <p>Боб Синклер — французский продюсер, диджей, создатель и владелец лейбла Yellow Production. Имя Боб Синклер является псевдонимом ...</p>
            <p><i class="color_dark">25 августа</i> 20:10 ч</p>
            <p class="color_dark">Горнолыжный комплекс «Золотая Долина»</p>
        </div>


        <div class="col-2 dib item">
            <a href="#" class="img_holder">
                <img src="img/content/09_blog_afisha/afisha_cover_02.jpg" alt="">
            </a>
            <div class="params">
                <span class="rubric">Афиша</span>
                <div class="param">
                    <span class="views dibm">2060</span>
                    <span class="comments dibm">56</span>
                </div>
            </div>
            <a href="#" class="h1">Концерт Mgzavrebi</a>
            <p>Команда Mgzavrebi привнесёт в программу Roof Music Fest изрядную долю грузинского колорита и наполнит небо Петербурга волшебными напевами своей родины ...</p>
            <p><i class="color_dark">24 августа </i>22:00 ч</p>
            <p class="color_dark">Ресторан «Пьяная гавань»</p>
        </div>


        <div class="col-2 dib item">
            <a href="#" class="img_holder">
                <img src="img/content/09_blog_afisha/afisha_cover_03.jpg" alt="">
            </a>
            <div class="params">
                <span class="rubric">Афиша</span>
                <div class="param">
                    <span class="views dibm">2060</span>
                    <span class="comments dibm">56</span>
                </div>
            </div>
            <a href="#" class="h1">Roof Music Fest 2016</a>
            <p>Ежегодный фестиваль Roof Music Fest вновь соберёт ценителей нетривиальной музыки и городской романтики на крыше ресторана «On My Roof» ...</p>
            <p><i class="color_dark">25 августа</i> 20:10 ч</p>
            <p class="color_dark">Ресторан «On My Roof»</p>
        </div>




        <div class="col-2 dib item">
            <a href="#" class="img_holder">
                <img src="img/content/09_blog_afisha/afisha_cover_04.jpg" alt="">
            </a>
            <div class="params">
                <span class="rubric">Афиша</span>
                <div class="param">
                    <span class="views dibm">2060</span>
                    <span class="comments dibm">56</span>
                </div>
            </div>
            <a href="#" class="h1">Том Харди на открытии нового ресторана сети<br>Universal Pictures</a>
            <p>Номинант на премию «Оскар» за драму «Выживший» Том Харди сыграет легендарного британского фотографа Дона МакКаллина ...</p>
            <p><i class="color_dark">25 августа</i> 20:10 ч</p>
            <p class="color_dark">Ресторан «Bestseller»</p>
        </div>
    </div>


    <form class="pagination">
        <a href="#" class="prev dib">пред.</a>
        <input type="text" class="current_page dib" value="23">
        <span class="all_page div">из 60</span>
        <a href="#" class="next dib">след.</a>
    </form>



<?php include_once 'footer.inc.php';?>