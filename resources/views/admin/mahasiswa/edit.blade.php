@extends('layout/main')

@section('title', 'Form Ubah Data Mahasiswa')

@section('konten')
<div id="page-wrapper">
    <div class="header"> 
        <h1 class="page-header">
            <strong>Form Ubah Data Mahasiswa</strong>
        </h1>
    </div>
    <div id="page-inner"> 
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-action">
                         Form Ubah Data Mahasiswa
                    </div>
                    <div class="card-content" >
                    <form class="col s12" method="post" action="/admin/mahasiswa/{{ $mahasiswa->id }}" >
                    @method('patch')
                    @csrf
                        <div class="row">
                            <div class="input-field col s6 ">
                                <input id="nama" type="text" class="validate" name="nama" value="{{ $mahasiswa->nama }}">
                                @error ('nama') <div class="invalid-feedback alert alert-danger" > {{ $message }} !</div>@enderror
                                    <label for="nama">Nama</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s6">
                                <input id="nim" type="text" class="validate" name="nim" value="{{ $mahasiswa->nim }}">
                                @error ('nim') <div class="invalid-feedback alert alert-danger"> {{ $message }} !</div>@enderror
                                    <label for="nim">Nim</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s6">
                                <input id="kelas" type="text" class="validate" name="kelas" value="{{ $mahasiswa->kelas  }}">
                                    <label for="kelas">Kelas</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s6">
                                <input id="jurusan" type="text" class="validate" name="jurusan" value="{{ $mahasiswa->jurusan }}">
                                    <label for="jurusan">Jurusan</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s6">
                                <input id="email" type="text" class="validate" name="email" value="{{ $mahasiswa->email }}">
                                    <label for="email">Email</label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Ubah Data</button>
                    </form>
                    <div class="clearBoth"></div>
                    </div>
                </div>
            </>
        </div>
    </div>	
</div>
 
@endsection