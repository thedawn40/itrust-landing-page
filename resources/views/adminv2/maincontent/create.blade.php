@extends('adminv2.layouts.main')


@section('container')

@include('adminv2.maincontent.title')

<nav>
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
    <li class="breadcrumb-item"><a href="/admin/main-content">Main Content</a></li>
    <li class="breadcrumb-item active">Create</li>
  </ol>
</nav>

<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">


<form method="POST" action="/admin/main-content" enctype="multipart/form-data">
  @csrf
<div class="col-sm-10">
  <button type="submit" class="btn btn-primary">Create Main Content</button>
</div>
  <div class="row">
    <div class="row col-sm-6">
      <label for="description" class="col-sm-12 col-form-label card-title-nopad">Description</label>
      <div class="col-sm-12" style="background-color: white;">
        @error('description')
            <p class="text-danger">{{ $message }}</p>
        @enderror
        <textarea id="descriptionEditor" name="description"></textarea>
      </div>
    </div>
    <div class="row col-sm-6">
      <label for="description" class="col-sm-12 col-form-label card-title-nopad">Content</label>
      <div class="col-sm-12" style="background-color: white;">
        @error('content')
            <p class="text-danger">{{ $message }}</p>
        @enderror
        <textarea id="mediaEditor" name="content"></textarea>
      </div>
    </div>
  </div>
</form>

@endsection