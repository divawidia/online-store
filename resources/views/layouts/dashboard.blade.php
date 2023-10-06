<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />
        <meta name="description" content="" />
        <meta name="author" content="" />

        <title>@yield('title')</title>

        {{-- style --}}
        @stack('prepend-style')
        @include('includes.style')
        @stack('addon-style')
    </head>

    <body>
        <div class="page-dashboard">
            <div class="d-flex" id="wrapper" data-aos="fade-right">
                <div class="border-right" id="sidebar-wrapper">
                    <div class="sidebar-heading text-center">
                        <img src="/images/dashboard-store-logo.svg" alt="" class="my-4" />
                    </div>
                    <div class="list-group list-group-flush">
                        <a
                            href="{{ route('dashboard') }}"
                            class="list-group-item list-group-item-action"
                        >Dashboard</a
                        >
                        <a
                            href="{{ route('dashboard-product') }}"
                            class="list-group-item list-group-item-action"
                        >My Products</a
                        >
                        <a
                            href="/dashboard-transactions.html"
                            class="list-group-item list-group-item-action"
                        >Transactions</a
                        >
                        <a
                            href="/dashboard-settings.html"
                            class="list-group-item list-group-item-action"
                        >Store Settings</a
                        >
                        <a
                            href="/dashboard-account.html"
                            class="list-group-item list-group-item-action"
                        >My Account</a
                        >
                        <a href="/index.html" class="list-group-item list-group-item-action"
                        >Sign Out</a
                        >
                    </div>
                </div>
                <div id="page-content-wrapper">
                    <nav
                        class="navbar navbar-expand-lg navbar-light navbar-store fixed-top"
                        data-aos="fade-down"
                    >
                        <div class="container-fluid">
                            <button
                                class="btn btn-secondary d-md-none mr-auto mr-2"
                                id="menu-toggle"
                            >
                                Menu
                            </button>
                            <button
                                class="navbar-toggler"
                                type="button"
                                data-toggle="collapse"
                                data-target="#navbarSupportedContent"
                            >
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <!-- Desktop Menu -->
                                <ul class="navbar-nav d-none d-lg-flex ml-auto">
                                    <li class="nav-item dropdown">
                                        <a
                                            href="#"
                                            class="nav-link"
                                            id="navbarDropdown"
                                            role="button"
                                            data-toggle="dropdown"
                                        >
                                            <img
                                                src="/images/user.png"
                                                alt=""
                                                class="rounded-circle mr-2 profile-picture"
                                            />
                                            Hi, Dipa
                                        </a>
                                        <div class="dropdown-menu">
                                            <a href="/dashboard.html" class="dropdown-item"
                                            >Dashboard</a
                                            >
                                            <a href="/dashboard-account.html" class="dropdown-item"
                                            >Setting</a
                                            >
                                            <div class="dropdown-divider"></div>
                                            <a href="/" class="dropdown-item">Log Out</a>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link d-inline-block mt-2">
                                            <img src="/images/icon-cart-filled.svg" alt="" />
                                            <div class="card-badge">3</div>
                                        </a>
                                    </li>
                                </ul>

                                <ul class="navbar-nav d-block d-lg-none">
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">Hi, Dipa</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link d-inline-block">Cart</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>

                    @yield('content')
                </div>
            </div>
        </div>
        <!-- Bootstrap core JavaScript -->
        @stack('prepend-script')
        @include('includes.script')
        @push('addon-script')
            <script>
                $("#menu-toggle").click(function (e) {
                    e.preventDefault();
                    $("#wrapper").toggleClass("toggled");
                });
            </script>
        @endpush
        @stack('addon-script')
    </body>
</html>
