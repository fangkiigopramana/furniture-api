<nav class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark sticky-top" arial-label="Furni navigation bar">

    <div class="container">
        <a class="navbar-brand" href="#">Furni<span>.</span></a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni" aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsFurni">
            <ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
                <li class="nav-item @if (Route::currentRouteName() === "home") active @endif">
                    <a class="nav-link" href="{{route('home')}}">Home</a>
                </li>
                <li><a class="nav-link" href="#">Shop</a></li>
                <li><a class="nav-link" href="#">About us</a></li>
                <li><a class="nav-link" href="#">Services</a></li>
                <li><a class="nav-link" href="#">Blog</a></li>
                <li><a class="nav-link" href="#">Contact us</a></li>
            </ul>

            @auth()
            <ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
                <li>
                    {{-- <a class="nav-link" href="#"><img src="{{asset('images/user.svg')}}"></a> --}}
                    <div class="dropdown text-end">
                        <a href="#" class="d-block link-body-emphasis text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                          <img src="https://github.com/mdo.png" alt="mdo" width="32" height="32" class="rounded-circle">
                        </a>
                        <ul class="dropdown-menu text-small">
                          <li><a class="dropdown-item" href="#">New project...</a></li>
                          <li><a class="dropdown-item" href="#">Settings</a></li>
                          <li><a class="dropdown-item" href="#">Profile</a></li>
                          <li><hr class="dropdown-divider"></li>
                          <li><a class="dropdown-item" href="{{route('logout')}}">Sign out</a></li>
                        </ul>
                      </div>
                </li>
                <li><a class="nav-link" href="cart.html"><img src="{{asset('images/cart.svg')}}"></a></li>
            </ul>
            @endauth
            @guest()
            <ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
                <li class="nav-item @if (Route::currentRouteName() === "login") active @endif">
                    <a class="nav-link fw-semibold fs-7" href="{{route('login')}}">Login</a>
                </li>
                <li class="nav-item @if (Route::currentRouteName() === "register") active @endif">
                    <a class="nav-link fw-semibold fs-7" href="{{route('register')}}">Register</a>
                </li>
            </ul>
            @endguest
        </div>
    </div>
        
</nav>