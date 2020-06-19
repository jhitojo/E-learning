@extends('layout/main')

@section('title', 'Tambah Data Dosen')

@section('konten')
<div id="page-wrapper">
    <div class="header"> 
        <h1 class="page-header">
            <strong>Tambah Data Dosen</strong>
        </h1>
    </div>
    <div id="page-inner"> 
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-action">
                         Form Tambah Data Dosen
                    </div>
                    <div class="card-content" >
                    <form class="col s12" method="post" action="/admin/dosen" >
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
                                <input id="nik" type="text" class="validate" name="nik" value="{{ old('nik') }}">
                                @error ('nik') <div class="invalid-feedback alert alert-danger"> {{ $message }} !</div>@enderror
                                    <label for="nim">Nik</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s6">
                                <input id="prodi" type="text" class="validate" name="prodi" value="{{ old('prodi') }}">
                                    <label for="prodi">Prodi</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s6">
                                <input id="fakultas" type="text" class="validate" name="fakultas" value="{{ old('fakultas') }}">
                                    <label for="fakultas">Fakultas</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s6">
                                <input id="email" type="text" class="validate" name="email" value="{{ old('email') }}">
                                    <label for="email">Email</label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Tambah Data</button>
                        <a href="/admin/dosen/create" class="btn btn-danger">cancel</a>
                        <a href="/admin/dosen" class="btn btn-success">kembali</a>
                    </form>
                    <div class="clearBoth"></div>
                    </div>
                </div>
            </>
        </div>
    </div>	
</div>
 
@endsection