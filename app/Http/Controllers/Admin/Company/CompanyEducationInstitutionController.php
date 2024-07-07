<?php

namespace App\Http\Controllers\Admin\Company;

use App\Http\Controllers\Controller;
use App\Http\Requests\Company\CompanyEducationInstitutionStoreRequest;
use App\Http\Requests\Company\CompanyEducationInstitutionUpdateRequest;
use App\Models\Company\CompanyEducationInstitution;
use App\Services\Logger;

class CompanyEducationInstitutionController extends Controller
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
        $db = CompanyEducationInstitution::select()
            ->orderBy('title')
            ->paginate(40);

        //Log do Sistema
        Logger::access();

        return view('admin.company.education.institution.institution_index',[
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
    public function store(CompanyEducationInstitutionStoreRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(CompanyEducationInstitution $companyEducationInstitution)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CompanyEducationInstitution $companyEducationInstitution)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CompanyEducationInstitutionUpdateRequest $request, CompanyEducationInstitution $companyEducationInstitution)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CompanyEducationInstitution $companyEducationInstitution)
    {
        //
    }
}
