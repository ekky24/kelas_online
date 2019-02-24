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
        return view('admin.admin', compact('member', 'json_member'));
    }

    public function class() {
        $class = Kelas::all();
        return view('admin.class', compact('class'));
    }

    public function create_post() {
        return view('admin.posts');
    }
}
