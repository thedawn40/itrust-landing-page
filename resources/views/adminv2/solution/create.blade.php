@extends('adminv2.layouts.main')

@section('container')

@include('adminv2.solution.title')

<nav>
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
    <li class="breadcrumb-item"><a href="/admin/solution">Solutions</a></li>
    <li class="breadcrumb-item active">Create - Edit</li>
  </ol>
</nav>

<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">

<form method="POST" action="/admin/solution" enctype="multipart/form-data">
  @csrf
<div class="row">
  <div class="col-md-12 col-lg-4">
    <div class="card" style="padding: 10px 25px;">
      <label class="col-sm-12 col-form-label card-title-nopad" >Details</label>
      <hr>
      <div class="row mb-3">
        <label for="name" class="col-sm-12 col-form-label card-title-nopad">Name</label>
        <div class="col-sm-12">
          <input type="text" class="form-control @error('name') is-invalid @enderror"  name="name" id="name" required autofocus value="{{ old('name') }}">
          @error('name')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
          @enderror
        </div>
      </div>
      <div class="row mb-3">
        <label for="image" class="col-sm-12 col-form-label card-title-nopad">Title Image</label>
        <div class="col-sm-12">
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
        <div class="col-sm-12">
          <div class="mb-3">
            <button type="submit" class="btn btn-primary">Create & Add Details</button>
          </div>    
        </div>
      </div>    
    </div>
  </div>
  <div class="col-lg-8">
    <div class="row mb-3">
      <div class="col-sm-12" style="background: white; padding: 0">
        <textarea id="summernote" name="description"></textarea>
        @error('description')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
        @enderror
      </div>
    </div>
  </div>
</div>
</form>


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