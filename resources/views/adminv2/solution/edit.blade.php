@extends('adminv2.layouts.main')

@section('container')

@include('adminv2.solution.title')

<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">

<nav>
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
    <li class="breadcrumb-item"><a href="/admin/solution">Solutions</a></li>
    <li class="breadcrumb-item active">Create - Edit</li>
  </ol>
</nav>

@if (session()->has('success'))
<div class="alert alert-success" role="alert">
  {{ session('success') }}
</div>    
@endif

<form method="POST" action="/admin/solution/{{ $solution->name }}" enctype="multipart/form-data">
  @method('put')
  @csrf  
<div class="row">
  <div class="col-md-12 col-lg-4">
    <div class="card" style="padding: 10px 25px;">
      <label class="col-sm-12 col-form-label card-title-nopad" >Details</label>
      <hr>
      <div class="row mb-3">
        <label for="name" class="col-sm-12 col-form-label card-title-nopad">Name</label>
        <div class="col-sm-12">
          <input type="text" class="form-control @error('name') is-invalid @enderror"  name="name" id="name" required autofocus value="{{ old('name', $solution->name) }}">
          @error('name')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
          @enderror
        </div>
      </div>  
      <div class="row mb-3">
        <label for="image" class="col-sm-12 col-form-label card-title-nopad">Title Image</label>
        <input type="hidden" name="oldImage" value="{{ $solution->image }}">
        <div class="col-sm-12">
          <div class="mb-3">
            @if ($solution->image)
                <img src="{{ asset('storage/' . $solution->image) }}" alt="" class="img-preview img-fluid mb-3 col-sm-5 d-block">
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
        <div class="col-sm-12">
          <div class="mb-3">
            <button type="submit" class="btn btn-primary">Update Solution</button>
          </div>    
        </div>
      </div>    
    </div>

  </div>
  <div class="col-lg-8">
    <div class="row mb-3">
      <div class="col-sm-12" style="background: white; padding: 0">
        <textarea id="summernote" name="description">{{ $solution->description }}</textarea>
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


<div class="card" style="padding: 10px 25px;">
  <h3>Solution Item</h3>
  <hr>
  <a href="/admin/solution/detail/create/{{ $solution->id }}" class="btn btn-success mb-3" style="width: 150px"><i class="bi bi-plus"></i> Add Detail</a>
<div class="table-responsive">
  <table class="table table-hover table-bordered" id="dataTable">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Title</th>
          {{-- <th scope="col">Description</th> --}}
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
       @foreach ($solution->details as $item)
        <tr>
          <th scope="row">{{ $loop->iteration }}</th>
          <td> {{ $item->name }} </td>
          {{-- <td>{!! $item->description !!}</td> --}}
          <td> 
              <a href="/admin/solution/detail/{{ $solution->id }}/{{ $item->id }}" class="btn btn-primary"><i class="bi bi-eye"></i></a>
              <a href="/admin/solution/detail/{{ $solution->id }}/{{ $item->id }}/edit" class="btn btn-primary"><i class="bi bi-pencil-square"></i></a>

              <form action="/admin/solution/detail/{{ $solution->id }}/{{ $item->id }}/delete" method="POST" class="d-inline">
                @method('delete') 
                @csrf           
                <button class="btn btn-danger" onclick="return confirm('Are you sure?')"><i class="bi bi-trash"></i></button>
              </form>
          </td>
        </tr>          
        @endforeach
      </tbody>
    </table>
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

  // $('#summernote').summernote({
  //   height:200
  // });
</script>

@endsection