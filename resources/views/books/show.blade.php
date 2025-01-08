@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Détails du livre</h1>
        <h2>{{ $book->title }}</h2>
        <p>Auteur : {{ $book->author }}</p>
        <p>Description : {{ $book->description }}</p>
        <p>Prix : {{ $book->price }} €</p>

        <a href="{{ route('books.index') }}">Retour à la liste</a>
    </div>
@endsection
