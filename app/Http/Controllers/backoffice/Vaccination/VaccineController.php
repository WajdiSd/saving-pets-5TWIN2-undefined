<?php

namespace App\Http\Controllers\backoffice\Vaccination;

use App\Models\Vaccine;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VaccineController extends Controller
{
    public function index()
    {
        $listevaccine = Vaccine::all();
      error_log($listevaccine);
        return view('content.backoffice.Vaccine.index', compact("listevaccine"));
    }
    //Get all :
    // affiche : gère l affichage de la page de listing
    public function affiche()
        {
        $listevaccine = Vaccine::all();
        return view('content.backoffice.Vaccine.index', compact("listevaccine"));
        }

    //Add
    //1 * Create() : gère l affichage de la page de création
    public function create()
    {
        $typevaccines = \App\Models\TypeVaccine::all();
        return view('content.backoffice.Vaccine.create', compact("typevaccines"));
    }
    //2 * Save() : la fonction qui permet d’ajouter un nouveau enregistrement dans la base.
    public function store(Request $request)
    {
        $request->validate([

            'name' => 'required|max:50',

            'validity' => 'required',

            'quantity' => 'required',

            'type_vaccine_id' => 'required',

            ]);

        Vaccine::create($request->all());
        return redirect()->route('vaccines.index');
    }

    //Delete :
    // destroy : gère la suppression
    public function destroy($id)
    {
        $vaccine = Vaccine::find($id) ;
        $vaccine->delete() ;
        return redirect()->route('vaccines.index');
    }

    //Edit prod:
    // 1 * edit : va servir à afficher la vue et à transmettre des données si nécessaire.
    public function edit($id)
    {
        $vaccine =  Vaccine::find($id);
        $typevaccines = \App\Models\TypeVaccine::all();
        return view('content.backoffice.Vaccine.edit', compact('vaccine','typevaccines'));
    }
    // 2 * update : va contenir toute la partie modification de la donnée
    public function update(Request $request, $id)
    {
      $vaccine = ['type_vaccine_id' => $request->type_vaccine_id, 'name' => $request->name, 'validity' => $request->validity, 'quantity' => $request->quantity,];

            \App\Models\Vaccine::whereId($id)->update($vaccine) ;
        return  redirect()->route('vaccines.index') ;

    }
    //Show selected :
    //show : gère l affichage d un element selectionne
    public function show($id)
    {
        $vaccine =  Vaccine::find($id);

        return view('content.backoffice.Vaccine.show', compact('vaccine'));


    }
}
