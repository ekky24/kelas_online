<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    public function get_post() {
        return $this->belongsTo(Post::class, 'post_id')->with('get_sub_kelas');
    }
}
