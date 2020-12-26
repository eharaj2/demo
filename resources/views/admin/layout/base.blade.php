<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html  lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Demo Shop | Admin</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{asset('public/theme/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('public/theme/dist/css/adminlte.min.css')}}">
<!-- Datatable style -->
  <link rel="stylesheet" href="{{asset('public/theme/plugins/datatables-bs4/css/dataTables.bootstrap4.css')}}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <style type="text/css">
    
  </style>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
@include('admin.includes.header')

@include('admin.includes.menu')
  
@yield('content')

@include('admin.includes.footer')
  
  <!-- /.navbar -->

  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{asset('public/theme/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('public/theme/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('public/theme/dist/js/adminlte.min.js')}}"></script>
<script src="{{asset('public/theme/plugins/datatables/jquery.dataTables.js')}}"></script>
      <script src="{{asset('public/theme/plugins/datatables-bs4/js/dataTables.bootstrap4.js')}}"></script>
<script src="{{asset('public/theme//plugins/bs-custom-file-input/bs-custom-file-input.min.js')}}"></script>
  
            @yield ('scripts')
   
</body>
</html>