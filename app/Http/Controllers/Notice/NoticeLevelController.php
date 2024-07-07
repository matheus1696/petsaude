<?php

namespace App\Http\Controllers\Notice;

use App\Http\Controllers\Controller;
use App\Http\Requests\Notice\NoticeLevelStoreRequest;
use App\Http\Requests\Notice\NoticeLevelUpdateRequest;
use App\Models\Notice\NoticeLevel;

class NoticeLevelController extends Controller
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
    public function store(NoticeLevelStoreRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(NoticeLevel $noticeLevel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(NoticeLevel $noticeLevel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(NoticeLevelUpdateRequest $request, NoticeLevel $noticeLevel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(NoticeLevel $noticeLevel)
    {
        //
    }
}
