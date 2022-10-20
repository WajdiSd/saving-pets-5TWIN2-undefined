<?php

namespace App\Http\Controllers\backoffice\Sterilization;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BackSterilizationController extends Controller
{
    public function index()
    {
        $listeSterilizations = \App\Models\Sterilization::all();
        return view('content.backoffice.Sterilization.index', compact("listeSterilizations"));
    }

    public function create()
    {
        $pets = \App\Models\Pet::where('sterilization_id', null)->get();
        $veterinarians = \App\Models\Veterinarian::all();
        $sterilization = \App\Models\Sterilization::all();
        return view('content.backoffice.Sterilization.create', compact('sterilization', 'pets', 'veterinarians'));
    }

    public function store(Request $request)
    {
        //dd($request->all());

        $sterilization = \App\Models\Sterilization::create($request->all());
        $pet = \App\Models\Sterilization::find($sterilization->pet_id);
        $pet['sterilization_id'] = $sterilization->id;
        \App\Models\Pet::whereId($sterilization->pet_id)->update($pet);

        return redirect()->route('sterilization.index');
    }

    public function edit($id)
    {
        $veterinarians = \App\Models\Veterinarian::all();
        $sterilization = \App\Models\Sterilization::find($id);
        return view('content.backoffice.Sterilization.edit', compact('sterilization', 'veterinarians'));
    }

    public function update(Request $request, $id)
    {
        $sterilization = ['pet_id' => $request->pet_id, 'veto_id' => $request->veto_id, 'fee' => $request->fee, 'date' => $request->date, 'remarks' => $request->remarks];
        \App\Models\Sterilization::whereId($id)->update($sterilization);
        return  redirect()->route('sterilization.index');
    }

    //Delete prod:
    // destroy : gère la suppression d un produit.
    public function destroy($id)
    {
        $sterilization = \App\Models\Sterilization::find($id);
        $pet = \App\Models\Sterilization::find($sterilization->pet_id);
        $pet['sterilization_id'] = null;
        \App\Models\Pet::whereId($sterilization->pet_id)->update($pet);
        $sterilization->delete();
        return redirect()->route('sterilization.index');
    }

    //show : gère l affichage de la page d un produit
    public function show($id)
    {
        $sterilization =  \App\Models\Sterilization::find($id);
        return view('content.backoffice.Sterilization.show', compact('sterilization'));
    }
}
