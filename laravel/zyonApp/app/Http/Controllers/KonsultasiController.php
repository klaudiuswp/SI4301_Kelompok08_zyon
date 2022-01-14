<?php

namespace App\Http\Controllers;

use App\Models\Konsultasi;
use App\Models\Psikolog;
use App\Models\Rekening;
use App\Models\Transaksi;
use App\Models\User;
use Illuminate\Http\Request;

class KonsultasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $konsultasi = Konsultasi::all();
        // $nama = Auth::user()->name;
        // $psikolog = Psikolog::where('');
        // foreach($konsultasi as $konsultasi_each){
        //     $konsultasi_each['psikolog'] = Psikolog::where('id',$konsultasi_each['psikolog_id']);
        //     $konsultasi_each['user'] = User::where('id',$konsultasi_each['customer_id']);
        // }
        return view('dashboard_admin.konsultasi',['konsultasi'=>$konsultasi]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $id = $request->id;
        $tanggal = $request->tanggal;
        
        return redirect()->route('buat-bayar',['psikolog'=>$id,'tanggal'=>$tanggal]);
        // return view('dashboard_user.bayar',[
        //     'psikolog'=>$psikolog,
        //     'tanggal'=>$tanggal, 
        //     'rekenings'=>$rekenings
        // ]);
    }

    public function createbayar($id, $tanggal){

        $psikolog = Psikolog::findorFail($id);

        $rekenings = Rekening::all();
        
        // return redirect()->route('bayar')->with($temp);
        return view('dashboard_user.bayar',[
            'psikolog'=>$psikolog,
            'tanggal'=>$tanggal, 
            'rekenings'=>$rekenings
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $konsultasi = [];
        $transaksi = [];

        $validated = $request->validate([
            'customer_id' => ['required'],
            'psikolog' => ['required'],
            'tanggal' => ['required'],
            'nama' => ['required', 'string', 'max:255'],
            'no_rek_asal' => ['required', 'max:255'],
            'no_rek_tujuan' => ['required', 'max:255'],
            'bukti_transaksi' => ['required', 'image','file'],
        ]);

        $psikolog = Psikolog::findorFail($request->psikolog);

        $konsultasi['customer_id'] = $request->customer_id;
        $konsultasi['psikolog_id'] = $psikolog->id;
        $konsultasi['tanggal'] = $request->tanggal;
        $konsultasi['status'] = 'Belum Konsultasi';

        $post_konsultasi = Konsultasi::create($konsultasi);
        // dd($post_konsultasi);

        $bukti_transaksi = time().'_'.$request->nama.'.'.$request->bukti_transaksi->extension();

        $transaksi['konsultasi_id'] = $post_konsultasi->id;
        $transaksi['customer_id'] = $request->customer_id;
        $transaksi['status'] = 'Menunggu Konfirmasi';
        $transaksi['nominal'] = $psikolog->fee;
        $transaksi['nama_rekening_asal'] = $request->nama;
        $transaksi['no_rekening_asal'] = $request->no_rek_asal;
        $transaksi['no_rekening_tujuan'] = $request->no_rek_tujuan;
        $transaksi['bukti_transaksi'] = $request->file('bukti_transaksi')->storeAs('bukti-transaksi',$bukti_transaksi);

        Transaksi::create($transaksi);

        return redirect()->route('dashboard-user')->with('success', 'User berhasil diubah.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Konsultasi  $konsultasi
     * @return \Illuminate\Http\Response
     */
    public function show(Konsultasi $konsultasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Konsultasi  $konsultasi
     * @return \Illuminate\Http\Response
     */
    public function edit(Konsultasi $konsultasi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Konsultasi  $konsultasi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $konsultasi = Konsultasi::where($request->id);
        dd($konsultasi->status);

        return redirect()->back()->with('success', 'User berhasil diubah.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Konsultasi  $konsultasi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Konsultasi $konsultasi)
    {
        //
    }
}
