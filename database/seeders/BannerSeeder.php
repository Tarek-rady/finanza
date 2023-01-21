<?php

namespace Database\Seeders;

use App\Models\Banner;
use Illuminate\Database\Seeder;

class BannerSeeder extends Seeder
{

    public function run()
    {
         Banner::insert([


            [

                'title_ar' => 'مرحبا بكم في Finanza' ,
                'title_en' => 'Welcome to Finanza' ,
                'desc_ar' => 'دعم مالي حقيقي لك' ,
                'desc_en' => 'True Financial Support For You' ,
                'img'  => 'banners/1.png',
                'status' => 'Inactive' ,
                 'link'  => 'https://translate.google.com.eg/' ,
                'created_at' => now()

            ] ,

            [

                'title_ar' => 'مرحبا بكم في Finanza' ,
                'title_en' => 'Welcome to Finanza' ,
                'desc_ar' => 'وضعك المالي هو هدفنا' ,
                'desc_en' => 'Your Financial Status Is Our Goal' ,
                'img'  => 'banners/2.png',
                'status' => 'Inactive' ,
                 'link'  => 'https://translate.google.com.eg/' ,
                'created_at' => now()

            ] ,


            [

                'title_ar' => 'مرحبا بكم في Finanza' ,
                'title_en' => 'Welcome to Finanza' ,
                'desc_ar' => 'دعم مالي حقيقي لك' ,
                'desc_en' => 'True Financial Support For You' ,
                'img'  => 'banners/3.png',
                'status' => 'Inactive' ,
                 'link'  => 'https://translate.google.com.eg/' ,
                'created_at' => now()

            ] ,



         ]);
    }
}
