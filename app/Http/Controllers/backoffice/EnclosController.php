<?php

namespace App\Http\Controllers\backoffice;

use App\Models\Enclos;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EnclosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $enclos = Enclos::all();
        return view('content.backoffice.enclos.enclos-table', compact('enclos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('content.backoffice.enclos.create-enclos');
    }

    /**
     * Delete a specific enclos.
     *
     * @param int $id
     */
    public function destroy($id)
    {
        $enclos = Enclos::find($id);
        $enclos->delete();
        return redirect()->route('enclos.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'race' => 'required',
            'capacity' => 'required',
            'local_id' => 'required'
        ]);

        $enclos = new Enclos;
        $enclos->race = $request->input('race');
        $enclos->capacity = $request->input('capacity');
        $enclos->local = $request->input('local_id');
        $enclos->save();

        return redirect('/backoffice/enclos')->with('success', 'Enclos Created');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Enclos  $enclos
     * @return \Illuminate\Http\Response
     */
    public function edit(Enclos $enclos)
    {
        return view('content.backoffice.enclos.edit-enclos', compact('enclos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Enclos  $enclos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Enclos $enclos)
    {
        $this->validate($request, [
            'race' => 'required',
            'capacity' => 'required',
            'local_id' => 'required'
        ]);

        $enclos->race = $request->input('race');
        $enclos->capacity = $request->input('capacity');
        $enclos->local = $request->input('local_id');
        $enclos->save();

        return redirect('backoffice/enclos')->with('success', 'Enclos Updated');
    }
}
