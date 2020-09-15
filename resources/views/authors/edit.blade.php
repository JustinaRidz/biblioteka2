@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Pakeiskime informaciją apie autorių</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('author.update', $author->id) }}">
                        @csrf @method("PUT")
                        <div class="form-group">
                            <label for="">Vardas</label>
                            <input type="text" name="name" class="form-control" value="{{ $author->name }}">
                        </div>
                        <div class="form-group">
                            <label for="">Pavardė</label>
                            <input type="text" name="username" class="form-control" value="{{ $author->username }}">
                        </div>
                        <button type="submit" class="btn btn-primary">Pakeisti</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
