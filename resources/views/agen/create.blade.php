@extends('agen.layouts.main')

@section('content')

 <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Tambah Data Pinjaman</h1>
      </div>

     <div class="col-lg-8"> 
    <form method="post" action="{{route('agen.store') }}" class="mb-5">
        @csrf
  <div class="mb-3">
    <label for="agen" class="form-label">Agen</label>
    <input type="text" class="form-control  @error('nama_agen') is-invalid @enderror" id="nama_agen" name="nama_agen" required autofocus value="{{old('nama_agen')}}">
    @error('nama_agen')
                    <div class="alert alert-danger">{{$message}}</div>
    @enderror


    {{-- <script>
    const CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
    $(document).ready(function(){
            $( "#agen_cari" ).autocomplete({
        source: function( request, response ) {
          // Fetch data
          $.ajax({
            url:"{{route('agen.store') }}",
            type: 'post',
            dataType: "json",
            data: {
               _token: CSRF_TOKEN,
               search: request.term
            },
            success: function( data ) {
               response( data );
            }
          });
        },
         select: function (event, ui) {
          log( "Selected: " + ui.item.value + " aka " + ui.item.id );
           // Set selection
          //  $('#employee_search').val(ui.item.label); // display the selected text
          //  $('#employeeid').val(ui.item.value); // save selected id to input
          //  return false;
        }
      }); --}}
<script>
          $( "#agen_id" ).autocomplete({
                source: "{{route('agen.store') }}",
                minLength: 2,
               select: function( event, ui ) {
                 log( "Selected: " + ui.item.value + " aka " + ui.item.id );
                }
        });
    
</script>

  </div>

   <div class="mb-3">
    <label for="title" class="form-label">Jumlah</label>
    <input type="text" class="form-control  @error('jumlah') is-invalid @enderror" id="jumlah" name="jumlah" required autofocus value="{{old('title')}}">
    @error('title')
                    <div class="alert alert-danger">{{$message}}</div>
    @enderror
  </div> <div class="mb-3">
    <label for="title" class="form-label">Peminjam</label>
    <input type="text" class="form-control  @error('nama_peminjam') is-invalid @enderror" id="nama_peminjam" name="nama_peminjam" required autofocus value="{{old('nama_peminjam')}}">
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
    <option value="lunas">pending</option>
    <option value="lunas">lunas</option>
    <option value="belum_lunas">belum lunas</option>
    </select>
    
     <button type="submit" class="btn btn-primary mt-3">Buat Pinjaman</button>
</form>
  </div>
@endsection