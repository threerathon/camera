<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Dashboard 3</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{asset('Admin/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- IonIcons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
   <!-- IonIcons -->
   <link rel="stylesheet" href="https://mdbootstrap.com/docs/b4/jquery/getting-started/cdn/">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('Admin/dist/css/adminlte.min.css')}}">
  <link rel="stylesheet" href="{{asset('css/admin.css')}}">
  <style>
    @font-face {
        src: url('../../../font/Lato-Regular.ttf');
        font-family: "Lato-Regular";
    }
    @font-face {
        src: url('../../../font/Lato-Bold.ttf');
        font-family: "Lato-Bold";
    }
    h1,h2,h3,h4,h5,h6{
        font-family: "Lato-Bold" !important;
    }
    body{
        ffont-family: "Lato-Regular" !important;
    }
    td,th {
     vertical-align: middle !important;
    }
  </style>
</head>
@livewireStyles
<!--
`body` tag options:

  Apply one or more of the following classes to to the body tag
  to get the desired effect

  * sidebar-collapse
  * sidebar-mini
-->
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  @include('partial.navbar')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @include('partial.main_sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    {{$main}}
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  @include('partial.control_sidebar')
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  @include('partial.footer')
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
@livewireScripts
<!-- jQuery -->
<script src="{{asset('Admin/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap -->
<script src="{{asset('Admin/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<!-- AdminLTE -->
<script src="{{asset('Admin/dist/js/adminlte.js')}}"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="{{asset('Admin/plugins/chart.js')}}/Chart.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('Admin/dist/js/demo.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('Admin/dist/js/pages/dashboard3.js')}}"></script>

</body>
</html>

