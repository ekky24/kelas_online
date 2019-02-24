<?php

namespace App\Http\Controllers;

use App;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Kelas;
use App\SubKelas;
use App\Enroll;
use App\Video;

class VideoController extends Controller
{
	public function show_all() {
		$video = Video::with('get_sub_kelas')->orderBy('created_at','dsc')->get();
        return view('admin.all_video', compact('video'));
	}

	public function show($id) {
        // https://laracasts.com/discuss/channels/laravel/playing-video-problem
		$video = Video::with('get_sub_kelas')->find($id);
        $path = '/storage/materi_video/'. $video->path;
        print($path);
    	return view('admin.show_video', compact('video', 'path'));
	}

    public function upload() {
    	$kelas = Kelas::all();
    	return view('admin.video', compact('kelas'));
    }

    public function simpan(Request $request) {
    	// PERLU UBAH KONFIGURASI DI PHP.INI (POST_SIZE DAN MAX UPLOAD SIZE)
    	$this->validate($request , [
            'sub_kelas_id' => 'required',
            'judul' => 'nullable',
            'materi_video' => 'required|max:200000',
        ]);

        if ($request->hasFile('materi_video')) {
            $filenameWithExt = $request->file('materi_video')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('materi_video')->getClientOriginalExtension();
            $fileNameToStore = time().'.'.$extension;
            $path = $request->file('materi_video')->storeAs('/public/materi_video', $fileNameToStore);
        } else {
            $fileNameToStore = 'noimage.jpg';
        }

        $video = new Video;
        $video->sub_kelas_id = $request->input('sub_kelas_id');
        $video->judul = $request->input('judul');
        $video->path = $fileNameToStore;
        $video->save();

        return redirect('/admin')->with('success', 'Video Uploaded');
    }

    public function delete($id) {
    	$video = Video::find($id);
    	$video->delete();
    	return redirect('/admin')->with('success', 'Video Deleted');
    }
}
