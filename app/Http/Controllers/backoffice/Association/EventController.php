<?php

namespace App\Http\Controllers\backoffice\Association;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EventController extends Controller
{
    public function index()
    {           $listevents = \App\Models\Event::all();

        $nbreEventMax = 0;
        $associationMAX = '';
        $totalAssociation= 0;
        //La majorite des evenement sont organises par :X ASSOCIATION
        $listassociations = \App\Models\Association::all();
        foreach ($listassociations as $association) {
            $totalAssociation= $totalAssociation+1;
            $nbreEventCourant = 0;
            foreach ($listevents as $event) {
                    if ($event->association_id == $association->id) {
                        $nbreEventCourant=$nbreEventCourant+1;
                    }
            }
            if ($nbreEventCourant > $nbreEventMax) {
                $nbreEventMax=$nbreEventCourant;
                $associationMAX = $association->name;
            }
        }
        return view('content.backoffice.Event.index', compact("listevents","associationMAX","nbreEventMax","totalAssociation"));
    }
    //Get all prods:
    // affiche : gère l affichage de la page de listing des produits
    public function affiche()
        {
        $listevents = \App\Models\Event::all();
        return view('content.backoffice.Event.index', compact("listevents"));
        }

    //Add prod
    //1 * Create() : gère l affichage de la page de création
    public function create()
    {
        $associations = \App\Models\Association::all();
        return view('content.backoffice.Event.create', compact('associations'));
    }
    //2 * Save() : la fonction qui permet d’ajouter un nouveau enregistrement dans la base.
    public function store(Request $request)
    {
      //  $validated= $request->validated();
        
        $event1 = \App\Models\Event::create($request->all());
       // $product->categorie_id  = $request->categorie_id;
        $event2 = ['name'=>$request->name,'description'=>$request->description,
        'dateDeb'=>$request->dateDeb,
        'dateFin'=>$request->dateFin,
        'association_id'=>$request->association_id,
    ];
        \App\Models\Event::whereId($event1->id)->update($event2) ;

        return redirect()->route('event.index');
        
        
    }

    //Delete prod:
    // destroy : gère la suppression d un produit.
    public function destroy($id)
    {
        $event = \App\Models\Event::find($id) ;
        $event->delete() ;
        return redirect()->route('event.index');
    }

    //Edit prod:
    // 1 * edit : va servir à afficher la vue et à transmettre des données si nécessaire.
    public function edit($id)
    {
        $associations = \App\Models\Association::all();
        $event =  \App\Models\Event::find($id);
        return view('content.backoffice.Event.edit', compact('event','associations'));
    }
    // 2 * update : va contenir toute la partie modification de la donnée
    public function update(Request $request, $id)
    {
        $associations = \App\Models\Association::all();
        $event = ['name'=>$request->name,'description'=>$request->description,
            'dateDeb'=>$request->dateDeb,
            'dateFin'=>$request->dateFin,
            'association_id'=>$request->association_id,
        ];

        \App\Models\Event::whereId($id)->update($event) ;
        return  redirect()->route('event.index') ;

    }
    //Show selected prod:
    //show : gère l affichage de la page d un produit
    public function show($id)
    {
        $event =  \App\Models\Event::find($id) ;// on utilise si paramètre est id fonctionnel
        return view('content.backoffice.Event.show', compact('event'));


    }
}