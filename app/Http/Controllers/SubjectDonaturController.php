<?php

namespace App\Http\Controllers;

use App\Models\SubjectDonatur;
use Illuminate\Http\Request;

class SubjectDonaturController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
$d = $request->donatur;

        return view('subject_donatur.index',[

            'subject'=> SubjectDonatur::where('donatur_id', $d)->latest()->paginate(),
            'd' => $d
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
        $d = $request->donatur_id;
        $validasiData = $request->validate([
            'donatur_id' => 'required',
            'nama_lengkap' => 'required|max:255',
            'nohp' => 'required|max:255',
            'alamat' => 'required|max:255',

            ]);

            SubjectDonatur::create($validasiData);

            return redirect('/subject-donatur/'.$d)->with('success', 'New post has been added!') ;
    }

    /**
     * Display the specified resource.
     */
    public function show(SubjectDonatur $subjectDonatur)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SubjectDonatur $subjectDonatur)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SubjectDonatur $subjectDonatur)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SubjectDonatur $subjectDonatur)
    {
        //
    }
}
