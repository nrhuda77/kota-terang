<?php

namespace App\Http\Controllers;

use App\Models\Kecamatan;
use Illuminate\Http\Request;

class KecamatanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('kecamatan.index',[
            'kecamatan' => Kecamatan::latest()->paginate(5)
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
            'kecamatan' => 'required|max:255',

            ]);

            Kecamatan::create($validasiData);

            return redirect('/kecamatan')->with('success', 'New post has been added!') ;
    }

    /**
     * Display the specified resource.
     */
    public function show(Kecamatan $kecamatan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kecamatan $kecamatan)
    {
        return view('kecamatan.edit',[
            'kecamatan' => $kecamatan
            ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kecamatan $kecamatan)
    {
        $rules = [
            'kecamatan' => 'required|max:255',
            ];

              $validatedData = $request->validate($rules);



       Kecamatan::where('id', $kecamatan->id)->Update($validatedData);

return redirect('/kecamatan')->with('success', 'Post has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kecamatan $kecamatan)
    {
        Kecamatan::destroy($kecamatan->id);
        return redirect('/kecamatan')->with('success', ' Post has been deleted!');

    }
}
