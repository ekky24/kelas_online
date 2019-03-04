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
use App\Video;

class VideoController extends Controller
{
	public function show_all() {
		$video = Video::with('get_post')->orderBy('created_at','dsc')->get();
        return view('admin.manage-video', compact('video'));
	}

	public function show($id) {
        // https://laracasts.com/discuss/channels/laravel/playing-video-problem
		$video = Video::with('get_post')->find($id);
        $path = '/storage/materi_video/'. $video->path;
    	return view('admin.show-video', compact('video', 'path'));
	}

    public function upload() {
    	$post = Post::all();
    	return view('admin.upload-video', compact('post'));
    }

    public function simpan(Request $request) {
    	// PERLU UBAH KONFIGURASI DI PHP.INI (POST_SIZE DAN MAX UPLOAD SIZE)
    	$this->validate($request , [
            'post_id' => 'required',
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
        $video->post_id = $request->input('post_id');
        $video->judul = $request->input('judul');
        $video->path = $fileNameToStore;
        $video->save();

        return redirect('/admin')->with('success', 'Video Uploaded');
    }

    public function edit($id) {
        $video = Video::find($id);
        $post = Post::pluck('title', 'id');
        
        return view('admin.edit-video', compact('video', 'post'));
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
            'post_id' => 'required',
            'materi_video' => 'required',
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

        $video = Video::find($id);
        unlink(storage_path('app/public/materi_video/'.$video->path));
        $video->judul = $request->input('judul');
        $video->post_id = $request->input('post_id');
        $video->path = $fileNameToStore;
        $video->save();

        return redirect('/admin')->with('success', 'Video Successfully Updated');
    }

    public function delete($id) {
    	$video = Video::find($id);
        unlink(storage_path('app/public/materi_video/'.$video->path));
    	$video->delete();

    	return redirect('/admin')->with('success', 'Video Deleted');
    }
}
