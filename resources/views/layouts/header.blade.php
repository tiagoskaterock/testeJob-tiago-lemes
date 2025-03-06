<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{ env('APP_NAME') }}</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('lte') }}/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('lte') }}/dist/css/adminlte.min.css">

  <link rel="icon" type="image/png" href="{{ asset('img/favicon.webp') }}">

</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">

      <!-- Messages Dropdown Menu -->
      <li class="nav-item">
		    <a class="nav-link" title="Sair" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
		        <i class="fas fa-sign-out-alt"></i> Sair
		    </a>
		    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
		       @csrf
		    </form>
			</li>

    </ul>
  </nav>
  <!-- /.navbar -->