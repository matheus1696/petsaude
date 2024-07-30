<?php

namespace App\Http\Controllers\Admin\Evaluation;

use App\Http\Controllers\Controller;
use App\Models\Evaluation\EvaluationList;
use App\Http\Requests\Evaluation\StoreEvaluationListRequest;
use App\Http\Requests\Evaluation\UpdateEvaluationListRequest;
use App\Models\Company\CompanyOrganization;
use App\Models\Evaluation\Evaluation;

class EvaluationListController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $dbEvaluations = Evaluation::all();
        $dbOrganizations = CompanyOrganization::all();
        return view('admin.evaluation.evaluation_index', compact('dbEvaluations','dbOrganizations'));
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
    public function store(StoreEvaluationListRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(EvaluationList $evaluationList)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(EvaluationList $evaluationList)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEvaluationListRequest $request, EvaluationList $evaluationList)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(EvaluationList $evaluationList)
    {
        //
    }
}
