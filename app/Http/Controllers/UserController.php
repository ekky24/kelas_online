<?php

namespace App\Http\Controllers;

use App;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class UserController extends Controller
{
    public function signup() {
    	return view('akame.signup');
	}

    public function signin() {
        return view('akame.signin');
    }

	public function simpan() {
    	$this->validate(request(), [
    		'nama' => 'required',
    		'email' => 'required',
    		'no_telp' => 'required',
    	]);

    	User::create([
    		'nama' => request('nama'),
    		'email' => request('email'),
    		'no_telp' => request('no_telp')
    	]);

    	return redirect('/');
	}

    public function authenticate() {
        if (Auth::attempt(['username' => request('username'), 'password' => request('password')])) {
            return redirect('/');
        }

        return redirect()->back()->withErrors([
            'message' => request('password'),
        ]);
    }
}
