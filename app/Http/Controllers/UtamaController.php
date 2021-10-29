<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Kontak;

class UtamaController extends Controller
{
    public function index()
    {
        return view('home.utama');
    }

    public function menu()
    {
        $barangs1 = DB::table('barangs')->whereIn('jenis', ['0'])->get();

        $barangs2 = DB::table('barangs')->whereIn('jenis', ['1'])->get();

        $barangs3 = DB::table('barangs')->whereIn('jenis', ['2'])->get();

        $barangs4 = DB::table('barangs')->whereIn('jenis', ['3'])->get();

        $barangs5 = DB::table('barangs')->whereIn('jenis', ['4'])->get();

        return view('home.menu', compact('barangs1','barangs2','barangs3','barangs4','barangs5'));
    }

    public function paket()
    {
        $barangs = DB::table('barangs')->wherein('jenis',['5'])->get();
        return view('home.paket', compact('barangs'));
    }

    public function kontak()
    {
        return view('home.contact');
    }

    public function kontakkirim(Request $request)
    {
        Kontak::create([
           'nama' => $request->nama,
           'subjek' => $request->subjek,
           'email' => $request->email,
           'pesan' => $request->pesan
        ]);
        return redirect('/');
    }
}
