<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item d-none d-sm-inline-block">
            <a href="{{url('template')}}" class="nav-link">Beranda</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="#" class="nav-link">Contact</a>
        </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
        <div class="input-group input-group-sm">
            <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                    <i class="fas fa-search"></i>
                </button>
            </div>
        </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <!-- Messages Dropdown Menu -->
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
                @if(Auth::check())
                {{request()->user()->nama}}
                @else
                "silahkan login"
                @endif <img src="{{url('public')}}/dist/img/user1-128x128.jpg" alt="User Avatar" class=" img-circle" style="height: 100%;">
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <a href="#" class="dropdown-item">
                    <i class="fa fa-user"></i> Profile
                </a>
                <a href="#" class="dropdown-item">
                    <i class="fa fa-cog"></i> Settings
                </a>

                <div class="dropdown-divider"></div>

                <a href="{{url('logout')}}" class="dropdown-item">
                    <i class="fa fa-sign"></i> Log Out
                </a>
                <a href="{{url('login')}}" class="dropdown-item">
                    <i class="fa fa-envelope"></i> Login Disini
                </a>
                <div class="dropdown-divider"></div>
            </div>
        </li>
        <!-- Notifications Dropdown Menu -->
    </ul>
</nav>
<!-- /.navbar -->