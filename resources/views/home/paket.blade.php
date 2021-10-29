@extends('layouts.utama.layout')
@section('section')
<main>
    <div class="album py-5 bg-light ftco-animate">
        <div class="container">
            <section class="py-5 text-center container">
                <div class="row py-lg-5">
                    <div class="col-lg-6 col-md-8 mx-auto">
                        <h1 class="fw-light">Paket Bungkus</h1>
                        <p class="lead text-muted">Paket bungkus adalah sebuah menu yang dimana meyajikan menu yang
                            sudah terpaket</p>
                    </div>
                    <br>
                </div>
            </section>
            <div class="row">
                @foreach ($barangs as $barang)
                <div class="col-lg-4 col-md-3 ftco-animate">
                    <div class="card shadow-sm">
                        <div class="card-body ftco-animate">
                            <p class="card-text">{{$barang->nama_barang}} </p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-primary" data-toggle="modal"
                                        data-target="#{{$barang->id}}">Lihat</button>
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

    @foreach ($barangs as $barang)
    <section>
        <div class="modal fadeInDown ftco-animate" id="{{$barang->id}}">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">{{$barang->nama_barang}} </h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <!-- Modal body -->
                    <div class="modal-body">
                        <p class="card-text ftco-animated">
                            <strong>Harga :  </strong>Rp. {{($barang->harga)}} <br>
                            <strong>Tersedia :  </strong>{{$barang->stok}} <br>
                            <strong>Keterangan : </strong>{{$barang->keterangan}} <br>
                        </p>
                    </div>
                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <a href="{{url('paket')}}/{{$barang->id}}" class="btn btn-primary">pesan</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endforeach

</main>
@endsection
