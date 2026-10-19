<!DOCTYPE HTML>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body class="bg-light">
    <div class="container-fluid p-0">
      <div class="row g-0">
        <div class="col-md-6 border border-secondary bg-primary text-white py-3 px-4">
            <h4 class="mb-0">UTS PWL</h4>
        </div>
        <div class="col-md-6 border border-secondary bg-secondary text-white py-3 px-4 text-md-end">
            <small>Selamat Datang, Mahasiswa!</small>
        </div>
      </div>

      <div class="row g-0">
        <div class="col-md-2 border border-secondary bg-light vh-100 p-3">
          @hasSection('nav-left')
            @yield('nav-left')
          @else
            @include('main.nav')
          @endif
        </div>

        <div class="col-md-8 border border-secondary bg-white vh-100">
          @yield('article')
        </div>

        <div class="col-md-2 border border-secondary bg-light vh-100 p-3">
          @hasSection('nav-right')
            @yield('nav-right')
          @else
            @include('main.nav')
          @endif
        </div>
      </div>

      <div class="row g-0">
        <div class="col-md-12 border border-secondary bg-dark text-white py-3 px-4 text-center">
          <small>© 2026 Footer - UTS PWL</small>
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>