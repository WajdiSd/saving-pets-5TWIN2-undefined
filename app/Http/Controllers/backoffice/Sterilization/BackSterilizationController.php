<?php

namespace App\Http\Controllers\backoffice\Sterilization;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BackSterilizationController extends Controller
{
    public function index()
    {
        $listeSterilizations = \App\Models\Sterilization::with('pet')->get();
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
        $request->validate([
            'pet_id' => 'required',
            'veto_id' => 'required',
            'fee' => 'required|Numeric',
            'date' => 'required|date|after_or_equal:today',
            'remarks' => 'required|max:255',

        ]);

        $sterilization = \App\Models\Sterilization::create($request->all());
        $pet = \App\Models\Sterilization::find($sterilization->pet_id);
        $pet['sterilization_id'] = $sterilization->id;
        \App\Models\Pet::whereId($sterilization->pet_id)->update($pet);

        return redirect()->route('sterilization.index')
            ->with('success', 'Vterilization added successfully.');
    }

    public function edit($id)
    {
        $veterinarians = \App\Models\Veterinarian::all();
        $sterilization = \App\Models\Sterilization::find($id);
        return view('content.backoffice.Sterilization.edit', compact('sterilization', 'veterinarians'));
    }

    public function update(Request $request, $id)
    {

        $request->validate([
            'pet_id' => 'required|unique:pets,id',
            'veto_id' => 'required',
            'fee' => 'required|Numeric',
            'date' => 'required|date|after_or_equal:today',
            'remarks' => 'required|max:255',
        ]);

        $sterilization = ['pet_id' => $request->pet_id, 'veto_id' => $request->veto_id, 'fee' => $request->fee, 'date' => $request->date, 'remarks' => $request->remarks];
        \App\Models\Sterilization::whereId($id)->update($sterilization);
        return  redirect()->route('sterilization.index')
            ->with('info', 'Vterilization updated successfully.');
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
        return redirect()->route('sterilization.index')
            ->with('warning', 'Vterilization deleted successfully.');
    }

    //show : gère l affichage de la page d un produit
    public function show($id)
    {
        $sterilization =  \App\Models\Sterilization::find($id);
        return view('content.backoffice.Sterilization.show', compact('sterilization'));
    }
}
