<?php

namespace App\Http\Controllers;

use App\Models\Donatur;
use App\Models\Bantuan;
use App\Models\DetailBantuan;
use App\Models\JenisBantuan;
use App\Models\SubjectDonatur;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class DonaturController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('donatur.index',[
            'donatur' => Donatur::latest()->paginate(5),
            'bantuan' => Bantuan::latest()->paginate(5),
            'detail' => DetailBantuan::all(),
            'jenis_bantuan' => JenisBantuan::all(),
            'subject_donatur' => SubjectDonatur::all()

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

            'gambar' => 'image|file|max:5080',
            'deskripsi' => 'required',
            'nama_instansi' => 'required|max:255',
            ]);

            if($request->file('gambar')){
                $validasiData ['gambar']= $request->file('gambar')->store('gambar-logo');
            }

            Donatur::create($validasiData);

            return redirect('/donatur')->with('success', 'New post has been added!') ;
    }

    /**
     * Display the specified resource.
     */
    public function show(Donatur $donatur)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Donatur $donatur)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Donatur $donatur)
    {
        $id = $request->id;



$rules = [

            'gambar' => 'image|file|max:5080',
            'deskripsi' => 'required',
            'nama_instansi' => 'required|max:255',
    ];

      $validatedData = $request->validate($rules);

    if($request->file('gambar')){
    if($request->oldImage){
        Storage::delete($request->oldImage);
    }
    $validatedData['gambar'] = $request->file('gambar')->store('gambar-logo');
}


Donatur::where('id', $id)->Update($validatedData);

return redirect('/donatur')->with('success', 'Post has been updated!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Donatur $donatur)
    {
        if($donatur->gambar){
            Storage::delete($donatur->gambar);
        }
        if($donatur->gambar_undangan_wa){
            Storage::delete($donatur->gambar_undangan_wa);
        }

        $donatur = Donatur::findOrFail($donatur->id);

            $donatur->delete();


        return redirect('/donatur')->with('success', ' Post has been deleted!');
    }


    public function ajax_tambah(Request $request,$id){
     $subjectdonatur = SubjectDonatur::where('donatur_id', $id)->get();
        return json_encode($subjectdonatur);


    }


    public function ajax_donatur(Request $request){
        $donatur = $request->donatur_id;
     //   SubjectDonatur::findOrFail(where($donaturid));
      SubjectDonatur::where('donatur_id' ,$donatur)->delete();
      $nama_lengkap = $request->nama_lengkap;

      $nohp = $request->nohp;
      $alamat = $request->alamat;


    foreach($donatur as $donatur_id) {
        SubjectDonatur::create([
            'donatur_id' => $donatur_id,
            'nama_lengkap' => $nama_lengkap,
            'nohp' => $nohp,
            'alamat' => $alamat
        ]);
    }


return redirect('/donatur')->with('success', ' Post has been deleted!');


    }

    public function ajax_detail_donatur($id){
     $donatur = Donatur::where(['id'=> $id])->first();
        //return Response::json($bantuan);
        return json_encode($donatur);
    }

    public function ajax_edit_donatur($id){
     $donatur = Donatur::find($id);
        return json_encode($donatur);


    }
}



   // public function ajax_detail($id){
    //    $donaturid = $request->donatur_id;
     //   SubjectDonatur::findOrFail(where($donaturid));
   //     $donatur = Donatur::findOrFail($donaturid);
//$donaturid->delete();
  //  $seat_ids = $request->seat_id;

    //}
