@extends('admin.layouts.main')


@section('container')

@include('admin.maincontent.title')

<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">


<div class="card shadow mb-4">
  <div class="card-header py-3" style="display: flex; align-items: center;">
    <a href="/admin/main-content" style="margin-right:10px"><span><i class="fa fa-arrow-left"></i> </span></a>
      <h6 class="m-0 font-weight-bold text-primary">Edit Data</h6>
  </div>
  <div class="card-body">
<form method="POST" action="/admin/main-content/{{ $main->id }}" enctype="multipart/form-data">
  @method('put')
  @csrf
  <div class="row mb-3">
    <label for="description" class="col-sm-2 col-form-label">Description</label>
    <div class="col-sm-10">
      @error('description')
          <p class="text-danger">{{ $message }}</p>
      @enderror
      <textarea id="descriptionEditor" name="description">{{ $main->description }}</textarea>
    </div>
  </div>
  <div class="row mb-3">
    <label for="description" class="col-sm-2 col-form-label">Content</label>
    <div class="col-sm-10">
      @error('content')
          <p class="text-danger">{{ $message }}</p>
      @enderror
      <textarea id="mediaEditor" name="content">{{ $main->content }}</textarea>
    </div>
  </div>
  <div class="row mb-3">
    <label class="col-sm-2 col-form-label"></label>
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary">Update Main Content</button>
    </div>
  </div>
</form>
</div>
</div>

@endsection