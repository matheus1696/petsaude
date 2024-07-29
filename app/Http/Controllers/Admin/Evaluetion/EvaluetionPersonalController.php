<?php

namespace App\Http\Controllers\Admin\Evaluetion;

use App\Http\Controllers\Controller;
use App\Http\Requests\Evaluetion\StoreEvaluetionPersonalRequest;
use App\Http\Requests\Evaluetion\StoreEvaluetionPersonalTaskMultipleRequest;
use App\Http\Requests\Evaluetion\StoreEvaluetionPersonalTaskRequest;
use App\Http\Requests\Evaluetion\UpdateEvaluetionPersonalRequest;
use App\Http\Requests\Evaluetion\UpdateEvaluetionPersonalTaskMultipleRequest;
use App\Models\Company\CompanyOrganization;
use App\Models\Evaluation\EvaluetionPersonal;
use App\Models\Evaluation\EvaluetionPersonalTask;
use App\Models\Evaluation\EvaluetionPersonalTaskMultiple;
use Illuminate\Http\Request;

class EvaluetionPersonalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $dbEvaluetionPersonals = EvaluetionPersonal::orderBy('created_at')->paginate(100);
        $dbOrganizations = CompanyOrganization::all();

        return view('admin.evaluetion.personal.personal_index',compact('dbEvaluetionPersonals','dbOrganizations'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEvaluetionPersonalRequest $request)
    {
        //
        if ($request['to_specific_group_id'] == 'all') {
            EvaluetionPersonal::create([
                'title'=>$request['title'],
                'description'=>$request['description'],
                'type'=>$request['type'],
                'date_start'=>$request['date_start'],
                'date_end'=>$request['date_end'],
            ]);
        }else{
            EvaluetionPersonal::create($request->all()); 
        }
        
        return redirect()->back()->with('success','Criação de avaliação realizada com sucesso');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $dbEvaluetionPersonals = EvaluetionPersonal::find($id);
        $dbEvaluetionPersonalTasks = EvaluetionPersonalTask::where('evaluetion_personal_id',$dbEvaluetionPersonals->id)
            ->orderBy('order')
            ->paginate(100);

        return view('admin.evaluetion.personal.personal_show',compact('dbEvaluetionPersonals','dbEvaluetionPersonalTasks'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEvaluetionPersonalRequest $request, EvaluetionPersonal $evaluetionPersonal)
    {
        //
        if ($request['to_specific_group_id'] == 'all') {
            $evaluetionPersonal->update([
                'title'=>$request['title'],
                'to_specific_group_id'=>NULL,
                'description'=>$request['description'],
                'date_start'=>$request['date_start'],
                'date_end'=>$request['date_end'],
            ]);
        }else{
            $evaluetionPersonal->update($request->all());
        }

        return redirect()->back();
    }

    /**
     * Update the specified resource in storage.
     */
    public function released(Request $request, EvaluetionPersonal $evaluetionPersonal)
    {
        //
        $evaluetionPersonal->update($request->all());

        return redirect()->back();
    }

    public function taskStore(StoreEvaluetionPersonalTaskRequest $request, string $id)
    {
        //
        $dbTaskCount = EvaluetionPersonalTask::where('evaluetion_personal_id', $id)->count();

        
        $request['evaluetion_personal_id'] = $id;
        $request['order'] = $dbTaskCount + 1;
        $dbTask = EvaluetionPersonalTask::create($request->all());

        if ($dbTask->type = "Múltipla") {
            EvaluetionPersonalTaskMultiple::create(['title'=>'Excelente','description'=>'O desempenho excedeu todas as expectativas.','order'=>1,'value'=>5,'task_id'=>$dbTask->id,]);
            EvaluetionPersonalTaskMultiple::create(['title'=>'Bom','description'=>'O desempenho foi satisfatório e atendeu às expectativas.','order'=>2,'value'=>4,'task_id'=>$dbTask->id,]);
            EvaluetionPersonalTaskMultiple::create(['title'=>'Regular','description'=>'O desempenho foi mediano.','order'=>3,'value'=>3,'task_id'=>$dbTask->id,]);
            EvaluetionPersonalTaskMultiple::create(['title'=>'Ruim','description'=>'O desempenho foi abaixo do esperado. ','order'=>4,'value'=>2,'task_id'=>$dbTask->id,]);
            EvaluetionPersonalTaskMultiple::create(['title'=>'Péssimo','description'=>'O desempenho foi muito abaixo do esperado.','order'=>5,'value'=>1,'task_id'=>$dbTask->id,]);
        }

        return redirect()->back()->with('success','Pergunta criada com sucesso');
    }    

    public function taskShow(string $id)
    {
        //
        $dbEvaluetionPersonalTasks = EvaluetionPersonalTask::find($id);
        $dbEvaluetionPersonalTaskMultiples = EvaluetionPersonalTaskMultiple::where('task_id',$id)->orderBy('order')->get();

        return view('admin.evaluetion.personal.personal_multiple',compact('dbEvaluetionPersonalTasks','dbEvaluetionPersonalTaskMultiples'));
    }  

    /**
     * Update the specified resource in storage.
     */
    public function taskUpdate(Request $request, string $id)
    {
        //
        $dbEvaluetionPersonalTasks = EvaluetionPersonalTask::find($id);
        $dbEvaluetionPersonalTasks->update($request->all());

        $dbTaskMultiples = EvaluetionPersonalTaskMultiple::where('task_id',$dbEvaluetionPersonalTasks->id)->get();

        if ($request['type'] == "Texto Livre") {
            foreach ($dbTaskMultiples as $dbTaskMultiple) {
                $dbTaskMultiple->delete();
            }
        }
        
        if ($dbTaskMultiples->count() <= 0) {
            EvaluetionPersonalTaskMultiple::create(['title'=>'Excelente','description'=>'O desempenho excedeu todas as expectativas.','order'=>1,'value'=>5,'task_id'=>$dbEvaluetionPersonalTasks->id,]);
            EvaluetionPersonalTaskMultiple::create(['title'=>'Bom','description'=>'O desempenho foi satisfatório e atendeu às expectativas.','order'=>2,'value'=>4,'task_id'=>$dbEvaluetionPersonalTasks->id,]);
            EvaluetionPersonalTaskMultiple::create(['title'=>'Regular','description'=>'O desempenho foi mediano.','order'=>3,'value'=>3,'task_id'=>$dbEvaluetionPersonalTasks->id,]);
            EvaluetionPersonalTaskMultiple::create(['title'=>'Ruim','description'=>'O desempenho foi abaixo do esperado. ','order'=>4,'value'=>2,'task_id'=>$dbEvaluetionPersonalTasks->id,]);
            EvaluetionPersonalTaskMultiple::create(['title'=>'Péssimo','description'=>'O desempenho foi muito abaixo do esperado.','order'=>5,'value'=>1,'task_id'=>$dbEvaluetionPersonalTasks->id,]);
        }

        return redirect()->back()->with('success','Pergunta alterada com sucesso');
    } 

    /**
     * Update the specified resource in storage.
     */
    public function taskOrder(Request $request, string $id)
    {
        //
        $dbEvaluetionPersonalTasks = EvaluetionPersonalTask::find($id);
        $dbEvaluetionPersonalTasks->update($request->all());

        return redirect()->back()->with('success','Pergunta alterada com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function taskDestroy(string $id)
    {
        //
        $dbEvaluetionPersonalTasks = EvaluetionPersonalTask::find($id);

        $dbTaskMultiples = EvaluetionPersonalTaskMultiple::where('task_id',$dbEvaluetionPersonalTasks->id)->get();
            foreach ($dbTaskMultiples as $dbTaskMultiple) {
                $dbTaskMultiple->delete();
            }

        $dbEvaluetionPersonalTasks->delete();

        return redirect()->back()->with('success','Pergunta excluída com sucesso');
    }
    
    /**
     * Store a newly created resource in storage.
     */
    public function taskMultipleStore(StoreEvaluetionPersonalTaskMultipleRequest $request, string $id)
    {
        //
        $request['task_id'] = $id;
        EvaluetionPersonalTaskMultiple::create($request->all());

        return redirect()->back();
    }

    /**
     * Update the specified resource in storage.
     */
    public function taskMultipleUpdate(UpdateEvaluetionPersonalTaskMultipleRequest $request, string $id)
    {
        //
        $evaluetionPersonalTaskMultiple = EvaluetionPersonalTaskMultiple::find($id);
        $evaluetionPersonalTaskMultiple->update($request->all());

        return redirect()->back();
    }    

    /**
     * Update the specified resource in storage.
     */
    public function taskMultipleOrder(Request $request, string $id)
    {
        //
        $evaluetionPersonalTaskMultiple = EvaluetionPersonalTaskMultiple::find($id);
        $evaluetionPersonalTaskMultiple->update($request->all());

        return redirect()->back();
    }  

    /**
     * Update the specified resource in storage.
     */
    public function taskMultipleValue(Request $request, string $id)
    {
        //
        $evaluetionPersonalTaskMultiple = EvaluetionPersonalTaskMultiple::find($id);
        $evaluetionPersonalTaskMultiple->update($request->all());

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function taskMultipleDestroy(string $id)
    {
        //
        $dbEvaluetionPersonalTaskMultiple = EvaluetionPersonalTaskMultiple::find($id);
        $dbEvaluetionPersonalTaskMultiple->delete();

        return redirect()->back();
    }

    /** * Show the form for editing the specified resource. */
    public function edit(){ return redirect()->route('home');}

    /** * Show the form for creating a new resource. */
    public function create(){ return redirect()->route('home');}

    /** * Remove the specified resource from storage. */
    public function destroy(){ return redirect()->route('home');}
}
