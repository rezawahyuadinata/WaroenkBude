<?php

namespace App\Http\Controllers;

use App\Pesanan;
use App\Barang;
use App\User;
use App\RiwayatAdmin;
use App\Invoice;
use PDF;
use App\PesananDetail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $informasi= DB::table('informasis')->paginate(4);
        return view('user.dashboard',compact('informasi'));
    }

    public function profile()
    {
        $user = User::where('id',Auth::user()->id)->first();

        Return view('user.setting', compact('user'));
    }

    public function update(Request $request)
    {
        $this->validate($request,[
            'password' => 'min:8', 'confirmed',
        ]);
        $user = User::where('id', Auth::user()->id)->first();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->nomor = $request->nomor;
        $user->alamat = $request->alamat;
        if(!empty($request->password))
        {
        $user->password = Hash::make($request->password);
        }
        $user->update();
        alert()->success('User sukses diupdate', 'success');
        return redirect('/profile/index');
    }

    public function history()
    {
    	$pesanans = Pesanan::where('user_id', Auth::user()->id)->where('status', '!=',0)->get();
        $pesanan_details = DB::table('pesanan_details')->get();
    	return view('user.riwayat', compact('pesanans','pesanan_details'));
    }

    public function historydetail($id)
    {
    	$pesanan = Pesanan::where('id', $id)->first();
    	$pesanan_details = PesananDetail::where('pesanan_id', $pesanan->id)->get();

        return view('user.detail', compact('pesanan','pesanan_details'));
    }

    public function check_out()
    {
        $pesanan = Pesanan::where('user_id', Auth::user()->id)->where('status',0)->first();
        if(!empty($pesanan))
        {
            $pesanan_details = PesananDetail::where('pesanan_id', $pesanan->id)->get();
            return view('user.cart' ,compact('pesanan','pesanan_details'));
        }
        return view('user.cart', compact('pesanan'));
    }
    public function konfirmasi()
    {

        $user = User::where('id', Auth::user()->id)->first();

        if(empty($user->alamat))
        {
            alert()->error('Identitasi Harap dilengkapi', 'Error');
            return redirect('profile/setting');
        }

        if(empty($user->nomor))
        {
            alert()->error('Identitasi Harap dilengkapi', 'Error');
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

        alert()->success('Pesanan Sukses Check Out Silahkan Lanjutkan Proses Pembayaran', 'Success');
        return redirect('profile/riwayat/'.$pesanan_id);
    }

    public function delete($id)
    {
        $pesanan_detail = PesananDetail::where('id', $id)->first();

        $pesanan = Pesanan::where('id', $pesanan_detail->pesanan_id)->first();
        $pesanan->jumlah_harga = $pesanan->jumlah_harga-$pesanan_detail->jumlah_harga;
        $pesanan->update();
        $pesanan_detail->delete();

        Alert::success('Data telah di Hapus', 'hapus');
        return redirect('profile/cart');
    }

    public function deletedetail($id)
    {
        $pesanan = RiwayatAdmin::where('id', $id)->first();
        $maka = Pesanan::where('id', $id)->first();
        $maka->delete();
        $pesanan->delete();
        $maka->update();

        Alert::success('Data telah di Hapus', 'hapus');
        return redirect('profile/riwayat')->with('success', 'Barang deleted!');
    }

    public function invoice($id)
    {
        $pesanan = Pesanan::where('id', $id)->first();
    	$pesanan_details = PesananDetail::where('pesanan_id', $pesanan->id)->get();

        return view('user.invoice', compact('pesanan','pesanan_details'));
    }
    
}
