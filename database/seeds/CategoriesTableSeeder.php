<?php

use App\Category;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    protected $items = [
        [1, 'Завтраки', null, 'Завтраки', 'Завтраки', 'Завтраки', '<p>Страница Завтраки.</p>', 'category-1.jpg'],
        [2, 'Первые блюда', null, 'Первые блюда', 'Первые блюда', 'Первые блюда', '<p>Страница Первые блюда.</p>', 'category-2.jpg'],
        [3, 'Блюда на гриле', null, 'Блюда на гриле', 'Блюда на гриле', 'Блюда на гриле', '<p>Страница Блюда на гриле.</p>', 'category-3.jpg'],
        [4, 'Гарниры и соусы', null, 'Гарниры и соусы', 'Гарниры и соусы', 'Гарниры и соусы', '<p>Страница Гарниры и соусы.</p>', 'category-4.jpg'],
        [5, 'Салаты', null, 'Салаты', 'Салаты', 'Салаты', '<p>Страница Салаты.</p>', 'category-5.jpg'],
        [6, 'Десерты', null, 'Десерты', 'Десерты', 'Десерты', '<p>Страница Десерты.</p>', 'category-6.jpg'],
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
            $row = array_combine(['id', 'name', 'parent_id', 'title', 'keywords', 'description', 'about', 'image'], $this->items[$i]);

            Category::create($row);
        }
    }
}
