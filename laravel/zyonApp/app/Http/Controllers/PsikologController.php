<?php

namespace App\Http\Controllers;

use App\Models\Psikolog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PsikologController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $psikologs = Psikolog::all();
        if (Auth::user()->hasRole('admin')){
            return view('dashboard_admin.psikolog',['psikologs' => $psikologs]);
        }if(Auth::user()->hasRole('user')){
            return view('dashboard_user.psikolog',['psikologs' => $psikologs]);
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

        // ddd($request);

        $validated = $request->validate([
            'nama' => ['required', 'string', 'max:255'],
            'fee' => ['required'],
            'deskripsi' => ['required', 'string'],
            'foto_psikolog' => ['required', 'image','file'],
        ]);

        $foto = time().'_'.$request->nama.'.'.$request->foto_psikolog->extension();

        $validated['foto_psikolog'] = $request->file('foto_psikolog')->storeAs('foto-psikolog',$foto);
        
        Psikolog::create($validated);

        return redirect()->back()->with('success','pembayaran berhasil');
        
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
    public function edit(Request $request)
    {
        $psikolog = Psikolog::findorFail($request->id);
        $validated = $request->validate([
            'nama' => ['string', 'max:255'],
            'fee' => [],
            'deskripsi' => ['string'],
            'foto_psikolog' => ['image','file'],
        ]);

        if($request->foto_psikolog){
            $foto = time().'_'.$request->nama.'.'.$request->foto_psikolog->extension();
            $validated['foto_psikolog'] = $request->file('foto_psikolog')->storeAs('foto-psikolog',$foto);
        }

        // Storage::delete('storage/'.$request->foto_psikolog);
        $psikolog->update($validated);

        return redirect()->back()->with('success', 'User berhasil diubah.');
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
    public function delete(Request $request)
    {
        $psikolog = Psikolog::findorFail($request->id);
        $psikolog->delete();

        return redirect()->back()->with('success', 'User berhasil diubah.');
    }
}
