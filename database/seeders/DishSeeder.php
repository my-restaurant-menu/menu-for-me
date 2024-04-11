<?php

namespace Database\Seeders;

use App\Enums\CategoryEnum;
use App\Models\Dish;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DishSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dishes = [
            // hot drinks
            [
                'category_id' => CategoryEnum::HOT_DRINKS->value,
                'price' => 2.00,
                'title' => json_encode([
                    'en' => 'Precipitated coffee',
                    'ka' => 'ნალექიანი ყავა',
                    'ru' => 'Осажденный кофе'
                ]),
                'description' => null
            ],
            [
                'category_id' => CategoryEnum::HOT_DRINKS->value,
                'price' => 4.00,
                'title' => json_encode([
                    'en' => 'Instant coffee',
                    'ka' => 'ხსნადი ყავა',
                    'ru' => 'Растворимый кофе',
                ]),
                'description' => null
            ],
            [
                'category_id' => CategoryEnum::HOT_DRINKS->value,
                'price' => 2.00,
                'title' => json_encode([
                    'en' => 'Black tea',
                    'ka' => 'შავი ჩაი',
                    'ru' => 'Черный чай',
                ]),
                'description' => null
            ],
            [
                'category_id' => CategoryEnum::HOT_DRINKS->value,
                'price' => 4.00,
                'title' => json_encode([
                    'en' => 'Green tea',
                    'ka' => 'მწვანე ჩაი',
                    'ru' => 'Зеленый чай',
                ]),
                'description' => null
            ],
            // cold drinks
            [
                'category_id' => CategoryEnum::COLD_DRINKS->value,
                'price' => '',
                'title' => json_encode([
                    'en' => 'Family compote 1 cup',
                    'ka' => 'ოჯახის კომპოტი 1 ჭიქა',
                    'ru' => 'Семейный компот 1 чашка'
                ]),
                'description' => null
            ],
            [
                'category_id' => CategoryEnum::COLD_DRINKS->value,
                'price' => 7.00,
                'title' => json_encode([
                    'en' => 'Family compote 1 L',
                    'ka' => 'ოჯახის კომპოტი 1 ლ',
                    'ru' => 'Компот семейный 1 л'
                ]),
                'description' => null
            ],
            [
                'category_id' => CategoryEnum::COLD_DRINKS->value,
                'price' => 3.00,
                'title' => json_encode([
                    'en' => 'Coca-cola 0,5',
                    'ka' => 'კოკაკოლა 0,5',
                    'ru' => 'Кока-Кола 0,5'
                ]),
                'description' => null
            ],
            [
                'category_id' => CategoryEnum::COLD_DRINKS->value,
                'price' => 3.00,
                'title' => json_encode([
                    'en' => 'Fanta 0,5',
                    'ka' => 'ფანტა 0,5',
                    'ru' => 'Фанта 0.5'
                ]),
                'description' => null
            ],
            // alcoholic drinks
            [
                'category_id' => CategoryEnum::ALCOHOLIC_DRINKS->value,
                'price' => 3.00,
                'title' => json_encode([
                    'en' => 'Beer "Kazbegi"',
                    'ka' => 'ლუდი "ყაზბეგი"',
                    'ru' => 'Пиво "Казбеги"'
                ]),
                'description' => null
            ],
            [
                'category_id' => CategoryEnum::ALCOHOLIC_DRINKS->value,
                'price' => 15.00,
                'title' => json_encode([
                    'en' => 'Wine 1 L Rkawiteli',
                    'ka' => 'ღვინო რქაწითელი 1 ლ',
                    'ru' => 'Вино Ркавители 1 л'
                ]),
                'description' => null
            ],
            [
                'category_id' => CategoryEnum::ALCOHOLIC_DRINKS->value,
                'price' => 1.50,
                'title' => json_encode([
                    'en' => 'Wine 100 gr Rkawiteli',
                    'ka' => 'ღვინო რქაწითელი 100 გრ',
                    'ru' => 'Вино 100 гр Ркавители'
                ]),
                'description' => null
            ],
            [
                'category_id' => CategoryEnum::ALCOHOLIC_DRINKS->value,
                'price' => 2.50,
                'title' => json_encode([
                    'en' => 'Red wine Kinkdzmarauli 100 gr',
                    'ka' => 'ღვინო წითელი ქინძმარაული 100 გრ',
                    'ru' => 'Вино Красное Кинкдзмараули 100 гр'
                ]),
                'description' => null
            ],
            [
                'category_id' => CategoryEnum::ALCOHOLIC_DRINKS->value,
                'price' => 25.00,
                'title' => json_encode([
                    'en' => 'Red wine Kinkdzmarauli 1 L',
                    'ka' => 'ღვინო წითელი ქინძმარაული 1 ლ',
                    'ru' => 'Вино красное Кинкдзмараули 1 л'
                ]),
                'description' => null
            ],
            // hot breakfast
            [
                'category_id' => CategoryEnum::HOT_BREAKFAST->value,
                'price' => 8.00,
                'title' => json_encode([
                    'en' => 'Chicken wings 3 pieces',
                    'ka' => 'ქათმის ფრთები 3 ცალი',
                    'ru' => 'Салаты'
                ]),
                'description' => null
            ],
            [
                'category_id' => CategoryEnum::HOT_BREAKFAST->value,
                'price' => 10.00,
                'title' => json_encode([
                    'en' => 'Roasted Chicken (half)',
                    'ka' => 'შემწვარი წიწილა (ნახევარი)',
                    'ru' => 'Салаты'
                ]),
                'description' => null
            ],
            [
                'category_id' => CategoryEnum::HOT_BREAKFAST->value,
                'price' => 20.00,
                'title' => json_encode([
                    'en' => 'Chicken Tabaka',
                    'ka' => 'წიწილა ტაბაკა',
                    'ru' => 'Салаты'
                ]),
                'description' => null
            ],
            [
                'category_id' => CategoryEnum::HOT_BREAKFAST->value,
                'price' => 10.00,
                'title' => json_encode([
                    'en' => 'Smoked ribs',
                    'ka' => 'შებოლილი ნეკნები',
                    'ru' => 'Салаты'
                ]),
                'description' => null
            ],
            [
                'category_id' => CategoryEnum::HOT_BREAKFAST->value,
                'price' => 5.00,
                'title' => json_encode([
                    'en' => 'Boiled sausages 4 pieces',
                    'ka' => 'მოხარშული სოსისი 4 ცალი',
                    'ru' => 'Салаты'
                ]),
                'description' => null
            ],
            // fish
            [
                'category_id' => CategoryEnum::FISH->value,
                'price' => 8.00,
                'title' => json_encode([
                    'en' => 'Fried khaki',
                    'ka' => 'შემწვარი ხეკი',
                    'ru' => 'Салаты'
                ]),
                'description' => null
            ],
            [
                'category_id' => CategoryEnum::FISH->value,
                'price' => 10.00,
                'title' => json_encode([
                    'en' => 'Fried mullet',
                    'ka' => 'შემწვარი კეფალი',
                    'ru' => 'Салаты'
                ]),
                'description' => null
            ],
            // garnish
            [
                'category_id' => CategoryEnum::GARNISH->value,
                'price' => 4.00,
                'title' => json_encode([
                    'en' => 'Puree',
                    'ka' => 'პიურე',
                    'ru' => 'Салаты'
                ]),
                'description' => null
            ],
            [
                'category_id' => CategoryEnum::GARNISH->value,
                'price' => 4.00,
                'title' => json_encode([
                    'en' => 'Buckwheat',
                    'ka' => 'წიწიბურა',
                    'ru' => 'Салаты'
                ]),
                'description' => null
            ],
            // baked
            [
                'category_id' => CategoryEnum::BAKED->value,
                'price' => 8.00,
                'title' => json_encode([
                    'en' => 'Imeruli khachapuri 4 pieces',
                    'ka' => 'იმერული ხაჭაპური 4 ნაჭრიანი',
                    'ru' => 'Салаты'
                ]),
                'description' => null
            ],
            [
                'category_id' => CategoryEnum::BAKED->value,
                'price' => 15.00,
                'title' => json_encode([
                    'en' => 'Imeruli khachapuri 8 pieces',
                    'ka' => 'იმერული ხაჭაპური 8 ნაჭრიანი',
                    'ru' => 'Салаты'
                ]),
                'description' => null
            ],
            [
                'category_id' => CategoryEnum::BAKED->value,
                'price' => 1.00,
                'title' => json_encode([
                    'en' => 'Bread lavash',
                    'ka' => 'ლავაში',
                    'ru' => 'Салаты'
                ]),
                'description' => null
            ],
            [
                'category_id' => CategoryEnum::BAKED->value,
                'price' => 7.00,
                'title' => json_encode([
                    'en' => 'Pancakes with meat 4 pieces',
                    'ka' => 'ბლინი ხორცით 4 ცალი',
                    'ru' => 'Салаты'
                ]),
                'description' => null
            ],
            [
                'category_id' => CategoryEnum::BAKED->value,
                'price' => 7.00,
                'title' => json_encode([
                    'en' => 'Pancakes with cottage cheese 4 pieces',
                    'ka' => 'ბლინი ხაჭოთი 4 ცალი',
                    'ru' => 'Салаты'
                ]),
                'description' => null
            ],
            [
                'category_id' => CategoryEnum::BAKED->value,
                'price' => 7.00,
                'title' => json_encode([
                    'en' => 'Pancakes with cheese 4 pieces',
                    'ka' => 'ბლინი ყველით 4 ცალი',
                    'ru' => 'Салаты'
                ]),
                'description' => null
            ],
            [
                'category_id' => CategoryEnum::BAKED->value,
                'price' => 8.00,
                'title' => json_encode([
                    'en' => 'Dumplings with sour cream',
                    'ka' => 'პელმენი არაჟნით',
                    'ru' => 'Салаты'
                ]),
                'description' => null
            ],
            [
                'category_id' => CategoryEnum::BAKED->value,
                'price' => 8.50,
                'title' => json_encode([
                    'en' => 'khinkali 5 pieces',
                    'ka' => 'ხინკალი 5 ცალი',
                    'ru' => 'Салаты'
                ]),
                'description' => null
            ],
            // sauces
            [
                'category_id' => CategoryEnum::SAUCES->value,
                'price' => 1.00,
                'title' => json_encode([
                    'en' => 'Tkemali',
                    'ka' => 'ტყემალი',
                    'ru' => 'Салаты'
                ]),
                'description' => null
            ],
            [
                'category_id' => CategoryEnum::SAUCES->value,
                'price' => 1.00,
                'title' => json_encode([
                    'en' => 'Sauce Satsebeli',
                    'ka' => 'საწებელი',
                    'ru' => 'Салаты'
                ]),
                'description' => null
            ],
            [
                'category_id' => CategoryEnum::SAUCES->value,
                'price' => 2.00,
                'title' => json_encode([
                    'en' => 'Sour cream',
                    'ka' => 'არაჟანი',
                    'ru' => 'Салаты'
                ]),
                'description' => null
            ],
            [
                'category_id' => CategoryEnum::SAUCES->value,
                'price' => 1.00,
                'title' => json_encode([
                    'en' => 'Mustard',
                    'ka' => 'მდოგვი',
                    'ru' => 'Салаты'
                ]),
                'description' => null
            ],
            [
                'category_id' => CategoryEnum::SAUCES->value,
                'price' => 2.00,
                'title' => json_encode([
                    'en' => 'Ajika',
                    'ka' => 'აჯიკა',
                    'ru' => 'Салаты'
                ]),
                'description' => null
            ],
            // soup
            [
                'category_id' => CategoryEnum::SOUP->value,
                'price' => 8.00,
                'title' => json_encode([
                    'en' => 'Soup Kharcho',
                    'ka' => 'სუპ ხარჩო',
                    'ru' => 'Салаты'
                ]),
                'description' => json_encode([
                    'en' => 'Chicken with rice, walnuts',
                    'ka' => 'ქათმის ხორცი ბრინჯით, ნიგოზი',
                    'ru' => 'Салаты'
                ]),
            ],
            [
                'category_id' => CategoryEnum::SOUP->value,
                'price' => 7.00,
                'title' => json_encode([
                    'en' => 'Pea soup',
                    'ka' => 'ბარდის სუპი',
                    'ru' => 'Салаты'
                ]),
                'description' => json_encode([
                    'en' => 'with smoked chicken',
                    'ka' => 'შებოლილი ქათმის ხორცით',
                    'ru' => 'Салаты'
                ]),
            ],
            [
                'category_id' => CategoryEnum::SOUP->value,
                'price' => 7.00,
                'title' => json_encode([
                    'en' => 'Gupta soup',
                    'ka' => 'გუფთის სუპი',
                    'ru' => 'Салаты'
                ]),
                'description' => null
            ],
            [
                'category_id' => CategoryEnum::SOUP->value,
                'price' => 10.00,
                'title' => json_encode([
                    'en' => 'Ostri',
                    'ka' => 'ოსტრი',
                    'ru' => 'Салаты'
                ]),
                'description' => json_encode([
                    'en' => 'pork in tomato sauce',
                    'ka' => 'ღორი ტომატის სოუსში',
                    'ru' => 'Салаты'
                ]),
            ],
            [
                'category_id' => CategoryEnum::SOUP->value,
                'price' => 8.00,
                'title' => json_encode([
                    'en' => 'Ukrainian borsh',
                    'ka' => 'ბორში უკრაინულად ',
                    'ru' => 'Салаты'
                ]),
                'description' => null
            ],
            [
                'category_id' => CategoryEnum::SOUP->value,
                'price' => 7.00,
                'title' => json_encode([
                    'en' => 'Akroshka',
                    'ka' => 'აკროშკა ',
                    'ru' => 'Салаты'
                ]),
                'description' => null
            ],
            [
                'category_id' => CategoryEnum::SOUP->value,
                'price' => 9.00,
                'title' => json_encode([
                    'en' => 'Akroshka with ham',
                    'ka' => 'აკროშკა ლორით ',
                    'ru' => 'Салаты'
                ]),
                'description' => null
            ],
        ];

        foreach ($dishes as $one) {
            Dish::updateOrCreate(['category_id' => $one['id']], $one);
        }
    }
}
