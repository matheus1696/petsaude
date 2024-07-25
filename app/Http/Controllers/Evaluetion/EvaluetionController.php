<?php

namespace App\Http\Controllers\Evaluetion;

use App\Http\Controllers\Controller;
use App\Http\Requests\Evaluetion\StoreEvaluetionRequest;
use App\Models\Evaluation\Evaluetion;
use App\Models\Company\CompanyOccupation;

class EvaluetionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $dbEvaluetions = Evaluetion::paginate(100);
        $dbOccupations = CompanyOccupation::all();

        return view('admin.evaluetion.evaluetion_index', compact('dbEvaluetions','dbOccupations'));
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
    public function store(StoreEvaluetionRequest $request)
    {
        //
        $dbEvaluetion = Evaluetion::create($request->all());

        return redirect()->back()->with('success','Avaliação cadastrada com sucesso.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Evaluetion $evaluetion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Evaluetion $evaluetion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Evaluetion $evaluetion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Evaluetion $evaluetion)
    {
        //
    }
}
