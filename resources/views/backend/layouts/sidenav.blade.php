@yield('navbar')
<nav>
    <div class="logo-name">
        <div class="logo-image">
            <img src="{{url('images/katwal -logo-cricle.png')}}" alt="">
        </div>

        <span class="logo_name">Ekatuwal</span>
    </div>

    <div class="menu-items">
        <ul class="nav-links">
            <li><a href="/dashboard">
                <i class="fa-sharp fa-solid fa-house"></i>
                    <span class="link-name">Home page</span>
                </a></li>
            <li><a href="/news_dashboard">
                <i class="fa-solid fa-newspaper"></i>
                    <span class="link-name">News</span>
                </a></li>
            <li><a href="#">
                <i class="fa-sharp fa-solid fa-chart-simple"></i>
                    <span class="link-name">Analytics</span>
                </a></li>
                <li><a href="/advpage">
                    <i class="fa-sharp fa-solid fa-bullhorn"></i>
                        <span class="link-name">Advertising</span>
                    </a></li>
            <li><a href="#">
                <i class="fa-solid fa-comments"></i>
                    <span class="link-name">Comment</span>
                </a></li>
            <li><a href="#">
                <i class="fa-sharp fa-solid fa-share"></i>
                    <span class="link-name">Share</span>
                </a></li>
        </ul>

        <ul class="logout-mode">
            <li><a href="logout">
                <i class="fa-solid fa-right-from-bracket"></i>
                <span class="link-name">Logout</span>
            </a></li>

            <li class="mode">
                <a href="#">
                    <i class="fa-solid fa-moon"></i>
                <span class="link-name">Dark Mode</span>
            </a>

            <div class="mode-toggle">
              <span class="switch"></span>
            </div>
        </li>
        </ul>
    </div>

</nav>
