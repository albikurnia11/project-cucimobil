<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Admin - CuciMobil</title>
  <!-- Custom fonts for this template-->
  <link href="{{url('admin/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="{{url('admin/vendor/datatables/dataTables.bootstrap4.css')}}" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="{{url('admin/css/sb-admin.css')}}" rel="stylesheet">

</head>

<body id="page-top">
    @include('header')
  <div id="wrapper">
    <!-- Sidebar -->
    @include('sidebar')
    <div id="content-wrapper">
      <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
          @yield('content')
          </li>
        </ol>
      <!-- /.container-fluid -->
      <!-- Sticky Footer -->
      <footer class="sticky-footer">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright © CuciMobil - Malang</span>
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
  <script src="{{url('admin/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{url('admin/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <!-- Core plugin JavaScript-->
  <script src="{{url('admin/vendor/jquery-easing/jquery.easing.min.js')}}"></script>
  <!-- Page level plugin JavaScript-->
  <script src="{{url('admin/vendor/chart.js/Chart.min.js')}}"></script>
  <script src="{{url('admin/vendor/datatables/jquery.dataTables.js')}}"></script>
  <script src="{{url('admin/vendor/datatables/dataTables.bootstrap4.js')}}"></script>
  <!-- Custom scripts for all pages-->
  <script src="{{url('admin/js/sb-admin.min.js')}}"></script>
  <!-- Demo scripts for this page-->
  <script src="{{url('admin/js/demo/datatables-demo.js')}}"></script>
  <script src="{{url('admin/js/demo/chart-area-demo.js')}}"></script>

</body>

</html>
