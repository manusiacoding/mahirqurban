<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>@yield('title', 'Mahir Qurban')</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <!-- @TODO: replace SET_YOUR_CLIENT_KEY_HERE with your client key -->
    <script type="text/javascript"
      src="https://app.sandbox.midtrans.com/snap/snap.js"
      data-client-key="{{ config('midtrans.client_key') }}"></script>
    <!-- Note: replace with src="https://app.midtrans.com/snap/snap.js" for Production environment -->

    <!-- Favicon -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    @include('Components.css')
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    @include('Components.topbar')
    <!-- Topbar End -->


    <!-- Navbar Start -->
        <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5">
        <a href="index.html" class="navbar-brand d-flex align-items-center">
            <img src="{{ asset('landing/img/logo.png') }}" width="60" alt="">
        </a>
        <ul class="navbar navbar-expand ms-auto" style="font-size: 15px; list-style:none;">
                @guest
                        @if (Route::has('login'))
                            <li>
                                <a href="{{ route('login') }}" class="nav-item">Login</a>
                            </li>
                        @endif
                        @if (Route::has('register'))
                            <li>
                                <a href="{{ route('register') }}" class="nav-item nav-link">Register</a>
                            </li>
                        @endif

                 @else
                    @include('Components.navAuth')
                @endguest
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{ Config::get('Languages')[App::getLocale()] }}
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    @foreach (Config::get('Languages') as $lang => $language)
                        @if ($lang != App::getLocale())
                                <a class="dropdown-item" href="{{ route('lang.switch', $lang) }}"> {{$language}}</a>
                        @endif
                    @endforeach
                    </div>
                </li>
                @auth
                    <li>
                        <form action="{{ route('logout') }}" method="post">
                            @csrf
                            <a href="javascript:void(0)" class="nav-item nav-link" id="hreflogout">Logout</a>
                            <button type="submit" class="d-none" id="logout"></button>
                        </form>
                    </li>
                @endauth
            </div>
        </div>
    </nav>
    <!-- Navbar End -->


    @yield('content')


    <!-- Footer Start -->
    @include('Components.footer')
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    @include('Components.js')

    @yield('js')
    <script>
        $('li #hreflogout').on('click', function(){
            $('#logout').click();
        });
    </script>
</body>

</html>
