<?php

use App\Category;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now()->toDateTimeString();

        Category::insert([
            [
                'name'=> 'fruité',
                'slug'=> 'fruité',
                'created_at' =>$now,
                'updated_at' =>$now
            ],
            [
                'name'=> 'Boisson',
                'slug'=> 'Boisson',
                'created_at' =>$now,
                'updated_at' =>$now
            ],
            [
                'name'=> 'Bonbon',
                'slug'=> 'Bonbon',
                'created_at' =>$now,
                'updated_at' =>$now
            ],
            [
                'name'=> 'Gourmand',
                'slug'=> 'Gourmand',
                'created_at' =>$now,
                'updated_at' =>$now
            ],
        ]);
    }
}
