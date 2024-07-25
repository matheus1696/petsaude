<?php

namespace App\Http\Controllers\Evaluetion;

use App\Http\Controllers\Controller;
use App\Http\Requests\Evaluetion\StoreEvaluetionRequest;
use App\Http\Requests\Evaluetion\StoreEvaluetionTaskRequest;
use App\Http\Requests\Evaluetion\UpdateEvaluetionTaskRequest;
use App\Models\Evaluation\Evaluetion;
use App\Models\Company\CompanyOccupation;
use App\Models\Evaluation\EvaluetionTask;

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
    public function show(string $id)
    {
        //
        $dbEvaluetion = Evaluetion::find($id);
        $dbEvaluetionTasks = EvaluetionTask::where('evaluetion_id',$id)->orderBy('order')->paginate(100);

        return view('admin.evaluetion.evaluetion_show', compact('dbEvaluetion','dbEvaluetionTasks'));
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

    /**
     * Remove the specified resource from storage.
     */
    public function taskStore(StoreEvaluetionTaskRequest $request)
    {
        //
        $dbEvaluetionTasks = EvaluetionTask::where('evaluetion_id',$request['evaluetion_id'])->count();

        $request['order'] = $dbEvaluetionTasks + 1;
        EvaluetionTask::create($request->all());

        return redirect()->back()->with('success','Questionario criado com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function taskUpdate(UpdateEvaluetionTaskRequest $request, string $id)
    {
        //
        $dbEvaluetionTasks = EvaluetionTask::find($id);

        $dbEvaluetionTasks->update($request->all());

        return redirect()->back()->with('success','Questionario alterado com sucesso');
    }
}
