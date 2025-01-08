@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Créer un Livre</h1>

        @if ($errors->any())
            <div style="color:red;">
                <ul>
                    @foreach ($errors->all() as $erreur)
                        <li>{{ $erreur }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('books.store') }}" method="POST">
            @csrf
            <div>
                <label>Titre</label>
                <input type="text" name="title" value="{{ old('title') }}" required>
            </div>
            <div>
                <label>Auteur</label>
                <input type="text" name="author" value="{{ old('author') }}" required>
            </div>
            <div>
                <label>Description</label>
                <textarea name="description">{{ old('description') }}</textarea>
            </div>
            <div>
                <label>Prix</label>
                <input type="number" step="0.01" name="price" value="{{ old('price') }}">
            </div>
            <button type="submit">Enregistrer</button>
        </form>
    </div>
@endsection
