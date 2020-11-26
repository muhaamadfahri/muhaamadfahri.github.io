@extends('layout/fahri');

@section("Judul", 'Form Data Mahasiswa')
@section('container')
<div class="container">
<div class="row">
<div class="col-8">

    <h1 class="mt-3">Form Data Mahasiswa</h1>

    <form method="post" action="/students">
        @csrf
        <div class="form-group">
            <label for="nama">Nama</label>
        <input type="text" class="form-control  @error('Nama') is-invalid @enderror" id="Nama"
        placeholder="Masukkan nama" name="Nama" value="{{ old('Nama') }}">
            @error('Nama')
                <div class="invalid-feedback">{{ $errors->first('Nama') }}</div>
            @enderror
    </div>
        <div class="form-group">
            <label for="NRP">NRP</label>
            <input type="text" class="form-control @error('NRP') is-invalid @enderror" id="NRP"
            placeholder="Masukkan NRP" name="NRP" value="{{ old('NRP') }}">
            @error('NRP')
            <div class="invalid-feedback">{{ $errors->first('NRP') }}</div>
            @enderror
          </div>
          <div class="form-group">
            <label for="Email">Email</label>
            <input type="text" class="form-control @error('email') is-invalid @enderror" id="Email"
            placeholder="Masukkan Email" name="Email"value="{{ old('Email') }}">
            @error ('email')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>
          <div class="form-group">
            <label for="Jurusan">Jurusan</label>
            <input type="text" class="form-control @error('jurusan') is-invalid @enderror" id="Jurusan"
            placeholder="Masukkan Jurusan" name="Jurusan" value="{{ old('Jurusan') }}">
            @error ('jurusan')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
          </div>
          <button type="submit" class="btn btn-primary">Tambah Data!</button>
      </form>


</div></div></div>
@endsection
