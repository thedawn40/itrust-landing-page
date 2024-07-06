@extends('admin.layouts.main')

@section('container')

<h1>View News & Event</h1>
<hr>

<a href="/admin/news" class="btn btn-primary mb-3" ><span><i class="fa fa-arrow-left"></i> Back</span></a>

<h2>{{ $news->title }}</h2>
<h5>By {{ $news->created_by }} in <a href="/admin/categories">{{ $news->category->name }}</a></h5>


@if ($news->image)
  <div style="max-height: 350px; overflow:hidden">
    <img src="{{ asset('storage/'. $news->image) }}" alt="{{ $news->title }}" class="img-fluid mt-3">
  </div>
@else
    <img src="https://source.unsplash.com?1200x400?{{ $news->category->title }}" alt="{{ $news->category->title }}" class="img-fluid mt-3">
@endif

{!! $news->body !!}
  
@endsection