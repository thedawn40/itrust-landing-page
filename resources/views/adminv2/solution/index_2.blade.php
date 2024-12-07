@extends('admin.layouts.main')

@section('container')
    
<h1>Solutions</h1>
<hr>
@if (session()->has('success'))
<div class="alert alert-success" role="alert">
  {{ session('success') }}
</div>    
@endif

<a href="/admin/solution/create" class="btn btn-primary mb-3"><i class="fa fa-plus"></i> Create New</a>

<div class="table-responsive">
<table class="table table-hover table-bordered">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Title</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
     @foreach ($solutions as $item)
      <tr>
        <th scope="row">{{ $loop->iteration }}</th>
        <td> {{ $item->name }} </td>
        <td> 
            <a href="/admin/solution/{{ $item->name }}" class="btn btn-success"><i class="fa fa-eye"></i></a>
            <a href="/admin/solution/{{ $item->name }}/edit" class="btn btn-primary"><i class="fa fa-pencil"></i></a>

            <form action="/admin/solution/{{ $item->name }}" method="POST" class="d-inline">
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

  

@endsection