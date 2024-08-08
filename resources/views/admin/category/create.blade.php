@extends('admin.layouts.main')

@section('container')

@include('admin.category.title')

<div class="card shadow mb-4">
  <div class="card-header py-3" style="display: flex; align-items: center;">
    <a href="/admin/category" style="margin-right:10px"><span><i class="fa fa-arrow-left"></i> </span></a>
      <h6 class="m-0 font-weight-bold text-primary">Create Data</h6>
  </div>
  <div class="card-body">
<form method="POST" action="/admin/category" enctype="multipart/form-data">
  @csrf
  <div class="row mb-3">
    <label for="name" class="col-sm-2 col-form-label">Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control @error('name') is-invalid @enderror"  name="name" id="name" required autofocus value="{{ old('name') }}">
      @error('name')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
      @enderror
    </div>
  </div>
  <div class="row mb-3">
    <label for="slug" class="col-sm-2 col-form-label">Slug</label>
    <div class="col-sm-10">
      <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" readonly required value="{{ old('slug') }}">
      @error('slug')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
      @enderror
    </div>
  </div>
  <div class="row mb-3">
    <label class="col-sm-2 col-form-label"></label>
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary">Create Category</button>
    </div>
  </div>
</form>
  </div>
</div>

<script>
    const name = document.querySelector('#name');
    const slug = document.querySelector('#slug');


    name.addEventListener('change', function(){
        console.log("test ", name.value);
        fetch('/resource/category/checkSlug?name='+name.value)
        .then(response=>response.json())
        .then(data=>slug.value=data.slug)
    });
</script>

@endsection