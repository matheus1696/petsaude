<?php

namespace App\Http\Controllers\Evaluetion;

use App\Http\Controllers\Controller;
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
        $dbEvaluetionPersonals = EvaluetionPersonal::paginate(100);
        $dbOrganizations = CompanyOrganization::all();

        return view('admin.evaluetion.personal.personal_index',compact('dbEvaluetionPersonals','dbOrganizations'));
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
        EvaluetionPersonal::create($request->all());

        return redirect()->back()->with('success','Criação de avaliação realizada com sucesso');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $dbEvaluetionPersonals = EvaluetionPersonal::find($id);
        $dbEvaluetionPersonalTasks = EvaluetionPersonalTask::where('evaluetion_personal_id',$dbEvaluetionPersonals->id)->paginate(100);

        return view('admin.evaluetion.personal.personal_show',compact('dbEvaluetionPersonals','dbEvaluetionPersonalTasks'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(EvaluetionPersonal $evaluetionPersonal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(EvaluetionPersonal $evaluetionPersonal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(EvaluetionPersonal $evaluetionPersonal)
    {
        //
    }
}
