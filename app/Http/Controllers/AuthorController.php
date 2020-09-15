<?php

namespace App\Http\Controllers;

use App\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller{
    public function index(Request $request){
        
        return view('authors.index', ['author' => Author::orderBy('name')->get()]);
    }

    
    public function create(){
        return view('autors.create');

    }

    
    public function store(Request $request){
        $author = new Author();
        // can be used for seeing the insides of the incoming request
        // var_dump($request->all()); die();
        $author->fill($request->all());
        $author->save();
        return redirect()->route('author.index');

    }
    
    public function edit(Author $author){
        return view('authors.edit', ['author' => $author]);
    }

    
    public function update(Request $request, Author $author){
        $author->fill($request->all());
        $author->save();
        return redirect()->route('author.index');

    }

    public function destroy(Author $author){
        $author->delete();
        return redirect()->route('author.index');
    }
}
