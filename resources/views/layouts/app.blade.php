<!DOCTYPE html>
<html lang="fr">
  <head>
  <meta charset="UTF-8">
  <title>@yield('titre', 'Portfolio SIO')</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  </head>
  <body>
    @include('partials.header')
    <main class="container my-4">
        @yield('content')
    </main>
    @include('partials.footer')
    <!-- Bootstrap JS -->
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
    </script>
    @stack('scripts')
  </body>
</html>
