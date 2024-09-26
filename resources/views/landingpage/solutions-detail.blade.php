
@extends('landingpage/layouts.main')

<style>
    .container-solution-detail{
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        padding: 20px;
    }

    
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
                <h2 class="hero-title" style="background-image: url('../assets/5667001.jpg'); background-size: cover; background-position: center; height: 100px;  display: flex; justify-content: center; align-items: center; text-align: center;">Solutions</h2>
                <h4 class="mt-3">Solutions for Enhanced Protection Ensuring Data Integrity and Confidentiality in Modern Systems</h4>
            </header>

            <header  style=" background-image: url('../assets/5158039.jpg');
            background-size: cover; border-bottom-left-radius: 50%; border-bottom-right-radius: 50%; margin-bottom:50px">
                <h2 class="hero-title" style="margin-bottom: 10px; font-weight:bold; text-align: center; padding-top: 30px; margin-bottom:50px">{{ $solution->name }}</h2>
                <div style="display: flex;">
                    <div style="width: 50%; text-align:center">
                        @if ($solution->image)
                        <img style="width: 250px" src="{{ asset('storage/' . $solution->image) }}" alt="Card image">
                        @else
                            <img src="https://source.unsplash.com/200x200?{{ $solution->title }}" alt="{{ $post->title }}" class="img-fluid mb-3">
                        @endif
                    </div>
                    <div style="width: 50%; display: flex; justify-content: center; align-items: center;">
                        {!! $solution->description !!}    
                    </div>
                </div>
            </header>

            <main style="padding-top: 10px">
                <h3 style="text-align: center; margin-bottom:25px">Our Portofolio</h3>
                <div style="display: flex; justify-content:space-evenly">
                    @foreach ($solution->details as $item)
                        <div style="display: flex; justify-content: space-between; width:30%" class="container-solution-detail" >
                            <div style="display: flex; flex-direction: column; align-items: flex-start;">
                                <img src="{{ asset('storage/' . $item->image) }}" alt="Card image" style="width: 100%">
                                <h2 style="text-align: left;">{{ $item->name }}</h2>
                                <h6 style="text-align: left;">
                                    <p class="limited-text">
                                        <span class="solution-description">
                                            {{-- Check if description is longer than the limit --}}
                                            {{ Str::limit(strip_tags($item->description), 250) }}...
                                        </span>
                                        <br>
                                    </p>
                                </h6>
                                {{-- <a class="btn btn-primary mb-3 mt-3" href="/solutions/{{ $post->name }}">View More</a> --}}

                                <a href="/solutions/{{ $solution->name }}/{{ $item->name }}" class="btn btn-primary">Read More</a>
                            </div>
                        </div>
                    @endforeach
                </main>
            </div>


        </div>
    </section>
    
@endsection


<!-- End Clients Section -->
