@extends('adminv2.layouts.main')

@section('container')

@include('adminv2.solution.title')

<nav>
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
    <li class="breadcrumb-item"><a href="/admin/solution">Solutions</a></li>
    <li class="breadcrumb-item"><a href="/admin/solution/{{ $solution->name }}/edit">Create - Edit</a></li>
    <li class="breadcrumb-item active">View Detail</li>
  </ol>
</nav>

<div class="row">
  <div class="col-md-12 col-lg-4">
    <div class="card" style="padding: 10px 25px;">
      <div class="row mb-3">
        <label class="col-sm-12 col-form-label card-title-nopad" >Details</label>
        <hr>
        <label for="name" class="col-sm-12 col-form-label card-title-nopad">Name</label>
        <div class="col-sm-12">
          {!! $solutionDetail->name !!}
        </div>
      </div>    
      <div class="row mb-3">
        <label for="image" class="col-sm-12 col-form-label card-title-nopad">Title Image</label>
        <input type="hidden" name="oldImage" value="{{ $solutionDetail->image }}">
        <div class="col-sm-12">
          <div class="mb-3">
            @if ($solutionDetail->image)
                <img src="{{ asset('storage/' . $solutionDetail->image) }}" alt="" class="img-preview img-fluid mb-3 col-sm-5 d-block">
            @else
            @endif
          </div>    
        </div>
      </div>     
    </div>
  </div>
  <div class="col-lg-8">
    <div class="row mb-3">
      <div class="col-sm-12 card" style="background: white; padding: 25px;">
        {!! $solutionDetail->description !!}
      </div>
    </div>
  </div>
</div>

@endsection