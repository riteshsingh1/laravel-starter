<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/main.css') }}">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>{{ config('app.name') }}</title>
    @yield('css')</head>
  <body class="app sidebar-mini rtl">
    <!-- Navbar-->
    @include('layouts._partials.header')
    <!-- Sidebar menu-->
    @include('layouts._partials.sidenav')
    <main class="app-content">
     {{-- component for dashboard --}}
     @yield('content')
    </main>
   <!-- Essential javascripts for application to work-->
   <script src="{{ asset('js/app.js') }}"></script>
   <script src="{{ asset('admin/js/main.js') }}"></script>
    <!-- The javascript plugin to display page loading on top-->
   <script src="{{ asset('admin/js/plugins/pace.min.js') }}"></script>
    <!-- Page specific javascripts-->
    @yield('scripts')
  </body>
</html>