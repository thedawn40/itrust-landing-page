@extends('landingpage/layouts.main')

<style>
    .content img {
        max-width: 100%;
        width: 100%;
        height: auto;
        display: block;
    }
    .content iframe {
        width: 100%;
        display: block;
    }
    .content {
        margin: 0 20px;
    }

    @media (max-width: 768px) {
        .content {
            margin: 0 10px;
        }
    }

    section .container {
        padding-left: 15px;
        padding-right: 15px;
    }

    @media (max-width: 576px) {
        .content img {
            margin: 0 auto;
        }
    }
</style>

@section('container')
    @include('landingpage.partials.hero')  

    <!-- Clients Section -->
    <section class="clients">
        <div class="container" data-aos="fade-up">
            <header class="section-header">
                <h2>Your Trusted Partner</h2>
            </header>
            <div class="row gx-0">
                <center><h3>Starting from the experience, professionalism, and trust from customers, iTrust Data Technology is here as a reliable company ready to be a solution to your data security protection needs. Along with trusted and proven products and solutions, iTrust is committed to deliver beyond expectation solutions.</h3></center>				
            </div>
        </div>
    </section>
    <!-- End Clients Section -->

    @foreach($maincontent as $item)
    <section>
        <div class="container" data-aos="fade-up">
            <div class="row gx-0">
                <div class="col-lg-6 col-md-12 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
                    <div class="content">
                        {!! $item->description !!}
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 d-flex flex-column justify-content-center" data-aos="zoom-out" data-aos-delay="200">
                    <div class="content">
                        {!! $item->content !!}
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endforeach

    @include('landingpage.sectionsolutions')

    @include('landingpage.section-whyidt')    

    @include('landingpage.section-partner')    
    
    @include('landingpage.sectionnews')

    <section>        
        <div class="container" data-aos="fade-up">
            <header class="section-header">
                <h2>Our Clients</h2>
            </header>        
            <div id="slider-container-client">
                <div id="slider-scroller-client">
                    @foreach ($clients as $item)
                        <div class="slider-item"><img src="{{ asset('storage/' . $item->image) }}" /></div>                    
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <section style="background-color: #8E24AA">
        <div class="container" data-aos="fade-up">
            <div class="row gy-4">
                <div class="col-lg-12 d-flex justify-content-between flex-wrap text-white">
                    <div class="mb-4">
                        <h2 style="font-weight: bold">Customer Support</h2>
                        <h2>{{ $company->customer_support }}</h2>
                    </div>
                    <div class="mb-4">
                        <h2 style="font-weight: bold">Need Assistance?</h2>
                        <h2>Contact Customer Support or visit our Help Center</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
