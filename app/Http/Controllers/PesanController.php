<?php

namespace App\Http\Controllers;
use App\Pesanan;
use App\Barang;
use App\PesananDetail;
use App\RiwayatAdmin;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Invoice;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use App\User;

class PesanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index($id)
    {
    	$barang = Barang::where('id', $id)->first();

    	return view('home.menudetail', compact('barang'));
    }

    public function pesan(Request $request,$id)
    {
    	$barang = Barang::where('id', $id)->first();
        $waktu = Carbon::now();

    	//validasi apakah melebihi stok
    	if($request->jumlah_pesan > $barang->stok)
    	{
    		return redirect('/pesan/'.$id);
    	}

    	//cek validasi
    	$cek_pesanan = Pesanan::where('user_id', Auth::user()->id)->where('status',0)->first();
        //simpan ke database pesanan
    	if(empty($cek_pesanan))
    	{
    		$pesanan = new Pesanan;
	    	$pesanan->user_id = Auth::user()->id;
	    	$pesanan->status = 0;
	    	$pesanan->jumlah_harga = 0;
            $pesanan->ongkir = 10000;
	    	$pesanan->save();
    	}
    	//simpan ke database pesanan detail
    	$pesanan_baru = Pesanan::where('user_id', Auth::user()->id)->where('status',0)->first();

    	//cek pesanan detail
    	$cek_pesanan_detail = PesananDetail::where('barang_id', $barang->id)->where('pesanan_id', $pesanan_baru->id)->first();
    	if(empty($cek_pesanan_detail))
    	{
    		$pesanan_detail = new PesananDetail;
	    	$pesanan_detail->barang_id = $barang->id;
	    	$pesanan_detail->pesanan_id = $pesanan_baru->id;
	    	$pesanan_detail->jumlah = $request->jumlah_pesan;
            $pesanan_detail->pengiriman = $request->pengiriman;
	    	$pesanan_detail->jumlah_harga = $barang->harga*$request->jumlah_pesan;
	    	$pesanan_detail->save();
    	}else
    	{
    		$pesanan_detail = PesananDetail::where('barang_id', $barang->id)->where('pesanan_id', $pesanan_baru->id)->first();
    		if(!empty($pesanan_detail->jumlah <= $pesanan_detail->barang->stok ))
            {
                $pesanan_detail->jumlah = $pesanan_detail->jumlah+$request->jumlah_pesan;
            }
    		//harga sekarang
    		$harga_pesanan_detail_baru = $barang->harga*$request->jumlah_pesan;
	    	if(!empty($pesanan_detail->jumlah <= $pesanan_detail->barang->stok ))
            {
                $pesanan_detail->jumlah_harga = $pesanan_detail->jumlah_harga+$harga_pesanan_detail_baru;
                $pesanan_detail->update();
            }
    	}

    	//jumlah total

        //pesanan
    	$pesanan = Pesanan::where('user_id', Auth::user()->id)->where('status',0)->first();
        $pesanan_detail = PesananDetail::where('barang_id', $barang->id)->where('pesanan_id', $pesanan_baru->id)->first();
        $pesanan->jumlah_harga = $pesanan->jumlah_harga+$barang->harga*$request->jumlah_pesan;
        $pesanan->update();

        $riwayat_admin_pesanan = RiwayatAdmin::where('user_id', Auth::user()->id)->where('status', 0)->first();
        if(empty($riwayat_admin_pesanan))
    	{
            $riwayat_admin = new RiwayatAdmin;
            $riwayat_admin->user_id = Auth::user()->id;
            $riwayat_admin->nama_user = Auth::user()->name;
            $riwayat_admin->status = 0;
            $riwayat_admin->jumlah_harga = 0;
            $riwayat_admin->alamat_user = Auth::user()->alamat;
            $riwayat_admin->save();
        }

        //riwayat admin
        $riwayat_admin = RiwayatAdmin::where('user_id', Auth::user()->id)->where('status',0)->first();
        $pesanan_detail = PesananDetail::where('barang_id', $barang->id)->where('pesanan_id', $pesanan_baru->id)->first();
        $riwayat_admin->jumlah_harga = $riwayat_admin->jumlah_harga+$barang->harga*$request->jumlah_pesan;
        $riwayat_admin->update();

        //invoices
        $invoices = Invoice::where('invoice_id', $pesanan->id)->where('status', 1)->first();
        if(is_null($invoices)){
            $invoices = new Invoice;
            $invoices->invoice_id = Auth::user()->id;
            $invoices->nama =Auth::user()->name;
            $invoices->tanggal_order = Carbon::now();
            $invoices->status = 1;
            $invoices->total_item = $pesanan_detail->jumlah;
            $invoices->total_pembayaran = $pesanan->jumlah_harga;
            $invoices->save();
        }
        $invoice = Invoice::where('invoice_id', Auth::user()->id)->where('status', 1)->first();
        $invoice->update();

        Alert::success('Pesanan Sukses Masuk Keranjang', 'Success');
    	return redirect('/menu');
    }


    public function check_out()
    {
        $pesanan = Pesanan::where('user_id', Auth::user()->id)->where('status',0)->first();
        if(!empty($pesanan))
        {
            $pesanan_details = PesananDetail::where('pesanan_id', $pesanan->id)->get();
            return view('home.cart' ,compact('pesanan','pesanan_details'));
        }

        return view('home.cart', compact('pesanan'));
    }

    public function delete($id)
    {
        $pesanan_detail = PesananDetail::where('id', $id)->first();

        $pesanan = Pesanan::where('id', $pesanan_detail->pesanan_id)->first();
        $pesanan->jumlah_harga = $pesanan->jumlah_harga-$pesanan_detail->jumlah_harga;
        $pesanan->update();


        $pesanan_detail->delete();

        Alert::success('Data telah di Hapus', 'hapus');
        return redirect('/cart');
    }

    public function konfirmasi()
    {

        $user = User::where('id', Auth::user()->id)->first();

        if(empty($user->alamat))
        {
            Alert::success('Identitasi Harap dilengkapi', 'Error');
            return redirect('profile/setting');
        }

        if(empty($user->nomor))
        {
            Alert::success('Identitasi Harap dilengkapi', 'Error');
            return redirect('profile/setting');
        }

        $pesanan = Pesanan::where('user_id', Auth::user()->id)->where('status',0)->first();
        $pesanan_id = $pesanan->id;
        $pesanan->status = 1;
        $pesanan->update();

        $pesanan_details = PesananDetail::where('pesanan_id', $pesanan_id)->get();
        foreach ($pesanan_details as $pesanan_detail) {
            $barang = Barang::where('id', $pesanan_detail->barang_id)->first();
            $barang->stok = $barang->stok-$pesanan_detail->jumlah;
            $barang->update();
        }

        Alert::success('Pesanan Sukses Check Out Silahkan Lanjutkan Proses Pembayaran', 'Success');
        return redirect('profile/riwayat/'.$pesanan_id);
    }

    public function paketindex($id)
    {
    	$barang = Barang::where('id', $id)->first();

    	return view('home.paketdetail', compact('barang'));
    }

    public function paketpesan(Request $request,$id)
    {
    	$barang = Barang::where('id', $id)->first();
    	$tanggal = Carbon::now();

    	//validasi apakah melebihi stok
    	if($request->jumlah_pesan > $barang->stok)
    	{
    		return redirect('/pesan/'.$id);
    	}

    	//cek validasi
    	$cek_pesanan = Pesanan::where('user_id', Auth::user()->id)->where('status',0)->first();
    	//simpan ke database pesanan
    	if(empty($cek_pesanan))
    	{
    		$pesanan = new Pesanan;
	    	$pesanan->user_id = Auth::user()->id;
	    	$pesanan->tanggal = $tanggal;
	    	$pesanan->status = 0;
	    	$pesanan->jumlah_harga = 0;
            $pesanan->kode = mt_rand(100,999);
	    	$pesanan->save();
    	}


    	//simpan ke database pesanan detail
    	$pesanan_baru = Pesanan::where('user_id', Auth::user()->id)->where('status',0)->first();

    	//cek pesanan detail
    	$cek_pesanan_detail = PesananDetail::where('barang_id', $barang->id)->where('pesanan_id', $pesanan_baru->id)->first();
    	if(empty($cek_pesanan_detail))
    	{
    		$pesanan_detail = new PesananDetail;
	    	$pesanan_detail->barang_id = $barang->id;
	    	$pesanan_detail->pesanan_id = $pesanan_baru->id;
	    	$pesanan_detail->jumlah = $request->jumlah_pesan;
	    	$pesanan_detail->jumlah_harga = $barang->harga*$request->jumlah_pesan;
	    	$pesanan_detail->save();
    	}else
    	{
    		$pesanan_detail = PesananDetail::where('barang_id', $barang->id)->where('pesanan_id', $pesanan_baru->id)->first();

    		$pesanan_detail->jumlah = $pesanan_detail->jumlah+$request->jumlah_pesan;

    		//harga sekarang
    		$harga_pesanan_detail_baru = $barang->harga*$request->jumlah_pesan;
	    	$pesanan_detail->jumlah_harga = $pesanan_detail->jumlah_harga+$harga_pesanan_detail_baru;
	    	$pesanan_detail->update();
    	}

    	//jumlah total
    	$pesanan = Pesanan::where('user_id', Auth::user()->id)->where('status',0)->first();
    	$pesanan->jumlah_harga = $pesanan->jumlah_harga+$barang->harga*$request->jumlah_pesan;
    	$pesanan->update();

        Alert::success('Pesanan Sukses Masuk Keranjang', 'Success');
    	return redirect('/menu');

    }

}
