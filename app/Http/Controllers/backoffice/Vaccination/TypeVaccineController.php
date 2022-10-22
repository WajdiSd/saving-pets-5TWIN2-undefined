<?php

namespace App\Http\Controllers\backoffice\Vaccination;

use App\Models\TypeVaccine;
use App\Models\Vaccine;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TypeVaccineController extends Controller
{
  public function index()
  {
    $listetypevaccine = TypeVaccine::all();
    return view('content.backoffice.Typevaccine.index', compact("listetypevaccine"));
  }
  //Get all :
  // affiche : gère l affichage de la page de listing
  public function affiche()
  {
    $listetypevaccine = TypeVaccine::all();
    return view('content.backoffice.Typevaccine.index', compact("listetypevaccine"));
  }

  //Add
  //1 * Create() : gère l affichage de la page de création
  public function create()
  {

    return view('content.backoffice.Typevaccine.create');
  }
  //2 * Save() : la fonction qui permet d’ajouter un nouveau enregistrement dans la base.
  public function store(Request $request)
  {
    $request->validate([

      'type' => 'required|max:50',

      'duration' => 'required',
    ]);

    TypeVaccine::create($request->all());
    return redirect()->route('typevaccines.index');
  }

  //Delete :
  // destroy : gère la suppression
  public function destroy($id)
  {
    $typevaccine = TypeVaccine::find($id) ;
    $typevaccine->delete() ;
    return redirect()->route('typevaccines.index');
  }

  //Edit prod:
  // 1 * edit : va servir à afficher la vue et à transmettre des données si nécessaire.
  public function edit($id)
  {
    $typevaccine = TypeVaccine::find($id) ;
    return view('content.backoffice.Typevaccine.edit', compact('typevaccine'));
  }
  // 2 * update : va contenir toute la partie modification de la donnée
  public function update(Request $request, $id)
  {
    $typevaccine = ['type' => $request->type, 'duration' => $request->duration];

    TypeVaccine::whereId($id)->update($typevaccine) ;
    return  redirect()->route('typevaccines.index') ;

  }
  //Show selected :
  //show : gère l affichage d un element selectionne
  public function show($id)
  {
    $typevaccine = TypeVaccine::find($id) ;
    return view('content.backoffice.Typevaccine.show', compact('typevaccine'));
  }
}
