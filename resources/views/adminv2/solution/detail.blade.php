@extends('adminv2.layouts.main')

@section('container')

@include('adminv2.solution.title')

<nav>
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
    <li class="breadcrumb-item"><a href="/admin/solution">Solutions</a></li>
    <li class="breadcrumb-item active">View</li>
  </ol>
</nav>

<div class="row">
  <div class="col-md-12 col-lg-4">
    <div class="card" style="padding: 10px 25px;">
      <label class="col-sm-12 col-form-label card-title-nopad" >Details</label>
      <hr>
      <div class="row mb-3">
        <label for="name" class="col-sm-12 col-form-label card-title-nopad">Name</label>
        <div class="col-sm-12">
          {!! $solution->name !!}
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
  
            @endif
          </div>    
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-8">
    <div class="row mb-3">
      <div class="col-sm-12 card" style="background: white; padding: 25px">
        {!! $solution->description !!}
      </div>
    </div>
  </div>
</div>

<div class="card" style="padding: 10px 25px;">
  <h3>Solution Item</h3>
  <hr>
<div class="table-responsive">
  <table class="table table-hover table-bordered" id="dataTable">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Title</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
       @foreach ($solution->details as $item)
        <tr>
          <th scope="row">{{ $loop->iteration }}</th>
          <td> {{ $item->name }} </td>
          <td> 
              <a href="/admin/solution/detail/{{ $solution->id }}/{{ $item->id }}" class="btn btn-primary"><i class="bi bi-eye"></i></a>
          </td>
        </tr>          
        @endforeach
      </tbody>
    </table>
  </div>
</div>

@endsection