<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use App\Models\Evaluetion\EvaluetionResponse;
use App\Http\Requests\StoreEvaluetionResponseRequest;
use App\Http\Requests\UpdateEvaluetionResponseRequest;
use Illuminate\Support\Facades\Auth;

class EvaluetionResponseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        EvaluetionResponse::where('user_id',Auth::user()->id)->get();

        return view('users.evaluetion.evaluetion_index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEvaluetionResponseRequest $request)
    {
        //
        EvaluetionResponse::create($request->all());

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(EvaluetionResponse $evaluetionResponse)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(EvaluetionResponse $evaluetionResponse)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEvaluetionResponseRequest $request, EvaluetionResponse $evaluetionResponse)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(EvaluetionResponse $evaluetionResponse)
    {
        //
    }
}
