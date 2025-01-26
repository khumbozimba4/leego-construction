<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item nav-category">MENU</li>

        <li class="nav-item">
            <a class="nav-link" href="{{ route('dashboard') }}">
                <span class="icon-bg"><i class="fa fa-tachometer menu-icon"></i></span>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{ route('projects.index') }}">
                <span class="icon-bg"><i class="fa fa-folder menu-icon"></i></span>
                <span class="menu-title">Projects</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{ route('quotations.index') }}">
                <span class="icon-bg"><i class="fa fa-file-text menu-icon"></i></span>
                <span class="menu-title">Quotations</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{ route('messages.index') }}">
                <span class="icon-bg"><i class="fa fa-envelope menu-icon"></i></span>
                <span class="menu-title">User Messages</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{ route('equipments.index') }}">
                <span class="icon-bg"><i class="fa fa-cogs menu-icon"></i></span>
                <span class="menu-title">Lending Equipments</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{ route('services.index') }}">
                <span class="icon-bg"><i class="fa fa-wrench menu-icon"></i></span>
                <span class="menu-title">Services</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{ route('settings.index') }}">
                <span class="icon-bg"><i class="fa fa-cog menu-icon"></i></span>
                <span class="menu-title">Settings</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{ route('sliders.index') }}">
                <span class="icon-bg"><i class="fa fa-images menu-icon"></i></span>
                <span class="menu-title">Sliders</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{ route('teams.index') }}">
                <span class="icon-bg"><i class="fa fa-users menu-icon"></i></span>
                <span class="menu-title">Company Teams</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{ route('users') }}">
                <span class="icon-bg"><i class="fa fa-user menu-icon"></i></span>
                <span class="menu-title">Users</span>
            </a>
        </li>
    </ul>
</nav>
