<?php

namespace Database\Seeders;

use App\Models\StaticPage;
use Illuminate\Database\Seeder;

class AboutUsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        StaticPage::insert([



            [
                'title_ar'        => 'مهمتنا' ,
                'title_en'        => 'Our mission' ,
                'desc_ar'        => 'وخلافاَ للاعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً، بل إن له جذور في الأدب اللاتيني الكلاسيكي منذ العام 45 قبل الميلاد. من كتاب "حول أقاصي الخير والشر"' ,
                'desc_en'        => 'Contrary to popular belief, Lorem Ipsum is not a random text, but rather has roots in classical Latin literature as far back as 45 BC. From the book "On the Extremes of Good and Evil"' ,
                'story_ar'       => 'تيست ستوري' ,
                'story_en'       => 'story Tempor erat elitr rebum at clita. Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore. Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore. Clita erat ipsum et lorem et sit' ,
                'mission_ar'       => 'تيست ميشن' ,
                'mission_en'       => 'mission Tempor erat elitr rebum at clita. Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore. Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore. Clita erat ipsum et lorem et sit' ,
                'vision_ar'       => 'تيست فيشن' ,
                'vision_en'       => 'vision Tempor erat elitr rebum at clita. Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore. Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore. Clita erat ipsum et lorem et sit' ,
                'img'        => 'about/1.png' ,
                'type'        => 'about' ,
                'created_at' => now() ,
            ],






        ]);
    }
}
