<?php

namespace App\Http\Controllers;

use App;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\User;
use App\Post;
use App\SubKelas;
use App\Enroll;
use App\Promo;

class PromoController extends Controller
{
	public function show_all() {
		$promo = Promo::orderBy('created_at','dsc')->get();
        return view('admin.manage-promo', compact('promo'));
	}

	public function show($id) {
        // https://laracasts.com/discuss/channels/laravel/playing-video-problem
		$video = Video::with('get_post')->find($id);
        $path = '/storage/materi_video/'. $video->path;
    	return view('admin.show-video', compact('video', 'path'));
	}

    public function upload() {
    	return view('admin.upload-promo');
    }

    public function simpan(Request $request) {
    	// PERLU UBAH KONFIGURASI DI PHP.INI (POST_SIZE DAN MAX UPLOAD SIZE)
    	$this->validate($request , [
            'judul' => 'required',
            'materi' => 'required|max:20000',
        ]);

        if ($request->hasFile('materi')) {
            $filenameWithExt = $request->file('materi')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('materi')->getClientOriginalExtension();
            $fileNameToStore = time().'.'.$extension;
            $path = $request->file('materi')->storeAs('/public/materi_promo', $fileNameToStore);
        } else {
            $fileNameToStore = 'noimage.jpg';
        }

        $promo = new Promo;
        $promo->name = $request->input('judul');
        $promo->file = $fileNameToStore;
        $promo->save();

        return redirect('/admin')->with('success', 'Materi Promo Uploaded');
    }

    public function edit($id) {
        $promo = Promo::find($id);
        
        return view('admin.edit-promo', compact('promo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'judul' => 'required',
            'materi_promo' => 'required',
        ]);

        if ($request->hasFile('materi_promo')) {
            $filenameWithExt = $request->file('materi_promo')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('materi_promo')->getClientOriginalExtension();
            $fileNameToStore = time().'.'.$extension;
            $path = $request->file('materi_promo')->storeAs('/public/materi_promo', $fileNameToStore);
        } else {
            $fileNameToStore = 'noimage.jpg';
        }

        $promo = Promo::find($id);
        unlink(storage_path('app/public/materi_promo/'.$promo->file));
        $promo->name = $request->input('judul');
        $promo->file = $fileNameToStore;
        $promo->save();

        return redirect('/admin')->with('success', 'Promo Successfully Updated');
    }

    public function delete($id) {
    	$promo = Promo::find($id);
        unlink(storage_path('app/public/materi_promo/'.$promo->file));
    	$promo->delete();

    	return redirect('/admin')->with('success', 'Video Deleted');
    }
}
