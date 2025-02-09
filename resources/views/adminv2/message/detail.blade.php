@extends('adminv2.layouts.main')

@section('container')

@include('adminv2.message.title')

<nav>
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
    <li class="breadcrumb-item"><a href="/admin/news">Messages</a></li>
    <li class="breadcrumb-item active">View</li>
  </ol>
</nav>

<div class="row">
  <div class="col-md-12 col-lg-4">
    <div class="card" style="padding: 10px 25px;">
      <label class="col-sm-12 col-form-label card-title-nopad" >Details</label>
        <hr>
        <div class="row mb-3">
          <label for="title" class="col-sm-12 col-form-label card-title-nopad" >Title</label>
          <div class="col-sm-12">
            {{ $news->title }}
          </div>
        </div>
        <div class="row mb-3">
          <label for="slug" class="col-sm-12 col-form-label card-title-nopad">Slug</label>
          <div class="col-sm-12">
            {{ $news->slug }}
          </div>
        </div>
        <div class="row mb-3">
          <label for="category" class="col-sm-12 col-form-label card-title-nopad">Category</label>
          <div class="col-sm-12">
            {{ $news->category->name }}
          </div>
        </div>
        <div class="row mb-3">
          <label for="image" class="col-sm-12 col-form-label card-title-nopad">Thumbnail</label>
          <div class="col-sm-12">
            @if ($news->image)
                <img src="{{ asset('storage/' . $news->image) }}" alt="" class="img-preview img-fluid mb-3 col-sm-5 d-block">
            @else
              <img class="img-preview img-fluid mb-3 col-sm-5" >            
            @endif
   
          </div>
        </div>
    </div>
  </div>
  <div class="col-lg-8">
    <div class="card-body card" style="padding: 20px;    overflow: auto;">

      <h2>{{ $news->title }}</h2>

      {!! $news->body !!}
      
      </div>
  </div>
</div>

@endsection