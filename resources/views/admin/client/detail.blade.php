@extends('admin.layouts.main')

@section('container')

<h1>View Client</h1>
<hr>
<a href="/admin/client" class="btn btn-primary mb-3"><span><i class="fa fa-arrow-left"></i> Back</span></a>
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
            <div style="max-height: 350px; overflow:hidden">
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


@endsection