@extends('layouts.app')
@section('content')
<div class="container">
   <div class="row justify-content-center">
       <div class="col-md-8">
           <div class="card">
               <div class="card-header">Sukurkime Autorių:</div>
               <div class="card-body">
                   <form action="{{ route('authors.store') }}" method="POST">
                       @csrf
                       <div class="form-group">
                           <label>Vardas: </label>
                           <input type="text" name="name" class="form-control">
                       </div>
                       <div class="form-group">
                           <label>Pavardė: </label>
                           <input type="text" name="surname" class="form-control"> 
                       </div>
                       <button type="submit" class="btn btn-primary">Sukurti</button>
                   </form>
               </div>
           </div>
       </div>
   </div>
</div>
@endsection
