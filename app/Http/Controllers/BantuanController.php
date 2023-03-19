<?php

namespace App\Http\Controllers;


use App\Models\Bantuan;
use App\Models\DetailBantuan;
use App\Models\JenisBantuan;
use App\Models\SubjectDonatur;
use App\Models\Donatur;
use App\Models\DonaturActive;
use App\Models\Kecamatan;
use App\Models\Kelurahan;
use App\Models\Kemiskinan;
use App\Models\Penerima;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BantuanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('bantuan.index',[
            'bantuan' => Bantuan::latest()->paginate(5),

            'detail' => DetailBantuan::all(),
            'jenis_bantuan' => JenisBantuan::all(),
            'donatur' => Donatur::all()->first(),
            'donatur_all' => Donatur::all(),
          //  'detail' => DetailBantuan::where('bantuan_id', $id_bantuan)->latest()->paginate(),
          'pnr' => Penerima::all()

//  'penerima' => Penerima::whereRaw('id not in (select penerima_id from detail_bantuans where bantuan_id = "'.$id_bantuan.'")')->get(),
//'penerima' => Penerima::whereRaw('id not in (select penerima_id from detail_bantuans where bantuan_id = "'.$id_bantuan.'")')->get(),

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
            'jenis_bantuan_id' => 'required',
            'gambar' => 'image|file|max:5080',
            'deskripsi' => 'required',
            'judul_bantuan' => 'required|max:255',
            'text_wa' => 'required',
            'gambar_undangan_wa' => 'image|file|max:5080'
            ]);

            if($request->file('gambar')){
                $validasiData ['gambar']= $request->file('gambar')->store('post-images');
            }
            if($request->file('gambar_undangan_wa')){
                $validasiData ['gambar_undangan_wa']= $request->file('gambar_undangan_wa')->store('images-wa');
            }

            Bantuan::create($validasiData);

            return redirect('/bantuan')->with('success', 'New post has been added!') ;
    }

    /**
     * Display the specified resource.
     */
    public function show(Bantuan $bantuan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Bantuan $bantuan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Bantuan $bantuan)
    {
        $id = $request->id;



$rules = [
    'jenis_bantuan_id' => 'required',
            'gambar' => 'image|file|max:5080',
            'deskripsi' => 'required',
            'judul_bantuan' => 'required|max:255',
            'text_wa' => 'required',
            'gambar_undangan_wa' => 'image|file|max:5080'
    ];

      $validatedData = $request->validate($rules);

    if($request->file('gambar')){
    if($request->oldImage){
        Storage::delete($request->oldImage);
    }
    $validatedData['gambar'] = $request->file('gambar')->store('post-images');
}

if($request->file('gambar_undangan_wa')){
    if($request->oldImage){
        Storage::delete($request->oldImage);
    }
    $validatedData['gambar_undangan_wa'] = $request->file('gambar_undangan_wa')->store('images-wa');
}
Bantuan::where('id', $id)->Update($validatedData);

return redirect('/bantuan')->with('success', 'Post has been updated!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Bantuan $bantuan)
    {
        if($bantuan->gambar){
            Storage::delete($bantuan->gambar);
        }
        if($bantuan->gambar_undangan_wa){
            Storage::delete($bantuan->gambar_undangan_wa);
        }

        $bantuan = Bantuan::findOrFail($bantuan->id);

            $bantuan->delete();


        return redirect('/bantuan')->with('success', ' Post has been deleted!');

    }

    public function ajax_edit($id){
     $bantuan = Bantuan::find($id);
        return json_encode($bantuan);


    }

    public function ajax_detail($id){
     $bantuan = Bantuan::where(['id'=> $id])->first();
        //return Response::json($bantuan);
        return json_encode($bantuan);
    }
}
