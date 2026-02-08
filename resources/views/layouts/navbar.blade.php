<nav class="navbar">
    <div class="nav-wrap">
        <a href="/" class="brand">KelpinApp</a>

        <ul class="nav-links">
            <li>
                <a href="/" class="{{ request()->is('/') ? 'active' : '' }}">
                    Home
                </a>
            </li>
            <li>
                <a href="/about" class="{{ request()->is('about') ? 'active' : '' }}">
                    Aboutttttt
                </a>
            </li>
            <li>
                <a href="/contact" class="{{ request()->is('contact') ? 'active' : '' }}">
                    Contact
                </a>
            </li>
        </ul>
    </div>
</nav>
