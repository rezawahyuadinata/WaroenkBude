@extends('layouts.admin.layout')
@section('section')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('home') }}">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
    </ol>
</nav>
<div class="panel panel-headline">
    <div class="panel-body">
        <div class="row">
            <div class="col-md-3">
                <div class="metric">
                    <span class="icon"><i class="fa fa-newspaper-o "></i></span>
                    <p>
                        <span class="number">{{$informasi}}</span>
                        <span class="title">Informasi</span>
                    </p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="metric">
                    <span class="icon"><i class="fa fa-shopping-bag"></i></span>
                    <p>
                        <span class="number">{{$barang}}</span>
                        <span class="title">Barang</span>
                    </p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="metric">
                    <span class="icon"><i class="fa fa-eye"></i></span>
                    <p>
                        <span class="number">{{$pelanggan}}</span>
                        <span class="title">Pengguna</span>
                    </p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="metric">
                    <span class="icon"><i class="fa fa-bar-chart"></i></span>
                    <p>
                        <span class="number">{{$pemesanan}}</span>
                        <span class="title">Total Penjualan</span>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <!-- RECENT PURCHASES -->
        <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title">Kontak Saran</h3>
                <div class="right">
                    <button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button>
                </div>
            </div>
            <div class="panel-body no-padding">
                <table class="table table-striped">
                    <thead>
                        @foreach ($kontak as $kontaks)
                        <tr>
                            <th>Id</th>
                            <th>Nama</th>
                            <th>Subjek</th>
                            <th>Email</th>
                            <th>Pesan</th>
                            <th>Waktu</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{$kontaks->id}}</td>
                            <td>{{$kontaks->nama}}</td>
                            <td>{{$kontaks->subjek}}</td>
                            <td>{{$kontaks->email}}</td>
                            <td>{{$kontaks->pesan}}</td>
                            <td>{{$kontaks->created_at}}</td>
                            <td>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-primary" data-toggle="modal"
                                        data-target="#{{$kontaks->id}}">Lihat</button>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                @foreach ($kontak as $kontaks)
                <section>
                    <div class="modal fade" id="{{$kontaks->id}}">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <!-- Modal Header -->
                                <div class="modal-header">
                                    <h4 class="modal-title">{{$kontaks->nama}} </h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                                <!-- Modal body -->
                                <div class="modal-body">
                                    <p class="card-text ftco-animate">
                                        {{$kontaks->subjek}}<br>
                                        <br>
                                        {{$kontaks->pesan}}<br>
                                        <br>
                                        {{$kontaks->created_at}}<br>
                                    </p>
                                </div>
                                <!-- Modal footer -->
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                @endforeach
            </div>
            <div class="panel-footer">
                <div class="row">
                    <div class="col-md-6"><span class="panel-note"><i class="fa fa-clock-o"></i> Last 24 hours</span>
                    </div>
                </div>
            </div>
        </div>
        <!-- END RECENT PURCHASES -->
    </div>
</div>
    @endsection
