<!-- Topbar Start -->
<nav class="navbar navbar-top navbar-expand navbar-dashboard navbar-dark px-3 bg-white mt-3 py-2 mb-4 shadow">
    <div class="container-fluid px-0">
        <div class="d-flex justify-content-between w-100" id="navbarSupportedContent">
            <div class="d-flex align-items-center">
                <!-- Toggle Button -->
                <button id="sidebar-toggle"
                        class="sidebar-toggle bg-gray-100 shadow me-3 btn btn-icon-only d-none d-lg-inline-block align-items-center justify-content-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24">
                        <path d="M4 11h12v2H4zm0-5h16v2H4zm0 12h7.235v-2H4z"></path>
                    </svg>
                </button>
                <!-- View Site Button -->
                <a href="#" target="_blank" class="btn btn-primary d-flex align-items-center">
                    <span>View Site</span>
                    <i class="bi bi-globe icon icon-xs ms-2"></i>
                </a>
                @yield('breadcrumb')
            </div>
            <!-- Navbar links -->
            <!-- Notification Start -->
            <div class="d-flex align-items-center">
                <ul class="navbar-nav align-items-center">
                    <li class="nav-item dropdown">
                        <!-- Add unread class for red icon -->
                        <a class="nav-link text-dark notification-bell dropdown-toggle"
                           data-unread-notifications="true" href="#" role="button" data-bs-toggle="dropdown"
                           data-bs-display="static" aria-expanded="false">
                            <svg class="icon icon-sm text-gray-600" fill="currentColor" viewBox="0 0 20 20"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z">
                                </path>
                            </svg>
                        </a>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-center mt-2 py-0">
                            <div class="list-group list-group-flush">
                                <a href="#"
                                   class="text-center text-primary fw-bold border-bottom border-light py-3">Notifications</a>
                                <a href="#" class="list-group-item list-group-item-action border-bottom">
                                    <div class="row align-items-center justify-content-center">
                                        No Notifications Available
                                    </div>
                                </a>
                                <a href="#" class="dropdown-item text-center fw-bold rounded-bottom py-3">
                                    <svg class="icon icon-xxs text-gray-400 me-1" fill="currentColor"
                                         viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"></path>
                                        <path fill-rule="evenodd"
                                              d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z"
                                              clip-rule="evenodd"></path>
                                    </svg>
                                    View all
                                </a>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown ms-lg-3">
                        <a class="nav-link dropdown-toggle pt-2 px-0 bg-gray-100 px-3 blur-5 rounded shadow"
                           href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <div class="media d-flex align-items-center">
                                <img class="avatar rounded-circle border-2 border-primary" alt="User Image"
                                     src="{{ auth()->user()->getFirstMediaUrl() }}">
                                <div class="media-body ms-2 text-dark align-items-center d-none d-lg-block">
                                    <span class="mb-0 font-small fw-bolder text-gray-900">{{ auth()->user()->name }}</span>
                                    <span class="text-success">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                     fill="currentColor" class="bi bi-caret-down-fill"
                                                     viewBox="0 0 16 16">
                                                    <path
                                                        d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
                                                </svg>
                                            </span>
                                </div>
                            </div>
                        </a>
                        <div class="dropdown-menu dashboard-dropdown dropdown-menu-end mt-2 py-1">
                            <a class="dropdown-item d-flex align-items-center" href="{{ route('profile.edit') }}">
                                <i class="bi bi-person-circle fs-5 text-muted me-2"></i>
                                My Profile
                            </a>
                            <div role="separator" class="dropdown-divider my-1 border-gray-200"></div>
                            <a class="dropdown-item d-flex align-items-center" href="#" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                <i class="bi bi-box-arrow-right fs-5 text-danger me-2"></i>
                                Logout
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </a>

                        </div>
                    </li>
                </ul>
                <!-- Notification End -->
            </div>
        </div>
    </div>
</nav>
<!-- Topbar End -->
