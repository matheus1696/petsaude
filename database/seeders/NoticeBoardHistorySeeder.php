<?php

namespace Database\Seeders;

use App\Models\Notice\NoticeBoard;
use App\Models\Notice\NoticeBoardHistory;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NoticeBoardHistorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /*
        $dbUser = User::all();
        $dbNoticeBoards = NoticeBoard::all();

        foreach ($dbUser as $value) {
            foreach ($dbNoticeBoards as $dbNoticeBoard) {                
                NoticeBoardHistory::create([
                    'notice_id'=>$dbNoticeBoard->id,
                    'to_specific_user_id'=>$value->id,
                ]);
            }
        }
        */
    }
}
