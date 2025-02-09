@extends('adminv2.layouts.main')

@section('container')
    
<div class="pagetitle">
  <h1 class="h3 mb-2 text-gray-800">Messages</h1>
<p class="mb-3">Efficiently Manage and Communicate with Your Users. For help please refer to read <a target="_blank"
  href="https://datatables.net">documentation</a>.</p>
</div>

<nav>
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
    <li class="breadcrumb-item active">Messages</li>
  </ol>
</nav>

@if (session()->has('success'))
<div class="alert alert-success" role="alert">
  {{ session('success') }}
</div>    
@endif

<div class="card shadow mb-4">
  <div class="card-body" style="padding:25px;">
<div class="table-responsive">
<table class="table table-hover table-bordered"  id="dataTable">
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
            <a href="/message/{{ $item->id }}" class="btn btn-primary"><i class="bi bi-eye"></i></a>
            <form action="/message/{{ $item->id }}" method="POST" class="d-inline">
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