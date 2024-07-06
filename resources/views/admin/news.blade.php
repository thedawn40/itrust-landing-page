@extends('admin/layouts.main')

@section('container')
    
<h1>News & Event</h1>

<br>
<button class="btn btn-primary"><i class="fa fa-plus"></i> Add New</button>
<br>
<br>

<table class="table table-hover table-bordered">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Title</th>
        <th scope="col">Author</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($posts as $post)
      <tr>
        <th scope="row">{{ $loop->iteration }}</th>
        <td> <a href="/admin/news/{{ $post->slug }}">{{ $post->title }}</a> </td>
        <td>{{ $post->author }}</td>
        <td> 
            <button class="btn btn-primary"><i class="fa fa-pencil"></i></button>
            <button class="btn btn-danger"><i class="fa fa-trash"></i></button>
        </td>
      </tr>          
      @endforeach
    </tbody>
  </table>

  

@endsection