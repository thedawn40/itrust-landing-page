
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
    <div class="container">
        <header class="section-header" >
            <h2 class="hero-title" style="background-image: url('../../assets/5667001.jpg'); background-size: cover; background-position: center; height: 100px;  display: flex; justify-content: center; align-items: center; text-align: center;">Solutions</h2>
            <h4 class="mt-3">Solutions for Enhanced Protection Ensuring Data Integrity and Confidentiality in Modern Systems</h4>
        </header>

        
        <header  style=" background-image: url('../../assets/5158039.jpg');
        background-size: cover; border-bottom-left-radius: 50%; border-bottom-right-radius: 50%; margin-bottom:50px">
            <h2 class="hero-title" style="margin-bottom: 10px; font-weight:bold; text-align: center; padding-top: 30px; margin-bottom:50px">{{ $solution->name }}</h2>
            <h2 class="hero-title" style="margin-bottom: 10px; font-weight:bold; text-align: center; padding-top: 30px; margin-bottom:50px">{{ $detail->name }}</h2>
        </header>
        <div style="display: flex;">
            <div style="width: 50%; text-align:center">
                <img style="width: 250px" src="{{ asset('storage/' . $detail->image) }}" alt="Card image">
            </div>
            <div style="width: 50%;">
                {!! $detail->description !!}    
            </div>
        </div>

        </div>
    </div>
</section>
@endsection


<!-- End Clients Section -->
