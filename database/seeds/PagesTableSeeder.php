<?php

use App\Page;
use Illuminate\Database\Seeder;

class PagesTableSeeder extends Seeder
{
    protected $items = [
        ['Главная', '<div class="container">
                <div class="row">
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
                </div>
            </div>', 'Ресторан глушь', 'Ресторан, глушь', 'Ресторан глушь'],
        ['О компании', '<h1>О компании</h1><p>Страничка о компании.</p>', 'О компании', 'о, компании', 'Страница которая о компании'],
        ['Контакты', '<h1>Контакты</h1><p>Телефоны:</p><p>Email:</p><p>Факс:</p><p>Адрес: г. Москва, ул. Ленина 1</p>', 'Наши контакты', 'контакты', 'страница с контактами'],
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
            $row = array_combine(['name', 'text', 'title', 'keywords', 'description'], $this->items[$i]);

            Page::create($row);
        }
    }
}
