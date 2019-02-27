<nav class="tabs is-boxed" style="margin-bottom:0">
    <div class="container">
        <ul>
            <router-link tag="li" to="/" exact>
                <a>Home</a>
            </router-link>
            
            <router-link tag="li" to="/about">
                <a>About</a>
            </router-link>

            <router-link tag="li" to="/contact">
                <a>Contact</a>
            </router-link>

            <series-dropdown></series-dropdown>
            <li><support-button></support-button></li>

            <router-link tag="li" to="/scroll">
                <a>Scroll</a>
            </router-link>
            
            <router-link tag="li" to="/Count">
                <a>Count</a>
            </router-link>
            <router-link tag="li" to="/conditional">
                <a>ConditionalElement</a>
            </router-link>
        </ul>
    </div>
</nav>

<portal-target name="nav-after"></portal-target>