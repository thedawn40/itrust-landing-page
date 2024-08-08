
@extends('landingpage/layouts.main')

<style>
    .container-solution-detail{
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        padding: 20px;
    }
</style>

@section('container')
    <section style="padding: 7%">
        <div class="container" data-aos="fade-up">
            <header class="section-header" >
                <h2 class="hero-title" style="background-image: url('../assets/5667001.jpg'); background-size: cover; background-position: center; height: 100px;  display: flex; justify-content: center; align-items: center; text-align: center;">Solutions</h2>
                <h4 class="mt-3">Solutions for Enhanced Protection Ensuring Data Integrity and Confidentiality in Modern Systems</h4>
            </header>

            <header>
                <h2 class="hero-title" style="margin-bottom: 10px">{{ $solution->name }}</h2>
                {!! $solution->description !!}
            </header>
            <main>
                @foreach ($solution->details as $item)
                    <div style="display: flex; justify-content: space-between;" class="container-solution-detail" >
                        <div style="display: flex; flex-direction: column; align-items: flex-start;">
                            <h2 style="text-align: left;">{{ $item->name }}</h2>
                            <h6 style="text-align: left;">{!! $item->description !!}</h6>    
                            <a href="" class="btn btn-primary" style="align-self: flex-start;">Read More</a>
                        </div>
                        <div style="width: 30%">
                            <img src="{{ asset('storage/' . $item->image) }}" alt="Card image" style="width: 100%">
                        </div>
                    </div>
                @endforeach
            </main>
        </div>
    </section>

@endsection
<!-- End Clients Section -->
