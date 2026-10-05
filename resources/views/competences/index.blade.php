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
    @forelse($competences as $competence)
      <x-carte-competence :slug="$competence->slug" :nom="$competence->nom" :niveau="$competence->niveau" :description="$competence->description" :numero="$loop->iteration"/>
    @empty
      <div class="col-12">
        <div class="alert alert-info">
            Aucune compétence disponible.
        </div>
      </div>
    @endforelse
  </div>
@endsection
