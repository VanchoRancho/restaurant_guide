<?php include_once 'header.inc.php';?>


    <aside class="dib pad_r_30">
        <?php include 'filter.inc.php';?>
    </aside>
    <div class="dib row-n">
        <div class="sort_holder">
            <div class="dib view_param">
                <label class="color_dark">Показывать:</label>
                <select id="view_select">
                    <option>списком</option>
                    <option>на карте</option>
                </select>
            </div>

            <div class="dib sort_param">
                <label class="color_dark">Сортировать по:</label>
                <select id="sort_select">
                    <option>количеству отзывов</option>
                    <option>рейтингу</option>
                    <option>алфавиту</option>
                    <option>среднему счету</option>
                </select>
            </div>
        </div><!--end sort_holder-->


        <div class="holder_map_rest">
            <div id="map"></div>
        </div>


        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBh6cX8ux274HRV7JzbfN4cmsL3ouzBuR8&signed_in=true"></script>
        <script type="text/javascript" src="http://severminerals.ru/templates/sevminerals/js/infobox.js"></script>

        <script src="js/map.js" type="text/javascript" charset="utf-8"></script>



        <div class="row_text">
            <h1 class="title_strong">Ресторанный гид</h1>
            <p>Самый быстрый и удобный способ выбрать, в какой ресторан или кафе пойти. Здесь можно найти все о тысячах заведений Москвы, Санкт-Петербурга, а также других крупных городов России.</p>
            <p>Читайте рецензии, пишите свои отзывы или просто отметьте понравившееся место. Чтобы облегчить выбор, администраторы сайта составили и постоянно обновляют списки лучших заведений — теперь вы всегда будете знать, где самые вкусные бургеры и хинкали, куда заскочить перекусить ночью и куда ходят все.</p>
        </div>
    </div>



<?php include_once 'footer.inc.php';?>