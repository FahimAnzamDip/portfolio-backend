<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Register | {{ config('app.name', 'Laravel') }}</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <!-- Scripts -->
@vite(['resources/scss/style.scss', 'resources/js/app.js'])
<body>
<!-- Main Content Start -->
<main>
    <div class="container-fluid m-0 p-0">
        <div class="row">
            <div class="col-md-7">
                <img class="w-100 h-auto w-md-100 vh-md-100" src="https://images.pexels.com/photos/2693212/pexels-photo-2693212.png?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="">
            </div>
            <div class="col-md-5">
                <section class="vh-lg-100 mt-5 mt-lg-0 bg-soft d-flex align-items-center">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-12 d-flex flex-column align-items-center justify-content-center">
                                <!-- App Logo -->
                                <div class="d-flex justify-content-center align-items-center mb-5">
                                    <img width="170" src="{{ asset('backend/images/app-logo-dark.png') }}" alt="App Logo">
                                </div>
                                <div class="bg-white shadow border-0 rounded border-light p-4 p-lg-5 w-100 fmxw-500">
                                    <div class="mb-4 mt-md-0">
                                        <h1 class="mb-0 h3">Create an Account </h1>
                                    </div>
                                    @if($errors->any())
                                    {{ $errors }}
                                    @endif
                                    <form action="{{ route('register') }}" class="mt-4" method="POST">
                                        @csrf

                                        <div class="form-group mb-4">
                                            <label for="name">Your Name</label>
                                            <div class="input-group">
                                                    <span class="input-group-text" id="basic-addon1">
                                                        <i class="bi bi-person-fill fs-5"></i>
                                                    </span>
                                                <input type="text" name="name" class="form-control" placeholder="ex: Jhon Doe" id="name"
                                                       autofocus required value="{{ old('name') }}">
                                                @error('name')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <!-- Form -->
                                        <div class="form-group mb-4">
                                            <label for="email">Your Email</label>
                                            <div class="input-group">
                                                    <span class="input-group-text" id="basic-addon1">
                                                        <i class="bi bi-envelope-fill fs-5"></i>
                                                    </span>
                                                <input type="email" name="email" class="form-control" placeholder="example@company.com" id="email"
                                                       autofocus required value="{{ old('email') }}">
                                                @error('email')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <!-- End of Form -->
                                        <div class="form-group">
                                            <!-- Form -->
                                            <div class="form-group mb-4">
                                                <label for="password">Your Password</label>
                                                <div class="input-group">
                                                        <span class="input-group-text" id="basic-addon2">
                                                            <i class="bi bi-lock-fill fs-5"></i>
                                                        </span>
                                                    <input type="password" name="password" placeholder="Password" class="form-control" id="password"
                                                           required>
                                                    @error('password')
                                                    <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <!-- End of Form -->
                                            <!-- Form -->
                                            <div class="form-group mb-4">
                                                <label for="password-confirm">Confirm Password</label>
                                                <div class="input-group">
                                                        <span class="input-group-text" id="basic-addon2">
                                                            <i class="bi bi-lock-fill fs-5"></i>
                                                        </span>
                                                    <input type="password" name="password_confirmation" placeholder="Confirm Password" class="form-control"
                                                           id="password-confirm" required>
                                                    @error('password_confirmation')
                                                    <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <!-- End of Form -->
                                        </div>
                                        <div class="d-grid">
                                            <button type="submit" class="btn btn-secondary fw-bolder">Sign up</button>
                                        </div>
                                    </form>
                                    <div class="d-flex justify-content-center align-items-center mt-4">
                                            <span class="fw-normal">
                                                Already have an account?
                                                <a href="{{ route('login') }}" class="fw-bold">Login here</a>
                                            </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</main>
<!-- Main Content End -->
</body>
</html>
