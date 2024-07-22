@extends("projects.furni-store.layouts.app")
@section("content")
    <main class="container w-50 px-8 pt-6 m-auto">
        <form class="py-5" method="post" action="{{Route::currentRouteName() === "login" ? route('login.validate') : route('register.store')}}">
            @csrf
            <h1 class="h3 mb-3 fw-bold text-center">
                @if (Route::currentRouteName() === "login")
                    Login
                @elseif (Route::currentRouteName() === "register")
                    Register
                @endif
            </h1>
            @if (Route::currentRouteName() === "register")
            <div class="mb-3">
                <label for="name" class="form-label required">name</label>
                <input type="text" class="form-control" name="name" id="name" aria-describedby="name" value="{{old('name')}}" placeholder="Masukkan name..." required>
            </div>
            @endif
            <div class="mb-3">
                <label for="email" class="form-label required">Email address</label>
                <input type="email" class="form-control" name="email" id="email" aria-describedby="emailAddress" value="{{old('email')}}" placeholder="Masukkan email address..." required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label required">Password</label>
                <input type="password" class="form-control" name="password" id="password" placeholder="Masukkan password.." required>
            </div>
            {{-- <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div> --}}
            <button type="submit" class="btn btn-primary w-100 rounded-4">
                @if (Route::currentRouteName() === "login")
                    Login
                @elseif (Route::currentRouteName() === "register")
                    Register
                @endif
            </button>
        </form>
        @if (Route::currentRouteName() === "login")
            <p class="fw-normal text-center">
                <a href="#" class="text-primary">Forgot Password?</a>
            </p>
            <p class="fw-normal text-center">Don't have an account? 
                <a href="{{route('register')}}" class="text-primary"> Register Now!</a>
            </p>
        @elseif (Route::currentRouteName() === "register")
            <p class="fw-normal text-center">Already have account? 
                <a href="{{route('login')}}" class="text-primary"> Login Now!</a>
            </p>
        @endif
    </main>
@endsection
