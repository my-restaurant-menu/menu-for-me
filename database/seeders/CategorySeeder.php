<?php

namespace Database\Seeders;

use App\Enums\CategoryEnum;
use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $categoryTypes = [
            [
                'id' => CategoryEnum::HOT_DRINKS->value,
                'name' => json_encode([
                    'en' => 'Hot Drinks',
                    'ka' => 'ცხელი სასმელები',
                    'ru' => 'Горячие напитки'
                ])
            ],
            [
                'id' => CategoryEnum::COLD_DRINKS->value,
                'name' => json_encode([
                    'en' => 'Cold Drinks',
                    'ka' => 'ცივი სასმელები',
                    'ru' => 'Холодные напитки',
                ])
            ],
            [
                'id' => CategoryEnum::ALCOHOLIC_DRINKS->value,
                'name' => json_encode([
                    'en' => 'Alcoholic Drinks',
                    'ka' => 'ალკოჰოლური სასმელები',
                    'ru' => 'Алкогольные напитки',
                ])
            ],
            [
                'id' => CategoryEnum::HOT_BREAKFAST->value,
                'name' => json_encode([
                    'en' => 'Hot Breakfast',
                    'ka' => 'ცხელი საუზმე',
                    'ru' => 'Горячий завтрак'
                ])
            ],
            [
                'id' => CategoryEnum::FISH->value,
                'name' => json_encode([
                    'en' => 'Fish',
                    'ka' => 'თევზი',
                    'ru' => 'Рыба'
                ])
            ],
            [
                'id' => CategoryEnum::GARNISH->value,
                'name' => json_encode([
                    'en' => 'Garnish',
                    'ka' => 'გარნირი',
                    'ru' => 'Гарнир'
                ])
            ],
            [
                'id' => CategoryEnum::BAKED->value,
                'name' => json_encode([
                    'en' => 'Baked',
                    'ka' => 'ცომეული',
                    'ru' => 'Запеченный'
                ])
            ],

            [
                'id' => CategoryEnum::SAUCES->value,
                'name' => json_encode([
                    'en' => 'Sauces',
                    'ka' => 'სოუსები',
                    'ru' => 'Соусы'
                ])
            ],
            [
                'id' => CategoryEnum::SOUP->value,
                'name' => json_encode([
                    'en' => 'Soup',
                    'ka' => 'წვნიანი',
                    'ru' => 'Суп'
                ])
            ],
            [
                'id' => CategoryEnum::HOT_DISHES_WITH_GARNISH->value,
                'name' => json_encode([
                    'en' => 'Hot Dishes with garnish',
                    'ka' => 'ცხელი კერძები გარნირით',
                    'ru' => 'Горячие блюда с гарниром'
                ])
            ],
            [
                'id' => CategoryEnum::SALADS->value,
                'name' => json_encode([
                    'en' => 'Salads',
                    'ka' => 'სალათები',
                    'ru' => 'Салаты'
                ])
            ],
        ];

        foreach ($categoryTypes as $one) {
            Category::updateOrCreate(['id' => $one['id']], $one);
        }
    }
}
