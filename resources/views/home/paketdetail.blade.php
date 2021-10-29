@extends('layouts.app1')
@section('content')
<div class="container">
    <div class="col-md-12">
        <a href="{{url('/paket')}}" class="btn btn-primary"><i class="fa fa-arrow-left"></i>Kembali</a>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 center">
                            <h3>{{$barang->nama_barang}}</h3>
                            <table class="table border-0">
                                <tbody>
                                    <tr>
                                        <td class="card-text ftco-animate">harga</td>
                                        <td class="card-text ftco-animate">:</td>
                                        <td class="card-text ftco-animate">Rp. {{$barang->harga}}</td>
                                    </tr>
                                    <tr>
                                        <td class="card-text ftco-animate">stok</td>
                                        <td class="card-text ftco-animate">:</td>
                                        <td class="card-text ftco-animate">{{$barang->stok}}</td>
                                    </tr>
                                    <tr>
                                        <td class="card-text ftco-animate">Keterangan</td>
                                        <td class="card-text ftco-animate">:</td>
                                        <td class="card-text ftco-animate">{{$barang->keterangan}}</td>
                                    </tr>
                                    <tr>
                                        <td class="card-text ftco-animate">jumlah pesan</td>
                                        <td class="card-text ftco-animate">:</td>
                                        <td class="card-text ftco-animate">
                                            <form method="POST" action="{{url('pesan')}}/{{$barang->id}}">
                                                @csrf
                                                <input type="number" min="0" max="{{$barang->stok}}" name="jumlah_pesan" class="form-control" required="">
                                                <br>
                                                @error('jumlah_pesan')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                                 <input type="date" name="pengiriman" class="form-control" required="">
                                                <br>
                                                @error('pengiriman')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                                <button type="submit" class="btn-primary"><i
                                                    class="fa fa-shopping-cart">Masukkan Keranjang</i></button>
                                            </form>
                                        </td>
                                    </tr>
                                    </td>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
