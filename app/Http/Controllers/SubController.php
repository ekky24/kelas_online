<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SubKelas;
use App\Kelas;
use App\Post;

class SubController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subkelas = SubKelas::all();

        return view('admin.subclass-index', compact('subkelas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kelas = Kelas::pluck('nama', 'id');

        return view('admin.create-subkelas', compact('kelas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [ 
            'nama' => 'required',
            'kelas' => 'required',
        ]);

        $subkelas = new SubKelas;
        $subkelas->nama = $request->input('nama');
        $subkelas->parent_id = $request->input('kelas');
        $subkelas->save();

        return redirect('/subkelas')->with('success', 'Sub Kelas Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::where('class_id', $id)->get();
        $selected = SubKelas::find($id);
        return view('admin.subkelas-list', compact('post', 'selected'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $subkelas = SubKelas::find($id);
        $kelas = Kelas::pluck('nama', 'id');

        return view('admin.edit-subkelas', compact('subkelas', 'kelas'));
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
            'nama' => 'required',
            'kelas' => 'required',
        ]);

        $subkelas = SubKelas::find($id);
        $subkelas->nama = $request->input('nama');
        $subkelas->parent_id = $request->input('kelas');
        $subkelas->save();

        return redirect('/subkelas')->with('success', 'Subkelas Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $subkelas = SubKelas::find($id);
        $subkelas->delete();

        return redirect('/subkelas')->with('success', 'Subkelas Was Deleted Successfully');
    }
}
