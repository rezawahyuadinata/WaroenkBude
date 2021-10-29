@extends('layouts.admin.layout')
@section('section')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('home') }}">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Barang</li>
    </ol>
</nav>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <a href="{{url('admin/barangbuat')}}" class="btn btn-primary"><i class="fa "></i>Buat</a>
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h3><i class="fa fa-history"></i> Riwayat Pemesanan</h3>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Barang</th>
                                <th>Harga</th>
                                <th>Stok</th>
                                <th>Keterangan</th>
                                <th>Aksi</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            @foreach($barang as $barangs)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $barangs->nama_barang }}</td>
                                <td>{{ $barangs->harga }}</td>
                                <td>{{ $barangs->stok }}</td>
                                <td>{{ $barangs->keterangan }}</td>
                                <td>
                                    <form action="{{ url('admin/barangupdate')}}/{{$barangs->id}}">
                                        @csrf
                                        <button type="submit" class="btn btn-primary"><i
                                                class="fa fa-table"></i>Update</button>
                                    </form>
                                </td>
                                <td>
                                    <form action="{{ url('admin/barang') }}/{{ $barangs->id }}" method="post">
                                        @csrf
                                        {{ method_field('DELETE') }}
                                        <button type="submit" class="btn btn-danger"
                                            onclick="return confirm('Anda yakin akan menghapus data ?');"><i
                                                class="fa fa-trash"></i>Hapus</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{$barang->links()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
