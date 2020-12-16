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
        DB::table("products")->insert([
            [
                'name' => 'LG X5 mobile',
                'price' => '300',
                'description' => 'A smartphone with 8gb ram and much more features',
                'category' => 'mobile',
                'gallery' => 'https://www.gizmochina.com/wp-content/uploads/2018/12/LG-X5-Android-One.jpg'
            ],
            [
                'name' => 'Oppo mobile',
                'price' => '400',
                'description' => 'A smartphone with 8gb ram and much more features',
                'category' => 'mobile',
                'gallery' => 'https://i.gadgets360cdn.com/products/large/1539154374_635_oppo_k1_db.jpg'
            ],
            [
                'name' => 'Panasonic Tv',
                'price' => '600',
                'description' => 'Smart Tv with ultra display in HR',
                'category' => 'Tv',
                'gallery' => 'https://static-01.daraz.com.bd/p/e13aa10fa685ad54a19dd376ca60b33e.png'
            ],
            [
                'name' => 'LG Tv',
                'price' => '800',
                'description' => 'LG smart Tv with High resulation display',
                'category' => 'Tv',
                'gallery' => 'https://images-na.ssl-images-amazon.com/images/I/91m4KMfHKTL._AC_SL1500_.jpg'
            ],
            [
                'name' => 'LG Refrigerator',
                'price' => '900',
                'description' => 'LG Refrigerator',
                'category' => 'Refrigerator',
                'gallery' => 'https://www.butterflygroupbd.com/media/catalog/product/cache/a256606fc0a9a79df2101e339f07be86/l/g/lg_shiny_steel_no-frost_refrigerator_284_liter.jpg'
            ],
        ]);
    }
}
