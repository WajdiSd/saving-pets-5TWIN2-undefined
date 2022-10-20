<?php

namespace App\Http\Controllers\backoffice\Association;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AssociationController extends Controller
{
    public function index()
    {
        $listeassociations = \App\Models\Association::all();
        return view('content.backoffice.Association.index', compact("listeassociations"));
    }
    //Get all :
    // affiche : gère l affichage de la page de listing
    public function affiche()
        {
        $listeassociations = \App\Models\Association::all();
        return view('content.backoffice.Association.index', compact("listeassociations"));
        }

    //Add 
    //1 * Create() : gère l affichage de la page de création 
    public function create()
    {   
        return view('content.backoffice.Association.create');
    }
    //2 * Save() : la fonction qui permet d’ajouter un nouveau enregistrement dans la base.
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required|max:50',
            'rib' => 'required|max:20'
            ]);

        $association = \App\Models\Association::create($request->all());
        return redirect()->route('association.index');
    }

    //Delete :
    // destroy : gère la suppression
    public function destroy($id)
    {
        $association = \App\Models\Association::find($id) ;
        $association->delete() ;
        return redirect()->route('association.index');
    }

    //Edit prod:
    // 1 * edit : va servir à afficher la vue et à transmettre des données si nécessaire.
    public function edit($id)
    {
        $association =  \App\Models\Association::find($id);
        return view('content.backoffice.Association.edit', compact('association'));
    }
    // 2 * update : va contenir toute la partie modification de la donnée
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required|max:50',
            'rib' => 'required|max:20'
            ]);

        $association = ['name'=>$request->name,'description'=>$request->description,'rib'=>$request->rib];

            \App\Models\Association::whereId($id)->update($association) ;
        return  redirect()->route('association.index') ;

    }
    //Show selected :
    //show : gère l affichage d un element selectionne
    public function show($id)
    {
        $association =  \App\Models\Association::find($id) ;// on utilise si paramètre est id fonctionnel
        //Pourcentage des events crees par cette association
        $totalEvents = 0;
        $associationEvents = 0;
        $listevents = \App\Models\Event::all();
            //Get total events
            foreach ($listevents as $event) {
                $totalEvents=$totalEvents+1;
                    if ($event->association_id == $id) {
                        $associationEvents=$associationEvents+1;
                    }
            }
        if ($totalEvents > 0)
        {$pourcentageEvents = $associationEvents*100/$totalEvents;}
        else  $pourcentageEvents = 0;

        return view('content.backoffice.Association.show', compact('association','pourcentageEvents'));


    }
}