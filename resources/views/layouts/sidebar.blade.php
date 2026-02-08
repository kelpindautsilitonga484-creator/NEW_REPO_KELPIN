<aside class="sidebar">
    <ul class="sidebar-menu">
        <li>
            <a href="/dashboard" class="{{ request()->is('dashboard') ? 'active' : '' }}">
                Dashboard
            </a>
        </li>
        <li>
            <a href="/settings" class="{{ request()->is('settings') ? 'active' : '' }}">
                Settings
            </a>
        </li>
        <li>
            <a href="/profile" class="{{ request()->is('profile') ? 'active' : '' }}">
                Profile
            </a>
        </li>
    </ul>
</aside>
