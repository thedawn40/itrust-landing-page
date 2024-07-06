@extends('admin.layouts.main')

@section('container')
    
<h1>News & Event</h1>
<hr>

@if (session()->has('success'))
<div class="alert alert-success" role="alert">
  {{ session('success') }}
</div>    
@endif

<a href="/admin/news/create" class="btn btn-primary mb-3"><i class="fa fa-plus"></i> Create New</a>

<div class="table-responsive">
<table class="table table-hover table-bordered">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Title</th>
        <th scope="col">Category</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
     @foreach ($news as $post)
      <tr>
        <th scope="row">{{ $loop->iteration }}</th>
        <td> {{ $post->title }} </td>
        <td>{{ $post->category->name }}</td>
        <td> 
            <a href="/admin/news/{{ $post->slug }}" class="btn btn-success"><i class="fa fa-eye"></i></a>
            <a href="/admin/news/{{ $post->slug }}/edit" class="btn btn-primary"><i class="fa fa-pencil"></i></a>

            <form action="/admin/news/{{ $post->slug }}" method="POST" class="d-inline">
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