<nav
    id="sidebarMenu"
    class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse mt-md-0"
    style="margin-top: -80px"
>
    <div class="position-sticky pt-3">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a
                    class="nav-link {{ Request::is('dashboard') ? 'active' : ''
         }}"
                    aria-current="page"
                    href="/dashboard"
                >
                    <span data-feather="home"></span>
                    Dashboard
                </a>
            </li>

            <li class="nav-item">
                <a
                    class="nav-link {{ Request::is('dashboard/stories*') ? 'active' : ''
         }}"
                    href="/dashboard/stories"
                >
                    <span data-feather="file-text"></span>
                    My Stories
                </a>
            </li>

            <li class="nav-item">
                <form action="/logout" method="POST">
                    @csrf
                    <button
                        type="submit"
                        class="
                            nav-link
                            border-0
                            bg-light
                            fixed-bottom
                            mb-5 mb-sm-5
                        "
                    >
                        <span data-feather="log-out"></span>
                        Logout
                    </button>
                </form>
            </li>
        </ul>
        @can('admin')
        <h6
            class="
                sidebar-heading
                d-flex
                justify-content-between
                align-items-center
                px-3
                mt-4
                mb-1
                text-muted
            "
        >
            <span>Administrator</span>
        </h6>
        <ul class="nav flex-column">
            <li class="nav-item">
                <a
                    class="nav-link {{ Request::is('dashboard/places*') ? 'active' : ''
                     }}"
                    href="/dashboard/places"
                >
                    <span data-feather="grid"></span>Places</a
                >
            </li>
        </ul>
        @endcan
    </div>
</nav>
