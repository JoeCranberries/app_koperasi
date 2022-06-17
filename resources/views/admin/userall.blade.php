@extends('admin.layouts.main')

@section('content')

 <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Data Anggota</h1>
      </div>
        <div class="table-responsive col-lg-10">
        {{-- <a href="" class="btn btn-primary mb-3"></a>   --}}
        <table class="table table-bordered border-secondary">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Nama</th>
              <th scope="col">Email</th>
              <th scope="col">Action</th>
           
            </tr>
          </thead>
          <tbody>
               @foreach ($datas as $value)
                  <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $value->name }}</td>
                    <td>{{ $value->email}}</td>
                   <td>
                  <form action="/dashboard/posts/{{ $value->id }}" method="post" class="d-inline">
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