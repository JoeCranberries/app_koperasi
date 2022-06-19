@extends('agen.layouts.main')

@section('content')

 <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Tambah Data Pinjaman</h1>
      </div>

     <div class="col-lg-8"> 
    <form method="post" action="{{route('agen.update', $models->id) }}" class="mb-5">
        @csrf
        @method('PUT')
  <div class="mb-3">
    <label for="agen" class="form-label">Agen</label>
    <input type="text" class="form-control  @error('nama_agen') is-invalid @enderror" id="nama_agen" name="nama_agen" required autofocus value="{{old('nama_agen',$models->nama_agen)}}">
    @error('nama_agen')
                    <div class="alert alert-danger">{{$message}}</div>
    @enderror
  </div>
   <div class="mb-3">
    <label for="title" class="form-label">Jumlah</label>
    <input type="text" class="form-control  @error('jumlah') is-invalid @enderror" id="jumlah" name="jumlah" required autofocus value="{{old('jumlah',$models->jumlah)}}">
    @error('jumlah')
                    <div class="alert alert-danger">{{$message}}</div>
    @enderror
  </div> <div class="mb-3">
    <label for="title" class="form-label">Peminjam</label>
    <input type="text" class="form-control  @error('nama_peminjam') is-invalid @enderror" id="nama_peminjam" name="nama_peminjam" required autofocus value="{{old('nama_peminjam',$models->nama_peminjam)}}">
    @error('title')
                    <div class="alert alert-danger">{{$message}}</div>
    @enderror
  </div> <div class="mb-3">
    <label for="title" class="form-label">Jangka Waktu</label>
    <input type="text" class="form-control  @error('jangka_waktu') is-invalid @enderror" id="jangka_waktu" name="jangka_waktu" required autofocus value="{{old('jangka_waktu',$models->jangka_waktu)}}">
    @error('title')
                    <div class="alert alert-danger">{{$message}}</div>
    @enderror
  </div> <div class="mb-3">
    <label for="title" class="form-label">Bayar Perbulan</label>
    <input type="text" class="form-control  @error('bayar_perbulan') is-invalid @enderror" id="bayar_perbulan" name="bayar_perbulan" required autofocus value="{{old('bayar_perbulan',$models->bayar_perbulan)}}">
    @error('jangka_waktu')
                    <div class="alert alert-danger">{{$message}}</div>
    @enderror
  </div> <div class="mb-3">
    <label for="status" class="form-label">Status</label>
    <select class="form-select" id="status" name="status">
      <option selected>pilih status</option>
    <option value="lunas">lunas</option>
    <option value="belum_lunas">belum lunas</option>
    </select>
    
     <button type="submit" class="btn btn-primary mt-3">Edit Pinjaman</button>
</form>
  </div>
@endsection