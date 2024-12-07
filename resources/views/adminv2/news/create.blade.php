@extends('adminv2.layouts.main')


@section('container')

@include('admin.news.title')

<nav>
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
    <li class="breadcrumb-item"><a href="/admin/news">News & Events</a></li>
    <li class="breadcrumb-item active">Create</li>
  </ol>
</nav>

<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">


<form method="POST" action="/admin/news" enctype="multipart/form-data">
  @csrf
  <div class="row">
    <div class="col-md-12 col-lg-4">
      <div class="card" style="padding: 10px 25px;">
        <label class="col-sm-12 col-form-label card-title-nopad" >Details</label>
        <hr>
        <div class="row mb-3">
          <label for="title" class="col-sm-12 col-form-label card-title-nopad" >Title</label>
          <div class="col-sm-12">
            <input type="text" class="form-control @error('title') is-invalid @enderror"  name="title" id="title" required autofocus value="{{ old('title') }}">
            @error('title')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
            @enderror
          </div>
        </div>
        <div class="row mb-3">
          <label for="slug" class="col-sm-12 col-form-label card-title-nopad">Slug</label>
          <div class="col-sm-12">
            <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" readonly required value="{{ old('slug') }}">
            @error('slug')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
            @enderror
          </div>
        </div>
        <div class="row mb-3">
          <label for="category" class="col-sm-12 col-form-label card-title-nopad">Category</label>
          <div class="col-sm-12">
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
          <label for="image" class="col-sm-12 col-form-label card-title-nopad">Thumbnail</label>
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
          <label class="col-sm-12 col-form-label"></label>
          <div class="col-sm-12">
            <button type="submit" class="btn btn-primary">Create News & Event</button>
          </div>
        </div> 
      </div> 
    </div>
    <div class="col-lg-8">
      <div class="row mb-3">
        <div class="col-sm-12" style="background: white; padding: 0">
          @error('body')
              <p class="text-danger">{{ $message }}</p>
          @enderror
          <textarea id="summernote" name="body"></textarea>
        </div>
      </div>
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