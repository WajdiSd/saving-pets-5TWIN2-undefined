<?php

namespace App\Http\Controllers\backoffice;

use App\Models\TypeReward;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TypeRewardController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $typeRewards = TypeReward::all();
    return view('content.backoffice.reward.type-reward-table', compact('typeRewards'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    return view('content.backoffice.type-reward.type-reward-create');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    $this->validate($request, [
      'name' => 'required',
      'description' => 'required'
    ]);

    $typeReward = new TypeReward;
    $typeReward->name = $request->input('name');
    $typeReward->description = $request->input('description');
    $typeReward->save();

    return redirect('/backoffice/typerewards')->with('success', 'Type Reward Created');
  }

  public function destroy ($id) {
    $typeReward = TypeReward::find($id);
    $typeReward->delete();
    return redirect('/backoffice/typerewards')->with('success', 'Type Reward Deleted');
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Models\TypeReward  $typeReward
   * @return \Illuminate\Http\Response
   */
  public function show(TypeReward $typeReward)
  {
    return view('content.backoffice.type-reward.type-reward-show', compact('typeReward'));
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\TypeReward  $typeReward
   * @return \Illuminate\Http\Response
   */
  public function edit(TypeReward $typeReward)
  {
    return view('content.backoffice.reward.edit-type-reward', compact('typeReward'));
  }

  public function update(Request $request, TypeReward $tr)
  {
    $this->validate($request, [
      'type' => 'required',
      'description' => 'required'
    ]);

    $tr->type = $request->input('type');
    $tr->description = $request->input('description');
    $tr->save();

    return redirect('/backoffice/typerewards')->with('success', 'Type Reward Updated');
  }
}
