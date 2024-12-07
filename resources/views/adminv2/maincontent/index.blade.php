@extends('adminv2.layouts.main')

@section('container')

@include('adminv2.maincontent.title')

<style>
  .content img {
      max-width: 100%;
      width: 100%;
      height: auto;
      display: block;
  }
</style>

<nav>
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
    <li class="breadcrumb-item active">Main Content</li>
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
    <a href="/admin/main-content/create" class="btn btn-success"><i class="bi bi-plus"></i>Create New</a>
  </div>
  <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                      <th scope="col">No</th>
                      <th scope="col">Description</th>
                      <th scope="col">Content</th>                      
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                   @foreach ($main as $post)
                    <tr>
                      <th scope="row">{{ $loop->iteration }}</th>
                      <td> 
                        <div class="content">
                          {!! $post->description !!} 
                        </div>
                      </td>
                      <td> 
                        <div class="content">
                          {!! $post->content !!}
                      </div> 
                    </td>
                      <td> 
                          <a href="/admin/main-content/{{ $post->id }}" class="btn btn-primary"><i class="bi bi-eye"></i></a>
                          <a href="/admin/main-content/{{ $post->id }}/edit" class="btn btn-primary"><i class="bi bi-pencil-square"></i></a>
              
                          <form action="/admin/main-content/{{ $post->id }}" method="POST" class="d-inline">
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