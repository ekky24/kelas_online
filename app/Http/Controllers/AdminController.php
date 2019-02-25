<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Kelas; 

class AdminController extends Controller
{
    public function member() {
        $member = User::all();
        $json_member = json_encode($member);
        $kelas = Kelas::all();
        return view('admin.admin', compact('member', 'json_member', 'kelas'));
    }

    public function class() {
        $class = Kelas::all();
        return view('admin.class', compact('class'));
    }

    public function store() {
        return 123;
    }
}
