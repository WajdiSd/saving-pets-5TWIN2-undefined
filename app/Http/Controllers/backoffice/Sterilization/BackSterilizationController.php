<?php

namespace App\Http\Controllers\backoffice\Sterilization;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BackSterilizationController extends Controller
{
    public function index()
    {
        $listeSterilizations = \App\Models\Sterilization::with(['pet'])->orderBy('date', 'DESC')->get();
        $listePet = \App\Models\Pet::all();
        $listeNonSterPet = \App\Models\Pet::doesntHave('sterilization')->get();

        $pettotal = count($listePet);
        $nonSterNumber = count($listeNonSterPet);
        $sterNumber = $pettotal - $nonSterNumber;
        $percentageSter = $sterNumber * 100 / $pettotal;
        return view('content.backoffice.Sterilization.index', compact('listeSterilizations', 'nonSterNumber', 'sterNumber', 'percentageSter'));
    }

    public function create()
    {
        // get all pets with no relation to sterilization
        $pets = \App\Models\Pet::doesntHave('sterilization')->get();
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

        return redirect()->route('sterilization.index')
            ->with('success', 'Vterilization added successfully.');
    }

    public function edit($id)
    {
        $pets = \App\Models\Pet::doesntHave('sterilization')->get();
        $veterinarians = \App\Models\Veterinarian::all();
        $sterilization = \App\Models\Sterilization::find($id);
        return view('content.backoffice.Sterilization.edit', compact('sterilization', 'veterinarians', 'pets'));
    }

    public function update(Request $request, $id)
    {

        $request->validate([
            'pet_id' => 'required',
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
