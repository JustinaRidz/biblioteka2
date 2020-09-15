@extends('layouts.app')
@section('content')
<div class="card-body">
    <table class="table">
        <tr>
            <th>Knygos pavadinimas</th>
            <th>Puslapių skaičius</th>
            <th>ISBN kodas</th>
            <th>Apie knygą</th>
            <th>Rašytojas</th>
        </tr>
        @foreach ($books as $books)
        <tr>
            <td>{{ $books->title }}</td>
            <td>{{ $books->pages }}</td>
            <td>{{ $books->isbn }}</td>
            <td>{!! $books->description !!}</td>
            <td>{{ $books->author_id }}</td>
            <td>
                <form action={{ route('books.destroy', $books->id) }} method="POST">
                    <a class="btn btn-success" href={{ route('books.edit', $books->id) }}>Redaguoti</a>
                    @csrf @method('delete')
                    <input type="submit" class="btn btn-danger" value="Trinti"/>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    <div>
        <a href="{{ route('books.create') }}" class="btn btn-success">Pridėti</a>
    </div>
</div>
@endsection