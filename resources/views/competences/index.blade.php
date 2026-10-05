@extends('layouts.app')
@section('titre', 'Mes compétences - Portfolio SIO')
@section('content')
  <div class="d-flex justify-content-between align-items-center mb-4">
    <h1 class="mb-0">Mes compétences</h1>
    <a href="{{ route('competences.create') }}" class="btn btn-primary">+ Ajouter</a>
  </div>

  @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
  @endif

  <div class="row">
   	@foreach($competences as $competence)
     	<div class="col-md-4 mb-3">
     	  <div class="card h-100">
         	<div class="card-body">
           	<h2 class="card-title h5">
             	<a href="{{ route('competences.show', $competence) }}">{{ $competence->nom }}</a>
           	</h2>
           	<span class="badge bg-secondary">{{ $competence->niveau }}</span>
           	<div class="mt-3 d-flex gap-2">
             	<a href="{{ route('competences.edit', $competence) }}" class="btn btn-sm btn-outline-secondary">Modifier</a>
             	<form action="{{ route('competences.destroy', $competence) }}" method="POST" onsubmit="return confirm('Supprimer cette compétence ?');">
               	@csrf
               	@method('DELETE')
               	<button type="submit" class="btn btn-sm btn-outline-danger">Supprimer</button>
             	</form>
           	</div>
         	</div>
       	</div>
     	</div>
   	@endforeach
	</div>
@endsection
