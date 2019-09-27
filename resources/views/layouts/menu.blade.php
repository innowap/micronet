<li class="nav-item {{ Request::is('users*') ? 'active' : '' }}">
    <a class="nav-link" href="{!! route('users.index') !!}">
        <i class="nav-icon icon-cursor"></i>
        <span>Users</span>
    </a>
</li>
<li class="nav-item {{ Request::is('departments*') ? 'active' : '' }}">
    <a class="nav-link" href="{!! route('departments.index') !!}">
        <i class="nav-icon icon-cursor"></i>
        <span>Departments</span>
    </a>
</li>
<li class="nav-item {{ Request::is('projects*') ? 'active' : '' }}">
    <a class="nav-link" href="{!! route('projects.index') !!}">
        <i class="nav-icon icon-cursor"></i>
        <span>Projects</span>
    </a>
</li>
