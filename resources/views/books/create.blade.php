@extends('layouts.app')
@section('content')
<div class="container">
   <div class="row justify-content-center">
       <div class="col-md-8">
           <div class="card">
               <div class="card-header">Sukurkime :</div>
               <div class="card-body">
               <form action="{{route('books.store')}}" method="POST">
                       @csrf
                       <div class="form-group">
                           <label>Knygos pavadinimas: </label>
                           <input type="string" name="title" class="form-control">
                       </div>
                       <div class="form-group">
                           <label>Puslapių skaičius: </label>
                           <input type="integer" name="pages" class="form-control"> 
                       </div>
                       <div class="form-group">
                           <label>ISBN kodas: </label>
                           <input type="string" name="isbn" class="form-control">
                       </div>
                       <div class="form-group">
                           <label>Apie knygą: </label>
                           <input id="mce" type="text" name="description" class="form-control">
                       </div>
                       <div class="form-group">
                           <label>Rašytojas: </label>
                           <input type="number" name="registered" class="form-control">
                       </div>
                       <button type="submit" class="btn btn-primary">Submit</button>
                   </form>
               </div>
           </div>
       </div>
   </div>
</div>
@endsection
