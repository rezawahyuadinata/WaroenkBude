@extends('layouts.user.layout')
@section('section')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('home') }}">Home</a></li>
        <li class="breadcrumb-item"><a href="{{ url('history') }}">Riwayat Pemesanan</a></li>
        <li class="breadcrumb-item active" aria-current="page">Detail Pemesanan</li>
    </ol>
</nav>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h3>Sukses Check Out</h3>
                    <h5>Pesanan anda sudah sukses dicheck out selanjutnya untuk pembayaran silahkan transfer di rekening
                        <strong>Bank DKI Nomer Rekening : 12345-678912-345</strong>
                </div>
            </div>
            <div class="card mt-2">
                <div class="card-body">
                    <h3><i class="fa fa-shopping-cart"></i> Detail Pemesanan</h3>
                    @if(!empty($pesanan))
                    <p align="right">Tanggal Pesan : {{ $pesanan->tanggal }}</p>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Gambar</th>
                                <th>Nama Barang</th>
                                <th>Jumlah</th>
                                <th>Harga</th>
                                <th>Total Harga</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            @foreach($pesanan_details as $pesanan_detail)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>
                                    <img src="{{ $pesanan_detail->barang->gambar }}" width="100"
                                        alt="...">
                                </td>
                                <td>{{ $pesanan_detail->barang->nama_barang }}</td>
                                <td>{{ $pesanan_detail->jumlah }} Item</td>
                                <td>Rp. {{ number_format($pesanan_detail->barang->harga) }}</td>
                                <td>Rp. {{ number_format($pesanan_detail->jumlah_harga) }}</td>

                            </tr>
                            @endforeach

                            <tr>
                                <td colspan="5" align="right"><strong>Total Harga :</strong></td>
                                <td align="right"><strong>Rp. {{ number_format($pesanan->jumlah_harga) }}</strong></td>

                            </tr>
                            <tr>
                                <td colspan="5" align="right"><strong>Pengiriman :</strong></td>
                                <td align="right"><strong>{{$pesanan_detail->pengiriman}}</strong></td>

                            </tr>
                            <tr>
                                <td colspan="5" align="right"><strong>Ongkir :</strong></td>
                                <td align="right"><strong>Rp. {{ number_format($pesanan->ongkir) }}</strong></td>

                            </tr>
                            <tr>
                                <td colspan="5" align="right"><strong>Total yang harus ditransfer :</strong></td>
                                <td align="right"><strong>Rp.
                                        {{ number_format($pesanan->ongkir+$pesanan->jumlah_harga) }}</strong></td>
                            </tr>
                            <tr>
                                <td colspan="6" align="right">
                                    <a href="{{url('profile/invoice')}}/{{ $pesanan->id }}" class="btn btn-primary"><Strong>Cetak</Strong></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    @endif

                </div>
            </div>
        </div>

    </div>
</div>
@endsection
