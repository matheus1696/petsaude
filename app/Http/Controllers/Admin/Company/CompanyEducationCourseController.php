<?php

namespace App\Http\Controllers\Admin\Company;

use App\Http\Controllers\Controller;
use App\Http\Requests\Company\CompanyEducationCourseStoreRequest;
use App\Http\Requests\Company\CompanyEducationCourseUpdateRequest;
use App\Models\Company\CompanyEducationCourse;
use App\Services\Logger;

class CompanyEducationCourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //Listagem de Dados
        $db = CompanyEducationCourse::select()
            ->orderBy('title')
            ->paginate(40);

        //Log do Sistema
        Logger::access();

        return view('admin.company.education.course.course_index',[
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
    public function store(CompanyEducationCourseStoreRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(CompanyEducationCourse $companyEducationCourse)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CompanyEducationCourse $companyEducationCourse)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CompanyEducationCourseUpdateRequest $request, CompanyEducationCourse $companyEducationCourse)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CompanyEducationCourse $companyEducationCourse)
    {
        //
    }
}
