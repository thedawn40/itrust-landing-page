@extends('admin.layouts.main')


@section('container')

@include('admin.maincontent.title')

<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">


<div class="card shadow mb-4">
  <div class="card-header py-3" style="display: flex; align-items: center;">
    <a href="/admin/main-content" style="margin-right:10px"><span><i class="fa fa-arrow-left"></i> </span></a>
      <h6 class="m-0 font-weight-bold text-primary">View Data</h6>
  </div>
  <div class="card-body">
  <div class="row mb-3">
    <label for="description" class="col-sm-2 col-form-label">Description</label>
    <div class="col-sm-10">
      {!! $main->description !!}
    </div>
  </div>
  <div class="row mb-3">
    <label for="description" class="col-sm-2 col-form-label">Content</label>
    <div class="col-sm-10">
      {!! $main->content !!}
    </div>
  </div>
</div>
</div>

@endsection