@extends('admin.layouts.main')

@section('container')

@include('admin.client.title')

<div class="card shadow mb-4">
  <div class="card-header py-3" style="display: flex; align-items: center;">
    <a href="/admin/client" style="margin-right:10px"><span><i class="fa fa-arrow-left"></i> </span></a>
      <h6 class="m-0 font-weight-bold text-primary">Edit Data</h6>
  </div>
  <div class="card-body">
<form method="POST" action="/admin/client/{{ $client->name }}" enctype="multipart/form-data">
    @method('put')
    @csrf
    <div class="row mb-3">
      <label for="name" class="col-sm-2 col-form-label">Name</label>
      <div class="col-sm-10">
        <input type="text" class="form-control @error('name') is-invalid @enderror"  name="name" id="name" required autofocus value="{{ old('name', $client->name) }}">
        @error('name')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
        @enderror
      </div>
    </div>
    <div class="row mb-3">
      <label for="image" class="col-sm-2 col-form-label">Upload Logo</label>
      <input type="hidden" name="oldImage" value="{{ $client->image }}">
      <div class="col-sm-10">
        <div class="mb-3">
            @if($client->image)
                <img src="{{ asset('storage/' . $client->image) }}" alt="" class="img-preview img-fluid mb-3 col-sm-5 d-block">
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
        <button type="submit" class="btn btn-primary">Update Client</button>
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