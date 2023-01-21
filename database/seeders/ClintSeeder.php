<?php

namespace Database\Seeders;

use App\Models\Clint;
use Faker\Factory;
use Illuminate\Database\Seeder;

class ClintSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Clint::insert([
            //   start of clints : type => clint
            [
                'name' => 'Ahmed Adel' ,
                'img' => 'clints/1.jpg' ,
                'job_ar' => 'مدير الشركه' ,
                'job_en' => 'company manager' ,
                'desc_ar' => 'لوريم إيبسوم هو ببساطة نص شكلي يستخدم في صناعة الطباعة والتنضيد. كان Lorem Ipsum هو النص الوهمي القياسي في الصناعة منذ القرن الخامس عشر الميلادي ، عندما أخذت طابعة غير معروفة لوحًا من النوع وتدافعت عليه لصنع كتاب عينة من النوع. لقد صمد ليس فقط لخمسة قرون ، ولكن أيضًا القفزة في التنضيد الإلكتروني ، وظل دون تغيير جوهري. تم نشره في الستينيات بإصدار' ,
                'desc_en' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of' ,
                 'facebook'  =>  null ,
                'instagram'  =>  null ,
                'twitter'  =>  null ,
                'type'  => 'clint' ,
                'created_at' => now() ,
            ],

            [
                'name' => 'Ahmed mohamed' ,
                'img' => 'clints/2.jpg' ,
                'job_ar' => 'مدير الشركه' ,
                'job_en' => 'company manager' ,
                'desc_ar' => 'لوريم إي هو ببساطة نص شكلي يستخدم في صناعة الطباعة والتنضيد. كان Lorem Ipsum هو النص الوهمي القياسي في الصناعة منذ القرن الخامس عشر الميلادي ، عندما أخذت طابعة غير معروفة لوحًا من النوع وتدافعت عليه لصنع كتاب عينة من النوع. لقد صمد ليس فقط لخمسة قرون ، ولكن أيضًا القفزة في التنضيد الإلكتروني ، وظل دون تغيير جوهري. تم نشره في الستينيات بإصدار' ,
                'desc_en' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of' ,
                 'facebook'  => null,
                'instagram'  => null ,
                'twitter'  => null ,
                'type'  => 'clint' ,
                'created_at' => now() ,
            ],


            [
                'name' => 'tarek Adel' ,
                'img' => 'clints/3.jpg' ,
                'job_ar' => 'مدير الشركه' ,
                'job_en' => 'company manager' ,
                'desc_ar' => 'لوريم إي هو ببساطة نص شكلي يستخدم في صناعة الطباعة والتنضيد. كان Lorem Ipsum هو النص الوهمي القياسي في الصناعة منذ القرن الخامس عشر الميلادي ، عندما أخذت طابعة غير معروفة لوحًا من النوع وتدافعت عليه لصنع كتاب عينة من النوع. لقد صمد ليس فقط لخمسة قرون ، ولكن أيضًا القفزة في التنضيد الإلكتروني ، وظل دون تغيير جوهري. تم نشره في الستينيات بإصدار' ,
                'desc_en' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of' ,
                 'facebook'  => null ,
                'instagram'  =>null ,
                'twitter'  => null ,
                'type'  => 'clint' ,
                'created_at' => now() ,
            ],


            [
                'name' => 'abdo Adel' ,
                'img' => 'clints/4.jpg' ,
                'job_ar' => 'مدير الشركه' ,
                'job_en' => 'company manager' ,
                'desc_ar' => 'لوريم إي هو ببساطة نص شكلي يستخدم في صناعة الطباعة والتنضيد. كان Lorem Ipsum هو النص الوهمي القياسي في الصناعة منذ القرن الخامس عشر الميلادي ، عندما أخذت طابعة غير معروفة لوحًا من النوع وتدافعت عليه لصنع كتاب عينة من النوع. لقد صمد ليس فقط لخمسة قرون ، ولكن أيضًا القفزة في التنضيد الإلكتروني ، وظل دون تغيير جوهري. تم نشره في الستينيات بإصدار' ,
                'desc_en' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of' ,
                 'facebook'  => null ,
                'instagram'  => null ,
                'twitter'  => null ,
                'type'  => 'clint' ,
                'created_at' => now() ,
            ],

            //   end of clints : type => clint

            //   start of teams : type => team

            [
                'name'   => 'Tarek' ,
                'img'   => 'teams/1.jpg' ,
                'job_ar'   => 'باك اند' ,
                'job_en'   => 'Backend' ,
                 'desc_ar'  => null  ,
                 'desc_en'  => null ,
                 'facebook'  => 'https://www.facebook.com/' ,
                'instagram'  => 'https://www.instagram.com/' ,
                'twitter'  => 'https://twitter.com/alm3qben' ,
                 'type'  => 'team' ,
                'created_at' => now() ,
            ] ,



            [
                'name'   => 'Ezz' ,
                'img'   => 'teams/2.jpg' ,
                'job_ar'   => 'فرونت اند' ,
                'job_en'   => 'FrontEnd' ,
                 'desc_ar'  => null  ,
                 'desc_en'  => null ,
                 'facebook'  => 'https://www.facebook.com/' ,
                'instagram'  => 'https://www.instagram.com/' ,
                'twitter'  => 'https://twitter.com/alm3qben' ,
                 'type'  => 'team' ,
                 'created_at' => now() ,
            ] ,



            [
                'name'   => 'Eslam' ,
                'img'   => 'teams/3.jpg' ,
                'job_ar'   => 'وورد بريس' ,
                'job_en'   => 'WordPress' ,
                 'desc_ar'  => null  ,
                 'desc_en'  => null ,
                 'facebook'  => 'https://www.facebook.com/' ,
                'instagram'  => 'https://www.instagram.com/' ,
                'twitter'  => 'https://twitter.com/alm3qben' ,
                 'type'  => 'team' ,
                 'created_at' => now() ,
            ] ,

            //   start of teams : type => team

        ]);
    }
}
