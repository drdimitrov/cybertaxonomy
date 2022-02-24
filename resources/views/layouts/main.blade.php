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
          <h1 class="display-4 project-name">Cybertaxonomy</h1>
          <p class="lead" style="color: #e6b800; font-size: 1.3em;">Cybertaxonomic approach to phylogenetic studies of model invertebrate genera (Invertebrata, Arachnida, Insecta) clarifyng the problems of origin, formation and conservation of the Invertebrate Fauna of the Balkan Peninsula.</p>
        </div>
      </div>

      @yield('content')
    <img id="scroll_back_img" src="/images/bug.png" >
    </main>

    <div style="min-height: 50px;"></div>

    <footer class="footer mt-auto py-3">
      <div class="container">
        <div class="row">
          <div class="col-sm">
            <h4>Partners:</h4>
            <a href="https://www.fni.bg/" target="_blank">
              <img src="{{ asset('/images/fni.png') }}" width="250" alt="fni">
            </a>
          </div>

          <div class="col-sm">
            <h4>Platforms, linked to the project:</h4>

            <div>
              <a href="http://pselaphinae-bg.myspecies.info" target="_blank">
                The Pselaphinae of Bulgaria
              </a>
            </div>

            <div>
              <a href="http://coleoptera-bulgaria.myspecies.info" target="_blank">
                The Coleoptera of Bulgaria
              </a>
            </div>

            <div>
              <a href="http://balkan-spiders.com/" target="_blank">
                The Spiders of the Balkan Peninsula
              </a>
            </div>

            <div>
              <a href="https://smartbirds.org" target="_blank">
                Smart birds
              </a>
            </div>
          </div>

          <div class="col-sm">
            <h4>Additional links:</h4>

            <div>
              <a href="https://www.gbif.org/" target="_blank">
                GBIF | Global Biodiversity Information Facility
              </a>
            </div>

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
    <script>
      $('#scroll_back_img').click(function(e){
          console.log('clicked');
      });

      $(document).on( 'scroll', function(){
          if ($(window).scrollTop() > 100) {
              $('#scroll_back_img').show();
          } else {
              $('#scroll_back_img').hide();
          }
      });

      $(function(){
          $('#scroll_back_img').on('click', scrollToTop);

          //var x = parseInt($('.wrapper').first().css('padding-top')) - 15;
      });

      function scrollToTop() {
          verticalOffset = typeof(verticalOffset) != 'undefined' ? verticalOffset : 0;
          element = $('body');
          offset = element.offset();
          offsetTop = offset.top;
          window.scrollTo({ top: 0, behavior: 'smooth' });
      }
    </script>
     {!!  GoogleReCaptchaV3::init() !!}
  </body>
</html>
