<nav class="pcoded-navbar">
    <div class="pcoded-inner-navbar main-menu">
        <div class="pcoded-navigatio-lavel">Navigation</div>
        <ul class="pcoded-item pcoded-left-item">
            <li class="{{ Request::is('dashboard') ? "active" : ""}}">
                <a href="{{ route('dashboard') }}">
                    <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                    <span class="pcoded-mtext">Dashboard</span>
                </a>
            </li>
            <li class="{{ Request::is('konsultasi') ? "active" : ""}}">
                <a href="{{ route('konsultasi.index', ['filter' => 'unanswered']) }}">
                    <span class="pcoded-micon"><i class="feather icon-menu"></i></span>
                    <span class="pcoded-mtext">Konsultasi Zakat</span>
                </a>
            </li>
            @if (Auth::user()->is_admin)
                <li class="{{ Request::is('user') ? "active" : ""}}">
                    <a href="{{ route('user.index') }}">
                        <span class="pcoded-micon"><i class="feather icon-menu"></i></span>
                        <span class="pcoded-mtext">Data Ustadz</span>
                    </a>
                </li>
            @endif
        </ul>
    </div>
</nav>
