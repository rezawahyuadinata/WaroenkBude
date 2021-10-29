@extends('layouts.admin.layout')
@section('section')
<div class="card jumbotron">
    <div class="card-body">
        <h4><i class="fa fa-user"></i>Barang Baru</h4>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        <br/>
        @endif
        <form method="post" action="{{ route('admin.barangbuatkirim') }}">
            <div class="form-group">
                @csrf
                <label for="nama_barang">Nama barang :</label>
                <input type="text" class="form-control" name="nama_barang" value="">
            </div>
            <div class="form-group">
                <label for="stok">Stok :</label>
                <input rows="5" columns="5" class="form-control" name="stok" value="">
            </div>
            <div class="form-group">
                <label for="jenis">Jenis :</label>
                <input rows="5" columns="5" class="form-control" name="jenis" value="">
            </div>
            <div class="form-group">
                <label for="harga">Harga :</label>
                <input rows="5" columns="5" class="form-control" name="harga" value="">
            </div>
            <div class="form-group">
                <input type="file" class="custom-file-input" name="gambar" id="gambar">
            </div>
            <div class="form-group">
                <label for="keterangan">Keterangan :</label>
                <input type="text" class="form-control" name="keterangan" value="" />
            </div>
            <button type="submit" class="btn btn-primary">Data baru</button>
        </form>
    </div>
</div>
@endsection
