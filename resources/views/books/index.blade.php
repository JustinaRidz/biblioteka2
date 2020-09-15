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
            <th>Veiksmai</th>
        </tr>
        @foreach ($books as $book)
        <tr>
            <td>{{ $book->title }}</td>
            <td>{{ $book->pages }}</td>
            <td>{{ $book->isbn }}</td>
            <td>{!! $book->description !!}</td>
            <td>{{ $book->author->name }} {{ $book->author->surname }}</td>
            <td>
                <form action={{ route('books.destroy', $book->id) }} method="POST">
                    <a class="btn btn-success" href={{ route('books.edit', $book->id) }}>Redaguoti</a>
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