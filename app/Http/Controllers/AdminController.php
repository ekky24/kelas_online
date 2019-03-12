<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Kelas; 
use App\SubKelas; 
use App\Enroll;
use App\UserPromo;
use Hash;

class AdminController extends Controller
{
    public function member() {
        $member = User::all();
        $json_member = json_encode($member);
        $kelas = Kelas::all();
        $sub_kelas = SubKelas::all();

        return view('admin.admin', compact('member', 'json_member', 'kelas', 'sub_kelas'));
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

    public function store_course(Request $request) {
        $this->validate($request, [
            'user_id' => 'required',
            'sub_kelas_id' => 'required',
        ]);

        foreach ($request->input('sub_kelas_id') as $row) {
            $enroll = new Enroll;
            $enroll->user_id = $request->input('user_id');
            $enroll->sub_kelas_id = $row;
            $enroll->save();
        }
        
        return redirect('/admin')->with('success', 'Enrollment Berhasil Ditambahkan');
    }

    public function sign_promo() {
    $this->validate(request(), [
        'email' => 'required',
        'no_telp' => 'required',
        'nama' => 'required',
    ]);

    $user = new UserPromo;
    $user->email = $request->input('email');
    $user->no_telp = $request->input('no_telp');
    $user->nama = $request->input('nama');
    $user->save();

    return redirect('/daftar_promo')->with('success', 'Silahkan ambil promo Anda.');
    }
}
