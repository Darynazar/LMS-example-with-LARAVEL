<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Food;
class FoodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Food::create([
            'name' => 'Meat',
            'price' => 200,
            'description' => 'Sheap',
            'image' => 'https://m.media-amazon.com/images/I/91cdShY-VWS._AC_UL320_.jpg'
        ]);
        Food::create([
            'name' => 'Kebab',
            'price' => 100,
            'description' => 'With rice',
            'image' => 'http://www.khatoongasht.com/en/user/pic/08345535710.jpg'
        ]);
        Food::create([
            'name' => 'Chicken',
            'price' => 150,
            'description' => 'Fried',
            'image' => 'https://upload.wikimedia.org/wikipedia/commons/thu…wer_with_marinated_chicken_wings_bbq_barbeque.jpg'
        ]);
        Food::create([
            'name' => 'coffee',
            'price' => 100,
            'description' => 'Cold Coffee',
            'image' => 'https://www.hopkinsmedicine.org/-/media/images/hea…h=440&w=640&hash=A78DE18F3DAED82EC64FCAE9A21D31DA'
        ]);
        Food::create([
            'name' => 'Soda',
            'price' => 200,
            'description' => 'Dark',
            'image' => 'https://m.media-amazon.com/images/I/910h3b5dJYL._AC_UL320_.jpg'
        ]);
        Food::create([
            'name' => 'Eggs',
            'price' => 100,
            'description' => '',
            'image' => 'https://cdn1.sph.harvard.edu/wp-content/uploads/sites/30/2012/09/FPG_06-EggsToastSalad-300x200.jpg'
        ]);
        Food::create([
            'name' => 'Rice',
            'price' => 150,
            'description' => 'Special',
            'image' => 'https://d47gxy3fatgwk.cloudfront.net/wp-content/uploads/2018/02/katieworkman-52-550x825.jpg.webp'
        ]);
        Food::create([
            'name' => 'coffee',
            'price' => 100,
            'description' => 'Cold Coffee',
            'image' => 'https://images.unsplash.com/photo-1568649929103-28ffbefaca1e?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=750&q=80'
        ]);
        Food::create([
            'name' => 'Salad',
            'price' => 100,
            'description' => 'Vegetable',
            'image' => 'https://cdn.loveandlemons.com/wp-content/uploads/2019/07/greek-salad-2-580x756.jpg'
        ]);
    }
}
