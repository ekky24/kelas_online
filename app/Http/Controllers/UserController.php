<?php

namespace App\Http\Controllers;

use App;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Kelas;
use App\SubKelas;
use App\Enroll;

class UserController extends Controller
{
    public function index() {
        if(Auth::check()) {
            // CODE UNTUK MENU KELAS BERDASARKAN USER
            $kelas_arr = [];

            $sub_kelas_get = Enroll::with('get_sub_kelas')->where('user_id', auth()->user()->id)->get();
            $kelas = Kelas::all();
            $sub_kelas = SubKelas::all();

            foreach ($sub_kelas_get as $row) {
                $kelas_baru = $row->get_sub_kelas->get_parent->id;
                $is_exist = 0;

                foreach ($kelas_arr as $row_arr) {
                    if ($kelas_baru == $row_arr) {
                        $is_exist = 1;
                    }
                }

                if ($is_exist == 0) {
                    array_push($kelas_arr, $kelas_baru);
                }
            }
            return view('akame.index', compact('kelas_arr', 'kelas', 'sub_kelas', 'sub_kelas_get'));
        }

        return view('akame.index');
    }

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
        $user = User::where('username', request('username'))
            ->where('password', request('password'))
            ->first();

        if($user) {
            Auth::loginUsingId($user->id);
            return redirect('/');
        } else {
            return redirect()->back()->withErrors([
                'message' => 'Username atau Password yang anda masukkan salah.',
            ]);
        }

        /*if (Auth::attempt(['username' => request('username'), 'password' => request('password')])) {
            return redirect('/');
        }

        return redirect()->back()->withErrors([
            'message' => request('password'),
        ]);*/
    }

    public function simpan_pass_baru() {
        $this->validate(request(), [
            'password-lama' => 'required',
            'password' => 'required|confirmed'
        ]);

        if (! request('password-lama') == auth()->user()->password) {
            return back()->withErrors([
                'message' => 'Password yang anda masukkan salah.'
            ]);
        }
        
        $user = auth()->user();
        $user->password = request('password');
        $user->save();

        return redirect('/');
    }

    public function pengaturan() {
        return view('akame.pengaturan');
    }

    public function signout() {
        Auth::logout();
        return redirect('/');
    }
}
