<?php

namespace App\Models\Notice;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NoticeBoardHistory extends Model
{
    use HasFactory;

    protected $fillable = [
        'to_specific_user_id',
        'notice_id',
        'mark_read',
    ];

    public function NoticeBoard(){
        return $this->belongsTo(NoticeBoard::class,'notice_id','id');
    }
}
