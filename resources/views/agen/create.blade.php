@extends('agen.layouts.main')

@section('content')

 <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Tambah Data Peminjam</h1>
      </div>

     <div class="col-lg-8"> 
    <form method="post" action="{{route('agen.store') }}" class="mb-5">
        @csrf
  <div class="mb-3">
    <label for="title" class="form-label">Agen</label>
    <input type="text" class="form-control  @error('title') is-invalid @enderror" id="agen" name="agen" required autofocus value="{{old('title')}}">
    @error('title')
                    <div class="alert alert-danger">{{$message}}</div>
    @enderror
  </div>
   <div class="mb-3">
    <label for="title" class="form-label">Jumlah</label>
    <input type="text" class="form-control  @error('title') is-invalid @enderror" id="jumlah" name="jumlah" required autofocus value="{{old('title')}}">
    @error('title')
                    <div class="alert alert-danger">{{$message}}</div>
    @enderror
  </div> <div class="mb-3">
    <label for="title" class="form-label">Peminjaman</label>
    <input type="text" class="form-control  @error('title') is-invalid @enderror" id="peminjam" name="peminjam" required autofocus value="{{old('title')}}">
    @error('title')
                    <div class="alert alert-danger">{{$message}}</div>
    @enderror
  </div> <div class="mb-3">
    <label for="title" class="form-label">Jangka Waktu</label>
    <input type="text" class="form-control  @error('title') is-invalid @enderror" id="jangkawaktu" name="jangkawaktu" required autofocus value="{{old('title')}}">
    @error('title')
                    <div class="alert alert-danger">{{$message}}</div>
    @enderror
  </div> <div class="mb-3">
    <label for="title" class="form-label">Bayar Perbulan</label>
    <input type="text" class="form-control  @error('title') is-invalid @enderror" id="bayarperbulan" name="bayarperbulan" required autofocus value="{{old('title')}}">
    @error('title')
                    <div class="alert alert-danger">{{$message}}</div>
    @enderror
  </div> <div class="mb-3">
    <label for="title" class="form-label">Status</label>
    <input type="text" class="form-control  @error('title') is-invalid @enderror" id="status" name="status" required autofocus value="{{old('title')}}">
    @error('title')
                    <div class="alert alert-danger">{{$message}}</div>
    @enderror

     <button type="submit" class="btn btn-primary mt-3">Buat Pinjaman</button>
</form>
  </div>
@endsection