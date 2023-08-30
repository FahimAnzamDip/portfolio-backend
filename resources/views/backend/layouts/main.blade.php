<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') | {{ config('app.name', 'Laravel') }}</title>

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('backend/images/vite.svg') }}">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <!-- Scripts -->
    @vite(['resources/scss/style.scss', 'resources/js/app.js'])

    @stack('page_css')
</head>
<body>
<div class="position-fixed bg-primary bg-pattern-1 w-100 fmxh-300 z--1"></div>

@include('backend.layouts.sidebar')

<!-- Main Content Start -->
<main class="content d-flex flex-column justify-content-between" style="min-height: 100vh;">
    <div class="upper-section">
        @include('backend.layouts.topbar')

        @yield('content')
    </div>

    <div class="lower-section">
        @include('backend.layouts.footer')
    </div>
</main>
<!-- Main Content End -->

@include('sweetalert::alert')

@stack('page_js')
</body>
</html>
