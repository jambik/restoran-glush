<?php

use App\Page;
use Illuminate\Database\Seeder;

class PagesTableSeeder extends Seeder
{
    protected $items = [
        [1, 'Главная', '<div class="row">
                    <div class="col-sm-4 text-center">
                        <div class="circle-icon">
                            <img src="/img/icon-menu.png" style="margin-top: 30px;">
                        </div>
                        <div class="title">Меню Ресторана</div>
                        <p>Наше меню включает полный список блюд и напитков для проведения праздников и юбилейных вечеров</p>
                        <p>&nbsp;</p>
                    </div>
                    <div class="col-sm-4 text-center">
                        <div class="circle-icon">
                            <img src="/img/icon-event.png" style="margin-top: 40px;">
                        </div>
                        <div class="title">Мероприятия</div>
                        <p>Наше меню включает полный список блюд и напитков для проведения праздников и юбилейных вечеров</p>
                        <p>&nbsp;</p>
                    </div>
                    <div class="col-sm-4 text-center">
                        <div class="circle-icon">
                            <img src="/img/icon-nature-and-pond.png" style="margin-top: 30px;">
                        </div>
                        <div class="title">Природа и Пруд</div>
                        <p>Наше меню включает полный список блюд и напитков для проведения праздников и юбилейных вечеров</p>
                        <p>&nbsp;</p>
                    </div>
                </div>
                <div class="text-xl text-center">Немного о нас</div>
                <p>&nbsp;</p>
                <div class="row">
                    <div class="col-sm-5">
                        <img src="/img/about-us.jpg" class="img-responsive img-thumbnail">
                    </div>
                    <div class="col-sm-7">
                        <p>Дорогие друзья, приглашаем вас посетить ресторан «Глушь»,который находитсяв 100 км от Москвы по Киевскому шоссе на территории парка Этно мир.</p>
                        <p>Хотите отдохнуть на берегу лесного озера, побаловать себя ароматными блюдами, приготовленными на мангале, свежими овощами, фруктами и легкими коктейлями?</p>
                        <p>Дорогие друзья, приглашаем вас посетить ресторан «Глушь»,который находитсяв 100 км от Москвы по Киевскому шоссе на территории парка Этно мир.</p>
                        <p>Хотите отдохнуть на берегу лесного озера, побаловать себя ароматными блюдами, приготовленными на мангале, свежими овощами, фруктами и легкими коктейлями?</p>
                        <p>А для настоящих романтиков ресторан предлагает ужин на пароме с живой музыкой и кулинарным шоу от нашего Шеф-повара.</p>
                    </div>
                </div>', 'Ресторан глушь', '', '', 0],

        [2, 'Мероприятия', '<h1>Мероприятия</h1><p>Страничка Мероприятия.</p>', 'Мероприятия', '', '', 0],
        [3, 'Свадьбы', '<h1>Свадьбы</h1><p>Страничка Свадьбы.</p>', 'Свадьбы', '', '', 2],
        [4, 'Дни рождения', '<h1>Дни рождения</h1><p>Страничка Дни рождения.</p>', 'Дни рождения', '', '', 2],
        [5, 'Детские праздники', '<h1>Детские праздники</h1><p>Страничка Детские праздники.</p>', 'Детские праздники', '', '', 2],
        [6, 'Корпоративы', '<h1>Корпоративы</h1><p>Страничка Корпоративы.</p>', 'Корпоративы', '', '', 2],
        [7, 'Детям', '<h1>Детям</h1><p>Страничка Детям.</p>', 'Детям', '', '', 0],
        [8, 'Акции', '<h1>Акции</h1><p>Страничка Акции.</p>', 'Акции', '', '', 0],
        [9, 'О нас', '<h1>О нас</h1><p>Страничка О нас.</p>', 'О нас', '', '', 0],
        [10, 'Кто мы', '<h1>Кто мы</h1><p>Страничка Кто мы.</p>', 'Кто мы', '', '', 9],
        [11, 'Наши окрестности', '<h1>Наши окрестности</h1><p>Страничка Наши окрестности.</p>', 'Наши окрестности', '', '', 9],
        [12, 'Мы в Этномире', '<h1>Мы в Этномире</h1><p>Страничка Мы в Этномире.</p>', 'Мы в Этномире', '', '', 9],
        [13, 'Контакты', '<h1>Контакты</h1><p>Страничка Контакты.</p>', 'Контакты', '', '', 9],

    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0, $iMax=count($this->items); $i<$iMax; $i++)
        {
            $row = array_combine(['id', 'name', 'text', 'title', 'keywords', 'description', 'parent_id'], $this->items[$i]);

            Page::create($row);
        }
    }
}
