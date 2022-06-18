@extends('agen.layouts.main')

@section('content')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Data Peminjam</h1>
      </div>

     <div class="col-lg-8"> 
    <form method="post" action="{{route('agen.update', $model->id) }}" class="mb-5">
        @method('PUT')
        @csrf
 <div class="mb-3">
    <label for="title" class="form-label">Title</label>
    <input type="text" class="form-control  @error('title') is-invalid @enderror" id="title" name="title" required autofocus value="{{old('title', $post->title)}}">
    @error('title')
                    <div class="alert alert-danger">{{$message}}</div>
    @enderror



    @endsection