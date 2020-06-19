@extends('layout/main')

@section('title', 'Detail Mahasiswa')

@section('konten')
<div id="page-wrapper">
    <div class="header"> 
        <h1 class="page-header">
            <strong>Detail Mahasiswa</strong>
        </h1>
    </div>
    <div id="page-inner">
        <ul class="collection with-header">
            <li class="collection-header">
                <h3><b>{{ $mahasiswa->nama }}</b></h3>
            </li>
            <li class="collection-item">Nim     : {{ $mahasiswa->nim }}</li>
            <li class="collection-item">Kelas   : {{ $mahasiswa->kelas }}</li>
            <li class="collection-item">Jurusan : {{ $mahasiswa->jurusan }}</li>
            <li class="collection-item">Email   : {{ $mahasiswa->email }}</li>
        </ul>
        <div class="row" id="page-inner">
            <div class="col s1">
                <a href="{{ $mahasiswa->id }}/edit "class="btn btn-primary">Edit</a>
            </div>
            <div class="col s1">
                <form action="{{ $mahasiswa->id }}" method="post">
                @method ('delete')
                @csrf
                <button type="submit" class="btn btn-danger">Delete</button>
                </form>                
            </div>
            <div class="col s1">
                <a href="/admin/mahasiswa" class="btn btn-success">kembali</a>
            </div>
        </div>
    </div>
</div>
 
@endsection