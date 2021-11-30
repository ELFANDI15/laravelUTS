<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
            'category_id' => 1,
            'title' => 'Harry Potter',
            
        ]);

        DB::table('books')->insert([
            'category_id' => 2,
            'title' => 'KKN Desa Penari',
            
        ]);

        DB::table('books')->insert([
            'category_id' => 6,
            'title' => 'The Lord of the Rings',
            
        ]);

        DB::table('books')->insert([
            'category_id' => 4,
            'title' => 'Spiderman',
            
        ]);

        DB::table('books')->insert([
            'category_id' => 9,
            'title' => 'Introduction to C',
            
        ]);

        DB::table('books')->insert([
            'category_id' => 1,
            'title' => 'Eragon',
            
        ]);

        DB::table('books')->insert([
            'category_id' => 5,
            'title' => 'Jokowi',
            
        ]);

        DB::table('books')->insert([
            'category_id' => 5,
            'title' => 'Soekarno',
            
        ]);

        DB::table('books')->insert([
            'category_id' => 4,
            'title' => 'Batman',
            
        ]);

        DB::table('books')->insert([
            'category_id' => 4,
            'title' => 'Shang Chi',
            
        ]);
    }
}
