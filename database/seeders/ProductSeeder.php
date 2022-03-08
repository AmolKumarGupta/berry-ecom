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
        DB::table('products')->insert([
            'name'=>'galaxy j4',
            'cate'=>'mobile',
            'desc'=>'under budget smart phones 2gb ram, 16gb storage',
            'price'=>'8000',
            'image'=>''
        ]);
    }
}
