@extends('adminv2.layouts.main')

@section('container')

@include('adminv2.heading.title')

<nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.html">Home</a></li>
      <li class="breadcrumb-item"><a href="/admin/heading">Heading</a></li>
      <li class="breadcrumb-item active">View</li>
    </ol>
  </nav>

<div class="card shadow mb-4">
    <div class="card-body" style="padding: 25px;">
<div class="row mb-3">
    <label for="name" class="col-sm-2 col-form-label">Name</label>
    <div class="col-sm-10">
        <label for="name" class="col-sm-2 col-form-label">{{ $heading->name }}</label>
    </div>
    </div>
    <div class="row mb-3">
    <label for="image" class="col-sm-2 col-form-label">Logo</label>
    <div class="col-sm-10">
        <div class="mb-3">
        @if ($heading->image)
            <div>
              <img src="{{ asset('storage/'. $heading->image) }}" alt="{{ $heading->title }}" class="img-fluid mt-3">
            </div>
          @else
              {{-- <img src="https://source.unsplash.com?1200x400?{{ $partner->category->title }}" alt="{{ $news->category->title }}" class="img-fluid mt-3"> --}}
          @endif
        </div>    
    </div>
    </div>
    <div class="row mb-3">
</div>
    </div>
</div>


@endsection