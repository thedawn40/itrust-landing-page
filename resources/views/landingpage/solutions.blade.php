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

    .card-solution{
        width: 30%;
        text-align: center;
        border: 1px solid #d7d7d7;
        border-radius: 8px;
        padding: 20px;
        background: white;
    }
</style>

@section('container')

    <section 
    {{-- class="navbar-solutions" --}}
    >
        <div class="container" data-aos="fade-up">
            <header class="section-header" >
                <h2 class="hero-title" style="background-image: url('../assets/5667001.jpg'); background-size: cover; background-position: center; height: 100px;  display: flex; justify-content: center; align-items: center; text-align: center;">Solutions</h2>
                <h4 class="mt-3">Solutions for Enhanced Protection Ensuring Data Integrity and Confidentiality in Modern Systems</h4>
            </header>
            <main style="background-color: #f2f2f5; padding: 50px 0px">
                
                <div style="display: flex; flex-wrap: wrap; justify-content: space-around;">
                    @foreach ($solutions as $post)
                    <div class="card-solution" style="width: calc(33.33% - 20px); margin-bottom: 20px;">
                        <div style="width: 100%;">
                            @if ($post->image)
                                <img style="width: 100px;" src="{{ asset('storage/' . $post->image) }}" alt="Card image">
                            @else
                                <img src="https://source.unsplash.com/200x200?{{ $post->title }}" alt="{{ $post->title }}" class="img-fluid mb-3" style="width: 100%;">
                            @endif
                        </div>
                        <br>
                        <div>
                            <div class="card-solution-header" style="font-weight: bold;">{{ $post->name }}</div>
                            <br>
                            <div>
                                {{ Str::limit(strip_tags($post->description), 100) }}...
                            </div>
                            <a class="btn btn-primary mb-3 mt-3" href="/solutions/{{ $post->name }}">View More</a>
                        </div>
                        <div style="display: flex; justify-content: space-around;" class="footer-card">
                        </div>
                    </div>
                    @endforeach
                </div>
                
            </main>
        </div>
    </section>

    @include('landingpage.section-whyidt')    

    @include('landingpage.section-partner')    
    
@endsection
<!-- End Clients Section -->


