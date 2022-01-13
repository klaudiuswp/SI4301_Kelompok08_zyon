<?php

namespace App\Http\Controllers;

use App\Models\Psikolog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PsikologController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user()->hasRole('admin')){
            return view('dashboard_admin.psikolog');
        }if(Auth::user()->hasRole('user')){
            return view('dashboard_user.psikolog');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard_admin.tambah-psikolog');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $vaccine = Vaccines::find($id);
        // $patient = new Patients();
        // $patient->vaccine_id = $vaccine->id;
        // $patient->name = $request->name;
        // $patient->nik = $request->nik;
        // $patient->alamat = $request->alamat;
        // $patient->no_hp = $request->no_hp;
        // $patient->save();
        // return redirect(route('patient.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Psikolog  $psikolog
     * @return \Illuminate\Http\Response
     */
    public function show(Psikolog $psikolog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Psikolog  $psikolog
     * @return \Illuminate\Http\Response
     */
    public function edit(Psikolog $psikolog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Psikolog  $psikolog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Psikolog $psikolog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Psikolog  $psikolog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Psikolog $psikolog)
    {
        //
    }
}
