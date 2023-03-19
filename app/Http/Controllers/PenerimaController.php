<?php

namespace App\Http\Controllers;

use App\Models\Kecamatan;
use App\Models\Kelurahan;
use App\Models\Kemungkinan;
use App\Models\Penerima;
use Illuminate\Http\Request;

class PenerimaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('penerima.index',[
            'penerima' => Penerima::latest()->paginate(5),
            'kemungkinan' => Kemungkinan::all(),
            'kecamatan' => Kecamatan::all(),
            'kelurahan' => Kelurahan::all(),
            'pnr'=> Penerima::all()
            ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
          $validasiData = $request->validate([
            'kecamatan_id' => 'required',
            'kelurahan_id' => 'required',
            'kemungkinan_id' => 'required',
            'noktp' => 'required|max:255',
            'nik' => 'required|max:255',
            'nama' => 'required',
            'tempat_lahir' => 'required|max:255',
            'tanggal_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'alamat' => 'required|max:255',
            'nohp' => 'required|max:255',
            'status' => 'required|max:255',
            'pendapatan' => 'required|max:255',
            ]);



           Penerima::create($validasiData);

            return redirect('/penerima')->with('success', 'New post has been added!') ;
    }

    /**
     * Display the specified resource.
     */
    public function show(Penerima $penerima)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Penerima $penerima)
    {
        return view('penerima.edit', [
            'penerima' => $penerima,
            'kemungkinan' => Kemungkinan::all(),
            'kecamatan' => Kecamatan::all(),
            'kelurahan' => Kelurahan::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Penerima $penerima)
    {

        $rules = [
            'kecamatan_id' => 'required',
            'kelurahan_id' => 'required',
            'kemungkinan_id' => 'required',
            'noktp' => 'required|max:255',
            'nik' => 'required|max:255',
            'nama' => 'required',
            'tempat_lahir' => 'required|max:255',
            'tanggal_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'alamat' => 'required|max:255',
            'nohp' => 'required|max:255',
            'status' => 'required|max:255',
            'pendapatan' => 'required|max:255',
            ];

              $validatedData = $request->validate($rules);



        Penerima::where('id', $penerima->id)->Update($validatedData);

return redirect('/penerima')->with('success', 'Post has been updated!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Penerima $penerima)
    {

        Penerima::destroy($penerima->id);
        return redirect('/penerima')->with('success', ' Post has been deleted!');

    }


    public function ajax_detail_penerima($id){
     $penerima = Penerima::where(['id'=> $id])->first();
        //return Response::json($bantuan);
        return json_encode($penerima);
    }
}
