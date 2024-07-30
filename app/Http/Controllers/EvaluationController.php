<?php

namespace App\Http\Controllers;

use App\Models\Evaluation\Evaluation;
use App\Http\Requests\Evaluation\StoreEvaluationRequest;
use App\Http\Requests\Evaluation\UpdateEvaluationRequest;
use App\Models\Company\CompanyOrganization;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class EvaluationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $dbGroup = FALSE;
        $dbOrganization = FALSE;
        $dbResponses = Evaluation::where('user_id_response',Auth::user()->id)->get();
        if (Auth::user()->organization_id != NULL) {
            $dbOrganization = CompanyOrganization::where('id',Auth::user()->organization_id)->first();
            $dbGroup = User::where('organization_id',Auth::user()->organization_id)
                ->orderBy('occupation_id')
                ->get();
        }

        return view('users.evaluation.evaluation_index', compact('dbGroup','dbOrganization','dbResponses'));
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
    public function store(StoreEvaluationRequest $request)
    {
        //
        Evaluation::create($request->all());

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(String $id)
    {
        //
        $dbUser = User::find($id);

        if ($dbUser == NULL || Auth::user()->organization_id == NULL || Auth::user()->occupation_id == NULL ) {
            return redirect()->route('home');
        }

        return view('users.evaluation.evaluation_show', compact('dbUser'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Evaluation $evaluation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEvaluationRequest $request, Evaluation $evaluation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Evaluation $evaluation)
    {
        //
    }
}
