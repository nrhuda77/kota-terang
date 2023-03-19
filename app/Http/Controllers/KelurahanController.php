<?php

namespace App\Http\Controllers;

use App\Models\Kelurahan;
use Illuminate\Http\Request;

class KelurahanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('kelurahan.index',[
            'kelurahan' => Kelurahan::latest()->paginate(5)
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
            'kelurahan' => 'required|max:255',

            ]);

            Kelurahan::create($validasiData);

            return redirect('/kelurahan')->with('success', 'New post has been added!') ;

    }

    /**
     * Display the specified resource.
     */
    public function show(Kelurahan $kelurahan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kelurahan $kelurahan)
    {
        return view('kelurahan.edit',[
            'kelurahan' => $kelurahan
            ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kelurahan $kelurahan)
    {
        $rules = [
            'kelurahan' => 'required|max:255',
            ];

              $validatedData = $request->validate($rules);



       Kelurahan::where('id', $kelurahan->id)->Update($validatedData);

return redirect('/kelurahan')->with('success', 'Post has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kelurahan $kelurahan)
    {
        Kelurahan::destroy($kelurahan->id);
        return redirect('/kelurahan')->with('success', ' Post has been deleted!');

    }
}
