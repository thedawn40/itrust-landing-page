@extends('admin.layouts.main')

@section('container')

@include('admin.solution.title')

<div class="card shadow mb-4">
  <div class="card-header py-3" style="display: flex; align-items: center;">
    <a href="/admin/solution" style="margin-right:10px"><span><i class="fa fa-arrow-left"></i> </span></a>
      <h6 class="m-0 font-weight-bold text-primary">View Data</h6>
  </div>
  <div class="card-body">
    <div class="row mb-3">
      <label for="name" class="col-sm-2 col-form-label">Name</label>
      <div class="col-sm-10">
        {!! $solution->name !!}
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

          @endif
        </div>    
      </div>
    </div>
    <div class="row mb-3">
      <label for="description" class="col-sm-2 col-form-label">Description</label>
      <div class="col-sm-10">
        {!! $solution->description !!}
      </div>
    </div>

    <div>
      <h3>Solution Item</h3>
      <hr>
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
              </td>
            </tr>          
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

@endsection