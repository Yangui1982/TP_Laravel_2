<div class="col-md-4 mb-3">
  <div class="card h-100">
    <div class="card-body">
      <small class="text-muted">
          Compétence n°{{ $numero }}
      </small>

      <h2 class="card-title h5 mt-2">
        <a href="{{ route('competences.show', $slug) }}">{{ $nom }}</a>
      </h2>

      <span class="badge {{ $couleurBadge() }}">
        {{ $niveau }}
      </span>

      @if($description)
        <p class="card-text mt-3">
            {{ $description }}
        </p>
      @endif

      <div class="mt-3 d-flex gap-2">
        <a href="{{ route('competences.edit', $slug) }}" class="btn btn-sm btn-outline-secondary">
          Modifier
        </a>

        <form action="{{ route('competences.destroy', $slug) }}" method="POST" onsubmit="return confirm('Supprimer cette compétence ?');">
            @csrf
            @method('DELETE')

          <button type="submit" class="btn btn-sm btn-outline-danger">
            Supprimer
          </button>
        </form>
      </div>
    </div>
  </div>
</div>
