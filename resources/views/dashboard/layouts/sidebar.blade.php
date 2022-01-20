<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ Request::is ('dashboard') ? 'active' : '' }}" aria-current="page" href="/dashboard">
                    <span data-feather="home"></span>
                    Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is ('dashboard/generateqr*') ? 'active' : '' }}" href="/dashboard/generateqr">
                    <span data-feather="file-text"></span>
                    Generate Qr Code
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is ('dashboard/register') ? 'active' : '' }}" href="/dashboard/register">
                    <span data-feather="file"></span>
                    Register
                </a>
            </li>
        </ul>
    </div>
</nav>