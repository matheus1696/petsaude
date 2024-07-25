<?php

namespace App\Models\Notice;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NoticeBoard extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'to_specific_user_id',
        'notice_level_id',
        'mark_read',
    ];

    public function NoticeLevel(){
        return $this->belongsTo(NoticeLevel::class,'notice_level_id','id');
    }
}
