<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="/">
            <img src="/img/logo.png" width="25vh" alt="" class="my-auto mb-1" />
        </a>
        <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarNav"
            aria-controls="navbarNav"
            aria-expanded="false"
            aria-label="Toggle navigation"
        >
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item ms-2">
                    <a
                        class="nav-link {{ Request::is('/') ? 'active' : ''}}"
                        href="/"
                        >Vac.Sean</a
                    >
                </li>
                <li class="nav-item ms-2">
                    <a
                        class="nav-link {{ Request::is('posts*') ? 'active' : ''}} ? 'active' : ''"
                        href="/posts"
                        >Place</a
                    >
                </li>
                <li class="nav-item ms-2">
                    <a
                        class="nav-link {{ Request::is('posts*') ? 'active' : ''}} ? 'active' : ''"
                        href="/posts"
                        >Stories</a
                    >
                </li>
                <li class="nav-item ms-2">
                    <a
                        class="nav-link {{ Request::is('categories') ? 'active' : ''}}"
                        href="/categories"
                        >Country</a
                    >
                </li>
                <li class="nav-item ms-2">
                    <a
                        class="nav-link {{ Request::is('about') ? 'active' : ''}}"
                        href="/about"
                        >About</a
                    >
                </li>
            </ul>
            <ul class="navbar-nav ms-auto">
                @auth
                <li class="nav-item dropdown">
                    <a
                        class="nav-link dropdown-toggle"
                        href="#"
                        id="navbarDropdown"
                        role="button"
                        data-bs-toggle="dropdown"
                        aria-expanded="false"
                    >
                        Hi, {{ auth()->user()->name }}
                    </a>
                    <ul
                        class="dropdown-menu bg-light text-dark"
                        aria-labelledby="navbarDropdown"
                    >
                        <li>
                            <a class="dropdown-item" href="/dashboard">
                                <i
                                    class="bi bi-layout-text-sidebar-reverse"
                                ></i>
                                My Dashboard</a
                            >
                        </li>
                        <li>
                            <hr class="dropdown-divider" />
                        </li>
                        <li>
                            <form action="/logout" method="POST">
                                @csrf
                                <button type="submit" class="dropdown-item">
                                    <i class="bi bi-box-arrow-right"></i>
                                    Logout
                                </button>
                            </form>
                        </li>
                    </ul>
                </li>
                @else
                <li class="nav-item ms-2">
                    <a
                        href="/login"
                        class="nav-link {{ Request::is('login') ? 'active' : ''}}"
                    >
                        <i class="bi bi-box-arrow-in-right"></i>
                        Login
                    </a>
                </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>
