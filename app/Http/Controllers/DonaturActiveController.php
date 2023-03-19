<?php

namespace App\Http\Controllers;

use App\Models\Bantuan;
use App\Models\Donatur;
use App\Models\DonaturActive;
use Illuminate\Http\Request;

class DonaturActiveController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request, $id_bantuan)
    {
        $idBantuan = $request->bantuan;

        $donatur_id = $request->donatur;
        return view('donatur_active.index',[
            'dna' => DonaturActive::where('bantuan_id', $id_bantuan)->latest()->paginate(),
            'btn' => $idBantuan,
            'donatur' => Donatur::whereRaw('id not in (select donatur_id from donatur_actives where bantuan_id = "'.$id_bantuan.'")')->get(),

            'dnr' => $donatur_id
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
        foreach(request()->donatur_id as $donatur){
            DonaturActive::create(
                [
                    'bantuan_id' => $request['bantuan_id'][$donatur],
                    'donatur_id' => $request['donatur_id'][$donatur],

                ]
                );
        }





                $idBantuan = $request->bantuan;

          return redirect('/details/'.$idBantuan)->with('success', 'New post has been added!') ;


    }

    /**
     * Display the specified resource.
     */
    public function show(DonaturActive $donaturActive)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DonaturActive $donaturActive)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DonaturActive $donaturActive)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DonaturActive $donaturActive)
    {
        //
    }
}
