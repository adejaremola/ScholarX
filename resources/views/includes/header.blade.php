<div class="container">
    <nav id="menu" class="navbar">
        <div class="navbar-header"> 
            <span class="visible-xs visible-sm"> Menu <b></b></span>
        </div>
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav">
                <li class="mega-menu dropdown">
                    <a href="{{ url('/') }}">ScholarX</a>
                </li>
                <li class="custom-link-right"><a href="{{ url('/admin/applications') }}" target="_blank"> Admin</a></li>
                @if(Auth::user())
                <li class="custom-link-right"><a href="{{ url('/logout') }}" target="_blank"> Logout</a></li>
                @else
                <li class="custom-link-right"><a href="{{ url('/login') }}" target="_blank"> Login</a></li>
                <li class="custom-link-right"><a href="{{ url('/register') }}" target="_blank"> Register</a></li>
                @endif
            </ul>
        </div>
    </nav>
</div>