<?php

namespace App\Http\Controllers\frontoffice;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontOffice extends Controller
{
  public function index()
  {
    return view('frontoffice.home');
  }
}
