<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('details')->insert([
            'book_id' => 1,
            'author' => 'J.K Rowling',
            'publisher' => 'Gramedia',
            'year' => 2001,
            'description' => 'Harry Potter is most popular fiction book all time',
            
        ]);

        DB::table('details')->insert([
            'book_id' => 2,
            'author' => 'Simpleman',
            'publisher' => 'Gramedia',
            'year' => 2019,
            'description' => 'Horror story during KKN',
            
        ]);

        DB::table('details')->insert([
            'book_id' => 3,
            'author' => 'J.R.R Tolkien',
            'publisher' => 'Elex kedia Komputoindo',
            'year' => 2004,
            'description' => 'Most best seller adventure book all time',
            
        ]);

        DB::table('details')->insert([
            'book_id' => 3,
            'author' => 'J.R.R Tolkien',
            'publisher' => 'Elex kedia Komputoindo',
            'year' => 2004,
            'description' => 'Most best seller adventure book all time',
            
        ]);

        DB::table('details')->insert([
            'book_id' => 4,
            'author' => 'Steve Gerber',
            'publisher' => 'Elex kedia Komputoindo',
            'year' => 2007,
            'description' => 'Adventure of Spiderman',
            
        ]);

        DB::table('details')->insert([
            'book_id' => 5,
            'author' => 'Paul M. Chirlian',
            'publisher' => 'Elex kedia Komputoindo',
            'year' => 2016,
            'description' => 'C programming tutorials',
            
        ]);

        DB::table('details')->insert([
            'book_id' => 6,
            'author' => 'Christopher Paolini',
            'publisher' => 'Elex kedia Komputoindo',
            'year' => 2002,
            'description' => 'Adventure of kid found a dragon egg',
            
        ]);

        DB::table('details')->insert([
            'book_id' => 7,
            'author' => 'Domu D Ambarita',
            'publisher' => 'Elex kedia Komputoindo',
            'year' => 2017,
            'description' => 'Biografi of president Jokowi',
            
        ]);

        DB::table('details')->insert([
            'book_id' => 8,
            'author' => 'Adji Nugroho',
            'publisher' => 'Elex kedia Komputoindo',
            'year' => 2017,
            'description' => 'Biografi of president Soekarno',
            
        ]);

        DB::table('details')->insert([
            'book_id' => 9,
            'author' => 'Bill Finger',
            'publisher' => 'Elex kedia Komputoindo',
            'year' => 2017,
            'description' => 'Adventure of Batman',
            
        ]);

        DB::table('details')->insert([
            'book_id' => 10,
            'author' => 'Steve Englehart',
            'publisher' => 'Elex kedia Komputoindo',
            'year' => 1973,
            'description' => 'Adventure of Shang Chi',
            
        ]);
    }
}
