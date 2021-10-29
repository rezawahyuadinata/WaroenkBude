<!-- WRAPPER -->
<div id="wrapper">
    <!-- NAVBAR -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="brand">
            <a href="/"><img src="/images/logo.png" class="img-responsive logo ftco-animate"></a>
        </div>
        <div class="container-fluid ftco-animate">
            <div class="navbar-btn">
                <button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
            </div>
            <div id="navbar-menu">
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span>{{ Auth::user()->name }}</span>
                            <i class="icon-submenu lnr lnr-chevron-down"></i></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item" href="/">
                                {{__('Home')}}
                                </a>
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- END NAVBAR -->

    <!-- LEFT SIDEBAR -->
    <div id="sidebar-nav" class="sidebar ftco-animate">
        <div class="sidebar-scroll">
            <nav>
                <ul class="nav">
                    <li><a href="{{url('profile/index')}}" class=""><span>Dashboard</span></a></li>
                    <li><a href="{{url('profile/cart')}}" class=""><span>Cart</span></a></li>
                    <li><a href="{{url('profile/riwayat')}}" class=""><span>Riwayat</span></a></li>
                    <li><a href="{{url('profile/setting')}}" class=""><span>Setting</span></a></li>
                </ul>
            </nav>
        </div>
    </div>
    <!-- END LEFT SIDEBAR -->
