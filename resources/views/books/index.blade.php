@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Liste des livres</h1>

        @if (session('success'))
            <div style="color: green;">
                {{ session('success') }}
            </div>
        @endif

        <a href="{{ route('books.create') }}">Créer un nouveau livre</a>

        <table border="1" cellpadding="10" cellspacing="0" style="width: 100%; margin-top: 20px;">
            <thead>
                <tr>
                    <th>Titre</th>
                    <th>Auteur</th>
                    <th>Catégories</th>
                    <th>Prix</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($books as $book)
                    <tr>
                        <td>{{ $book->title }}</td>
                        <td>
                            @if($book->author)
                                {{ $book->author->name }}
                            @else
                                <em>Aucun auteur</em>
                            @endif
                        </td>
                        <td>
                            @if($book->categories->count() > 0)
                                @foreach ($book->categories as $category)
                                    <span>{{ $category->name }}</span><br>
                                @endforeach
                            @else
                                <em>Pas de catégorie</em>
                            @endif
                        </td>
                        <td>{{ number_format($book->price, 2) }} €</td>
                        <td>
                            <a href="{{ route('books.show', $book->id) }}">Voir</a> |
                            <a href="{{ route('books.edit', $book->id) }}">Éditer</a> |
                            <form action="{{ route('books.destroy', $book->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce livre ?')">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
