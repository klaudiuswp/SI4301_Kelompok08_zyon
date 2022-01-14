<?php

namespace App\Http\Controllers;

use App\Models\Rekening;
use Illuminate\Http\Request;

class RekeningController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $rekening = Rekening::all();
        return view('dashboard_admin.metode-bayar',['rekenings'=>$rekening]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'no_rek' => ['required', 'unique:rekenings', 'max:255'],
            'nama' => ['required', 'max:255'],
            'payment_method' => ['required', 'string'],
        ]);
        
        Rekening::create($validated);

        return redirect()->back()->with('success','pembayaran berhasil');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Rekening  $rekening
     * @return \Illuminate\Http\Response
     */
    public function show(Rekening $rekening)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Rekening  $rekening
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $rekening = Rekening::findorFail($request->no_rek);
        $validated = $request->validate([
            'no_rek' => ['string', 'max:255'],
            'nama' => ['max:255'],
            'payment_method' => ['string'],
        ]);

        $rekening->update($validated);

        return redirect()->back()->with('success', 'User berhasil diubah.');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Rekening  $rekening
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Rekening $rekening)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Rekening  $rekening
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request)
    {
        $rekening = Rekening::findorFail($request->no_rek);
        $rekening->delete();

        return redirect()->back()->with('success', 'User berhasil diubah.');
    }
}
