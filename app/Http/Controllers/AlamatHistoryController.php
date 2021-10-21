<?php

namespace App\Http\Controllers;

use App\Models\alamatHistory;
use Illuminate\Http\Request;

class AlamatHistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $alamatHistory = new alamatHistory;
        $alamatHistory->playerCount = $request->playerCount;
        $alamatHistory->adminFunds = $request->adminFunds;
        $alamatHistory->playerPondo = $request->playerPondo;
        $alamatHistory->totalProfit = $request->totalProfit;
        $alamatHistory->totalOverBet = $request->totalOverBet;
        $alamatHistory->alamat = $request->alamat;
        $alamatHistory->currentAlamat = $request->currentAlamat;
        $alamatHistory->lastAlamat = $request->lastAlamat;
        $alamatHistory->lastSubmittedString = $request->lastSubmittedString;
        $alamatHistory->lastSubmittedResults = $request->lastSubmittedResults;
        $alamatHistory->save();

        return $alamatHistory;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\alamatHistory  $alamatHistory
     * @return \Illuminate\Http\Response
     */
    public function show(alamatHistory $alamatHistory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\alamatHistory  $alamatHistory
     * @return \Illuminate\Http\Response
     */
    public function edit(alamatHistory $alamatHistory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\alamatHistory  $alamatHistory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, alamatHistory $alamatHistory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\alamatHistory  $alamatHistory
     * @return \Illuminate\Http\Response
     */
    public function destroy(alamatHistory $alamatHistory)
    {
        //
    }

    public function latestAlamat(){
        $alamat = alamatHistory::latest('created_at')->first();
        return $alamat;
    }
}
