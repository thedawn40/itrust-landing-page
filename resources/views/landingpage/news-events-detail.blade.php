
@extends('landingpage/layouts.main')

<style>    
    .header {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        z-index: 1000;
    }
</style>

@section('container')
    <section style="padding:0px;">
            <header class="section-header transparent-background" >
                <h2 class="hero-title" style="height: 100px;  display: flex; justify-content: center; align-items: center; text-align: center;">News & Event</h2>
                <h4>Keeping You Updated with the Latest News and Information on All Our Events and Initiatives</h4>
            </header>

            <main class="container" data-aos="fade-up" style="margin-bottom: 100px;">
                <header>
                    <h2 class="hero-title" style="margin-bottom: 10px">{{ $news->title }}</h2>
                    <div style="margin: 20px 0">
                        <h5>By Admin </h5>                    
                        <h5> {{ $news->published_at }}</h5>
                    </div>
                </header>
                @if ($news->image)
                    <div style="max-height:350px; overflow:hidden">
                        <img src="{{ asset('storage/'. $news->image) }}" alt="{{ $news->category->name }}" class="img-fluid mb-3">                    
                    </div>
                @else
                    <img src="https://source.unsplash.com/1200x400?{{ $news->category->name }}" alt="{{ $news->category->name }}" class="img-fluid mb-3">
                @endif
                <div style="text-align: justify">
                    {!! $news->body !!}
                </div>
                <footer>
                    <hr style="border-top: 2px solid black">
                     <span><i class="fa fa-tag" style="display: flex">
                        {{-- <a style="margin-left: 5px" href="/admin/categories">{{ $news->category->name }}</a> --}}
                        <p style="margin-left: 5px">{{ $news->category->name }}</p>
                    </i></span>
                        
                </footer>
            </main>
    </section>

@endsection
<!-- End Clients Section -->
