<?php

namespace Database\Seeders;

use App\Models\Project;
use Faker\Factory;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{

    public function run()
    {

        $fake = Factory::create();

        for ($i=1; $i < 11 ; $i++) {

            Project::create([
              'name_ar' => $fake->name(),
              'name_en' => $fake->name(),
              'link' => "https://translate.google.com.eg/?hl=ar&sl=en&tl=ar&text=Business%20Loans&op=translate" ,
              'img' =>'projects/' .$i.'.png',
            ]);

        }
    }
}
