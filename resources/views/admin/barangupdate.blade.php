@extends('layouts.admin.layout')
@section('section')
<div class="card jumbotron">
    <div class="card-body">
        <h4><i class="fa fa-user"></i>Edit Barang</h4>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div><br />
        @endif
        <form method="post" action="{{ route('admin.barangupdate', $barangs->id ) }}">
            <div class="form-group">
                @csrf
                <label for="nama_barang">Nama barang :</label>
                <input type="text" class="form-control" name="nama_barang" value="{{ $barangs->nama_barang }}" />
            </div>
            <div class="form-group">
                <label for="stok">Stok :</label>
                <input rows="5" columns="5" class="form-control" name="stok" value="{{ $barangs->stok }}">
            </div>
            <div class="form-group">
                <label for="harga">Harga :</label>
                <input rows="5" columns="5" class="form-control" name="harga" value="{{ $barangs->harga }}">
            </div>
            <div class="form-group">
                <label for="keterangan">Keterangan :</label>
                <input type="text" class="form-control" name="keterangan" value="{{ $barangs->keterangan }}" />
            </div>
            <button type="submit" class="btn btn-primary">Update Data</button>
        </form>
    </div>
</div>
@endsection
