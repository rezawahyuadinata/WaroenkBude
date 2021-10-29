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
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span>admin</span>
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
                    <li><a href="{{url('admin/')}}" class=""><span>Dashboard</span></a></li>
                    <li><a href="{{url('admin/pesanan')}}" class=""><span>Pesanan</span></a></li>
                    <li><a href="{{url('admin/barang')}}" class=""><span>Barang</span></a></li>
                    <li><a href="{{url('admin/pelanggan')}}" class=""><span>Pengguna</span></a></li>
                    <li><a href="{{url('admin/berita')}}" class=""><span>Berita</span></a></li>
                </ul>
            </nav>
        </div>
    </div>
    <!-- END LEFT SIDEBAR -->
