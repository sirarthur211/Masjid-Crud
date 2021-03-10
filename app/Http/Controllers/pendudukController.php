<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pendudukController extends Controller
{
    public function index()
    {
        $data_penduduk = \App\Models\penduduk::all();
        return view('penduduk.index',['data_penduduk' => $data_penduduk]);
    }
    public function create(Request $request)
    {
        \App\Models\penduduk::create($request->all());
        return redirect('/penduduk')->with('sukses', 'Data Berhasil diinput');

    }
    public function edit($id)
    {
        $penduduk = \App\Models\penduduk::find($id);
        return view('penduduk/edit',['penduduk' => $penduduk]);
    }
    public function update(Request $request, $id)
    {
        $penduduk = \App\Models\penduduk::find($id);
        $penduduk->update($request->all());
        return redirect('/penduduk')->with('sukses', 'Data berhasil diupdate');
    }
    public function delete($id)
    {
        $penduduk = \App\Models\penduduk::find($id);
        $penduduk->delete($penduduk);
        return redirect('/penduduk')->with('sukses', 'Data berhasil dihapus');
    }


}
