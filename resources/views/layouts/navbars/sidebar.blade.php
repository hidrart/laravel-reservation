<nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
        <!-- Brand -->
        <div class="sidenav-header  align-items-center">
            <a class="navbar-brand" href="{{ route('home') }}">
                <img src="../assets/img/brand/blue.png" class="navbar-brand-img" alt="..."> 
            </a>
        </div>
        <div class="navbar-inner">
            <!-- Collapse -->
            <div class="collapse navbar-collapse" id="sidenav-collapse-main">
                <!-- Nav items -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}">
                            <i class="ni ni-tv-2 text-primary"></i> {{ __('Dashboard') }}
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('cafes.index') }}">
                            <i class="ni ni-shop text-orange"></i> {{ __('Cafe') }}
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('tables.index') }}">
                            <i class="ni ni-bag-17 text-orange"></i> {{ __('Table') }}
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('menu.index') }}">
                            <i class="ni ni-basket text-primary"></i> {{ __('Menu') }}
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('form.index') }}">
                            <i class="ni ni-basket text-primary"></i> {{ __('Form Pemesanan') }}
                        </a>
                    </li>
                    <li>
                    <a class="nav-link" href="{{ route('profile.edit') }}">
                        <i class="ni ni-circle-08 text-blue"></i> {{ __('User profile') }}
                    </a>
                    </li>
                </ul>
            </div>
        </div>
</nav>
