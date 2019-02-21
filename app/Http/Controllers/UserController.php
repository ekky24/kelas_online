<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function register() {
    	return view('akame.register');
	}

	public function simpan() {
    	$this->validate(request(), [
    		'nik' => 'required|numeric',
    		'nama' => 'required',
    		'jk' => 'required',
    		'tempat_lahir' => 'required',
    		'tgl_lahir' => 'required|date',
    		'agama_id' => 'required|numeric',
    		'pendidikan_id' => 'required|numeric',
    		'jenis_pekerjaan_id' => 'required|numeric',
    		'status_nikah_id' => 'required|numeric',
    		'status_hubungan_id' => 'required|numeric',
    		'kewarganegaraan' => 'required',
    		'ayah' => 'required',
    		'ibu' => 'required'
    	]);

    	$tempat_lahir = Kota::select('id')->where('nama', request('tempat_lahir'))->get();

    	Penduduk::create([
    		'id' => request('nik'),
    		'nama' => strtoupper(request('nama')),
    		'jk' => request('jk'),
    		'tempat_lahir' => $tempat_lahir[0]->id,
    		'tgl_lahir' => request('tgl_lahir'),
    		'agama_id' => request('agama_id'),
    		'pendidikan_id' => request('pendidikan_id'),
    		'jenis_pekerjaan_id' => request('jenis_pekerjaan_id'),
    		'status_nikah_id' => request('status_nikah_id'),
    		'status_hubungan_id' => request('status_hubungan_id'),
    		'kewarganegaraan' => request('kewarganegaraan'),
    		'ayah' => strtoupper(request('ayah')),
    		'ibu' => strtoupper(request('ibu')),
    		'no_kitas' => request('kitas'),
    		'no_paspor' => request('paspor')
    	]);

    	return redirect('/penduduk');
	}
}
