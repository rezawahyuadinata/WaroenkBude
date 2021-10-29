    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand ftco-animate" href="/">Waroenk Bude</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>

            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    @if (Route::has('login'))
                    @auth
                    <li class="nav-item ftco-animate"><a href="/paket" class="nav-link">Paket Bungkus</a></li>
                    @endauth
                    @endif
                    <li class="nav-item ftco-animate"><a href="/menu" class="nav-link">Rak Makanan</a></li>
                    <li class="nav-item ftco-animate"><a href="/contact" class="nav-link">Kontak Kami</a></li>
                    @if (Route::has('login'))
                    @auth
                    <div class="dropdown nav-item ftco-animate">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="{{ url('/home') }}" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{url('profile/index')}}">
                                {{__('Profile')}}
                            </a>
                            @php
                            $pesanan_utama = App\Pesanan::where('user_id', Auth::user()->id)->where('status',0)->first();
                            if(!empty($pesanan_utama))
                            {
                                $notif = App\PesananDetail::where('pesanan_id', $pesanan_utama->id)->count();
                            }
                            @endphp
                            <a class="dropdown-item" href="/cart">
                                {{__('Cart')}}
                                @if(!empty($notif))
                                    <span class="badge badge-danger">{{$notif}}</span>
                                @endif
                            </a>
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </div>
                    @else
                    <li class="nav-item ftco-animate"><a href="{{ route('login') }}" class="nav-link">login</a></li>
                    @endauth
                    @endif
                </ul>
            </div>
        </div>
    </nav>
    <!-- END nav -->
    <section class="home-slider owl-carousel js-fullheight">
        <div class="slider-item js-fullheight" style="background-image: url(images/projek_gambar/carousel1.jpg);">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text js-fullheight justify-content-center align-items-center"
                    data-scrollax-parent="true">
                    <div class="col-md-12 col-sm-12 text-center ftco-animate">
                        <span class="subheading">Waroenk Bude</span>
                        <h1 class="mb-4">Warung Makan Terbaik</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="slider-item js-fullheight" style="background-image: url(images/projek_gambar/carousel2.jpg);">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text js-fullheight justify-content-center align-items-center"
                    data-scrollax-parent="true">
                    <div class="col-md-12 col-sm-12 text-center ftco-animate">
                        <span class="subheading">Waroenk Bude</span>
                        <h1 class="mb-4">Bernutrisi &amp; Melezatkan</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="slider-item js-fullheight" style="background-image: url(images/projek_gambar/carousel3.jpg);">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">
                    <div class="col-md-12 col-sm-12 text-center ftco-animate">
                        <span class="subheading">Waroenk Bude</span>
                        <h1 class="mb-4">Beragam Macam Makanan</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
