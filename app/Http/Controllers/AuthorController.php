<?php

namespace App\Http\Controllers;

use App\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller{
    public function index(){
        
        return view('authors.index', ['authors' => Author::orderBy('name')->get()]);
    }

    
    public function create(){
        return view('authors.create');
    }

    
    public function store(Request $request){
        $author = new Author();
        // can be used for seeing the insides of the incoming request
        // var_dump($request->all()); die();
        // $author->fill($request->all());
        $author->name = $request['name'];
        $author->surname = $request['surname'];
        $author->save();
        return redirect()->route('authors.index');

    }
    
    public function edit(Author $author){
        return view('authors.edit', ['author' => $author]);
    }

    
    public function update(Request $request, Author $author){
        $author->fill($request->all());
        $author->save();
        return redirect()->route('authors.index');

    }

    public function destroy(Author $author){
        $author->delete();
        return redirect()->route('authors.index');
    }
}
