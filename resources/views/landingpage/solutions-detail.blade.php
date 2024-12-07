
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
    }

</style>


@section('container')
    <section style="padding:0px;">
        <div class="mb-3">
            <header class="section-header transparent-background">
                <h2 class="hero-title" style="height: 100px;  display: flex; justify-content: center; align-items: center; text-align: center;">Solutions</h2>
                <h4>Solutions for Enhanced Protection Ensuring Data Integrity and Confidentiality in Modern Systems</h4>
            </header>

        <div class="container">
            <header>
                <h2 class="hero-title" style="font-weight:bold; text-align: center;">{{ $solution->name }}</h2>
                <div class="row" style="display: flex;">
                    <div class="col-sm-12 col-md-6" style="text-align:center">
                        @if ($solution->image)
                        <img style="width: 250px" src="{{ asset('storage/' . $solution->image) }}" alt="Card image">
                        @else
                            <img src="https://source.unsplash.com/200x200?{{ $solution->title }}" alt="{{ $post->title }}" class="img-fluid mb-3">
                        @endif
                    </div>
                    <div class="col-sm-12 col-md-6" style="display: flex; justify-content: center; align-items: center;">
                        {!! $solution->description !!}    
                    </div>
                </div>
            </header>
            <br>
            <main style="padding-top: 10px; margin-bottom:100px;" data-aos="fade-up">
                <h3 style="text-align: center; margin-bottom:25px">Our Portofolio</h3>
                <div style="display: flex; justify-content:space-evenly">
                    @foreach ($solution->details as $item)
                        <div class="col-sm-12 col-md-6 col-lg-3" class="container-solution-detail" >
                            <div class="card" style="display: flex; flex-direction: column; align-items: flex-start; padding: 25px;">
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

                                <a href="/solutions/{{ $solution->name }}/{{ $item->name }}" class="btn btn-pink">Read More</a>
                            </div>
                        </div>
                    @endforeach
                </main>
            </div>
        </div>


        </div>
    </section>
    
@endsection


<!-- End Clients Section -->
