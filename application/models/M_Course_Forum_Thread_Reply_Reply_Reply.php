<?php

use Illuminate\Database\Eloquent\Model as Eloquent;
use Illuminate\Database\Capsule\Manager as DB;

class M_Course_Forum_Thread_Reply_Reply_Reply extends Eloquent
{
    protected $table = 'course_forum_thread_reply_reply_reply';
    protected $primaryKey = 'rrr_id';
    const CREATED_AT = 'rrr_timecreated';
    const UPDATED_AT = 'rrr_timemodified';

    public function insert_thread_reply_reply_reply($data)
    {
        $thread = new M_Course_Forum_Thread_Reply_Reply_Reply;
        $thread->rrr_content = $data['rrr_content'];
        $thread->trr_id = $data['trr_id'];
        $thread->usr_id = $data['usr_id'];

        return $thread->save();
    }
    
}

?>