<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
            DB::table('products')->insert([
            //     ['name'=>'LG mobile',
            //     'price'=>'200',
            //     'category'=>'mobile',
            //     'description'=>'A smartphone with 5gb ram and 128gb storage and much more features',
            //     'gallery'=>'https://cdn.shopify.com/s/files/1/0338/9947/9177/products/Untitled_12.jpg?v=1640861045'
            // ],
            // [
            //     'name'=>'Oppo mobile',
            //     'price'=>'300',
            //     'category'=>'mobile',
            //     'description'=>'A smartphone with 8gb ram and 128gb storage and much more features',
            //     'gallery'=>'https://i.ebayimg.com/images/g/zZwAAOSwqndi1mP1/s-l500.jpg'

            // ],
            // [
            //     'name'=>'LG mobile',
            //     'price'=>'400',
            //     'category'=>'mobile',
            //     'description'=>'A smartphone with 5gb ram and 128gb storage and much more features',
            //     'gallery'=>'https://andalus.com.kw/pub/media/catalog/product/cache/3a61a6f946111ecc57097330813f0d3b/s/a/samsung_galaxy_a23_phone_blue_1__1.jpg'

            // ],
            // [
            //     'name'=>'iPhone mobile',
            //     'price'=>'800',
            //     'category'=>'mobile',
            //     'description'=>'A smartphone with 5gb ram and 128gb storage and much more features',
            //     'gallery'=>'https://media.azadea.com/i/davinci/85_806695_000__101__01?$prd_large$&fmt=auto'

            // ]
            [
                'name'=>'Panasonic TV',
                'price'=>'700',
                'category'=>'tv',
                'description'=>'If you want a TV that is bigger than 50 inches, we recommend a 4K model. Although there is a small amount of 4K content available, even HD or Full-HD content is',
                'gallery'=>'https://www.ourshopee.com/ourshopee-img/ourshopee_products/4196107061.jpg'

            ],
            [
                'name'=>'LG Fridge',
                'price'=>'800',
                'category'=>'fridge',
                'description'=>'side-by-side fridge With DoorCooling+™, Multi Air Flow, AI ThinQ, Smart Diagnosis™ Feature. best LG Direct Cool 204L Refrigerator with base stand drawer and Smart Inverter Compressor. Smart Inverter Technology. 5 Star Performer. Better Energy Consumption.',
                'gallery'=>'https://www.lg.com/in/images/refrigerators/md07535755/gallery/GL-D241ASCD-Refrigerators-Right-View-MZ-07.jpg'

            ]
            ]);
    }
}
