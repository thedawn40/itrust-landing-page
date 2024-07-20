@extends('admin.layouts.main')

@section('container')

<h1>Create Item Solution</h1>

<hr>
<form method="POST" action="/admin/solution/detail" enctype="multipart/form-data">
  @csrf
  <input type="hidden" id="solutionid" name="solutionid" value="{{ $solution->id }}">
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
    <label for="description" class="col-sm-2 col-form-label">Description</label>
    <div class="col-sm-10">
      @error('description')
          <p class="text-danger">{{ $message }}</p>
      @enderror
      <textarea id="summernote" name="description"></textarea>
    </div>
  </div>
  <div class="row mb-3">
    <label for="image" class="col-sm-2 col-form-label">Upload Image</label>
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
    <label class="col-sm-2 col-form-label"></label>
    <div class="col-sm-10">
      <div class="mb-3">
        <button type="submit" class="btn btn-primary">Create Detail</button>
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

</script>

@endsection