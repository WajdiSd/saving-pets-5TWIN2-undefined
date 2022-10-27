<?php

namespace App\Http\Controllers\backoffice\Pet;

use App\Models\Pet;
use App\Models\PetVaccines;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PetsController extends Controller
{
    public function index()
    {
        $listepets = Pet::all();
        return view('content.backoffice.Pet.index', compact("listepets"));
    }

    public function front()
    {
        $listepets = Pet::all();
        return view('content.frontoffice.Pet.index', compact("listepets"));
    }
    //Get all :
    // affiche : gère l affichage de la page de listing
    public function affiche()
        {
            $listepets = Pet::all();
        return view('content.backoffice.Pet.index', compact("listepets"));
        }

    //Add
    //1 * Create() : gère l affichage de la page de création
    public function create()
    {
        $listvaccines = \App\Models\Vaccine::all();
        return view('content.backoffice.Pet.create', compact("listvaccines"));
    }
    //2 * Save() : la fonction qui permet d’ajouter un nouveau enregistrement dans la base.
    public function store(Request $request)
    {
        $request->validate([

            'name' => 'required|max:50',

            'type' => 'required',

            'race' => 'required',

            'age' => 'required',

            ]);
        $petsaved = Pet::create($request->all());
        foreach ($request->vaccine_ids as $vaccine){
            $res = [
                'pet_id' => $petsaved->id,
                'vaccine_id' => $vaccine,
            ];
            PetVaccines::create($res);
        }
        
        return redirect()->route('pets.index');
    }

    //Delete :
    // destroy : gère la suppression
    public function destroy($id)
    {
        $pet = Pet::find($id) ;
        $Petvaccine = PetVaccines::where('pet_id',$id)->get(); 
        foreach ($Petvaccine as $vaccine){
            $vaccine->delete();
        }
        $pet->delete() ;
        return redirect()->route('pets.index');
    }

    //Edit prod:
    // 1 * edit : va servir à afficher la vue et à transmettre des données si nécessaire.
    public function edit($id)
    {
        $pet =  Pet::find($id);
        return view('content.backoffice.Pet.edit');
    }
    // 2 * update : va contenir toute la partie modification de la donnée
    public function update(Request $request, $id)
    {
      $pet = ['name' => $request->name, 'type' => $request->type, 'race' => $request->race, 'age' => $request->age,];

            Pet::whereId($id)->update($pet) ;
        return  redirect()->route('pets.index') ;

    }
    //Show selected :
    //show : gère l affichage d un element selectionne
    public function show($id)
    {
        $vaccine =  Vaccine::find($id);

        return view('content.backoffice.Vaccine.show', compact('vaccine'));


    }
}
