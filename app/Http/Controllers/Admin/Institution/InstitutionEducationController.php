<?php

namespace App\Http\Controllers\Admin\Institution;

use App\Http\Controllers\Controller;
use App\Http\Requests\Institution\InstitutionEducationStoreRequest;
use App\Http\Requests\Institution\InstitutionEducationUpdateRequest;
use App\Models\Institution\InstitutionEducation;
use App\Services\Logger;

class InstitutionEducationController extends Controller
{    
    /*
    * Controller access permission resource.
    */
   public function __construct()
   {
       $this->middleware(['permission:sysadmin|admin|admin_institution']);
   }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //Listagem de Dados
        $db = InstitutionEducation::select()
            ->orderBy('title')
            ->paginate(40);

        //Log do Sistema
        Logger::access();

        return view('admin.institution.education.institution.institution_index',[
            'db'=>$db,
        ]);
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
    public function store(InstitutionEducationStoreRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(InstitutionEducation $institutionEducation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(InstitutionEducation $institutionEducation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(InstitutionEducationUpdateRequest $request, InstitutionEducation $institutionEducation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(InstitutionEducation $institutionEducation)
    {
        //
    }
}
