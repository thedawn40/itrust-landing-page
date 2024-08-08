@extends('admin.layouts.main')

@section('container')
    
@include('admin.category.title')

@if (session()->has('success'))
<div class="alert alert-success" role="alert">
  {{ session('success') }}
</div>    
@endif

<a href="/admin/category/create" class="btn btn-primary mb-3"><i class="fa fa-plus"></i> Create New</a>

<div class="card shadow mb-4">
  <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Category List</h6>
  </div>
  <div class="card-body">
<div class="table-responsive">
<table class="table table-hover table-bordered" id="dataTable">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Name</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
     @foreach ($categories as $item)
      <tr>
        <th scope="row">{{ $loop->iteration }}</th>
        <td> {{ $item->name }} </td>
        <td> 
            <a href="/admin/solution/{{ $item->name }}" class="btn btn-success"><i class="fa fa-eye"></i></a>
            <form action="/admin/category/{{ $item->id }}" method="POST" class="d-inline">
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

  

@endsection