<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="{{ route('accueil') }}">Portfolio SIO</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav"
      aria-expanded="false"
      aria-label="Afficher la navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
      <div class="navbar-nav">
        <a class="nav-link {{ request()->routeIs('accueil') ? 'active' : '' }}" href="{{ route('accueil') }}">
          Accueil
        </a>

        <a class="nav-link {{ request()->routeIs('competences.*') ? 'active' : '' }}" href="{{ route('competences.index') }}">
          Compétences
        </a>

        <a class="nav-link {{ request()->routeIs('apropos') ? 'active' : '' }}" href="{{ route('apropos') }}">
          À propos
        </a>

        <a class="nav-link" href="#">
          Contact
        </a>
      </div>
    </div>
  </div>
</nav>
