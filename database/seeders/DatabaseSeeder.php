<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public function run()
    {

        $this->call(UserSeeder::class);
        $this->call(BannerSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(ClintSeeder::class);
        $this->call(ContactSeeder::class);
        $this->call(SettingSeeder::class);
        $this->call(AboutUsSeeder::class);
        $this->call(ServiceSeeder::class);
        $this->call(ProjectSeeder::class);




    }
}
