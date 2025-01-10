@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Liste des Lecteurs</h1>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Email</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($lecteurs as $lecteur)
                <tr>
                    <td>{{ $lecteur->id }}</td>
                    <td>{{ $lecteur->name }}</td>
                    <td>{{ $lecteur->email }}</td>
                    <td>
                        <a href="{{ route('lecteurs.show', $lecteur->id) }}" class="btn btn-primary">Voir</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
