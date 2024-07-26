<?php

namespace App\Http\Controllers\Notice;

use App\Http\Controllers\Controller;
use App\Http\Requests\Notice\NoticeBoardStoreRequest;
use App\Http\Requests\Notice\NoticeBoardUpdateRequest;
use App\Models\Company\CompanyOrganization;
use App\Models\Notice\NoticeBoard;
use App\Models\Notice\NoticeBoardHistory;
use App\Models\Notice\NoticeLevel;
use App\Models\User;

class NoticeBoardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $dbNotices = NoticeBoard::paginate(100);        
        $dbNoticeLevels = NoticeLevel::all();
        $dbOrganizations = CompanyOrganization::all();

        return view('admin.notice.notice_index', compact('dbNotices', 'dbNoticeLevels', 'dbOrganizations'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(NoticeBoardStoreRequest $request)
    {
        //
        $dbNotice = NoticeBoard::create($request->all());

        if ($request['to_specific_users'] == 'all') {
            $dbUsers = User::all();
        } else {
            $dbUsers = User::where('organization_id', $request['to_specific_users'])->get();
        }

        foreach ($dbUsers as $dbUser) {
            NoticeBoardHistory::create([
                'notice_id'=>$dbNotice->id,
                'to_specific_user_id'=>$dbUser->id
            ]);
        }

        return redirect()->back()->with('success','Aviso cadastrado com sucesso e enviado para todos os usuários.');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(NoticeBoard $noticeBoard)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(NoticeBoard $noticeBoard)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(NoticeBoardUpdateRequest $request, NoticeBoard $noticeBoard)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(NoticeBoard $noticeBoard)
    {
        //
    }

    
    public function markRead(string $id)
    {
        //
        $dbNoticeHistory = NoticeBoardHistory::find($id);
        $dbNoticeHistory->update(['mark_read'=>!$dbNoticeHistory->mark_read]);

        return redirect()->back();
    }
    
}
