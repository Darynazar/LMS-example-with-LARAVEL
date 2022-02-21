<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Hotel;
class HotelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Hotel::create([
            'price'=>'300',
            'description'=>'The Best(kitchen & bathroom)',
            'image'=>'https://upload.wikimedia.org/wikipedia/commons/thumb/3/30/Barajin.jpg/220px-Barajin.jpg'
        ]);
        Hotel::create([
            'price'=>'200',
            'description'=>'Econemic(bathromm)',
            'image'=>'https://upload.wikimedia.org/wikipedia/commons/thumb/5/5c/LoyolaMD_Dorm.JPG/220px-LoyolaMD_Dorm.JPG'
        ]);
        Hotel::create([
            'price'=>'300',
            'description'=>'Not Bad',
            'image'=>'https://media.mehrnews.com/d/2021/03/09/2/3714481.jpg'
        ]);
    }
}
