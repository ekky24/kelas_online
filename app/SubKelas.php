<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Kelas;

class SubKelas extends Model
{
    public function get_parent() {
        return $this->belongsTo(Kelas::class, 'parent');
    }
}
