<?php

namespace App\Http\Controllers\Evaluetion;

use App\Http\Controllers\Controller;
use App\Models\Evaluation\EvaluetionPersonalTask;
use App\Models\Evaluation\EvaluetionPersonalTaskMultiple;
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
        $dbTask = EvaluetionPersonalTask::create($request->all());

        if ($dbTask->type = "Múltipla") {
            EvaluetionPersonalTaskMultiple::create(['title'=>'Excelente','description'=>'O desempenho excedeu todas as expectativas.','task_id'=>$dbTask->id,]);
            EvaluetionPersonalTaskMultiple::create(['title'=>'Bom','description'=>'O desempenho foi satisfatório e atendeu às expectativas.','task_id'=>$dbTask->id,]);
            EvaluetionPersonalTaskMultiple::create(['title'=>'Regular','description'=>'O desempenho foi mediano.','task_id'=>$dbTask->id,]);
            EvaluetionPersonalTaskMultiple::create(['title'=>'Ruim','description'=>'O desempenho foi abaixo do esperado. ','task_id'=>$dbTask->id,]);
            EvaluetionPersonalTaskMultiple::create(['title'=>'Péssimo','description'=>'O desempenho foi muito abaixo do esperado.','task_id'=>$dbTask->id,]);
        }

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

        if ($request['type'] == "Texto Livre") {
            $dbTaskMultiples = EvaluetionPersonalTaskMultiple::where('task_id',$evaluetionPersonalTask->id)->get();
            foreach ($dbTaskMultiples as $dbTaskMultiple) {
                $dbTaskMultiple->delete();
            }
        } else {
            EvaluetionPersonalTaskMultiple::create(['title'=>'Excelente','description'=>'O desempenho excedeu todas as expectativas.','task_id'=>$evaluetionPersonalTask->id,]);
            EvaluetionPersonalTaskMultiple::create(['title'=>'Bom','description'=>'O desempenho foi satisfatório e atendeu às expectativas.','task_id'=>$evaluetionPersonalTask->id,]);
            EvaluetionPersonalTaskMultiple::create(['title'=>'Regular','description'=>'O desempenho foi mediano.','task_id'=>$evaluetionPersonalTask->id,]);
            EvaluetionPersonalTaskMultiple::create(['title'=>'Ruim','description'=>'O desempenho foi abaixo do esperado. ','task_id'=>$evaluetionPersonalTask->id,]);
            EvaluetionPersonalTaskMultiple::create(['title'=>'Péssimo','description'=>'O desempenho foi muito abaixo do esperado.','task_id'=>$evaluetionPersonalTask->id,]);
        }
        
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
