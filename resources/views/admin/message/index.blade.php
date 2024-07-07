@extends('admin.layouts.main')

@section('container')
    
<h1>Messages</h1>
<hr>
@if (session()->has('success'))
<div class="alert alert-success" role="alert">
  {{ session('success') }}
</div>    
@endif

<div class="table-responsive">
<table class="table table-hover table-bordered">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Name</th>
        <th scope="col">Phone</th>
        <th scope="col">Email</th>
        <th scope="col">Subject</th>
        <th scope="col">Message</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
     @foreach ($messages as $item)
      <tr>
        <th scope="row">{{ $loop->iteration }}</th>
        <td> {{ $item->name }} </td>
        <td> {{ $item->phone }} </td>
        <td> {{ $item->email }} </td>
        <td> {{ $item->subject }} </td>
        <td> {{ $item->message }} </td>
        <td> 
            <a href="/admin/solution/{{ $item->name }}" class="btn btn-success"><i class="fa fa-eye"></i></a>
            <form action="/message/{{ $item->id }}" method="POST" class="d-inline">
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