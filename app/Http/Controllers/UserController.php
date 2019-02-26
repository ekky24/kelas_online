<?php

namespace App\Http\Controllers;

use App;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Kelas;
use App\SubKelas;
use App\Enroll;
use Hash;

class UserController extends Controller
{
    public $kelas_arr;
    public $kelas;
    public $sub_kelas;
    public $sub_kelas_get;

    public function __construct() {
        $this->kelas_arr = [];
        $this->kelas = "";
        $this->sub_kelas = "";
        $this->sub_kelas_get = "";
    }

    public function index() {
        $this->navbar_change();
        return view('akame.index')->with(['kelas_arr'=>$this->kelas_arr, 'kelas'=>$this->kelas, 'sub_kelas'=>$this->sub_kelas, 'sub_kelas_get'=>$this->sub_kelas_get]);
    }

    public function signup() {
        $this->navbar_change();
    	return view('akame.signup')->with(['kelas_arr'=>$this->kelas_arr, 'kelas'=>$this->kelas, 'sub_kelas'=>$this->sub_kelas, 'sub_kelas_get'=>$this->sub_kelas_get]);
	}

    public function signin() {
        $this->navbar_change();
        return view('akame.signin')->with(['kelas_arr'=>$this->kelas_arr, 'kelas'=>$this->kelas, 'sub_kelas'=>$this->sub_kelas, 'sub_kelas_get'=>$this->sub_kelas_get]);
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

        Auth::logout();

    	return redirect('/')->with([ 'msg' => 'register_sukses' ]);
	}

    public function authenticate() {
        if (Auth::attempt(['username' => request('username'), 'password' => request('password')])) {
            return redirect('/');
        }

        return redirect()->back()->withErrors([
            'message' => request('password'),
        ]);
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
        $user->password = Hash::make(request('password'));
        $user->save();

        return redirect('/');
    }

    public function pengaturan() {
        $this->navbar_change();
        return view('akame.pengaturan')->with(['kelas_arr'=>$this->kelas_arr, 'kelas'=>$this->kelas, 'sub_kelas'=>$this->sub_kelas, 'sub_kelas_get'=>$this->sub_kelas_get]);
    }

    public function signout() {
        Auth::logout();
        return redirect('/');
    }

    public function navbar_change() {
        // CODE UNTUK MENU KELAS BERDASARKAN USER YANG LOGIN
        if(Auth::check()) {
            $this->kelas_arr = [];
            $this->sub_kelas_get = Enroll::with('get_sub_kelas')->where('user_id', auth()->user()->id)->get();
            $this->kelas = Kelas::all();
            $this->sub_kelas = SubKelas::all();

            foreach ($this->sub_kelas_get as $row) {
                $kelas_baru = $row->get_sub_kelas->get_parent->id;
                $is_exist = 0;

                foreach ($this->kelas_arr as $row_arr) {
                    if ($kelas_baru == $row_arr) {
                        $is_exist = 1;
                    }
                }

                if ($is_exist == 0) {
                    array_push($this->kelas_arr, $kelas_baru);
                }
            }
        }
    }
}
