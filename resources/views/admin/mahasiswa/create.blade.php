@extends('layout/main')

@section('title', 'Tambah Data Mahasiswa')

@section('konten')
<div id="page-wrapper">
    <div class="header"> 
        <h1 class="page-header">
            <strong>Tambah Data Mahasiswa</strong>
        </h1>
    </div>
    <div id="page-inner"> 
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-action">
                         Form Tambah Data Mahasiswa
                    </div>
                    <div class="card-content" >
                    <form class="col s12" method="post" action="/admin/mahasiswa" >
                    @csrf
                        <div class="row">
                            <div class="input-field col s6 ">
                                <input id="nama" type="text" class="validate" name="nama" value="{{ old('nama') }}">
                                @error ('nama') <div class="invalid-feedback alert alert-danger" > {{ $message }} !</div>@enderror
                                    <label for="nama">Nama</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s6">
                                <input id="nim" type="text" class="validate" name="nim" value="{{ old('nim') }}">
                                @error ('nim') <div class="invalid-feedback alert alert-danger"> {{ $message }} !</div>@enderror
                                    <label for="nim">Nim</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s6">
                                <input id="kelas" type="text" class="validate" name="kelas" value="{{ old('kelas') }}">
                                    <label for="kelas">Kelas</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s6">
                                <input id="jurusan" type="text" class="validate" name="jurusan" value="{{ old('jurusan') }}">
                                    <label for="jurusan">Jurusan</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s6">
                                <input id="email" type="text" class="validate" name="email" value="{{ old('email') }}">
                                    <label for="email">Email</label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Tambah Data</button>
                        <a href="/admin/mahasiswa/create" class="btn btn-danger">cancel</a>
                        <a href="/admin/mahasiswa" class="btn btn-success">kembali</a>
                    </form>
                    <div class="clearBoth"></div>
                    </div>
                </div>
            </>
        </div>
    </div>	
</div>
 
@endsection