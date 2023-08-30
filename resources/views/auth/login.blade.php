<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Login | {{ config('app.name', 'Laravel') }}</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <!-- Scripts -->
    @vite(['resources/scss/style.scss', 'resources/js/app.js'])
<body>
<div class="position-fixed bg-primary bg-pattern-1 w-100 fmxh-400 z--1"></div>
<!-- Main Content Start -->
<main>
    <section class="vh-lg-100 mt-5 mt-lg-0 bg-soft d-flex align-items-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 d-flex align-items-center justify-content-center">
                    <div class="bg-white shadow border-0 rounded border-light p-4 p-lg-5 w-100 fmxw-500">
                        <!-- App Logo -->
                        <div class="d-flex justify-content-center align-items-center mb-5">
                            <img width="170" src="{{ asset('backend/images/app-logo-dark.png') }}" alt="App Logo">
                        </div>
                        <form action="{{ route('login') }}" method="POST" class="mt-5">
                            @csrf
                            <!-- Form -->
                            <div class="form-group mb-4">
                                <label for="email">Your Email</label>
                                <div class="input-group">
                                        <span class="input-group-text" id="basic-addon1">
                                            <svg class="icon icon-xs text-gray-600" fill="currentColor"
                                                 viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z">
                                                </path>
                                                <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z">
                                                </path>
                                            </svg>
                                        </span>
                                    <input type="email" name="email" class="form-control" placeholder="example@company.com"
                                           id="email" autofocus required value="{{ old('email') }}">
                                </div>
                                @error('email')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <!-- End of Form -->
                            <div class="form-group">
                                <!-- Form -->
                                <div class="form-group mb-4">
                                    <label for="password">Your Password</label>
                                    <div class="input-group">
                                            <span class="input-group-text" id="basic-addon2">
                                                <svg class="icon icon-xs text-gray-600" fill="currentColor"
                                                     viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd"
                                                          d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z"
                                                          clip-rule="evenodd"></path>
                                                </svg>
                                            </span>
                                        <input type="password" name="password" placeholder="Password" class="form-control"
                                               id="password" required>
                                    </div>
                                    @error('password')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <!-- End of Form -->
                                <div class="d-flex justify-content-between align-items-top mb-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="1" id="remember" name="remember">
                                        <label class="form-check-label mb-0" for="remember">
                                            Remember me
                                        </label>
                                    </div>
                                    <div><a href="{{ route('password.request') }}" class="small text-right">Lost
                                            password?</a></div>
                                </div>
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-secondary fw-bolder text-white">Sign in</button>
                            </div>
                        </form>

                        @if(Route::has('register'))
                            <div class="d-flex justify-content-center align-items-center mt-4">
                                <span class="fw-normal">
                                    Not registered?
                                    <a href="{{ route('register') }}" class="fw-bold">Create account</a>
                                </span>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<!-- Main Content End -->
</body>
</html>
