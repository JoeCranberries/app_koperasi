@extends('agen.layouts.main')

@section('content')

 <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Welcome back, {{ auth()->user()->name }}</h1>
      </div>
         <div class="table-responsive col-lg-6">
        <a href="/agen/create" class="btn btn-primary mb-3">Tambah Data Peminjam</a>  
        </div>
       <div class="table-responsive col-lg-10">
        {{-- <a href="" class="btn btn-primary mb-3"></a>   --}}
        <table class="table table-bordered border-secondary">
          <thead>
            <tr>
              <th scope="col">peminjam</th>
              <th scope="col">jumlah pinjaman</th>
              <th scope="col">jangka waktu</th>
              <th scope="col">bayar perbulan</th>
              <th scope="col">status</th>
              <th scope="col">agen</th>
              <th scope="col">Action</th>
           
            </tr>
          </thead>
          <tbody>
               @foreach ($datas as $value)
                  <tr>
                    <td>{{ $value->peminjam_id }}</td>
                    <td>{{ $value->jumlah }}</td>
                    <td>{{ $value->jangka_waktu }}</td>
                     <td>{{ $value->bayar_perbulan }}</td>
                      <td>{{ $value->status }}</td>
                      <td>{{ $value->agen_id }}</td>
                   <td>
                  <form action="/{{ $value->id }}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                  <button class="badge bg-danger border-0"  onclick="return confirm('Are you sure?')"><span data-feather="x-circle"></span></button>
                  </form>
              </td>
                  </tr>
                  @endforeach
          </tbody>
        </table>
      </div>
@endsection