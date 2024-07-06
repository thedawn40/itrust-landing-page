@extends('admin/layouts.main')

@section('container')
    
<h1>News Category {{ $title }}</h1>

<br>
<button class="btn btn-primary"><i class="fa fa-plus"></i> Add New</button>
<br>
<br>

@foreach ($news as $post)
<ul>
  <li>
    <h2><a href="/admin/news/{{ $post->slug }}">{{ $post->title }}</a></h2>
  </li>
</ul>
@endforeach

  

@endsection