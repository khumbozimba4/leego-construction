<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item nav-category">MENU</li>

        <li class="nav-item">
            <a class="nav-link" href="{{ route('dashboard') }}">
                <span class="icon-bg"><i class="fa fa-dashboard menu-icon"></i></span>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('dashboard') }}">
                    <span class="icon-bg"><i class="fa fa-file menu-icon"></i></span>
                    <span class="menu-title">Reports</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('projects.index') }}">
                    <span class="icon-bg"><i class="fa fa-user-circle menu-icon"></i></span>

                        <span class="menu-title">Projects</span>

                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('quotations.index') }}">
                    <span class="icon-bg"><i class="fa fa-user-circle menu-icon"></i></span>

                        <span class="menu-title">Quatations</span>

                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('messages.index') }}">
                    <span class="icon-bg"><i class="fa fa-user-circle menu-icon"></i></span>

                        <span class="menu-title">User Messages</span>

                </a>
            </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('equipments.index') }}">
                        <span class="icon-bg"><i class="fa fa-map menu-icon"></i></span>

                        <span class="menu-title">Lending Equipments</span>
                    </a>
                </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('settings.index') }}">
                    <span class="icon-bg"><i class="fa fa-address-book menu-icon"></i></span>
                    <span class="menu-title">Settings</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('sliders.index') }}">
                    <span class="icon-bg"><i class="fa fa-address-book menu-icon"></i></span>
                    <span class="menu-title">Sliders</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('teams.index') }}">
                    <span class="icon-bg"><i class="fa fa-address-book menu-icon"></i></span>
                    <span class="menu-title">Company Teams</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('dashboard') }}">
                    <span class="icon-bg"><i class="fa fa-money menu-icon"></i></span>
                    <span class="menu-title">Users </span>
                </a>
            </li>
    </ul>
</nav>
