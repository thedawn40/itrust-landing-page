@extends('admin/layouts.main')

@section('container')
    
<h2>{{ $post->title }}</h2>
<h5>By. Luthfi in <a href="/admin/categories">{{ $post->category->name }}</a></h5>

{!! $post->body !!}

<a href="/admin/news">Back to News</a>

@endsection