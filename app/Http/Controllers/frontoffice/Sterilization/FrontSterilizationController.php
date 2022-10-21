<?php

namespace App\Http\Controllers\frontoffice\Sterilization;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontSterilizationController extends Controller
{
    public function index()
    {
        $listeSterilizations = \App\Models\Sterilization::all();
        return view('content.frontoffice.Sterilization.index', compact("listeSterilizations"));
    }
}
