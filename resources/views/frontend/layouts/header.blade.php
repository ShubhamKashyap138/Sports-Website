<div class="container-fluid">
    <nav class="navbar navbar-expand-md navbar-light">
        <img src="{{ url('frontend/images/main-logo.png') }}" alt="Error" width="200px" class="img-fluid logo">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav" style="margin-left: auto;">
                <a class="nav-link otherPages" aria-current="page" href="{{ url('/') }}">Home</a>
                <a class="nav-link otherPages" href="{{ url('/about') }}">About Us</a>
                <a class="nav-link otherPages" href="{{ url('/support') }}">Support</a>
                @if (session()->get('status') == '1')
                    <button type="button" class="btn btn-danger login"><a href="{{ url('/logout') }}"
                            class="text-dark">Logout</a></button>
                    <div class="dropdown register">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            HI {{substr(session()->get('naam'),0,8)}}
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item" href="{{'/update'}}">Update Data</a></li>
                        </ul>
                    </div>
                @else
                    <button type="button" class="btn btn-light login"><a href="{{ url('/login') }}"
                            class="text-dark">Login</a></button>
                    <button type="button" class="btn btn-dark register"><a href="{{ url('/register') }}"
                            class="text-white">Register</a></button>
                @endif
            </div>
        </div>
    </nav>
</div>
