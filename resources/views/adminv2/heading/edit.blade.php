@extends('adminv2.layouts.main')

@section('container')

@include('adminv2.heading.title')

<nav>
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
    <li class="breadcrumb-item"><a href="/admin/heading">Headings</a></li>
    <li class="breadcrumb-item active">Create</li>
  </ol>
</nav>

<div class="card shadow mb-4">
  <div class="card-body" style="padding: 25px;">
<form method="POST" action="/admin/heading/{{ $heading->name }}" enctype="multipart/form-data">
    @method('put')
    @csrf
    <div class="row mb-3">
      <label for="name" class="col-sm-2 col-form-label">Name</label>
      <div class="col-sm-10">
        <input type="text" class="form-control @error('name') is-invalid @enderror"  name="name" id="name" required autofocus value="{{ old('name', $heading->name) }}">
        @error('name')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
        @enderror
      </div>
    </div>
    <div class="row mb-3">
      <label for="image" class="col-sm-2 col-form-label">Upload Logo</label>
      <input type="hidden" name="oldImage" value="{{ $heading->image }}">
      <div class="col-sm-10">
        <div class="mb-3">
            @if($heading->image)
                <img src="{{ asset('storage/' . $heading->image) }}" alt="" class="img-preview img-fluid mb-3 col-sm-5 d-block">
            @else
                <img class="img-preview img-fluid mb-3 col-sm-5" >
            @endif
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
      <label class="col-sm-2 col-form-label"></label>
      <div class="col-sm-10">
        <button type="submit" class="btn btn-primary">Update Heading</button>
      </div>
    </div>
</form>
  </div>
</div>

<script>
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
</script>

@endsection