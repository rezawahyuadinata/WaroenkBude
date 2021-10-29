@extends('layouts.admin.layout')
@section('section')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('admin/') }}">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Riwayat Pemesanan</li>
    </ol>
</nav>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h3><i class="fa fa-history"></i> Riwayat Pemesanan</h3>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Jumlah Harga</th>
                                <th>Alamat</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            @foreach($riwayat as $riwayats)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $riwayats->nama_user }}</td>
                                <td>Rp. {{ number_format($riwayats->jumlah_harga) }}</td>
                                <td>{{$riwayats->alamat_user}}</td>
                                <td>
                                    <form action="{{ url('admin/pesanan') }}/{{ $riwayats->id}}" method="post">
                                        @csrf
                                        {{ method_field('DELETE') }}
                                        <button type="submit" class="btn btn-primary"
                                            onclick="return confirm('Anda yakin akan menghapus data ?');"><i
                                                class="fa fa-trash"></i>Hapus</button>
                                    </form>
                                </td>
                                <td>
                                   <a href="{{ url('admin/pesanan') }}/{{ $riwayats->id }}" class="btn btn-primary"><i class="fa fa-info"></i> Detail</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{$riwayat->links()}}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
