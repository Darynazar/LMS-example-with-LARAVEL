<?php

namespace Database\Seeders;
use App\Models\Student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Student::create([
            'description' => 'Best with Bathroom & kitchen',
             'image' => 'https://www.xeniastudents.com/wp-content/uploads/2…derland-All-Saints-House-FINISHED-JPEG-WEB-67.jpg',
             'price' => 300
        ]);
        Student::create([
            'description' => 'Middel just bathroom',
             'image' => 'https://www.xeniastudents.com/wp-content/uploads/2020/04/PHOTO-2021-02-03-10-34-25-13.jpg',
             'price' => 200
        ]);
        Student::create([
            'description' => 'Not Bad',
             'image' => 'https://www.xeniastudents.com/wp-content/uploads/2…4/Fortis-Sunderland-Jan17-Finished-CC-WEB-165.jpg',
             'price' => 100
        ]);
    }
}
