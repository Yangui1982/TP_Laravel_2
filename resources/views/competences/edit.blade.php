@extends('layouts.app')
@section('content')
	<h1 class="mb-4">Modifier : {{ $competence->nom }}</h1>
	<form action="{{ route('competences.update', $competence) }}" method="POST">
    	@csrf
    	@method('PUT')
    	@include('competences._form', ['competence' => $competence])
	</form>
@endsection
