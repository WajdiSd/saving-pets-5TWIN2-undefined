<?php

namespace App\Http\Controllers\backoffice;

use App\Models\Local;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LocalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $locals = Local::all();
        return view('content.backoffice.local.local-table', compact('locals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('content.backoffice.local.create-local');
    }

    /**
     * Delete a specific local.
     *
     * @param int $id
     */
    public function destroy($id)
    {
        $local = Local::find($id);
        $local->delete();
        return redirect()->route('locals.index');
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
            'name' => 'required',
            'address' => 'required',
            'status' => 'required'
        ]);

        $local = new Local;
        $local->name = $request->input('name');
        $local->address = $request->input('address');
        $local->status = $request->input('status');

        $local->save();

        return redirect('/backoffice/locals')->with('success', 'Local Created');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Local  $local
     * @return \Illuminate\Http\Response
     */
    public function edit(Local $local)
    {
        return view('content.backoffice.local.edit-local', compact('local'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Local  $local
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Local $local)
    {
        $this->validate($request, [
            'name' => 'required',
            'address' => 'required',
            'status' => 'required'
        ]);

        $local->name = $request->input('name');
        $local->address = $request->input('address');
        $local->status = $request->input('status');
        $local->save();

        return redirect('backoffice/locals')->with('success', 'Local Updated');
    }
}
