<nav class="sidenav navbar navbar-vertical fixed-left navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
        <!-- Brand -->
        <div class="sidenav-header d-flex align-items-center">
            <a class="navbar-brand" href="../../pages/dashboards/dashboard.html">
                <img src="{{ asset('assets/img/logo/spoda.png') }}" class="navbar-brand-img" alt="...">
            </a>
            <div class="ml-auto">
                <!-- Sidenav toggler -->
                <div class="sidenav-toggler d-none d-xl-block" data-action="sidenav-unpin" data-target="#sidenav-main">
                    <div class="sidenav-toggler-inner">
                        <i class="sidenav-toggler-line"></i>
                        <i class="sidenav-toggler-line"></i>
                        <i class="sidenav-toggler-line"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="navbar-inner">
            <!-- Collapse -->
            <div class="collapse navbar-collapse" id="sidenav-collapse-main">
                <!-- Nav items -->
                <ul class="navbar-nav">

                    <li class="nav-item">
                        <a class="nav-link {{ (request()->is('unipin/dashboard')) ? 'active' : null }}" href="{{ route('unipin-dashboard') }}">
                            <i class="fas fa-gauge"></i>
                            <span class="nav-link-text">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ (request()->is('unipin/master/*')) ? 'active' : null }}" href="#navbar-master" data-toggle="collapse" role="button"
                            aria-expanded="{{ (request()->is('unipin/master/*')) ? 'true' : 'false' }}" aria-controls="navbar-master">
                            <i class="fas fa-box-open"></i>
                            <span class="nav-link-text">Master</span>
                        </a>
                        <div class="collapse {{ (request()->is('unipin/master/*')) ? 'show' : null }}" id="navbar-master" style="">
                            <ul class="nav nav-sm flex-column">
                                <li class="nav-item {{ (request()->is('unipin/master/supplier')) ? 'active' : null }}">
                                    <a href="{{ route('unipin-master-supplier') }}" class="nav-link">Supplier</a>
                                </li>
                                <li class="nav-item {{ (request()->is('unipin/master/part')) ? 'active' : null }}">
                                    <a href="{{ route('unipin-master-part') }}" class="nav-link">Part</a>
                                </li>
                                <li class="nav-item {{ (request()->is('unipin/master/user')) ? 'active' : null }}">
                                    <a href="{{ route('unipin-master-user') }}" class="nav-link">User Management</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('unipin/purchase-order') ? 'active' : null }}" href="{{ route('unipin-purchase-order') }}">
                            <i class="fas fa-cart-shopping"></i>
                            <span class="nav-link-text">Request Purchase Order</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
