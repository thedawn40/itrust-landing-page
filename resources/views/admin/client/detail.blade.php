@extends('admin.layouts.main')

@section('container')

@include('admin.client.title')

<div class="card shadow mb-4">
    <div class="card-header py-3" style="display: flex; align-items: center;">
      <a href="/admin/client" style="margin-right:10px"><span><i class="fa fa-arrow-left"></i> </span></a>
        <h6 class="m-0 font-weight-bold text-primary">View Data</h6>
    </div>
    <div class="card-body">
<div class="row mb-3">
    <label for="name" class="col-sm-2 col-form-label">Name</label>
    <div class="col-sm-10">
        <label for="name" class="col-sm-2 col-form-label">{{ $client->name }}</label>
    </div>
    </div>
    <div class="row mb-3">
    <label for="image" class="col-sm-2 col-form-label">Logo</label>
    <div class="col-sm-10">
        <div class="mb-3">
        @if ($client->image)
            <div style="overflow:hidden; ">
              <img src="{{ asset('storage/'. $client->image) }}" alt="{{ $client->title }}" class="img-fluid mt-3">
            </div>
          @else
              {{-- <img src="https://source.unsplash.com?1200x400?{{ $partner->category->title }}" alt="{{ $news->category->title }}" class="img-fluid mt-3"> --}}
          @endif
        </div>    
    </div>
    </div>
    <div class="row mb-3">
</div>
    </div>
</div>

@endsection