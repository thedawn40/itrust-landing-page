@extends('landingpage/layouts.main')

<style>
    .header {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        z-index: 1000;
    }

    .card-solution{
        width: 30%;
        text-align: center;
        border: 1px solid #d7d7d7;
        border-radius: 8px;
        padding: 20px;
        background: white;
    }

    .curve-background{
        padding-top:90px; 
        background-image: url('../assets/1414.jpg'); 
        background-size: cover;
        border-bottom-left-radius: 50%; 
        border-bottom-right-radius: 50%; 
        margin-bottom:50px;
    }

</style>

@section('container')

    <section style="padding:0px;">
            <header class="section-header transparent-background">
                <h2 class="hero-title" style="height: 100px;  display: flex; justify-content: center; align-items: center; text-align: center;">Solutions</h2>
                <h4>Solutions for Enhanced Protection Ensuring Data Integrity and Confidentiality in Modern Systems</h4>
            </header>

            <div style="margin-top: 100px; margin-bottom: 30px">
                <main class="container mb-3" data-aos="fade-up">
                
                    <div class="row g-3" style="display: flex; flex-wrap: wrap; justify-content: center;">
                        @foreach ($solutions as $post)
                        <div class="col-sm-12 col-md-6 col-lg-3" style="margin-bottom: 20px; padding: 10px;">
                            <div class="card-2" style="padding: 15px; text-align: center;">
                                <div style="width: 100%;">
                                    @if ($post->image)
                                        <img style="width: 100%; height: 200px;" src="{{ asset('storage/' . $post->image) }}" alt="Card image">
                                    @else
                                        <img src="https://source.unsplash.com/200x200?{{ $post->title }}" alt="{{ $post->title }}" class="img-fluid mb-3" style="width: 100%;">
                                    @endif
                                </div>
                                <br>
                                <div>
                                    <div class="card-solution-header" style="font-weight: bold; height: 50px;">
                                        <a  href="/solutions/{{ $post->name }}">{{ $post->name }}</a>
                                    </div>
                                    <div style="height: 120px;">
                                        {!! Str::limit(strip_tags($post->description), 100) !!}...
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
    
                
                </main>
                @include('landingpage.section-whyidt')    
    
                @include('landingpage.section-partner')    
            </div>

        </section>
    
@endsection
<!-- End Clients Section -->


