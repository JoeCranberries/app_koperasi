@extends('admin.layouts.main')

@section('content')

 <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Welcome back, {{ auth()->user()->name }}</h1>
      </div>
 
   <div class="card   mb-3" style="max-width: 16rem;">
  <div class="card-header text-white bg-secondary">Total User</div>
  <div class="card-body">
    <h5 class="card-title">{{ $user }}</h5>
  </div>
</div>

            
             
@endsection