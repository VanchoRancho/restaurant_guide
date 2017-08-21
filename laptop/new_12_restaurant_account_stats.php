<?php include_once 'header.inc.php';?>
<div class="identification_page">

    <h1>Личный кабинет</h1>

    <ul class="list_links">
        <li class="dib item"><a href="#">Профиль</a></li>
        <li class="dib item"><a href="#">Меню</a></li>
        <li class="dib item"><a href="#">Новости</a></li>
        <li class="dib item"><a href="#">Сообщения</a></li>
        <li class="dib item"><a href="#">Платные опции</a></li>
        <li class="dib item"><a href="#" class="active">Статистика</a></li>
    </ul>

    <form class="stats_view_param">
      <div class="dib">
          <label class="color_dark" for="stats_view_select">Показать за:</label>
          <select id="stats_view_select" onchange="showRange()">
              <option selected>неделю</option>
              <option>месяц</option>
              <option>год</option>
              <option>интервал</option>
          </select>

          <div class="datepicker_range datepicker_range_hidden">
            <label for="range_start">c:</label>
            <input type="text" class="datepicker datepicker_start" value="22 сентября" id="range_start">
            <label for="range_start">по:</label>
            <input type="text" class="datepicker datepicker_end" value="22 сентября" id="range_end">
          </div>
      </div>
    </form>

    <div class="cols admin_action_list">
        <div class="col-2 dib">

          <div class="stats_table">
              <h4 class="color_dark">Трафик:</h3>
              <div class="row">
                  <div class="cell">Количество показов ресторана</div>
                  <div class="cell color_dark">235</div>
              </div>
              <div class="row">
                  <div class="cell">Количество посещений страницы ресторана</div>
                  <div class="cell color_dark">100</div>
              </div>
              <div class="row">
                  <div class="cell">Переходов на группу (вКонтакте Facebook)</div>
                  <div class="cell color_dark">61</div>
              </div>
              <div class="row">
                  <div class="cell">Переходов на сайт</div>
                  <div class="cell color_dark">23</div>
              </div>
          </div>

          <div class="stats_table_3col">
            <div class="stats_table">
              <h4 class="color_dark">Заказ еды:</h3>
              <div class="stats_table_header">
                  <div class="cell">Дата</div>
                  <div class="cell">Сумма заказа</div>
                  <div class="cell">Комиссия РГ</div>
              </div>
            </div>
            <div class="stats_table_scroll">
              <div class="stats_table">
                <div class="row">
                  <div class="cell">19.02.2017 10:30</div>
                  <div class="cell color_dark">2345</div>
                  <div class="cell color_dark">123</div>
                </div>
                <div class="row">
                  <div class="cell">19.02.2017 10:30</div>
                  <div class="cell color_dark">2345</div>
                  <div class="cell color_dark">123</div>
                </div>
                <div class="row">
                  <div class="cell">19.02.2017 10:30</div>
                  <div class="cell color_dark">2345</div>
                  <div class="cell color_dark">123</div>
                </div>
                <div class="row">
                  <div class="cell">19.02.2017 10:30</div>
                  <div class="cell color_dark">2345</div>
                  <div class="cell color_dark">123</div>
                </div>
                <div class="row">
                  <div class="cell">19.02.2017 10:30</div>
                  <div class="cell color_dark">2345</div>
                  <div class="cell color_dark">123</div>
                </div>
                <div class="row">
                  <div class="cell">19.02.2017 10:30</div>
                  <div class="cell color_dark">2345</div>
                  <div class="cell color_dark">123</div>
                </div>
                <div class="row">
                  <div class="cell">19.02.2017 10:30</div>
                  <div class="cell color_dark">2345</div>
                  <div class="cell color_dark">123</div>
                </div>
                <div class="row">
                  <div class="cell">19.02.2017 10:30</div>
                  <div class="cell color_dark">2345</div>
                  <div class="cell color_dark">123</div>
                </div>
              </div>
            </div>
            <div class="stats_table">
              <div class="stats_table_footer">
                  <div class="cell">Всего: <span class="color_dark">8 заказов</span></div>
                  <div class="cell color_dark">123450</div>
                  <div class="cell color_dark">2345</div>
              </div>
            </div>
          </div>

          <div class="stats_table_3col">
            <div class="stats_table">
              <h4 class="color_dark">Заказ столиков:</h3>
              <div class="stats_table_header">
                  <div class="cell">Дата</div>
                  <div class="cell">Сумма заказа</div>
                  <div class="cell">Комиссия РГ</div>
              </div>
            </div>
            <div class="stats_table_scroll">
              <div class="stats_table">
                <div class="row">
                  <div class="cell">19.02.2017 10:30</div>
                  <div class="cell color_dark">2345</div>
                  <div class="cell color_dark">123</div>
                </div>
                <div class="row">
                  <div class="cell">19.02.2017 10:30</div>
                  <div class="cell color_dark">2345</div>
                  <div class="cell color_dark">123</div>
                </div>
                <div class="row">
                  <div class="cell">19.02.2017 10:30</div>
                  <div class="cell color_dark">2345</div>
                  <div class="cell color_dark">123</div>
                </div>
                <div class="row">
                  <div class="cell">19.02.2017 10:30</div>
                  <div class="cell color_dark">2345</div>
                  <div class="cell color_dark">123</div>
                </div>
                <div class="row">
                  <div class="cell">19.02.2017 10:30</div>
                  <div class="cell color_dark">2345</div>
                  <div class="cell color_dark">123</div>
                </div>
                <div class="row">
                  <div class="cell">19.02.2017 10:30</div>
                  <div class="cell color_dark">2345</div>
                  <div class="cell color_dark">123</div>
                </div>
                <div class="row">
                  <div class="cell">19.02.2017 10:30</div>
                  <div class="cell color_dark">2345</div>
                  <div class="cell color_dark">123</div>
                </div>
                <div class="row">
                  <div class="cell">19.02.2017 10:30</div>
                  <div class="cell color_dark">2345</div>
                  <div class="cell color_dark">123</div>
                </div>
              </div>
            </div>
            <div class="stats_table">
              <div class="stats_table_footer">
                  <div class="cell">Всего: <span class="color_dark">8 заказов</span></div>
                  <div class="cell color_dark">123450</div>
                  <div class="cell color_dark">2345</div>
              </div>
            </div>
          </div>

          <div class="stats_table_3col">
            <div class="stats_table">
              <h4 class="color_dark">Заказ банкетов:</h3>
              <div class="stats_table_header">
                  <div class="cell">Дата</div>
                  <div class="cell">Сумма заказа</div>
                  <div class="cell">Комиссия РГ</div>
              </div>
            </div>
            <div class="stats_table_scroll">
              <div class="stats_table">
                <div class="row">
                  <div class="cell">19.02.2017 10:30</div>
                  <div class="cell color_dark">2345</div>
                  <div class="cell color_dark">123</div>
                </div>
                <div class="row">
                  <div class="cell">19.02.2017 10:30</div>
                  <div class="cell color_dark">2345</div>
                  <div class="cell color_dark">123</div>
                </div>
                <div class="row">
                  <div class="cell">19.02.2017 10:30</div>
                  <div class="cell color_dark">2345</div>
                  <div class="cell color_dark">123</div>
                </div>
                <div class="row">
                  <div class="cell">19.02.2017 10:30</div>
                  <div class="cell color_dark">2345</div>
                  <div class="cell color_dark">123</div>
                </div>
                <div class="row">
                  <div class="cell">19.02.2017 10:30</div>
                  <div class="cell color_dark">2345</div>
                  <div class="cell color_dark">123</div>
                </div>
                <div class="row">
                  <div class="cell">19.02.2017 10:30</div>
                  <div class="cell color_dark">2345</div>
                  <div class="cell color_dark">123</div>
                </div>
                <div class="row">
                  <div class="cell">19.02.2017 10:30</div>
                  <div class="cell color_dark">2345</div>
                  <div class="cell color_dark">123</div>
                </div>
                <div class="row">
                  <div class="cell">19.02.2017 10:30</div>
                  <div class="cell color_dark">2345</div>
                  <div class="cell color_dark">123</div>
                </div>
              </div>
            </div>
            <div class="stats_table">
              <div class="stats_table_footer">
                  <div class="cell">Всего: <span class="color_dark">8 заказов</span></div>
                  <div class="cell color_dark">123450</div>
                  <div class="cell color_dark">2345</div>
              </div>
            </div>
          </div>

          <div class="stats_table">
              <h4 class="color_dark">Обращения:</h3>
              <div class="row">
                  <div class="cell">Количество обращений к ресторану</div>
                  <div class="cell color_dark">235</div>
              </div>
              <div class="row">
                  <div class="cell">Количество отзывов</div>
                  <div class="cell color_dark">100</div>
              </div>
              <div class="row">
                  <div class="cell">Отзывы на вакансии</div>
                  <div class="cell color_dark">61</div>
              </div>
          </div>

        </div>
    </div><!-- end cols-->
</div>

<script>
  $('#stats_view_select').on('selectmenuchange', function() {
    if (this.options[this.selectedIndex].text == "интервал") {
      $('.datepicker_range').removeClass('datepicker_range_hidden');
    } else {
      $('.datepicker_range').addClass('datepicker_range_hidden');
    }
});
</script>
<?php include_once 'footer.inc.php';?>
