<nav class="navbar navbar-expand-sm bg-dark navbar-dark justify-content-start">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Logo</a>  
        <!-- Links -->
        <ul class="navbar-nav ">
            <li class="nav-item">
                <a class="nav-link" href="{{route('user.list')}}">Users</a>
            </li>
        </ul>
        @if (Route::has('login'))
            @auth
            <ul class="navbar-nav ml-auto logout">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">{{Auth::user()->name}}</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Profile</a>
                        <a href="{{ url('/logout') }}" class="dropdown-item">Logout</a>
                    </div>
                </li>
            </ul>
            @else
            <ul class="navbar-nav ml-auto logout">
                <li class="nav-item">
                    <a href="{{ route('login') }}" class="nav-link" >Log in</a>
                </li>
                @if (Route::has('register'))
                    <li class="nav-item">
                        <a href="{{ route('register') }}" class="nav-link">Register</a>
                    </li>
                @endif
            </ul>
            @endauth
        @endif
    </div>
</nav>