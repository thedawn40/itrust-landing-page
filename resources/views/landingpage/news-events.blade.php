@extends('landingpage/layouts.main')

@section('container')
    <section style="padding: 7%" class="navbar-news">
        <div class="container" data-aos="fade-up">
            <header class="section-header" >
                <h2 class="hero-title" style="background-image: url('../assets/5667001.jpg'); background-size: cover; background-position: center; height: 100px;  display: flex; justify-content: center; align-items: center; text-align: center;">News & Event</h2>
                <h4>Keeping You Updated with the Latest News and Information on All Our Events and Initiatives</h4>
                <!-- <p>Terimakasih Telah Memberikan Kepercayaan Kepada Kami</p> -->
            </header>
            <div class="navbar-news">
                @foreach ($news as $post)
                <div class="card" style="margin: 10px 10px">
                    <div style="height: 200px;align-content: center; background-color:white">
                        @if ($post->image)
                            <img src="{{ asset('storage/' . $post->image) }}" alt="Card image">
                        @else
                            <img src="https://source.unsplash.com/200x200?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid mb-3">
                        @endif
                    </div>
                    <div style="">
                        <div class="card-header" style="background-color: white; font-weight: bold;">{{ $post->title }}</div>
                        <div class="card-desc">{{ $post->excerpt }}</div>    
                    </div>
                    <div style="display: flex" class="footer-card">
                        <a class="card-button mb-3" href="/news-events/{{ $post->slug }}">View More</a>
                    </div>
                </div>                                  
                @endforeach
            </div>
        </div>
    </section>

@endsection
<!-- End Clients Section -->
