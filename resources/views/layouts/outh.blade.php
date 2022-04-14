<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Log in (v2)</title>

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
  <link rel="stylesheet" href="{{asset('/css/custom.css')}}">
  @livewireStyles
</head>

<body class="hold-transition login-page">
    {{$slot}}
    @livewireScripts
<!-- jQuery -->
<script src="{{asset('Admin/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap -->
<script src="{{asset('Admin/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE -->
<script src="{{asset('Admin/dist/js/adminlte.js')}}"></script>

<!-- AdminLTE for demo purposes -->
<script src="{{asset('Admin/dist/js/demo.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('Admin/dist/js/pages/dashboard3.js')}}"></script>
</body>
</html>
