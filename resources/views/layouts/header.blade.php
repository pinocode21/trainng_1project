<header>
    <!-- Navigation -->
    <nav class="top-menu-container">
        <div class="logo-header">
            <a href="">
                <img
                src="{{ asset('storage/me.JPG') }}"
                alt="Logo personal portfolio"
                title="Logo personal portfolio"
                width="250"
                />
            </a>
        </div>

        <ul>
            <li>
                <a  href=""
                    class="{{ request()->is('/') ? 'active' : '' }}">
                    Home
                </a>
            </li>
            <li>
                <a  href=""
                    class="{{ request()->is('about') ? 'active' : '' }}">
                    About
                </a>
            </li>
            <li>
                <a href="#">Portfolio</a>
            </li>
            <li>
                <a href="#">Contact</a>
            </li>
        </ul>
    </nav> 
</header>