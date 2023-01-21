<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Setting::insert([
           [
            'twitter'   => 'https://www.twitter.com/' ,
            'facebook'  => 'https://www.facebook.com/' ,
            'instagram'  => 'https://www.instagram.com/' ,
            'youtube'  => 'https://www.youtube.com/' ,
            'linkedin'  => 'https://www.linkedin.com/' ,
            'phone'      => '01067422197' ,
            'gmail'      => 'info@example.com' ,
            'start_time'     => '9.00' ,
            'end_time'     => '9.00' ,
            'location'     => '123 Street, New York, USA' ,
            'type' => 'setting' ,
           ]
        ]);
    }
}
