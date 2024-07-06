@extends('admin.layouts.main')

@section('container')

<div class="container">
  <h2>{{ $news->title }}</h2>
  <h5>By. Luthfi in <a href="/admin/categories">{{ $news->category->name }}</a></h5>
  
  <a href="/admin/news" class="btn btn-primary"><span><i class="fa fa-arrow-left"></i> Back</span></a>

  @if ($news->image)
    <div style="max-height: 350px; overflow:hidden">
      <img src="{{ asset('storage/'. $news->image) }}" alt="{{ $news->title }}" class="img-fluid mt-3">
    </div>
  @else
      <img src="https://source.unsplash.com?1200x400?{{ $post->category->title }}" alt="{{ $post->category->title }}" class="img-fluid mt-3">
  @endif

  {!! $news->body !!}
  
  <a href="/admin/news">Back to News</a>
  
</div>
@endsection