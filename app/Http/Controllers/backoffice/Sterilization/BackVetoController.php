<?php

namespace App\Http\Controllers\backoffice\Sterilization;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BackVetoController extends Controller
{
    public function index()
    {
        $listeVetos = \App\Models\Veterinarian::all();
        return view('content.backoffice.Veterinarian.index', compact("listeVetos"));
    }

    //Delete prod:
    // destroy : gère la suppression d un produit.
    public function destroy($id)
    {
        $veto = \App\Models\Veterinarian::find($id);
        $veto->delete();
        return redirect()->route('veterinarian.index');
    }

    public function create()
    {
        return view('content.backoffice.Veterinarian.create');
    }

    public function store(Request $request)
    {
        \App\Models\Veterinarian::create($request->all());
        return redirect()->route('veterinarian.index');
    }

    public function edit($id)
    {
        $veterinarian = \App\Models\Veterinarian::find($id);
        return view('content.backoffice.Veterinarian.edit', compact('veterinarian'));
    }

    public function update(Request $request, $id)
    {
        $veto = ['name' => $request->name, 'address' => $request->address, 'phone' => $request->phone, 'email' => $request->email];
        \App\Models\Veterinarian::whereId($id)->update($veto);
        return  redirect()->route('veterinarian.index');
    }

    //show : gère l affichage de la page d un produit
    public function show($id)
    {
        $veterinarian =  \App\Models\Veterinarian::find($id);
        return view('content.backoffice.Veterinarian.show', compact('veterinarian'));
    }
}
