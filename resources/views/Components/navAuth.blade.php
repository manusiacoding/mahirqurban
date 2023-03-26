<nav class="navbar navbar-expand bg-light d-lg-none d-xl-none fixed-bottom">
    <div class="container">
        <ul class="navbar-nav nav-justified w-100">
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('home') ? 'active': '' }}" aria-current="page" href="{{ route('home') }}">
                    <img src="{{ asset('landing/img/icons/icon-home.png') }}" width="30" height="30" alt="">
                    <span class="small d-block">Home</span>
                </a>
              </li>
          <li class="nav-item">
            <a class="nav-link @if(request()->routeIs('brunei.transaction.invoice') || request()->routeIs('malaysia.transaction.invoice') || request()->routeIs('singapore.transaction.invoice')) active @endif" href="@if(request()->routeIs('brunei.transaction.invoice')) {{ route('brunei.transaction.invoice') }} @elseif(request()->routeIs('singapore.transaction.invoice')) {{ route('singapore.transaction.invoice') }} @elseif(request()->routeIs('malaysia.transaction.invoice')) {{ route('malaysia.transaction.invoice') }} @endif">
                <img src="{{ asset('landing/img/icons/icon-invoice.png') }}" width="30" height="30" alt="">
                <span class="small d-block">Invoice</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('user.report.index') ? 'active': '' }}" aria-current="page" href="{{ route('user.report.index') }}">
                <img src="{{ asset('landing/img/icons/icon-report.png') }}" width="30" height="30" alt="">
                <span class="small d-block">Report</span>
            </a>
          </li>
          <li class="nav-item">
            <form action="{{ route('logout') }}" method="post">
                @csrf
                <a href="javascript:void(0)" class="nav-item nav-link" id="hreflogout">
                    <img src="{{ asset('landing/img/icons/icon-logout.png') }}" width="30" height="30" alt="">
                    <span class="small d-block">Logout</span>
                </a>
                <button type="submit" class="d-none" id="logout"></button>
            </form>
          </li>
        </ul>
    </div>
  </nav>
