@extends('layouts.app')
@section('content')
<div class="card-body">
    <table class="table">
        <tr>
            <th>Vardas</th>
            <th>Pavardė</th>
        </tr>
        @foreach ($author as $author)
        <tr>
            <td>{{ $author->name }}</td>
            <td>{{ $author->surname }}</td><td>
                <form action={{ route('author.destroy', $author->id) }} method="POST">
                    <a class="btn btn-success" href={{ route('author.edit', $author->id) }}>Redaguoti</a>
                    @csrf @method('delete')
                    <input type="submit" class="btn btn-danger" value="Trinti"/>
                </form>
            </td>
        </tr>
        
        @endforeach
    </table>
    <div>
        <a href="{{ route('author.create') }}" class="btn btn-success">Pridėti</a>
    </div>
</div>
@endsection
