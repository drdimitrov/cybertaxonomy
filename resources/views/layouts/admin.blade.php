<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Cybertaxonomy admin</title>

  <!-- Custom fonts for this template-->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  -->

  <!-- Custom styles for this template-->
  <link href="/css/sb-admin.css" rel="stylesheet">

</head>

<body id="page-top">

  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="/">Back to the site</a>

  </nav>

  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.picture') }}">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Add new picture</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.paper') }}">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Add new paper</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.news') }}">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Add news</span></a>
      </li>
    </ul>

    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        @yield('bredcrumbs')

        <!-- Page Content -->
        @yield('content')


      </div>
      <!-- /.container-fluid -->

      <!-- Sticky Footer -->
      <footer class="sticky-footer">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright © Cybertaxonomy {{ date('Y') }}</span>
          </div>
        </div>
      </footer>

    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Bootstrap core JavaScript-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Tinymce plugin JavaScript-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/5.0.3/tinymce.min.js"></script>
  <script>
    tinymce.init({
      selector: '#news_content'
    });
  </script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin.min.js"></script>

</body>

</html>
