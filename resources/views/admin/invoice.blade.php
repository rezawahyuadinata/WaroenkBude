<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <link href="/css/invoice.css" rel="stylesheet" id="bootstrap-css">
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/jquery-1.11.1.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="invoice-title">
                    <h2>Invoice</h2>
					@if(!empty($pesanan))
                    <h3 class="pull-right">Order #{{$pesanan->id}}</h3>
                </div>
                <hr>
                <div class="row">
                    <div class="col-xs-6">
                        <address>
                            <strong>Billed To:</strong><br>
                            Waroenk Bude<br>
                            <br>
                            <br> 
                        </address>
                    </div>
                    <div class="col-xs-6 text-right">
                        <address>
                            <strong>Shipped To:</strong><br>
                            {{$pesanan->user->name}}<br>
							{{$pesanan->user->alamat}}
                        </address>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-6">
                        <address>
                            <strong>Payment Method:</strong><br>
                            Bank DKI No. Rekening : 12345-678912-345<br>
                            adinatarezawahyu@gmail.com
                        </address>
                    </div>
                    <div class="col-xs-6 text-right">
                        <address>
                            <strong>Order Date:</strong><br>
                            {{$pesanan->updated_at}}<br><br>
                        </address>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><strong>Order summary</strong></h3>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-condensed">
                                <thead>
                                    <tr>
                                        <td><strong>Item</strong></td>
                                        <td class="text-center"><strong>Harga</strong></td>
                                        <td class="text-center"><strong>Jumlah</strong></td>
                                        <td class="text-right"><strong>Total Harga</strong></td>
                                    </tr>
                                </thead>
                                <tbody>
									@foreach($pesanan_details as $item)
                                    <tr>
                                        <td>{{$item->barang->nama_barang}}</td>
                                        <td class="text-center">{{ number_format($item->barang->harga) }}</td>
                                        <td class="text-center">{{ $item->jumlah}} item</td>
                                        <td class="text-right">{{ number_format($item->jumlah_harga) }}</td>
									</tr>
									@endforeach
                                    <tr>
                                        <td class="thick-line"></td>
                                        <td class="thick-line"></td>
                                        <td class="thick-line text-center"><strong>Subtotal</strong></td>
                                        <td class="thick-line text-right">{{ number_format($pesanan->jumlah_harga) }}</td>
                                    </tr>
                                    <tr>
                                        <td class="no-line"></td>
                                        <td class="no-line"></td>
                                        <td class="no-line text-center"><strong>Ongkir</strong></td>
                                        <td class="no-line text-right">Rp. {{ number_format($pesanan->ongkir) }}</td>
                                    </tr>
                                    <tr>
                                        <td class="no-line"></td>
                                        <td class="no-line"></td>
                                        <td class="no-line text-center"><strong>Pengiriman</strong></td>
                                        <td class="no-line text-right">{{$item->pengiriman}}</td>
                                    </tr>
                                    <tr>
                                        <td class="no-line"></td>
                                        <td class="no-line"></td>
                                        <td class="no-line text-center"><strong>Total</strong></td>
                                        <td class="no-line text-right">{{ number_format($pesanan->ongkir+$pesanan->jumlah_harga) }}</td>
                                    </tr>
									<tr>
                                <td colspan="6" align="right">
                                    <a href="{{url('admin/invoice/print')}}/{{ $pesanan->id }}" class="btn btn-primary"><Strong>Cetak</Strong></a>
                                </td>
                            </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		@endif
    </div>
</body>

</html>
