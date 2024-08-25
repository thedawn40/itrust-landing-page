
@extends('landingpage/layouts.main')

<style>    
    .header {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        z-index: 1000;
        background-color: white;
    }
    main {
        padding-top: 70px; /* Adjust this value based on your header's height */
    }
</style>

@section('container')
    <section>
        <div class="container" data-aos="fade-up">
            <header class="section-header" >
                <h2 class="hero-title" style="background-image: url('../assets/5667001.jpg'); background-size: cover; background-position: center; height: 100px;  display: flex; justify-content: center; align-items: center; text-align: center;">News & Event</h2>
                <h4>Keeping You Updated with the Latest News and Information on All Our Events and Initiatives</h4>
            </header>

            <header>
                <h2 class="hero-title" style="margin-bottom: 10px">{{ $news->title }}</h2>
                <div style="margin: 20px 0">
                    <h5>By Admin </h5>                    
                    <h5> {{ $news->published_at }}</h5>
                </div>
            </header>
            <main>
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
            </main>
            <footer>
                <hr style="border-top: 2px solid black">
                 <span><i class="fa fa-tag" style="display: flex">
                    {{-- <a style="margin-left: 5px" href="/admin/categories">{{ $news->category->name }}</a> --}}
                    <p style="margin-left: 5px">{{ $news->category->name }}</p>
                </i></span>
                    
            </footer>
        </div>
    </section>

@endsection
<!-- End Clients Section -->
