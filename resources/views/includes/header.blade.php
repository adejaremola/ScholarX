<div class="container">
    <nav id="menu" class="navbar">
        <div class="navbar-header"> 
            <span class="visible-xs visible-sm"> Menu <b></b></span>
        </div>
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav">
                <li class="mega-menu dropdown">
                    <a href="{{ url('/village') }}">ScholarX</a>
                </li>
                <li class="custom-link-right"><a href="{{ route('applications') }}"> Admin</a></li>
                @if(Auth::user())
                <li class="custom-link-right"><a href="{{ url('/logout') }}"> Logout</a></li>
                @else
                <li class="custom-link-right"><a href="{{ url('/login') }}"> Login</a></li>
                <li class="custom-link-right"><a href="{{ url('/register') }}"> Register</a></li>
                @endif
            </ul>
        </div>
    </nav>
</div>