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

}