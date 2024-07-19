<nav class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark sticky-top" arial-label="Furni navigation bar">

    <div class="container">
        <a class="navbar-brand" href="index.html">Furni<span>.</span></a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni" aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsFurni">
            <ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
                <li class="nav-item active">
                    <a class="nav-link" href="{{route('furni.home')}}">Home</a>
                </li>
                <li><a class="nav-link" href="#">Shop</a></li>
                <li><a class="nav-link" href="#">About us</a></li>
                <li><a class="nav-link" href="#">Services</a></li>
                <li><a class="nav-link" href="#">Blog</a></li>
                <li><a class="nav-link" href="#">Contact us</a></li>
            </ul>

            @auth()
            <ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
                <li><a class="nav-link" href="#"><img src="{{asset('furni-store/images/user.svg')}}"></a></li>
                <li><a class="nav-link" href="cart.html"><img src="{{asset('furni-store/images/cart.svg')}}"></a></li>
            </ul>
            @endauth
            @guest()
            <ul class="navbar-nav ms-auto mb-2 mb-md-0">
                <li class="nav-item">
                    <a class="nav-link fw-semibold fs-7" href="{{route('furni.home')}}">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-semibold fs-7" href="{{route('furni.home')}}">Register</a>
                </li>
            </ul>
            @endguest
        </div>
    </div>
        
</nav>