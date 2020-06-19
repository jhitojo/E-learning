<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Mahasiswa;
use App\Dosen;

class AdminController extends Controller
{
   
    public function index_mhs()
    {
        //$mahasiswa = DB:: table('Mahasiswa')->get();
        $mahasiswa = Mahasiswa::all();
        return view('admin.mahasiswa.index', ['mahasiswa' => $mahasiswa]);
    }
 
    public function create_mhs()
    {
        return view ('admin.mahasiswa.create');
    }

    public function store_mhs(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'nim' => 'required|size:8'
        ]);

        Mahasiswa::create($request->all());
        return redirect('/admin/mahasiswa')->with('status', 'Data Mahasiswa Berhasil Ditambahkan!');
    }

    public function show_mhs(Mahasiswa $mahasiswa)
    {
        return view ('admin.mahasiswa.detail', compact('mahasiswa'));
    }

    public function edit_mhs(Mahasiswa $mahasiswa)
    {
        return view ('admin.mahasiswa.edit', compact('mahasiswa'));
    }

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

    public function destroy_mhs(Mahasiswa $mahasiswa)
    {

        Mahasiswa::destroy($mahasiswa->id);
        return redirect('/admin/mahasiswa')->with('delete', 'Data Mahasiswa Berhasil Dihapus!');
    }

    ///////////////////////////////////////////////////////////////////////////////////////////////
    //////////////////////////////////////////////////////////////////////////////////////////////

    public function index_dosen()
    {
        //$dosen = DB:: table('Dosen')->get();
        $dosen = Dosen::all();
        return view('admin.dosen.index', ['dosen' => $dosen]);
    }
 
    public function create_dosen()
    {
        return view ('admin.dosen.create');
    }

    public function store_dosen(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'nik' => 'required|size:10'
        ]);

        Dosen::create($request->all());
        return redirect('/admin/dosen')->with('status', 'Data Dosen Berhasil Ditambahkan!');
    }

    public function show_dosen(Dosen $dosen)
    {
        return view ('admin.dosen.detail', compact('dosen'));
    }

    public function edit_dosen(Dosen $dosen)
    {
        return view ('admin.dosen.edit', compact('dosen'));
    }

    public function update_dosen(Request $request, Dosen $dosen)
    {

        $request->validate([
            'nama' => 'required',
            'nik' => 'required|size:10'
        ]);

        Dosen::where('id', $dosen->id) 
                ->update([
                    'nama' => $request->nama,
                    'nik' => $request->nik,
                    'prodi' => $request->prodi,
                    'fakultas' => $request->fakultas,
                    'email' => $request->email,
                ]);
        return redirect('/admin/dosen')->with('update', 'Data Dosen Berhasil Diubah!');
    }

    public function destroy_dosen(Dosen $dosen)
    {

        Dosen::destroy($dosen->id);
        return redirect('/admin/dosen')->with('delete', 'Data Dosen Berhasil Dihapus!');
    }
    
}
