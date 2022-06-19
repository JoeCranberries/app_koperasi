@extends('agen.layouts.main')

@section('content')

 <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Welcome back, {{ auth()->user()->name }}</h1>
      </div>
         <div class="table-responsive col-lg-6">
        <a href="/agen/create" class="btn btn-primary mb-3">Tambah Data Pinjaman</a>  
        </div>
       <div class="table-responsive col-lg-10">
        {{-- <a href="" class="btn btn-primary mb-3"></a>   --}}
        <table class="table table-bordered border-secondary">
          <thead>
            <tr>
              <th scope="col">No</th>
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
               @foreach ($models as $value)
                  <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $value->nama_peminjam }}</td>
                    <td>{{ number_format($value->jumlah,0, '.', '.') }}</td>
                    <td>{{ $value->jangka_waktu }}</td>
                     <td>{{ number_format($value->bayar_perbulan,0, '.', '.') }}</td>
                      <td>{{ $value->status }}</td>
                      <td>{{ $value->nama_agen}}</td>
                   <td>
                  <a href="/agen/{{ $value->id }}/edit" class="badge bg-warning"><span data-feather="edit"></span></a>

                  <form action="{{route('agen.destroy',$value->id) }}" method="post" class="d-inline">
                    @csrf
                    @method('DELETE')
                  <button class="badge bg-danger border-0"  onclick="return confirm('Are you sure?')"><span data-feather="x-circle"></span></button>
                  </form>
              </td>
                  </tr>
                  @endforeach
          </tbody>
        </table>
      </div>
@endsection