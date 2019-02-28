<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function get_sub_kelas() {
        return $this->belongsTo(SubKelas::class, 'class_id');
    }
}
