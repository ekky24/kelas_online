<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\SubKelas;

class Kelas extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'kelas';

    protected $fillable = ['nama'];
}
