<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert(['name'=>'iphone 11',
            'price'=>'700',
            'description'=>'Ram=2GB,Screen=5.6Inch,Storage=128GB',
            'category'=>'Mobile Phone',
            'quantity'=>'20',
            'photo1'=>'https://s.yimg.com/uu/api/res/1.2/swNuy8L37P_WRbenufwdnw--~B/aD0xMzMzO3c9MjAwMDthcHBpZD15dGFjaHlvbg--/https://media-mbst-pub-ue1.s3.amazonaws.com/creatr-uploaded-images/2022-09/280da9d0-33d8-11ed-beeb-9f0777e02779.cf.webp',
            'photo2'=>'https://s.yimg.com/uu/api/res/1.2/swNuy8L37P_WRbenufwdnw--~B/aD0xMzMzO3c9MjAwMDthcHBpZD15dGFjaHlvbg--/https://media-mbst-pub-ue1.s3.amazonaws.com/creatr-uploaded-images/2022-09/280da9d0-33d8-11ed-beeb-9f0777e02779.cf.webp']);


        DB::table('products')->insert(['name'=>'iphone 14',
            'price'=>'1200',
            'description'=>'Ram=3GB,Screen=7Inch,Storage=256GB',
            'category'=>'Mobile Phone',
            'quantity'=>'20',

            'photo1'=>'https://s.yimg.com/uu/api/res/1.2/swNuy8L37P_WRbenufwdnw--~B/aD0xMzMzO3c9MjAwMDthcHBpZD15dGFjaHlvbg--/https://media-mbst-pub-ue1.s3.amazonaws.com/creatr-uploaded-images/2022-09/280da9d0-33d8-11ed-beeb-9f0777e02779.cf.webp',
            'photo2'=>'https://s.yimg.com/uu/api/res/1.2/swNuy8L37P_WRbenufwdnw--~B/aD0xMzMzO3c9MjAwMDthcHBpZD15dGFjaHlvbg--/https://media-mbst-pub-ue1.s3.amazonaws.com/creatr-uploaded-images/2022-09/280da9d0-33d8-11ed-beeb-9f0777e02779.cf.webp']);

        DB::table('products')->insert(['name'=>'iphone 13',
            'price'=>'800',
            'description'=>'Ram=2GB,Screen=5.6Inch,Storage=128GB',
            'category'=>'Mobile Phone',
            'quantity'=>'20',
            'photo1'=>'https://s.yimg.com/uu/api/res/1.2/swNuy8L37P_WRbenufwdnw--~B/aD0xMzMzO3c9MjAwMDthcHBpZD15dGFjaHlvbg--/https://media-mbst-pub-ue1.s3.amazonaws.com/creatr-uploaded-images/2022-09/280da9d0-33d8-11ed-beeb-9f0777e02779.cf.webp',
            'photo2'=>'https://s.yimg.com/uu/api/res/1.2/swNuy8L37P_WRbenufwdnw--~B/aD0xMzMzO3c9MjAwMDthcHBpZD15dGFjaHlvbg--/https://media-mbst-pub-ue1.s3.amazonaws.com/creatr-uploaded-images/2022-09/280da9d0-33d8-11ed-beeb-9f0777e02779.cf.webp']);




    }
}
