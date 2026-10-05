@extends('layouts.app')
@section('content')
	<h1 class="mb-4">Nouvelle compétence</h1>
	<form action="{{ route('competences.store') }}" method="POST">
    @csrf
    @include('competences._form', ['competence' => null])
	</form>
@endsection
