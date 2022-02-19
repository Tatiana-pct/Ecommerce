<?php

use App\Category;
use App\product;
use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name'=> 'mangue/Passion',
            'slug'=> 'mangue-passion',
            'details' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eleifend tincidunt elementum. Cras a augue eu enim condimentum vehicula.',
            'price'=> '6',
            'description' => 'Maecenas sit amet orci et ipsum imperdiet vehicula egestas eget risus. Nam hendrerit orci vestibulum neque consequat molestie et sed purus. Duis vehicula euismod ex. Phasellus non nisl in ante malesuada tempor at sed ex. Duis ac erat metus. Nunc in neque at erat maximus posuere quis vel mauris. Mauris tincidunt varius enim, quis volutpat tellus feugiat et. Integer nisl velit, facilisis vel semper non, venenatis ac metus. Sed sed ex felis. Nunc nec mi sed felis ullamcorper tincidunt sed in nulla. ',
            'category_id'=> Category::all()->random()->id
        ]);

        Product::create([
            'name'=> 'mangue/Citron',
            'slug'=> 'mangue-citron',
            'details' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eleifend tincidunt elementum. Cras a augue eu enim condimentum vehicula.',
            'price'=> '6',
            'description' => 'Maecenas sit amet orci et ipsum imperdiet vehicula egestas eget risus. Nam hendrerit orci vestibulum neque consequat molestie et sed purus. Duis vehicula euismod ex. Phasellus non nisl in ante malesuada tempor at sed ex. Duis ac erat metus. Nunc in neque at erat maximus posuere quis vel mauris. Mauris tincidunt varius enim, quis volutpat tellus feugiat et. Integer nisl velit, facilisis vel semper non, venenatis ac metus. Sed sed ex felis. Nunc nec mi sed felis ullamcorper tincidunt sed in nulla. ',
            'category_id'=> Category::all()->random()->id
        ]);

        Product::create([
            'name'=> 'mangue/Coco',
            'slug'=> 'mangue-coco',
            'details' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eleifend tincidunt elementum. Cras a augue eu enim condimentum vehicula.',
            'price'=> '6',
            'description' => 'Maecenas sit amet orci et ipsum imperdiet vehicula egestas eget risus. Nam hendrerit orci vestibulum neque consequat molestie et sed purus. Duis vehicula euismod ex. Phasellus non nisl in ante malesuada tempor at sed ex. Duis ac erat metus. Nunc in neque at erat maximus posuere quis vel mauris. Mauris tincidunt varius enim, quis volutpat tellus feugiat et. Integer nisl velit, facilisis vel semper non, venenatis ac metus. Sed sed ex felis. Nunc nec mi sed felis ullamcorper tincidunt sed in nulla. ',
            'category_id'=> Category::all()->random()->id
        ]);

        Product::create([
            'name'=> 'mangue/Cassis',
            'slug'=> 'mangue-cassis',
            'details' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eleifend tincidunt elementum. Cras a augue eu enim condimentum vehicula.',
            'price'=> '6',
            'description' => 'Maecenas sit amet orci et ipsum imperdiet vehicula egestas eget risus. Nam hendrerit orci vestibulum neque consequat molestie et sed purus. Duis vehicula euismod ex. Phasellus non nisl in ante malesuada tempor at sed ex. Duis ac erat metus. Nunc in neque at erat maximus posuere quis vel mauris. Mauris tincidunt varius enim, quis volutpat tellus feugiat et. Integer nisl velit, facilisis vel semper non, venenatis ac metus. Sed sed ex felis. Nunc nec mi sed felis ullamcorper tincidunt sed in nulla. ',
            'category_id'=> Category::all()->random()->id
        ]);

        Product::create([
            'name'=> 'mangue/Fraise',
            'slug'=> 'mangue-fraise',
            'details' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eleifend tincidunt elementum. Cras a augue eu enim condimentum vehicula.',
            'price'=> '6',
            'description' => 'Maecenas sit amet orci et ipsum imperdiet vehicula egestas eget risus. Nam hendrerit orci vestibulum neque consequat molestie et sed purus. Duis vehicula euismod ex. Phasellus non nisl in ante malesuada tempor at sed ex. Duis ac erat metus. Nunc in neque at erat maximus posuere quis vel mauris. Mauris tincidunt varius enim, quis volutpat tellus feugiat et. Integer nisl velit, facilisis vel semper non, venenatis ac metus. Sed sed ex felis. Nunc nec mi sed felis ullamcorper tincidunt sed in nulla. ',
            'category_id'=> Category::all()->random()->id
        ]);

        Product::create([
            'name'=> 'mangue/Framboise',
            'slug'=> 'mangue-framboise',
            'details' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eleifend tincidunt elementum. Cras a augue eu enim condimentum vehicula.',
            'price'=> '6',
            'description' => 'Maecenas sit amet orci et ipsum imperdiet vehicula egestas eget risus. Nam hendrerit orci vestibulum neque consequat molestie et sed purus. Duis vehicula euismod ex. Phasellus non nisl in ante malesuada tempor at sed ex. Duis ac erat metus. Nunc in neque at erat maximus posuere quis vel mauris. Mauris tincidunt varius enim, quis volutpat tellus feugiat et. Integer nisl velit, facilisis vel semper non, venenatis ac metus. Sed sed ex felis. Nunc nec mi sed felis ullamcorper tincidunt sed in nulla. ',
            'category_id'=> Category::all()->random()->id
        ]);


        Product::create([
            'name'=> 'mangue/Orange',
            'slug'=> 'mangue-orange',
            'details' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eleifend tincidunt elementum. Cras a augue eu enim condimentum vehicula.',
            'price'=> '6',
            'description' => 'Maecenas sit amet orci et ipsum imperdiet vehicula egestas eget risus. Nam hendrerit orci vestibulum neque consequat molestie et sed purus. Duis vehicula euismod ex. Phasellus non nisl in ante malesuada tempor at sed ex. Duis ac erat metus. Nunc in neque at erat maximus posuere quis vel mauris. Mauris tincidunt varius enim, quis volutpat tellus feugiat et. Integer nisl velit, facilisis vel semper non, venenatis ac metus. Sed sed ex felis. Nunc nec mi sed felis ullamcorper tincidunt sed in nulla. ',
            'category_id'=> Category::all()->random()->id
        ]);

        Product::create([
            'name'=> 'mangue/Mandarine',
            'slug'=> 'mangue-mandarine',
            'details' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eleifend tincidunt elementum. Cras a augue eu enim condimentum vehicula.',
            'price'=> '6',
            'description' => 'Maecenas sit amet orci et ipsum imperdiet vehicula egestas eget risus. Nam hendrerit orci vestibulum neque consequat molestie et sed purus. Duis vehicula euismod ex. Phasellus non nisl in ante malesuada tempor at sed ex. Duis ac erat metus. Nunc in neque at erat maximus posuere quis vel mauris. Mauris tincidunt varius enim, quis volutpat tellus feugiat et. Integer nisl velit, facilisis vel semper non, venenatis ac metus. Sed sed ex felis. Nunc nec mi sed felis ullamcorper tincidunt sed in nulla. ',
            'category_id'=> Category::all()->random()->id
        ]);
    }
}
