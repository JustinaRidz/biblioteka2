@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Pakeiskime knygos informaciją</div>
                <div class="card-body">
                <form method="POST" action="{{route('books.update', $books->id)}}">
                        @csrf @method("PUT")
                        <div class="form-group">
                            <label for="">Knygos pavadinimas</label>
                            <input type="string" name="title" class="form-control" value="{{ $books->title }}">
                        </div>
                        <div class="form-group">
                            <label for="">Puslapių skaičius</label>
                            <input type="integer" name="pages" class="form-control" value="{{ $books->pages }}">
                        </div>
                        <div class="form-group">
                            <label for="">ISBN kodas</label>
                            <input type="string" name="isbn" class="form-control" value="{{$books->isbn}}">
                        </div>
                        <div class="form-group">
                            <label for="">Apie knygą</label>
                            <input id="mce" type="text" name="description" class="form-control" value="{{$books->short_description}}">
                        </div>
                        <div class="form-group">
                            <label for="yes">Rašytojas</label>
                            {{-- <input type="bigInteger" name="author_id" class="form-control"> --}}
                            <select name="author_id" id="yes">
                                @foreach ($authors as $author)
                                    <option value="{{$author->id}}">{{$author->name}} {{$author->surname}}</option>
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Pakeisti</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
