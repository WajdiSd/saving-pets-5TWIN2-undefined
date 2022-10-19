<?php

namespace App\Http\Controllers\frontoffice\Association;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FrontEventController extends Controller
{
    public function index()
    {           
        $listevents = \App\Models\Event::all();
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
        return view('content.frontoffice.Event.index', compact("listevents","associationMAX","nbreEventMax","totalAssociation"));
    }
    //Get all prods:
    // affiche : gère l affichage de la page de listing des produits
    public function affiche()
        {
        $listevents = \App\Models\Event::all();
        return view('content.frontoffice.Event.index', compact("listevents"));
        }

}