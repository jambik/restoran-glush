<?php

use App\Page;
use Illuminate\Database\Seeder;

class PagesTableSeeder extends Seeder
{
    protected $items = [
        ['Главная', '<h1>Laravel CMS</h1><p>Текст на главной странице</p>', 'Главная', 'главная', 'Страница которая главная'],
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
