@extends('layout/main')

@section('title', 'Detail Dosen')

@section('konten')
<div id="page-wrapper">
    <div class="header"> 
        <h1 class="page-header">
            <strong>Detail Dosen</strong>
        </h1>
    </div>
    <div id="page-inner">
        <ul class="collection with-header">
            <li class="collection-header">
                <h3><b>{{ $dosen->nama }}</b></h3>
            </li>
            <li class="collection-item">Nik     : {{ $dosen->nik }}</li>
            <li class="collection-item">Prodi   : {{ $dosen->prodi }}</li>
            <li class="collection-item">Fakultas : {{ $dosen->fakultas }}</li>
            <li class="collection-item">Email   : {{ $dosen->email }}</li>
        </ul>
        <div class="row" id="page-inner">
            <div class="col s1">
                <a href="{{ $dosen->id }}/edit "class="btn btn-primary">Edit</a>
            </div>
            <div class="col s1">
                <form action="{{ $dosen->id }}" method="post">
                @method ('delete')
                @csrf
                <button type="submit" class="btn btn-danger">Delete</button>
                </form>                
            </div>
            <div class="col s1">
                <a href="/admin/dosen" class="btn btn-success">kembali</a>
            </div>
        </div>
    </div>
</div>
 
@endsection