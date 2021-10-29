@extends('layouts.app1')
@section('content')
<div class="container">
    <div class="col-md-12">
        <a href="{{url('/menu')}}" class="btn btn-primary"><i class="fa fa-arrow-left"></i>Kembali</a>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <img class="card-img-top" width="100%" height="325" src="{{$barang->gambar}}"
                                alt="Card image" style="width:100%">
                        </div>
                        <div class="col-md-6">
                            <h3>{{$barang->nama_barang}}</h3>
                            <table class="table border-0">
                                <tbody>
                                    <tr>
                                        <td>harga</td>
                                        <td>:</td>
                                        <td>Rp. {{$barang->harga}}</td>
                                    </tr>
                                    <tr>
                                        <td>stok</td>
                                        <td>:</td>
                                        <td>{{$barang->stok}}</td>
                                    </tr>
                                    <tr>
                                        <td>Keterangan</td>
                                        <td>:</td>
                                        <td>{{$barang->keterangan}}</td>
                                    </tr>
                                    <tr>
                                        <td>jumlah pesan</td>
                                        <td>:</td>
                                        <td>
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
                                    <td></td>
                                    <td></td>
                                    <td>
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
