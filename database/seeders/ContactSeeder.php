<?php

namespace Database\Seeders;

use App\Models\ContactUs;
use Faker\Factory;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $fake = Factory::create();
         for ($i=0; $i < 15 ; $i++) {

             ContactUs::insert([
                'name'  => $fake->name() ,
                'email'  => $fake->email() ,
                'phone'  => $fake->phoneNumber() ,
                'subject'  => $fake -> text(20) ,
                'msg'  => $fake->text(300) ,
                'created_at' => now()
             ]);
         }
    }
}
