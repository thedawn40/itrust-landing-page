
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

    .transparent-background {
        padding-top: 90px;
        background: 
            linear-gradient(to bottom, rgba(255, 255, 255, 0) 50%, rgba(255, 255, 255, 1) 100%),
            url('../assets/1414.jpg'); 
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        margin-bottom: 50px;
    }

</style>


@section('container')
<section style="padding: 0px;">
    <div class="mb-3">
        <header class="section-header transparent-background">
            <h2 class="hero-title" style="height: 100px;  display: flex; justify-content: center; align-items: center; text-align: center;">Solutions</h2>
            <h4>Solutions for Enhanced Protection Ensuring Data Integrity and Confidentiality in Modern Systems</h4>
        </header>
        <div class="container" data-aos="fade-up">
            <header>
                <h2 class="hero-title" style="font-weight:bold; text-align: center;"><a href="/solutions/{{ $solution->name }}">{{ $solution->name }}</a></h2>
                <h2 class="hero-title" style="font-weight:bold; text-align: center; padding-top: 30px; margin-bottom:50px">{{ $detail->name }}</h2>
            </header>
            <div class="row" style="margin-bottom:100px;">
                <div style="text-align:center" class="col-sm-12 col-md-6">
                    <img style="width: 250px" src="{{ asset('storage/' . $detail->image) }}" alt="Card image">
                </div>
                <div class="col-sm-12 col-md-6">
                    {!! $detail->description !!}    
                </div>
            </div>
        </div>

        </div>
    </div>
</section>
@endsection


<!-- End Clients Section -->
