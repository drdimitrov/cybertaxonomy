<!doctype html>
<html lang="en" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Cybertaxonomy">
    <meta name="author" content="Dragomir Dimitrov">
    <title>Cybertaxonomy</title>

    <link rel="canonical" href="https://cybertaxonomy.test">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.6/jquery.fancybox.min.css">

    <!-- Custom styles for this template -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  </head>
  <body class="d-flex flex-column h-100">

    <header>
      <!-- Fixed navbar -->
      @include('partials.navigation')
    </header>

    <!-- Begin page content -->
    <main role="main" class="flex-shrink-0">
      <div class="jumbotron jumbotron-fluid">
        <div class="container">
          <h1 class="display-4">Cybertaxonomy</h1>
          <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
        </div>
      </div>

      @yield('content')

    </main>

    <div style="min-height: 50px;"></div>

    <footer class="footer mt-auto py-3">
      <div class="container">
        <div class="row">
          <div class="col">
            <h4>Partners:</h4>
            <a href="https://www.fni.bg/" target="_blank">
              <img src="{{ asset('/images/fni.png') }}" width="250" alt="fni">
            </a>
          </div>
        </div>
      </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.6/jquery.fancybox.min.js"></script>

    @yield('scripts')
  </body>
</html>
