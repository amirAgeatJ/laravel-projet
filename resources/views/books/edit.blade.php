@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Éditer le Livre</h1>

        @if ($errors->any())
            <div style="color:red;">
                <ul>
                    @foreach ($errors->all() as $erreur)
                        <li>{{ $erreur }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('books.update', $book->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div>
                <label>Titre</label>
                <input type="text" name="title" value="{{ old('title', $book->title) }}" required>
            </div>
            <div>
                <label>Auteur</label>
                <input type="text" name="author" value="{{ old('author', $book->author) }}" required>
            </div>
            <div>
                <label>Description</label>
                <textarea name="description">{{ old('description', $book->description) }}</textarea>
            </div>
            <div>
                <label>Prix</label>
                <input type="number" step="0.01" name="price" value="{{ old('price', $book->price) }}">
            </div>
            <button type="submit">Mettre à jour</button>
        </form>
    </div>
@endsection
