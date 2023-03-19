<?php

namespace App\Http\Controllers;

use App\Models\Kemungkinan;
use Illuminate\Http\Request;

class KemungkinanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('kemungkinan.index',[
            'kemungkinan' => Kemungkinan::latest()->paginate(5)
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
            'kemungkinan' => 'required|max:255',

            ]);

            Kemungkinan::create($validasiData);

            return redirect('/kemungkinan')->with('success', 'New post has been added!') ;
    }

    /**
     * Display the specified resource.
     */
    public function show(Kemungkinan $kemungkinan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kemungkinan $kemungkinan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kemungkinan $kemungkinan)
    {
        $rules = [
            'kemungkinan' => 'required|max:255',
            ];

              $validatedData = $request->validate($rules);



       Kemungkinan::where('id', $kemungkinan->id)->Update($validatedData);

return redirect('/kemungkinan')->with('success', 'Post has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kemungkinan $kemungkinan)
    {
        kemungkinan::destroy($kemungkinan->id);
        return redirect('/kemungkinan')->with('success', ' Post has been deleted!');
    }
}
