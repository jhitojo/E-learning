@extends('layout/main')

@section('title', 'Form Ubah Data Dosen')

@section('konten')
<div id="page-wrapper">
    <div class="header"> 
        <h1 class="page-header">
            <strong>Form Ubah Data Dosen</strong>
        </h1>
    </div>
    <div id="page-inner"> 
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-action">
                         Form Ubah Data Dosen
                    </div>
                    <div class="card-content" >
                    <form class="col s12" method="post" action="/admin/dosen/{{ $dosen->id }}" >
                    @method('patch')
                    @csrf
                        <div class="row">
                            <div class="input-field col s6 ">
                                <input id="nama" type="text" class="validate" name="nama" value="{{ $dosen->nama }}">
                                @error ('nama') <div class="invalid-feedback alert alert-danger" > {{ $message }} !</div>@enderror
                                    <label for="nama">Nama</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s6">
                                <input id="nik" type="text" class="validate" name="nik" value="{{ $dosen->nik }}">
                                @error ('nik') <div class="invalid-feedback alert alert-danger"> {{ $message }} !</div>@enderror
                                    <label for="nik">Nik</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s6">
                                <input id="prodi" type="text" class="validate" name="prodi" value="{{ $dosen->prodi  }}">
                                    <label for="prodi">prodi</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s6">
                                <input id="fakultas" type="text" class="validate" name="fakultas" value="{{ $dosen->fakultas }}">
                                    <label for="fakultas">fakultas</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s6">
                                <input id="email" type="text" class="validate" name="email" value="{{ $dosen->email }}">
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