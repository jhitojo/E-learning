<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Mahasiswa;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index_mhs()
    {
        //$mahasiswa = DB:: table('Mahasiswa')->get();
        $mahasiswa = Mahasiswa::all();
        return view('admin.mahasiswa.index', ['mahasiswa' => $mahasiswa]);
    }
 

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create_mhs()
    {
        return view ('admin.mahasiswa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store_mhs(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'nim' => 'required|size:8'
        ]);

        Mahasiswa::create($request->all());
        return redirect('/admin/mahasiswa')->with('status', 'Data Mahasiswa Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show_mhs(Mahasiswa $mahasiswa)
    {
        return view ('admin.mahasiswa.detail', compact('mahasiswa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit_mhs(Mahasiswa $mahasiswa)
    {
        return view ('admin.mahasiswa.edit', compact('mahasiswa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update_mhs(Request $request, Mahasiswa $mahasiswa)
    {

        $request->validate([
            'nama' => 'required',
            'nim' => 'required|size:8'
        ]);

        Mahasiswa::where('id', $mahasiswa->id) 
                ->update([
                    'nama' => $request->nama,
                    'nim' => $request->nim,
                    'kelas' => $request->kelas,
                    'jurusan' => $request->jurusan,
                    'email' => $request->email,
                ]);
        return redirect('/admin/mahasiswa')->with('update', 'Data Mahasiswa Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy_mhs(Mahasiswa $mahasiswa)
    {

        Mahasiswa::destroy($mahasiswa->id);
        return redirect('/admin/mahasiswa')->with('delete', 'Data Mahasiswa Berhasil Dihapus!');
    }
}
