@if($errors->any())
	<div class="alert alert-danger">
    <ul class="mb-0">
      @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
	</div>
@endif

<div class="mb-3">
	<label class="form-label">Slug (identifiant URL)</label>
	<input type="text" name="slug" class="form-control" value="{{ old('slug', $competence->slug ?? '') }}" required>
</div>

<div class="mb-3">
	<label class="form-label">Nom</label>
	<input type="text" name="nom" class="form-control" value="{{ old('nom', $competence->nom ?? '') }}" required>
</div>

<div class="mb-3">
	<label class="form-label">Niveau</label>
	<input type="text" name="niveau" class="form-control" value="{{ old('niveau', $competence->niveau ?? '') }}" required>
</div>

<div class="mb-3">
	<label class="form-label">Description</label>
	<textarea name="description" class="form-control" rows="4" required>{{ old('description', $competence->description ?? '') }}</textarea>
</div>

<button type="submit" class="btn btn-primary">Enregistrer</button>
