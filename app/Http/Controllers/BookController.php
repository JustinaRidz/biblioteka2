<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;

class BookController extends Controller{
    
    public function index(){
        return view('books.index', ['books' => \App\Book::all()]);
    }

    
    public function create(){
        return view('books.create');
    }

    
    public function store(Request $request){
        $book = new Book();
        // can be used for seeing the insides of the incoming request
        
        $book->fill($request->all());
        $book->save();
        return redirect()->route('books.index');
    }

    public function edit(Book $book){
        return view('books.edit', ['books' => $book, 'authors' => \App\Author::orderBy('id')->get()]);
    }

   
    public function update(Request $request, Book $book){
        $book->fill($request->all());
        $book->save();
        return redirect()->route('books.index');
    }

    
    public function destroy(Book $book){
        $book->delete();
        return redirect()->route('books.index');
    }
}
