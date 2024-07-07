<?php

namespace App\Http\Controllers\Admin\Institution;

use App\Http\Controllers\Controller;
use App\Http\Requests\Institution\InstitutionEducationCourseStoreRequest;
use App\Http\Requests\Institution\InstitutionEducationCourseUpdateRequest;
use App\Models\Institution\InstitutionEducationCourse;
use App\Services\Logger;

class InstitutionEducationCourseController extends Controller
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
        $db = InstitutionEducationCourse::select()
            ->orderBy('title')
            ->paginate(40);

        //Log do Sistema
        Logger::access();

        return view('admin.institution.education.course.course_index',[
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
    public function store(InstitutionEducationCourseStoreRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(InstitutionEducationCourse $InstitutionEducationCourse)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(InstitutionEducationCourse $InstitutionEducationCourse)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(InstitutionEducationCourseUpdateRequest $request, InstitutionEducationCourse $InstitutionEducationCourse)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(InstitutionEducationCourse $InstitutionEducationCourse)
    {
        //
    }
}
