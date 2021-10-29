@extends('layouts.utama.layout')
@section('section')
<section class="ftco-section">
    <div class="container">
        <div class="ftco-search">
            <div class="row">
                <div class="col-md-12 nav-link-wrap">
                    <div class="nav nav-pills d-flex text-center" id="v-pills-tab" role="tablist"
                        aria-orientation="vertical">
                        <a class="nav-link ftco-animate active" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1"
                            role="tab" aria-controls="v-pills-1" aria-selected="true">Utama</a>
                        <a class="nav-link ftco-animate" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2"
                            role="tab" aria-controls="v-pills-2" aria-selected="false">Sup</a>
                        <a class="nav-link ftco-animate" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-3"
                            role="tab" aria-controls="v-pills-2" aria-selected="false">Pelengkap</a>
                        <a class="nav-link ftco-animate" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-4"
                            role="tab" aria-controls="v-pills-2" aria-selected="false">Buah</a>
                        <a class="nav-link ftco-animate" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-5"
                            role="tab" aria-controls="v-pills-2" aria-selected="false">Minuman</a>
                    </div>
                    <div class="col-md-12 tab-wrap">
                        <div class="tab-content" id="v-pills-tabContent">
                            <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel"
                                aria-labelledby="day-1-tab">
                                <div class="row no-gutters d-flex align-items-stretch">
                                    <div class="row">
                                        @foreach ($barangs1 as $barang)
                                        <div class="col-lg-4 col-md-3 ftco-animate">
                                            <div class="card shadow-sm">
                                                <img class="card-img-top" width="100%" height="225"
                                                    src="{{$barang->gambar}}"
                                                    alt="Card image" style="width:100%">
                                                <div class="card-body ftco-animate">
                                                    <p class="card-text ftco-animated">{{$barang -> nama_barang}}</p>
                                                    <p class="card-text ftco-animate">
                                                        <strong>Harga :  </strong>Rp. {{($barang->harga)}} <br>
                                                        <strong>Stok :  </strong>{{$barang->stok}} <br>
                                                    </p>
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <div class="btn-group">
                                                            <a href="{{url('pesan')}}/{{$barang->id}}" class="btn btn-primary">pesan</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-2" role="tabpanel"
                                aria-labelledby="v-pills-day-2-tab">
                                <div class="row no-gutters d-flex align-items-stretch">
                                    <div class="row">
                                        @foreach ($barangs2 as $barang)
                                        <div class="col-lg-4 col-md-3 ftco-animate">
                                            <div class="card shadow-sm">
                                                <img class="card-img-top" width="100%" height="225"
                                                    src="{{$barang->gambar}}"
                                                    alt="Card image" style="width:100%">
                                                <div class="card-body ftco-animate">
                                                    <p class="card-text ftco-animated">{{$barang -> nama_barang}}</p>
                                                    <p class="card-text ftco-animate">
                                                        <strong>harga : </strong>Rp. {{($barang->harga)}} <br>
                                                        <strong>stok : </strong>{{$barang->stok}} <br>
                                                    </p>
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <div class="btn-group">
                                                            <a href="{{url('pesan')}}/{{$barang->id}}" class="btn btn-primary">Pesan makanan</a>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <div class="btn-group">
                                                            <a href="{{url('pesan')}}/{{$barang->id}}" class="btn btn-primary">Pemesanan catering</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-3" role="tabpanel"
                                aria-labelledby="v-pills-day-2-tab">
                                <div class="row no-gutters d-flex align-items-stretch">
                                    <div class="row">
                                        @foreach ($barangs3 as $barang)
                                        <div class="col-lg-4 col-md-3 ftco-animate">
                                            <div class="card shadow-sm">
                                                <img class="card-img-top" width="100%" height="225"
                                                    src="{{$barang->gambar}}"
                                                    alt="Card image" style="width:100%">
                                                <div class="card-body ftco-animate">
                                                    <p class="card-text ftco-animated">{{$barang -> nama_barang}}</p>
                                                    <p class="card-text ftco-animate">
                                                        <strong>harga : </strong>Rp. {{($barang->harga)}} <br>
                                                        <strong>stok : </strong>{{$barang->stok}} <br>
                                                    </p>
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <div class="btn-group">
                                                            <a href="{{url('pesan')}}/{{$barang->id}}" class="btn btn-primary">pesan</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-4" role="tabpanel"
                                aria-labelledby="v-pills-day-2-tab">
                                <div class="row no-gutters d-flex align-items-stretch">
                                    <div class="row">
                                        @foreach ($barangs4 as $barang)
                                        <div class="col-lg-4 col-md-3 ftco-animate">
                                            <div class="card shadow-sm">
                                                <img class="card-img-top" width="100%" height="225"
                                                    src="{{$barang->gambar}}"
                                                    alt="Card image" style="width:100%">
                                                <div class="card-body ftco-animate">
                                                    <p class="card-text ftco-animated">{{$barang -> nama_barang}}</p>
                                                    <p class="card-text ftco-animate">
                                                        <strong>harga : </strong>Rp. {{($barang->harga)}} <br>
                                                        <strong>stok : </strong>{{$barang->stok}} / Per Kotak <br>
                                                    </p>
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <div class="btn-group">
                                                            <a href="{{url('pesan')}}/{{$barang->id}}" class="btn btn-primary">pesan</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-5" role="tabpanel"
                                aria-labelledby="v-pills-day-2-tab">
                                <div class="row no-gutters d-flex align-items-stretch">
                                    <div class="row">
                                        @foreach ($barangs5 as $barang)
                                        <div class="col-lg-4 col-md-3 ftco-animate">
                                            <div class="card shadow-sm">
                                                <img class="card-img-top" width="100%" height="225"
                                                    src="{{$barang->gambar}}"
                                                    alt="Card image" style="width:100%">
                                                <div class="card-body ftco-animate">
                                                    <p class="card-text ftco-animated">{{$barang -> nama_barang}}</p>
                                                    <p class="card-text ftco-animate">
                                                        <strong>harga : </strong>Rp. {{($barang->harga)}} <br>
                                                        <strong>stok : </strong>{{$barang->stok}} <br>
                                                    </p>
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <div class="btn-group">
                                                            <a href="{{url('pesan')}}/{{$barang->id}}" class="btn btn-primary">pesan</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
@endsection
