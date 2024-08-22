@extends('admin.layouts.main')

@section('container')

@include('admin.solution.title')

@if (session()->has('success'))
<div class="alert alert-success" role="alert">
  {{ session('success') }}
</div>    
@endif

<div class="card shadow mb-4">
  <div class="card-header py-3" style="display: flex; align-items: center;">
    <a href="/admin/solution" style="margin-right:10px"><span><i class="fa fa-arrow-left"></i> </span></a>
      <h6 class="m-0 font-weight-bold text-primary">Edit Data</h6>
  </div>
  <div class="card-body">
<form method="POST" action="/admin/solution/{{ $solution->name }}" enctype="multipart/form-data">
  @method('put')
  @csrf  
  <div class="row mb-3">
    <label for="name" class="col-sm-2 col-form-label">Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control @error('name') is-invalid @enderror"  name="name" id="name" required autofocus value="{{ old('name', $solution->name) }}">
      @error('name')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
      @enderror
    </div>
  </div>  
  <div class="row mb-3">
    <label for="image" class="col-sm-2 col-form-label">Title Image</label>
    <input type="hidden" name="oldImage" value="{{ $solution->image }}">
    <div class="col-sm-10">
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
    <label for="description" class="col-sm-2 col-form-label">Description</label>
    <div class="col-sm-10">
      {{-- <textarea type="text" class="form-control @error('description') is-invalid @enderror" id="description" name="description" required rows="4">{{ $solution->description }}</textarea> --}}
      <textarea id="summernote" name="description">{{ $solution->description }}</textarea>
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
        <button type="submit" class="btn btn-primary">Update Solution</button>
      </div>    
    </div>
  </div>
</form>

<div>
  <h3>Solution Item</h3>
  <hr>
  <a href="/admin/solution/detail/create/{{ $solution->id }}" class="btn btn-primary mb-3"><i class="fa fa-plus"></i> Add Detail</a>
<div class="table-responsive">
  <table class="table table-hover table-bordered" id="dataTable">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Title</th>
          <th scope="col">Description</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
       @foreach ($solution->details as $item)
        <tr>
          <th scope="row">{{ $loop->iteration }}</th>
          <td> {{ $item->name }} </td>
          <td>{!! $item->description !!}</td>
          <td> 
              <a href="/admin/solution/detail/{{ $solution->id }}/{{ $item->id }}" class="btn btn-success"><i class="fa fa-eye"></i></a>
              <a href="/admin/solution/detail/{{ $solution->id }}/{{ $item->id }}/edit" class="btn btn-primary"><i class="fa fa-edit"></i></a>

              <form action="/admin/solution/detail/{{ $solution->id }}/{{ $item->id }}/delete" method="POST" class="d-inline">
                @method('delete') 
                @csrf           
                <button class="btn btn-danger" onclick="return confirm('Are you sure?')"><i class="fa fa-trash"></i></button>
              </form>
          </td>
        </tr>          
        @endforeach
      </tbody>
    </table>
  </div>
</div>
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