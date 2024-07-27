<?php

namespace App\Http\Controllers\Evaluetion;

use App\Http\Controllers\Controller;
use App\Models\Evaluation\EvaluetionPersonalTaskMultiple;
use App\Http\Requests\StoreEvaluetionPersonalTaskMultipleRequest;
use App\Http\Requests\UpdateEvaluetionPersonalTaskMultipleRequest;
use App\Models\Evaluation\EvaluetionPersonalTask;

class EvaluetionPersonalTaskMultipleController extends Controller
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
    public function store(StoreEvaluetionPersonalTaskMultipleRequest $request)
    {
        //
        EvaluetionPersonalTaskMultiple::create($request->all());

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $dbEvaluetionPersonalTaskMultiples = EvaluetionPersonalTaskMultiple::where('task_id',$id)->get();
        $dbEvaluetionPersonalTask = EvaluetionPersonalTask::find($id);

        return view('admin.evaluetion.personal.personal_show_multiple',compact('dbEvaluetionPersonalTask','dbEvaluetionPersonalTaskMultiples'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(EvaluetionPersonalTaskMultiple $evaluetionPersonalTaskMultiple)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEvaluetionPersonalTaskMultipleRequest $request, string $id)
    {
        //
        $evaluetionPersonalTaskMultiple = EvaluetionPersonalTaskMultiple::find($id);
        $evaluetionPersonalTaskMultiple->update($request->all());

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(EvaluetionPersonalTaskMultiple $evaluetionPersonalTaskMultiple)
    {
        //
    }
}
