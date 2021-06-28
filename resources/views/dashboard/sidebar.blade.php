<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
        <a href="{{ route('dashboard') }}">{{ config('app.name')}}</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
        <a href="index.html">LB</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="{{Route::currentRouteName() == 'dashboard' ? 'active': ''}}">
                <a href="{{ route('dashboard') }}" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a>
            </li>
            <li class="menu-header">Features</li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="far fa-user"></i> <span>Users</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{ route('user.index') }}">List Users</a></li>
                    <li><a class="nav-link" href="{{ route('user.create') }}">Add User</a></li>
                </ul>
            </li>


        </ul>
    </aside>
</div>
