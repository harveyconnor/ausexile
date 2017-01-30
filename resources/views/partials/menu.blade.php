<header>
    <div class="container">
        <span class="bar hide"></span>
        <a href="{{ route('home') }}" class="logo"><strong>AusExile</strong></a>
        <nav>
            <div class="nav-control">
                <ul>
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="{{ route('about') }}">About</a></li>
                    @if (Auth::guest())
                        @else
                        @if(Auth::user()->isAdmin())
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle">Admin</a>
                                <ul class="dropdown-menu default">
                                    <li><a href="{{ route('news.manage') }}">News - Manage</a></li>
                                    <li><a href="{{ route('news.create') }}">News - Create</a></li>
                                </ul>
                            </li>
                        @endif
                    @endif
                </ul>
            </div>
        </nav>
            <ul class="navbar-nav nav-right">
                @if (Auth::guest())
                    <li><a href="{{ url('/login') }}">Login</a></li>
                @else
                    <li class="dropdown">
                        <a href="{{ url('/logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            Logout
                        </a>

                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                @endif
            </ul>
    </div>
</header>
