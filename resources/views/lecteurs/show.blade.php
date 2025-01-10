@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Détails du Lecteur</h1>
        <h2>{{ $lecteur->name }}</h2>
        <p><strong>Email :</strong> {{ $lecteur->email }}</p>
        <p><strong>Date de création :</strong> {{ $lecteur->created_at->format('d/m/Y') }}</p>

        <hr>

        <a href="{{ route('lecteurs.index') }}">Retour à la liste des lecteurs</a>
    </div>
@endsection
