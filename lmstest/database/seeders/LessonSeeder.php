<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Lesson;

class LessonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Lesson::create([
            'name' => 'Math',
            'description' => 'Basic',
            'image' => 'https://scx1.b-cdn.net/csz/news/tmb/2022/scientists-discover-ho-1.jpg',
            'price' => 500,
            'time' => '15:30'
        ]);
        Lesson::create([
            'name' => 'Physics',
            'description' => 'Basic',
            'image' => '	https://scx1.b-cdn.net/csz/news/tmb/2017/time.jpg',
            'price' => 400,
            'time' => '16:30'
        ]);
        Lesson::create([
            'name' => 'Math',
            'description' => 'Basic',
            'image' => 'https://scx1.b-cdn.net/csz/news/tmb/2022/scientists-discover-ho-1.jpg',
            'price' => 500,
            'time' => '15.30'
        ]);
        Lesson::create([
            'name' => 'IOT',
            'description' => 'Special',
            'image' => 'https://scx1.b-cdn.net/csz/news/tmb/2022/two-dimensional-materi.jpg',
            'price' => 100,
            'time' => '8:30'
        ]);
        Lesson::create([
            'name' => 'Literature',
            'description' => 'Public',
            'image' => 'https://scx1.b-cdn.net/csz/news/tmb/2022/einsteins-photoelectri.jpg',
            'price' => 900,
            'time' => '9:30'
        ]);
        Lesson::create([
            'name' => 'Algebra',
            'description' => 'Basic',
            'image' => '	https://scx1.b-cdn.net/csz/news/tmb/2022/switching-plasmonic-na.jpg',
            'price' => 500,
            'time' => '11:30'
        ]);
        Lesson::create([
            'name' => 'History',
            'description' => 'Public',
            'image' => 'https://scx1.b-cdn.net/csz/news/tmb/2022/research-team-decodes.jpg',
            'price' => 100,
            'time' => '12:30'
        ]);
        Lesson::create([
            'name' => 'DataStructure',
            'description' => 'Special',
            'image' => 'https://scx1.b-cdn.net/csz/news/tmb/2022/surprising-complexity.jpg',
            'price' => 200,
            'time' => '14:30'
        ]);
    }
}
