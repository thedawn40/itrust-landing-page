@extends('admin.layouts.main')


@section('container')

<h1>Create News & Event</h1>
<hr>

<form method="POST" action="/admin/news" enctype="multipart/form-data">
  @csrf
  <div class="row mb-3">
    <label for="title" class="col-sm-2 col-form-label">Title</label>
    <div class="col-sm-10">
      <input type="text" class="form-control @error('title') is-invalid @enderror"  name="title" id="title" required autofocus value="{{ old('title') }}">
      @error('title')
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
    <label for="category" class="col-sm-2 col-form-label">Category</label>
    <div class="col-sm-10">
      <select name="category_id" class="form-select">
      @foreach($categories as $category)
       @if (old('category_id') == $category->id)
       <option value="{{ $category->id }}" selected>{{ $category->name }}</option>           
       @else
        <option value="{{ $category->id }}">{{ $category->name }}</option>
        @endif
      @endforeach
      </select>
    </div>
  </div>
  <div class="row mb-3">
    <label for="image" class="col-sm-2 col-form-label">Thumbnail</label>
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
    <label for="body" class="col-sm-2 col-form-label">Body</label>
    <div class="col-sm-10">
      @error('body')
          <p class="text-danger">{{ $message }}</p>
      @enderror
      {{-- <input id="body" type="hidden" name="body"> --}}
      {{-- <trix-editor input="body"></trix-editor> --}}
      <textarea id="summernote" name="body"></textarea>
    </div>
  </div>
  <div class="row mb-3">
    <label class="col-sm-2 col-form-label"></label>
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary">Create News & Event</button>
    </div>
  </div>
</form>

<script>
  const title = document.querySelector('#title');
  const slug = document.querySelector('#slug');


  title.addEventListener('change', function(){
    fetch('/resource/news/checkSlug?title='+title.value)
    .then(response=>response.json())
    .then(data=>slug.value=data.slug)
  });

  // document.addEventListener('trix-file-accept', function(e){
  //   e.preventDefault();
  // })

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