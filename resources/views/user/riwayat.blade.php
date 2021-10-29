@extends('layouts.user.layout')
@section('section')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('home') }}">Home</a></li>
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
                                <th>Tanggal Pengiriman</th>
                                <th>Tanggal Pemesanan</th>
                                <th>Jumlah Harga</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            <tr>
                                <td>{{ $no++ }}</td>
                                @foreach ($pesanan_details as $pesanans_detail) 
                                <td>{{ $pesanans_detail->pengiriman}}</td>
                                @endforeach
                                @foreach($pesanans as $pesanan)
                                <td>{{$pesanan->created_at}}</td>
                                <td>Rp. {{ number_format($pesanan->jumlah_harga+$pesanan->ongkir) }}</td>
                                <td>
                                    <a href="{{ url('profile/riwayat') }}/{{ $pesanan->id }}" class="btn btn-primary"><i class="fa fa-info"></i> Detail</a>
                                </td>
                                @if($pesanan = 0)
                                <td>
                                    <form action="{{ url('profile/riwayat') }}/{{ $pesanan->id }}" method="post">
                                        @csrf
                                        {{ method_field('DELETE') }}
                                        <button type="submit" class="btn btn-danger btn-sm"
                                            onclick="return confirm('Anda yakin akan menghapus data ?');"><i
                                            class="fa fa-trash">Pembatalan</i></button>
                                    </form>
                                </td>
                                @endif
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
