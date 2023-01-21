<?php

namespace Database\Seeders;

use App\Models\Service;
use Faker\Factory;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{

    public function run()
    {



      $fake = Factory::create();

      for ($i=0; $i < 50 ; $i++) {

        Service::create([
            'name_ar'  => $fake->name() ,
            'name_en'  => $fake->name() ,
            'category_id'  => rand(7 , 10) ,
        ]);
      }

    }
}
