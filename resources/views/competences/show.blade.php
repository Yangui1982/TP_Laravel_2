@extends('layouts.app')
@section('titre', 'Détail de la compétence - Portfolio SIO')
@section('content')
	<h1>{{ $competence->nom }}</h1>
	<p><span class="badge bg-secondary">{{ $competence->niveau }}</span></p>
	<p>{{ $competence->description }}</p>
	<a href="{{ route('competences.index') }}" class="btn btn-outline-primary">â† Retour aux compétences</a>
	<a href="{{ route('competences.edit', $competence) }}" class="btn btn-outline-secondary">Modifier</a>
@endsection
