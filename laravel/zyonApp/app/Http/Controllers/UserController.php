<?php

namespace App\Http\Controllers;

use App\Models\Konsultasi;
use App\Models\Psikolog;
use App\Models\Transaksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('role:user');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard_user.dashboard');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $user = Auth::user()->id;
        $konsultasi_all = Konsultasi::where('customer_id',$user)->get();

        foreach($konsultasi_all as $konsultasi){
            $konsultasi['nama_psikolog'] = Psikolog::find('psikolog_id');
        };
        // dd($konsultasi_all->first()->find('psikolog_id'));
        return view('dashboard_user.event',['konsultasi_all'=>$konsultasi_all,'pos'=>'Kegiatan']);
    }

    public function showactive()
    {
        $user = Auth::user()->id;
        $konsultasi_all = Konsultasi::where('customer_id',$user)->where('status','Belum Konsultasi')->get();

        foreach($konsultasi_all as $konsultasi){
            $konsultasi['nama_psikolog'] = Psikolog::find('psikolog_id');
        };
        // dd($konsultasi_all->first()->find('psikolog_id'));
        return view('dashboard_user.event',['konsultasi_all'=>$konsultasi_all,'pos'=>'Kegiatan yang belum Selesai']);
    }
    
    public function transHistory()
    {
        $user = Auth::user()->id;
        $transaksi_all = Transaksi::where('customer_id',$user)->get();
        return view('dashboard_user.transaksi',['transaksi_all'=>$transaksi_all]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
