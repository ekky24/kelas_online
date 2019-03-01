<?php

namespace App\Http\Controllers;

use App;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Kelas;
use App\SubKelas;
use App\Enroll;

class SubKelasController extends Controller
{
	public $kelas_arr;
    public $kelas;
    public $sub_kelas;
    public $sub_kelas_get;

    public function detail($kelas_id) {
    	$this->navbar_change();
        $detail_kelas = SubKelas::where('id', $kelas_id)->first();
        return view('akame.kelas')->with(['kelas_arr'=>$this->kelas_arr, 'kelas'=>$this->kelas, 'sub_kelas'=>$this->sub_kelas, 'sub_kelas_get'=>$this->sub_kelas_get, 'detail_kelas'=>$detail_kelas]);
    }

    public function post() {
        $kelas = Kelas::all();
        return view('akame.post', compact('kelas'));
    }

    public function simpan_post() {
        $this->validate(request(), [
            'sub_kelas_id' => 'required',
            'content' => 'required',
        ]);

        $sub_kelas = SubKelas::where('id', request('sub_kelas_id'))->first();
        $sub_kelas->konten = request('content');
        $sub_kelas->save();

        return redirect('/');
    }

    public function get_sub_kelas($parent_id) {
        $sub_kelas = SubKelas::where('parent_id', $parent_id)->get();
        return $sub_kelas;
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
