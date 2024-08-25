@extends('admin.layouts.main')

@section('container')

@include('admin.solution.title')

<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">

<div class="card shadow mb-4">
  <div class="card-header py-3" style="display: flex; align-items: center;">
    <a href="/admin/solution" style="margin-right:10px"><span><i class="fa fa-arrow-left"></i> </span></a>
      <h6 class="m-0 font-weight-bold text-primary">Create Data</h6>
  </div>
  <div class="card-body">
<form method="POST" action="/admin/solution" enctype="multipart/form-data">
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
    <label for="image" class="col-sm-2 col-form-label">Title Image</label>
    <div class="col-sm-10">
      <div class="mb-3">
        <img class="img-preview img-fluid mb-3 col-sm-5" >
        <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" onchange="previewImage()">
        @error('image')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
        @enderror
      </div>    
    </div>
  </div>
  <div class="row mb-3">
    <label for="description" class="col-sm-2 col-form-label">Description</label>
    <div class="col-sm-10">
      {{-- <textarea type="text" class="form-control @error('description') is-invalid @enderror" id="description" name="description" required value="{{ old('description') }}" rows="4"></textarea> --}}
      <textarea id="summernote" name="description"></textarea>
      @error('description')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
      @enderror
    </div>
  </div>
  <div class="row mb-3">
    <label class="col-sm-2 col-form-label"></label>
    <div class="col-sm-10">
      <div class="mb-3">
        <button type="submit" class="btn btn-primary">Create & Add Details</button>
      </div>    
    </div>
  </div>

</form>
</div>
</div>

<script>

  document.addEventListener('trix-file-accept', function(e){
    e.preventDefault();
  })

  function previewImage(){
    const image = document.querySelector('#image');
    const imgPreview = document.querySelector('.img-preview');

    imgPreview.style.display='block';

    const oFReader = new FileReader();
    oFReader.readAsDataURL(image.files[0]);

    oFReader.onload = function(oFREvent){
      imgPreview.src = oFREvent.target.result;
    }
  }

  $('#summernote').summernote({
    height:200
  });

</script>

@endsection