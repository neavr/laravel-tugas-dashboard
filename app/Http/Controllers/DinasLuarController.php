<?php

namespace App\Http\Controllers;



use App\Models\DinasLuar;



use Illuminate\Http\Request;

class DinasLuarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dinas_luar.index', [
            'dinas' => DinasLuar::all(),
        ]);
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
        DinasLuar::create([
            'nip' => $request->nip,
            'nama' => $request->nama,
            'kota_asal' => $request->kota_asal,
            'st_asal' => $request->st_asal,
            'ket_asal' => $request->ket_asal,
            'kota_tujuan' => $request->kota_tujuan,
            'st_pulang' => $request->st_pulang,
            'ket_pulang' => $request->ket_pulang,
        ]);
        return redirect()->back()->with(['message'=>'pegawai berhasil ditambahkan','status'=>'success']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DinasLuar  $dinasLuar
     * @return \Illuminate\Http\Response
     */
    public function show(DinasLuar $dinasLuar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DinasLuar  $dinasLuar
     * @return \Illuminate\Http\Response
     */
    public function edit(DinasLuar $id)
    {
        DinasLuar::where('id', $id)->first();
        return view ('dinas_luar.edit', [
            'dinas' => $id
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DinasLuar  $dinasLuar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        DinasLuar::where('id', $id)
        ->update([
            'nip' => $request->nip,
            'nama' => $request->nama,
            'kota_asal' => $request->kota_asal,
            'st_asal' => $request->st_asal,
            'ket_asal' => $request->ket_asal,
            'kota_tujuan' => $request->kota_tujuan,
            'st_pulang' => $request->st_pulang,
            'ket_pulang' => $request->ket_pulang,
        ]);
        return redirect('dinas-luar')->with(['message'=>'pegawai berhasil di update','status'=>'success']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DinasLuar  $dinasLuar
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DinasLuar::where('id',$id)->delete();
        return redirect()->back()->with(['message'=>'pegawai berhasil di delete','status'=>'success']);
    }
}
