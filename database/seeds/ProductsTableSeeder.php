<?php

use App\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    protected $items = [

        [1, 'Каша на выбор', 1, 150, 150, 'Геркулес, манка с маслом и джемом на выбор', 'product-1.jpg'],
        [2, 'Яичница (омлет)', 1, 180, 120, 'с одним ингредиентом на выбор помидор, гренки, болгарский перец, сыр', 'product-2.jpg'],
        [3, 'Оладьи', 1, 150, 150, 'сметана, мёд, варенье, шоколад, сгущенка', 'product-3.jpg'],
        [4, 'Яичница (омлет)', 1, 180, 120, 'с одним ингредиентом на выбор помидор, гренки, болгарский перец, сыр', 'product-4.jpg'],
        [5, 'Суп «Кур-Вар»', 2, 300, 280, 'с одним ингредиентом на выбор помидор, гренки, болгарский перец, сыр', 'product-5.jpg'],
        [6, '«Кораловый риф»', 5, 200, 160, 'с одним ингредиентом на выбор помидор, гренки, болгарский перец, сыр', 'product-6.jpg'],
        [7, 'Салат «Адвокат»', 5, 150, 150, 'с одним ингредиентом на выбор помидор, гренки, болгарский перец, сыр', 'product-7.jpg'],
        [8, 'Штрудель', 6, 150, 150, 'с одним ингредиентом на выбор помидор, гренки, болгарский перец, сыр', 'product-8.jpg'],
        [9, '«Форелька»', 3, 150, 150, 'с одним ингредиентом на выбор помидор, гренки, болгарский перец, сыр', 'product-9.jpg'],

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
            $row = array_combine(['id', 'name', 'category_id', 'price', 'weight', 'brief', 'image'], $this->items[$i]);

            Product::create($row);
        }
    }
}
