<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    public function get_sub_kelas() {
        return $this->belongsTo(SubKelas::class, 'sub_kelas_id')->with('get_parent');
    }
}
