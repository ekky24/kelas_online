<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\SubKelas;

class Enroll extends Model
{
    public function get_sub_kelas() {
        return $this->belongsTo(SubKelas::class, 'sub_kelas_id')->with('get_parent');
    }

    public function get_user() {
        return $this->belongsTo(User::class, 'user_id');
    }
}
