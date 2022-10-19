<?php

namespace App\Http\Controllers\backoffice;

use App\Models\Reward;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RewardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rewards = Reward::all();
        return view('content.backoffice.reward.reward-table', compact('rewards'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('content.backoffice.reward.create-reward');
    }

    /**
     * Delete a specific reward.
     *
     * @param int $id
     */
    public function destroy($id)
    {
        $reward = Reward::find($id);
        $reward->delete();
        return redirect()->route('rewards.index');
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
            'quantity' => 'required'
        ]);

        $reward = new Reward;
        $reward->name = $request->input('name');
        $reward->quantity = $request->input('quantity');
        $reward->save();

        return redirect('/backoffice/rewards')->with('success', 'Reward Created');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Reward  $reward
     * @return \Illuminate\Http\Response
     */
    public function edit(Reward $reward)
    {
        return view('content.backoffice.reward.edit-reward', compact('reward'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Reward  $reward
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reward $reward)
    {
        $this->validate($request, [
            'name' => 'required',
            'quantity' => 'required'
        ]);

        $reward->name = $request->input('name');
        $reward->quantity = $request->input('quantity');
        $reward->save();

        return redirect('backoffice/rewards')->
        with('success', 'Reward Updated');
    }
}
