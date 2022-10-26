<?php

namespace App\Http\Controllers\frontoffice\Reward;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FrontRewardController extends Controller
{
  public function index()
  {
    $rewards = \App\Models\Reward::all();
    return view('content.frontoffice.Reward.index', compact("rewards"));
  }
}
