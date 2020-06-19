@extends('layout/main')

@section('title', 'Manajemen Dosen')

@section('konten')
<div id="page-wrapper">
    <div class="header"> 
        <h1 class="page-header">
            <strong>Manajemen Dosen</strong>
        </h1>
    </div>
    <div id="page-inner" >
        <ul class="collection with-header">
            <li class="collection-header">
                <h3>Daftar Dosen</h3>
            </li>
            <br>
            <li>
            <a href="/admin/dosen/create" class="btn btn-success my-3">Tambah data Fakultas</a>
            </li>
            <br>
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            @if (session('delete'))
                <div class="alert alert-danger">
                    {{ session('delete') }}
                </div>
            @endif
            @if (session('update'))
                <div class="alert alert-info">
                    {{ session('update') }}
                </div>
            @endif
            <br>
            <li class="collection-item">
            @foreach( $dosen as $dosen )
                <div class="row">
                    <b>{{ $dosen->nama }}</b>
                <a href="/admin/dosen/{{ $dosen->id }}" class="secondary-content btn btn-danger">Detail</a>
                </div>
            @endforeach
            </li>
        </ul>
        </div> 
    </div>
</div>
 
@endsection