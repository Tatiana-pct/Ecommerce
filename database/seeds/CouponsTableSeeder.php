<?php

use App\Coupon;
use Illuminate\Database\Seeder;

class CouponsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Coupon::create([
            'code'=> 'NEWS2022',
            'value'=> '2'
        ]);

        Coupon::create([
            'code'=> 'WINTER',
            'value'=> '1'
        ]);

        Coupon::create([
            'code'=> 'GIGACOUPON',
            'value'=> '5'
        ]);
    }
}
