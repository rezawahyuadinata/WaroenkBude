@extends('layouts.utama.layout')
@section('section')
<section class="ftco-section bg-light">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-2">
            <div class="col-md-12 text-center heading-section ftco-animate">
                <span class="subheading">Layanan Kami</span>
                <h2 class="mb-4">Catering Services</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 d-flex align-self-stretch ftco-animate text-center">
                <div class="media block-6 services d-block">
                    <div class="media-body p-2 mt-3">
                        <h3 class="heading">Pemesanan Secara Langsung</h3>
                        <p>Melakukan pemesanan secara langsung di daerah Jakarta, sehingga perut anda dapat terselamatkan</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex align-self-stretch ftco-animate text-center">
                <div class="media block-6 services d-block">
                    <div class="media-body p-2 mt-3">
                        <h3 class="heading">Reservasi</h3>
                        <p>Melakukan pemesanan untuk berbagai macam acara, meskipun acara yang aneh sekaligus</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex align-self-stretch ftco-animate text-center">
                <div class="media block-6 services d-block">
                    <div class="media-body p-2 mt-3">
                        <h3 class="heading">Pengiriman</h3>
                        <p>Melakukan pengiriman secara cepat dengan menggunakan berbagai teman jasa lainnya</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section">
    <div class="container">
        <div class="row no-gutters justify-content-center mb-5 pb-2">
            <div class="col-md-12 text-center heading-section ftco-animate">
                <span class="subheading">Rak Makanan</span>
                <h2 class="mb-4">Menu Andalan</h2>
            </div>
        </div>
        <div class="row no-gutters d-flex align-items-stretch">
            <div class="col-md-12 col-lg-6 d-flex align-self-stretch">
                <div class="menus d-sm-flex ftco-animate align-items-stretch">
                    <div class="menu-img img" style="background-image: url(/images/projek_gambar/list_masakan/kering/rendang.jpg);"></div>
                    <div class="text d-flex align-items-center">
                        <div>
                            <div class="d-flex">
                                <div class="one-half">
                                    <h3>Rendang</h3>
                                </div>
                            </div>
                            <p><a href="/menu" class="btn btn-primary">Pesan Sekarang</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-6 d-flex align-self-stretch">
                <div class="menus d-sm-flex ftco-animate align-items-stretch">
                    <div class="menu-img img" style="background-image: url(/images/projek_gambar/list_masakan/kering/ayamtaliwang.jpg);"></div>
                    <div class="text d-flex align-items-center">
                        <div>
                            <div class="d-flex">
                                <div class="one-half">
                                    <h3>Ayam Taliwang</h3>
                                </div>
                            </div>
                            <p><a href="/menu" class="btn btn-primary">Pesan Sekarang</a></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12 col-lg-6 d-flex align-self-stretch">
                <div class="menus d-sm-flex ftco-animate align-items-stretch">
                    <div class="menu-img img order-md-last" style="background-image: url(/images/projek_gambar/list_masakan/basah/sopikan.jpg);">
                    </div>
                    <div class="text d-flex align-items-center">
                        <div>
                            <div class="d-flex">
                                <div class="one-half">
                                    <h3>Sop Ikan Kakap</h3>
                                </div>
                            </div>
                            <p><a href="/menu" class="btn btn-primary">Pesan Sekarang</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-6 d-flex align-self-stretch">
                <div class="menus d-sm-flex ftco-animate align-items-stretch">
                    <div class="menu-img img order-md-last" style="background-image: url(/images/projek_gambar/list_masakan/basah/sopdaging.jpg);">
                    </div>
                    <div class="text d-flex align-items-center">
                        <div>
                            <div class="d-flex">
                                <div class="one-half">
                                    <h3>Sop Daging</h3>
                                </div>
                            </div>
                            <p><a href="/menu" class="btn btn-primary">Pesan Sekarang</a></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12 col-lg-6 d-flex align-self-stretch">
                <div class="menus d-sm-flex ftco-animate align-items-stretch">
                    <div class="menu-img img" style="background-image: url(/images/projek_gambar/list_masakan/buah/anggur.jpg);"></div>
                    <div class="text d-flex align-items-center">
                        <div>
                            <div class="d-flex">
                                <div class="one-half">
                                    <h3>Anggur</h3>
                                </div>
                            </div>
                            <p><a href="/menu" class="btn btn-primary">Pesan Sekarang</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-6 d-flex align-self-stretch">
                <div class="menus d-sm-flex ftco-animate align-items-stretch">
                    <div class="menu-img img" style="background-image: url(/images/projek_gambar/list_masakan/buah/semangka.jpg);"></div>
                    <div class="text d-flex align-items-center">
                        <div>
                            <div class="d-flex">
                                <div class="one-half">
                                    <h3>Semangka</h3>
                                </div>
                            </div>
                            <p><a href="/menu" class="btn btn-primary">Pesan Sekarang</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section testimony-section img">
    <div class="overlay"></div>
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-12 text-center heading-section ftco-animate">
                <span class="subheading">Review</span>
                <h2 class="mb-4">Warga Kenyang</h2>
            </div>
        </div>
        <div class="row ftco-animate justify-content-center">
            <div class="col-md-12">
                <div class="carousel-testimony owl-carousel ftco-owl">
                    <div class="item">
                        <div class="testimony-wrap text-center pb-5">
                            <h1 class="name">Amelia Watson</h1>
                            <div class="text p-3">
                                <p class="mb-4">Makanannya sungguh enak dan membuatku ingin memesannya lagi</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap text-center pb-5">
                            <h1 class="name">Gura</h1>
                            <div class="text p-3">
                                <p class="mb-4">Packaging yang sangat rapih membuat makanannya menjadi cantik</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap text-center pb-5">
                            <h1 class="name">Caliiope</h1>
                            <div class="text p-3">
                                <p class="mb-4">Makanannya sangat banyak dan memiliki variasi yang sangat banyak</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
