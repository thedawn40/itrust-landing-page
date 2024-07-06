@extends('admin.layouts.main')

@section('container')
    
<h1>Clients</h1>
<hr>

@if (session()->has('success'))
<div class="alert alert-success" role="alert">
  {{ session('success') }}
</div>    
@endif

<a href="/admin/client/create" class="btn btn-primary"><i class="fa fa-plus"></i> Create New</a>
<br>
<br>

<div class="table-responsive">
<table class="table table-hover table-bordered">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Title</th>
        <th scope="col">Logo</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
     @foreach ($client as $item)
      <tr>
        <th scope="row">{{ $loop->iteration }}</th>
        <td> {{ $item->name }} </td>
        <td> <img style="width: 70px" src="{{ asset('storage/'. $item->image) }}" alt="{{ $item->title }}" class="img-fluid mt-3"> </td>
        <td> 
            <a href="/admin/client/{{ $item->name }}" class="btn btn-success"><i class="fa fa-eye"></i></a>
            <a href="/admin/client/{{ $item->name }}/edit" class="btn btn-primary"><i class="fa fa-pencil"></i></a>

            <form action="/admin/client/{{ $item->name }}" method="POST" class="d-inline">
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