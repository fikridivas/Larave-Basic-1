@extends('layout/main')

@section('title', 'Form Tambah Data Mahasiswa')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-8">
            <h1 class="mt-4">Form Tambah Data Mahasiswa</h1>
            <form method="POST" action="/students">
                @csrf
                <div class="form-group">
                    <label for="nama">Nama Mahasiswa</label>
                    <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama"
                        aria-describedby="namamhs" value="{{old('nama')}}">
                    @error('nama')
                    <div id="validationServer03Feedback" class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="nim">NIM Mahasiswa</label>
                    <input type="text" class="form-control @error('nim') is-invalid @enderror" id="nim" name="nim"
                        aria-describedby="nimmhs" value="{{old('nim')}}">
                    @error('nim')
                    <div id="validationServer03Feedback" class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="email">Email Mahasiswa</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                        name="email" aria-describedby="emailmhs" value="{{old('email')}}">
                    @error('email')
                    <div id="validationServer03Feedback" class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="jurusan">Jurusan Mahasiswa</label>
                    <input type="text" class="form-control @error('jurusan') is-invalid @enderror" id="jurusan"
                        name="jurusan" aria-describedby="jurusanmhs" value="{{old('jurusan')}}">
                    @error('jurusan')
                    <div id="validationServer03Feedback" class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
</div>

@endsection
