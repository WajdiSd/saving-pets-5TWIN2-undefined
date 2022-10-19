<?php

namespace App\Http\Controllers\frontoffice\Association;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FrontAssociationController extends Controller
{
    public function index()
    {
        $listeassociations = \App\Models\Association::all();
        return view('content.frontoffice.Association.index', compact("listeassociations"));
    }
    //Get all :
    // affiche : gère l affichage de la page de listing
    public function affiche()
        {
        $listeassociations = \App\Models\Association::all();
        return view('content.frontoffice.Association.index', compact("listeassociations"));
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

        return view('content.frontoffice.Association.index', compact('association','pourcentageEvents'));


    }
}