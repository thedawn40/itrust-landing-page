@extends('landingpage/layouts.main')

@section('container')

    <section style="padding: 7%" 
    {{-- class="navbar-solutions" --}}
    >
        <div class="container" data-aos="fade-up">
            <header class="section-header" >
                <h2 class="hero-title" style="background-image: url('../assets/5667001.jpg'); background-size: cover; background-position: center; height: 100px;  display: flex; justify-content: center; align-items: center; text-align: center;">Solutions</h2>
                <h4 class="mt-3">Solutions for Enhanced Protection Ensuring Data Integrity and Confidentiality in Modern Systems</h4>
            </header>
            <div class="navbar-news">
                @foreach ($solutions as $post)
                    <div class="card" style="margin: 0px 10px">
                        <div style="height: 200px;align-content: center; background-color:white">
                            @if ($post->image)
                            <img src="{{ asset('storage/' . $post->image) }}" alt="Card image">
                            @else
                                <img src="https://source.unsplash.com/200x200?{{ $post->title }}" alt="{{ $post->title }}" class="img-fluid mb-3">
                            @endif
                        </div>
                        <div style="">
                            <div class="card-header" style="font-weight: bold;">{{ $post->name }}</div>
                        </div>
                        <div style="display: flex;justify-content: space-around;" class="footer-card">
                            <a class="btn btn-primary mb-4" href="/solutions/{{ $post->name }}">View More</a>
                        </div>
                    </div>                                  
                @endforeach
            </div>
        </div>
    </section>

    @include('landingpage.section-whyidt')    

    @include('landingpage.section-partner')    
    
@endsection
<!-- End Clients Section -->


