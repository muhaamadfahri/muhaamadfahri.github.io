@extends('layout/fahri');

@section("Judul", 'Form Ubah Data Mahasiswa')
@section('container')
<div class="container">
<div class="row">
<div class="col-8">

    <h1 class="mt-3">Form Ubah Data Mahasiswa</h1>

<form method="post" action="/students/{{ $students->id }}">
    @method('patch')
    @csrf
        <div class="form-group">
            <label for="nama">Nama</label>
        <input type="text" class="form-control  @error('Nama') is-invalid @enderror" id="Nama"
        placeholder="Masukkan Nama" name="Nama" value="{{ $students->nama }}">
            @error('Nama')
                <div class="invalid-feedback">{{ $errors->first('Nama') }}</div>
            @enderror
    </div>
        <div class="form-group">
            <label for="NRP">NRP</label>
            <input type="text" class="form-control @error('NRP') is-invalid @enderror" id="NRP"
            placeholder="Masukkan NRP" name="NRP" value="{{ $students->nrp }}">
            @error('NRP')
            <div class="invalid-feedback">{{ $errors->first('NRP') }}</div>
            @enderror
          </div>
          <div class="form-group">
            <label for="Email">Email</label>
            <input type="text" class="form-control @error('email') is-invalid @enderror" id="Email"
            placeholder="Masukkan Email" name="Email"value="{{ $students->email }}">
            @error ('email')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>
          <div class="form-group">
            <label for="Jurusan">Jurusan</label>
            <input type="text" class="form-control @error('jurusan') is-invalid @enderror" id="Jurusan"
            placeholder="Masukkan Jurusan" name="Jurusan" value="{{ $students->jurusan }}">
            @error ('jurusan')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
          </div>
          <button type="submit" class="btn btn-primary">Ubah Data!</button>
      </form>


</div></div></div>
@endsection
