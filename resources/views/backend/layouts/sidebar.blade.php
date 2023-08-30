<!-- Sidebar Menu Start -->
<nav class="navbar navbar-dark navbar-theme-primary px-4 col-12 d-lg-none">
    <!-- Toggled Logo Start -->
    <a class="navbar-brand me-lg-5" href="{{ route('dashboard') }}">
        <!-- dark -->
        <img class="navbar-brand-dark" src="{{ asset('backend/images/app-logo-dark.png') }}" alt="App logo"/>
        <!-- light -->
        <img class="navbar-brand-light" src="{{ asset('backend/images/app-logo.png') }}" alt="App logo"/>
    </a>
    <!-- Toggled Logo End -->
    <!-- Siderbar Toggler Start -->
    <div class="d-flex align-items-center">
        <button class="navbar-toggler d-lg-none collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false"
                aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
    <!-- Sidebar Toggler End -->
</nav>

<nav id="sidebarMenu" class="sidebar d-lg-block text-white collapse simplebar-scrollable-y m-md-3 rounded shadow"
     data-simplebar>
    <div class="sidebar-inner px-4 pt-3">
        <!-- Mobile Nav Top Start -->
        <div
            class="user-card d-flex d-md-none align-items-center justify-content-between justify-content-md-center pb-4">
            <div class="d-flex align-items-center">
                <div class="avatar-lg me-4">
                    <img src="{{ auth()->user()->getFirstMediaUrl() }}"
                         class="card-img-top rounded-circle border-white" alt="Bonnie Green">
                </div>
                <div class="d-block">
                    <h2 class="h5 mb-3">Hi, {{ auth()->user()->name }}</h2>
                    <a href="#"
                       onclick="event.preventDefault();document.getElementById('logout-form-responsive').submit();"
                       class="btn btn-secondary btn-sm d-inline-flex align-items-center">
                        <svg class="icon icon-xxs me-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                             xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1">
                            </path>
                        </svg>
                        Logout
                        <form id="logout-form-responsive" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </a>
                </div>
            </div>
            <div class="collapse-close d-md-none">
                <a href="#sidebarMenu" data-bs-toggle="collapse" data-bs-target="#sidebarMenu"
                   aria-controls="sidebarMenu" aria-expanded="true" aria-label="Toggle navigation">
                    <i class="bi bi-x fs-2"></i>
                </a>
            </div>
        </div>
        <!-- Mobile Nav Top End -->
        <ul class="nav flex-column pt-3 pt-md-0">
            <!-- Logo Start -->
            <li class="nav-item">
                <a href="index.html" class="nav-link d-flex align-items-center justify-content-center">
                    <img class="app-logo" width="100" src="{{ asset('backend/images/app-logo.png') }}" alt="App Logo">
                    <img class="contracted-app-logo" width="50" src="{{ asset('backend/images/app-logo.png') }}" alt="App Logo">
                </a>
            </li>
            <!-- Logo End -->

            <li role="separator" class="dropdown-divider mb-4 border-gray-800 border-4 rounded"></li>

            <!-- Menu Start -->
            <li class="nav-item active">
                <a href="{{ route('dashboard') }}" class="nav-link d-flex align-items-center">
                        <span class="sidebar-icon d-flex align-items-center">
                            <i class="bi bi-bounding-box"></i>
                        </span>
                    <span class="sidebar-text d-inline-block">Dashboard</span>
                </a>
            </li>
            <!-- Menu End -->
        </ul>
    </div>
</nav>
<!-- Sidebar Menu End -->
