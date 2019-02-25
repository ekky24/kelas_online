<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Kelas; 
use Hash;

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

    public function store(Request $request) {
    	$this->validate($request, [
    		'username' => 'required',
    		'password' => 'required',
    		'email' => 'required',
    	]);
    	$user = User::where('email', $request->input('email'))->first();
    	$user->username = $request->input('username');
    	$password = Hash::make($request->input('password'));
    	$user->password = $password;
    	$user->save();
        return redirect('/admin')->with('success', 'User Created Successfully');
    }
}
