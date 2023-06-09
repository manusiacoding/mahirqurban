<nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5">
    <a href="index.html" class="navbar-brand d-flex align-items-center">
        <img src="{{ asset('landing/img/logo.png') }}" width="130" alt="">
    </a>
    <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            <a href="{{ route('home') }}" class="nav-item nav-link {{ Route::currentRouteNamed('home') ? 'active' : '' }}">Home</a>
            @auth
                <a href="produk" class="nav-item nav-link">Produk</a>
                {{-- @unless (Auth::user()->country == "Indonesia") --}}
                    <a href="{{ route('transaction.invoice') }}" class="nav-item nav-link {{ Route::currentRouteNamed('transaction.*') ? 'active' : '' }}">Invoice</a>
                {{-- @endunless --}}
                <a href="{{ route('user.report.index') }}" class="nav-item nav-link">Report</a>
            @endauth

            @guest
                <a href="#aboutus" class="nav-item nav-link">About Us</a>
                <a href="#produk" class="nav-item nav-link">Produk</a>
                <a href="#support" class="nav-item nav-link">Support</a>
                <a href="{{ route('login') }}" class="nav-item nav-link">Login</a>
            @endguest
            @auth
                <form action="{{ route('logout') }}" method="post">
                    @csrf
                    <a href="javascript:void(0)" class="nav-item nav-link" id="hreflogout">Logout</a>
                    <button type="submit" class="d-none" id="logout"></button>
                </form>
            @endauth
        </div>
        <div class="border-start ps-4 d-none d-lg-block">
            <button type="button" class="btn btn-sm p-0"><i class="fa fa-search"></i></button>
        </div>
    </div>
</nav>


