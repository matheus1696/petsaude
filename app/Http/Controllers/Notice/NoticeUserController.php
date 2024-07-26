<?php

namespace App\Http\Controllers\Notice;

use App\Http\Controllers\Controller;
use App\Models\Notice\NoticeBoardHistory;
use Illuminate\Support\Facades\Auth;

class NoticeUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $dbNotices = NoticeBoardHistory::where('to_specific_user_id',Auth::user()->id)->orderBy('mark_read')->paginate(100);

        return view('admin.notice.notice_user', compact('dbNotices'));
    }
}
