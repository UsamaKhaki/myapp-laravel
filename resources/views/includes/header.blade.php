<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard | Usama Khaki APP</title>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
    <!-- Favicon -->
    <script src="https://kit.fontawesome.com/89ad3b940c.js" crossorigin="anonymous"></script>
    <link href="{{ asset('plugins/ionicons/ionicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('plugins/typicons/typicons.css') }}" rel="stylesheet">
    <link href="{{ asset('plugins/feather-css/feather.css') }}" rel="stylesheet">
    <link href="{{ asset('plugins/flag-icon/flag-icon.min.css') }}" rel="stylesheet">
    <link href="{{ asset('plugins/select2/select2.min.css') }}" rel="stylesheet">
    <link href="{{ asset('plugins/multipleselect/multiple-select.css') }}" rel="stylesheet">
    <link href="{{ asset('plugins/sidebar/sidebar.css') }}" rel="stylesheet">
    <link href="{{ asset('plugins/switcher/switcher.css') }}" rel="stylesheet">
    <link href="{{ asset('plugins/switcher/demo.css') }}" rel="stylesheet">
    @stack('plugin-css')
    <link href="{{ asset('css/style.css?v=1.1') }}" rel="stylesheet">
    <link href="{{ asset('css/skins.css') }}" rel="stylesheet">
    <link href="{{ asset('css/dark-style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/boxed.css') }}" rel="stylesheet">
    <link href="{{ asset('css/dark-boxed.css') }}" rel="stylesheet">
</head>
<body>
<!--Loader-->
<div id="global-loader" style="display: none;">
    <img src="{{ asset('img/loader.svg') }}" class="loader-img" alt="Loader">
</div>
<!--End Loader-->
<div class="page">
    <!--Header-->
    @if(!isset($navbar))
        @include('includes.navbar')
    @endif
