<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'category' => 'Fiction',
            
        ]);

        DB::table('categories')->insert([
            'category' => 'Horor',
            
        ]);

        DB::table('categories')->insert([
            'category' => 'Drama',
            
        ]);

        DB::table('categories')->insert([
            'category' => 'Comic',
            
        ]);

        DB::table('categories')->insert([
            'category' => 'Biografi',
            
        ]);

        DB::table('categories')->insert([
            'category' => 'Adventure',
            
        ]);

        DB::table('categories')->insert([
            'category' => 'Education',
            
        ]);

        DB::table('categories')->insert([
            'category' => 'Science',
            
        ]);

        DB::table('categories')->insert([
            'category' => 'Computer',
            
        ]);

        DB::table('categories')->insert([
            'category' => 'Religion',
            
        ]);


    }
}
