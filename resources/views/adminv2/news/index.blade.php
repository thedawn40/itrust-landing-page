@extends('adminv2.layouts.main')

@section('container')

@include('adminv2.news.title')

<nav>
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
    <li class="breadcrumb-item active">News & Events</li>
  </ol>
</nav>

@if (session()->has('success'))
<div class="alert alert-success" role="alert">
  {{ session('success') }}
</div>    
@endif
                
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header" style="display: flex; align-items: center; justify-content: space-between;">
      <a href="/admin/news/create" class="btn btn-success"><i class="bi bi-plus"></i>Create New</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
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
                          <a href="/admin/news/{{ $post->slug }}"  class="btn btn-primary"><i class="bi bi-eye"></i></a>
                          <a href="/admin/news/{{ $post->slug }}/edit" class="btn btn-primary"><i class="bi bi-pencil-square"></i></a>
              
                          <form action="/admin/news/{{ $post->slug }}" method="POST" class="d-inline">
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