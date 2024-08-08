@extends('admin.layouts.main')

@section('container')

@include('admin.news.title')

<div class="card shadow mb-4">
  <div class="card-header py-3" style="display: flex; align-items: center;">
    <a href="/admin/news" style="margin-right:10px"><span><i class="fa fa-arrow-left"></i> </span></a>
      <h6 class="m-0 font-weight-bold text-primary">View Data</h6>
  </div>
  <div class="card-body">

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

</div>
</div>

@endsection