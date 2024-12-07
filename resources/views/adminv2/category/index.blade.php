@extends('adminv2.layouts.main')

@section('container')
    
@include('adminv2.category.title')

<nav>
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
    <li class="breadcrumb-item active">Categories</li>
  </ol>
</nav>

@if (session()->has('success'))
<div class="alert alert-success" role="alert">
  {{ session('success') }}
</div>    
@endif

<div class="card shadow mb-4">
  <div class="card-header" style="display: flex; align-items: center; justify-content: space-between;">
    <a href="/admin/category/create" class="btn btn-success"><i class="bi bi-plus"></i> Create New</a>
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
            <a href="/admin/solution/{{ $item->name }}" class="btn btn-primary"><i class="bi bi-eye"></i></a>
            <form action="/admin/category/{{ $item->id }}" method="POST" class="d-inline">
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
</div>

  

@endsection