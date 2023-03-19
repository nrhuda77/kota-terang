<?php

namespace App\Http\Controllers;

use App\Models\JenisBantuan;
use Illuminate\Http\Request;

class JenisBantuanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('jenis_bantuan.index',[
            'jenis_bantuan' => JenisBantuan::latest()->paginate(5)
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
            'jenis_bantuan' => 'required|max:255',

            ]);

            JenisBantuan::create($validasiData);

            return redirect('/jenis-bantuan')->with('success', 'New post has been added!') ;
    }

    /**
     * Display the specified resource.
     */
    public function show(JenisBantuan $jenisBantuan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(JenisBantuan $jenisBantuan)
    {
        return view('jenis-bantuan.edit',[
            'jenis_bantuan' => $jenisBantuan
            ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, JenisBantuan $jenisBantuan)
    {
        $rules = [
            'jenis_bantuan' => 'required|max:255',
            ];

              $validatedData = $request->validate($rules);



       JenisBantuan::where('id', $jenisBantuan->id)->Update($validatedData);

return redirect('/jenis-bantuan')->with('success', 'Post has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(JenisBantuan $jenisBantuan)
    {
        JenisBantuan::destroy($jenisBantuan->id);
        return redirect('/jenis-bantuan')->with('success', ' Post has been deleted!');

    }
}
