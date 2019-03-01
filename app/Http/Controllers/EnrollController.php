<?php

namespace App\Http\Controllers;

use App;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Kelas;
use App\SubKelas;
use App\Enroll;

class EnrollController extends Controller
{
    public function show_all() {
    	$enroll = Enroll::with('get_sub_kelas')->with('get_user')->get();
    	return view('admin.show-enroll', compact('enroll'));
    }
}
