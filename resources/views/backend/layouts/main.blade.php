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

    @stack('third_party_styles')

    <!-- Scripts -->
    @vite(['resources/scss/style.scss', 'resources/js/app.js'])

    @livewireStyles

    @stack('page_css')

    <style>
        #nprogress {
            .bar {
                z-index: 2000 !important;
            }
            .spinner {
                z-index: 2000 !important;
            }
        }
    </style>
</head>
<body>
<div class="position-fixed bg-primary bg-pattern-1 w-100 fmxh-300 z--1"></div>

@include('backend.layouts.sidebar')

<!-- Main Content Start -->
<main class="content d-flex flex-column justify-content-between min-vh-100">
    <div class="upper-section">
        @include('backend.layouts.topbar')

        @yield('content')
    </div>

    <div class="lower-section">
        @include('backend.layouts.footer')
    </div>
</main>
<!-- Main Content End -->

<!-- jquery cdn -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

@include('sweetalert::alert')

@livewireScripts

@stack('page_js')
</body>
</html>
