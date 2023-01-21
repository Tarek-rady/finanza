<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{

    public function run()
    {
        Category::insert([

            //   start of feautures

            [
                'name_ar'     => 'لا توجد تكلفة خفية' ,
                'name_en'     => 'No Hidden Cost' ,
                'title_ar'     => null ,
                'title_en'     => null ,
                'desc_ar'     => 'لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور' ,
                'desc_en'     => 'Clita erat ipsum lorem sit sed stet duo justo',
                'img'         => null ,
                'icon'        => 'service' ,
                'type'        => 'feauture' ,
                'created_at' => now() ,
            ] ,

            [
                'name_ar'     => 'فريق متخصص' ,
                'name_en'     => 'Dedicated Team' ,
                'title_ar'     => null ,
                'title_en'     => null ,
                'desc_ar'     => 'لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور' ,
                'desc_en'     => 'Clita erat ipsum lorem sit sed stet duo justo' ,
                'img'         => null ,
                'icon'        => 'service' ,
                'type'        => 'feauture' ,
                'created_at' => now() ,
            ] ,

            [
                'name_ar'     => 'متاح 24/7' ,
                'name_en'     => '24/7 Available' ,
                'title_ar'     => null ,
                'title_en'     => null ,
                'desc_ar'     => 'لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور' ,
                'desc_en'     => 'Clita erat ipsum lorem sit sed stet duo justo' ,
                'img'         => null ,
                'icon'        => 'service' ,
                'type'        => 'feauture' ,
                'created_at' => now() ,
            ] ,

            //   End of feautures


            //   start of about

            [
                'name_ar'     => 'تنفيذ سريع' ,
                'name_en'     => 'Fast Executions' ,
                'title_ar'     => null ,
                'title_en'     => null ,
                'desc_ar'     => 'لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور' ,
                'desc_en'     => 'Clita erat ipsum lorem sit sed stet duo justo',
                'img'         => null ,
                'icon'        => 'service' ,
                'type'        => 'about' ,
                'created_at' => now() ,
            ] ,

            [
                'name_ar'     => 'تأمين مالي' ,
                'name_en'     => 'Financial Secure' ,
                'title_ar'     => null ,
                'title_en'     => null ,
                'desc_ar'     => 'لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور' ,
                'desc_en'     => 'Clita erat ipsum lorem sit sed stet duo justo' ,
                'img'         => null ,
                'icon'        => 'class="fa fa-check fa-3x text-primary mb-3"' ,
                'type'        => 'about' ,
                'created_at' => now() ,
            ] ,

            [
                'name_ar'     => 'الدليل والدعم' ,
                'name_en'     => 'Guide & Support' ,
                'title_en'     => null ,
                'title_ar'     => null ,
                'desc_ar'     => 'لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور' ,
                'desc_en'     => 'Clita erat ipsum lorem sit sed stet duo justo' ,
                'img'         => null ,
                'icon'        => 'class="fa fa-check fa-3x text-primary mb-3"' ,
                'type'        => 'about' ,
                'created_at' => now() ,
            ] ,

            //   End of feautures


            //   start of about

                [
                    'name_ar'     => 'التخطيط المالي' ,
                    'name_en'     => 'Financial Planning' ,
                    'title_ar'     => '20 عاما من الخبرة في الدعم المالي' ,
                    'title_en'     => '20 Years Of Experience In Financial Support' ,
                    'desc_ar'     => 'لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور' ,
                    'desc_en'     => 'Clita erat ipsum lorem sit sed stet duo justo',
                    'img'         => null ,
                    'icon'        => null,
                    'type'        => 'service' ,
                    'created_at' => now() ,
                ] ,

                [
                    'name_ar'     => 'الاستثمار النقدي' ,
                    'name_en'     => 'Cash Investment' ,
                    'title_ar'     => '25 عاما من الخبرة في الدعم المالي' ,
                    'title_en'     => '25 Years Of Experience In Financial Support' ,
                    'desc_ar'     => 'لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور' ,
                    'desc_en'     => 'Clita erat ipsum lorem sit sed stet duo justo' ,
                    'img'         => null ,
                    'icon'        => null ,
                    'type'        => 'service' ,
                    'created_at' => now() ,
                ] ,

                [
                    'name_ar'     => 'الاستشارات المالية' ,
                    'name_en'     => 'Financial Consultancy' ,
                    'title_ar'     => '30 عاما من الخبرة في الدعم المالي' ,
                    'title_en'     => '30 Years Of Experience In Financial Support' ,
                    'desc_ar'     => 'لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور' ,
                    'desc_en'     => 'Clita erat ipsum lorem sit sed stet duo justo' ,
                    'img'         => null ,
                    'icon'        => null ,
                    'type'        => 'service' ,
                    'created_at' => now() ,
                ] ,

                [
                    'name_ar'     => 'قروض الأعمال' ,
                    'name_en'     => 'Business Loans' ,
                    'title_ar'     => '28 عاما من الخبرة في الدعم المالي' ,
                    'title_en'     => '28 Years Of Experience In Financial Support' ,
                    'desc_ar'     => 'لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور' ,
                    'desc_en'     => 'Clita erat ipsum lorem sit sed stet duo justo' ,
                    'img'         => null ,
                    'icon'        => 'class="fa fa-check fa-3x text-primary mb-3"' ,
                    'type'        => 'service' ,
                    'created_at' => now() ,
                ] ,

            //   End of feautures




        ]);


    }
}


//
//
//
//
