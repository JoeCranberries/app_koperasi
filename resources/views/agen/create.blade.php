@extends('agen.layouts.main')

@section('content')

 <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Tambah Data Peminjam</h1>
      </div>

     <div class="col-lg-8"> 
    <form method="post" action="{{route('agen.store') }}" class="mb-5">
        @csrf
  <div class="mb-3">
    <label for="agen" class="form-label">Agen</label>
    <input type="text" class="form-control  @error('agen_id') is-invalid @enderror" id="agen_id" name="agen_id" required autofocus value="{{old('agen_id')}}">
    @error('agen_id')
                    <div class="alert alert-danger">{{$message}}</div>
    @enderror
  </div>
   <div class="mb-3">
    <label for="title" class="form-label">Jumlah</label>
    <input type="text" class="form-control  @error('jumlah') is-invalid @enderror" id="jumlah" name="jumlah" required autofocus value="{{old('title')}}">
    @error('title')
                    <div class="alert alert-danger">{{$message}}</div>
    @enderror
  </div> <div class="mb-3">
    <label for="title" class="form-label">Peminjam</label>
    <input type="text" class="form-control  @error('title') is-invalid @enderror" id="peminjam_id" name="peminjam_id" required autofocus value="{{old('peminjam_id')}}">
    @error('title')
                    <div class="alert alert-danger">{{$message}}</div>
    @enderror
  </div> <div class="mb-3">
    <label for="title" class="form-label">Jangka Waktu</label>
    <input type="text" class="form-control  @error('title') is-invalid @enderror" id="jangka_waktu" name="jangka_waktu" required autofocus value="{{old('jangka_waktu')}}">
    @error('title')
                    <div class="alert alert-danger">{{$message}}</div>
    @enderror
  </div> <div class="mb-3">
    <label for="title" class="form-label">Bayar Perbulan</label>
    <input type="text" class="form-control  @error('title') is-invalid @enderror" id="bayar_perbulan" name="bayar_perbulan" required autofocus value="{{old('jangka_waktu')}}">
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
    
     <button type="submit" class="btn btn-primary mt-3">Buat Pinjaman</button>
</form>
  </div>
@endsection