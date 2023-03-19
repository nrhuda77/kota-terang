<?php

namespace App\Http\Controllers;

use App\Models\Template;
use Illuminate\Http\Request;

class TemplateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('template.index',[
            'template' => Template::latest()->paginate()
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

            'judul' => 'required|max:255',
            'text' => 'required|max:255',

            ]);

            Template::create($validasiData);

            return redirect('/template')->with('success', 'New post has been added!') ;
    }

    /**
     * Display the specified resource.
     */
    public function show(Template $template)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Template $template)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Template $template)
    {
        $id = $request->id;
        $rules = [
            'judul' => 'required|max:255',
            'text' => 'required|max:255',

            ];

              $validatedData = $request->validate($rules);



       Template::where('id', $id)->Update($validatedData);

return redirect('/template')->with('success', 'Post has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Template $template)
    {
        //
    }

    public function ajax_edit_template($id){
     $template = Template::find($id);
        return json_encode($template);


    }


}
