<?php

namespace App\Http\Controllers\Evaluetion;

use App\Http\Controllers\Controller;
use App\Models\Evaluation\EvaluetionPersonalTask;
use Illuminate\Http\Request;

class EvaluetionPersonalTaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(Request $request)
    {
        //
        EvaluetionPersonalTask::create($request->all());

        return redirect()->back()->with('success','Pergunta criada com sucesso');
    }

    /**
     * Display the specified resource.
     */
    public function show(EvaluetionPersonalTask $evaluetionPersonalTask)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(EvaluetionPersonalTask $evaluetionPersonalTask)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, EvaluetionPersonalTask $evaluetionPersonalTask)
    {
        //
        $evaluetionPersonalTask->update($request->all());

        return redirect()->back()->with('success','Pergunta alterada com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(EvaluetionPersonalTask $evaluetionPersonalTask)
    {
        //
        $evaluetionPersonalTask->delete();

        return redirect()->back()->with('success','Pergunta excluída com sucesso');
    }
}
