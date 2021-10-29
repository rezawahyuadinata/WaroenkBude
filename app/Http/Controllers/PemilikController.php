<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Informasi;
use Illuminate\Support\Facades\DB;
use App\Barang;
use App\User;
use App\PesananDetail;
use Illuminate\Support\Facades\Auth;
use App\Pesanan;
use App\RiwayatAdmin;
use PDF;

class PemilikController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $barang= DB::table('barangs')->count();
        $pelanggan = DB::table('users')->count();
        $pemesanan = DB::table('pesanan_details')->sum('jumlah_harga');
        $informasi= DB::table('informasis')->count();
        $kontak = DB::table('kontaks')->get();

        return view('admin.dashboard',compact('barang','pelanggan','pemesanan','informasi','kontak'));
    }

    public function pelanggan()
    {
        $pelanggan = DB::table('users')->paginate(10);

        return view('admin.listuser',compact('pelanggan'));
    }

    public function pelanggandelete($id)
    {
        $users = User::where('id', $id)->first();
        $users->delete();

        return redirect('admin/pelanggan')->with('success', 'Barang deleted!');
    }

    public function barang()
    {
        $barang= DB::table('barangs')->paginate(10);

        return view('admin.barang',compact('barang'));
    }

    public function barangbuat()
    {
        return view('admin.barangbuat');
    }


    public function barangbuatkirim(Request $request)
    {
        Barang::create([
            'nama_barang' => $request->nama_barang,
            'harga' => $request->harga,
            'stok' => $request->stok,
            'jenis' => $request->jenis,
            'gambar' => $request->gambar,
            'keterangan' => $request->keterangan,
        ]);
        return redirect('admin/barang');
    }

    public function barangupdate($id)
    {
        $barangs = barang::findOrFail($id);

        return view('admin/barangupdate', compact('barangs'));
    }

    public function barangupdatekirim(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nama_barang' => 'required|max:255',
            'stok' => 'required|numeric',
            'harga' => 'required|numeric',
            'keterangan' => 'required|max:255'
        ]);
        barang::whereId($id)->update($validatedData);

        return redirect('admin/barang')->with('success', ' barang berhasil di update');
    }

    public function barangdelete($id)
    {
        $barangs = Barang::where('id', $id)->first();
        $barangs->delete();

        return redirect('admin/barang')->with('success', 'Barang deleted!');
    }

    public function penjualan()
    {
        $riwayat = DB::table('riwayat_admins')->paginate(5);

    	return view('admin.pesanan', compact('riwayat'));
    }

    public function penjualandelete($id)
    {
        $pesanan = RiwayatAdmin::where('id', $id)->first();
        $pesanan->delete();

        return redirect('admin/pesanan')->with('success', 'Barang deleted!');
    }

    public function penjualanupdate(Request $request,$id)
    {
        $validatedData = $request->validate([
            'status' => 'required','numeric'
        ]);
        RiwayatAdmin::whereId($id)->update($validatedData);

        return redirect('admin/pesanan')->with('success', ' informasi berhasil di update');
    }

    public function penjualandetail($id)
    {
        $pesanan = Pesanan::where('id', $id)->first();
    	$pesanan_details = PesananDetail::where('pesanan_id', $pesanan->id)->get();
        
        return view('admin.pesanandetail', compact('pesanan','pesanan_details'));
    }

    public function berita()
    {
        $informasi= DB::table('informasis')->paginate(5);

        return view('admin.news',compact('informasi'));
    }

    public function beritabuat()
    {
        return view('admin/newsbuat');
    }

    public function beritabuatkirim(Request $request)
    {
        informasi::create([
            'judul' => $request->judul,
            'subjek' => $request->subjek,
            'informasi' => $request->informasi
         ]);

         return redirect('admin/berita');
    }

    public function beritadelete($id)
    {
        $informasi = informasi::where('id', $id)->first();
        $informasi->delete();

        return redirect('admin/berita')->with('success', 'informasi deleted!');

    }

    public function beritaupdate($id)
    {
        $informasi = informasi::findOrFail($id);

        return view('admin/newsupdate', compact('informasi'));
    }

    public function beritaupdatekirim(Request $request, $id)
    {
        $validatedData = $request->validate([
            'judul' => 'required|max:255',
            'subjek' => 'required|max:255',
            'informasi' => 'required',
        ]);
        informasi::whereId($id)->update($validatedData);

        return redirect('admin/berita')->with('success', ' informasi berhasil di update');

    }
    public function invoice($id)
    {
        $pesanan = Pesanan::where('id', $id)->first();
    	$pesanan_details = PesananDetail::where('pesanan_id', $pesanan->id)->get();

        return view('admin.invoice', compact('pesanan','pesanan_details'));
    }
    
    public function print($id)
    {
        $pesanan = Pesanan::where('id', $id)->first();
    	$pesanan_details = PesananDetail::where('pesanan_id', $pesanan->id)->get();

        $struk = array(0,0,500.00,600.40);
        $filename = ('Struk_pemesanan.pdf');
        $pdf = \PDF::loadview('admin.invoicecetak',  compact('pesanan','pesanan_details'))->setPaper('A4','potrait');
        return $pdf->download($filename);
    }
}