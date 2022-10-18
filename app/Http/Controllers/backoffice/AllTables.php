<?php

namespace App\Http\Controllers\backoffice;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AllTables extends Controller
{
  public function index()
  {
    return view('content.backoffice.table');
  }
}
