@extends('admin/layouts.main')

@section('container')

<h1>News Category</h1>

<br>
<button class="btn btn-primary"><i class="fa fa-plus"></i> Add New</button>
<br>
<br>

@foreach ($categories as $post)
<ul>
  <li>
    <h2><a href="/admin/category/{{ $post->slug }}">{{ $post->name }}</a></h2>
  </li>
</ul>
@endforeach

  
  

@endsection