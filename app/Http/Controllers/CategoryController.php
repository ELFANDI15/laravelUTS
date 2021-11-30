<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function getCategories(){
        $categories = Category::all();
        $books = Book::all();


        return view('master', [
            'categories' => $categories,
            'books' => $books
        
        ]);
            
    }


    public function bookCategory(Category $cg){
        $categories = Category::all();
        $books = Book::all();

        return view('category', [
            'categories' => $categories,
            'books' => $books,
            'category' => $cg->category,
            'book' => $cg->book,
             
        ]);

    }


    public function getDetails(Book $bk){
        $categories = Category::all();
        $books = Book::all();

        return view('details', [
            'categories' => $categories,
            'books' => $books,
            'title' => $bk->title,
            'detail' => $bk->detail,
            
        ]);

    }

    public function contact(){
        $categories = Category::all();
        $books = Book::all();

        return view('contact', [
            'categories' => $categories,
            'books' => $books,
        ]);
    }

    public function show($slug){
        return  view('master', [
            "category" => Category::find($slug)
        ]);
    }
}
