@extends('landingpage/layouts.main')

@section('container')
    @include('landingpage.partials.hero')  

    <!-- Clients Section -->
    <section class="clients">
        <div class="container" data-aos="fade-up">
            <header class="section-header">
                <h2>Your Trusted Partner</h2>
                <!-- <p>Terimakasih Telah Memberikan Kepercayaan Kepada Kami</p> -->
            </header>
            <div class="row gx-0">
                <center><h3>Starting from the experience, professionalism, and trust from customers, iTrust Data Technology is here as a reliable company ready to be a solution to your data security protection needs. Along with trusted and proven products and solutions, iTrust is committed to deliver beyond expectation solutions.</h3></center>				
            </div>
            <div>

            </div>
        </div>
    </section>
    <!-- End Clients Section -->

    <section id="" class="">
        <div class="container" data-aos="fade-up">
            <div class="row gx-0">
                <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
                    <div class="content">
                        <h2>Global PKI and IOT</h2>
                        <p>
                        The number of certificates that organizations are issuing and managing is on the rise. With remote workforces, it is critical to ensure that people, devices, systems and communications are secure. Find out more about cetificates with Entrust's Samantha Mabey on the 2021 #PKIandIot Trends Study.							</p>
                                                </div>
                </div>
                <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
<iframe width="560" height="315" src="https://www.youtube.com/embed/lRUJkAh5PiU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>					</div>
            </div>
        </div>
    </section>

    <section id="" class="">
        <div class="container" data-aos="fade-up">
            <div class="row gx-0">
                <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
<iframe width="560" height="315" src="https://www.youtube.com/embed/HYY3mNNL2O8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>					</div>

                <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
                    <div class="content">
                        <h2>nShield Integration with BeyondTrust Password Safe</h2>
                        <p>
                        BeyondTrust PowerBroker Password Safe, an automated password and session management solution, supports Entrust nShield hardware security modules (HSMs). The integration secures the keys used to protect access to privileged credentials within a hardened, tamper-resistant physical device. Entrust technology safeguards and manages cryptographic storage and operations with solutions that have been validated to FIPS 140-2 Levels 3.							</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    @include('landingpage.sectionsolutions')

    @include('landingpage.section-whyidt')    

    @include('landingpage.section-partner')    
    
    @include('landingpage.sectionnews')

    <section>        
        <div class="container" data-aos="fade-up">
            <header class="section-header" >
                <h2>Our Clients</h2>
                <!-- <p>Terimakasih Telah Memberikan Kepercayaan Kepada Kami</p> -->
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
            {{-- <div class="row gy-4">
                <div class="col-lg-12">
                    <iframe style="border:0; width: 100%; height: 330px;" src="https://maps.google.com/maps?q=Perkantoran%20prominence%2038D%20no.%2047%20Jalan%20Jalur%20Sutera%20Boulevard%20Alam%20Sutera,%20Tangerang,%20Banten%2015143&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed" frameborder="0" allowfullscreen=""></iframe>
                </div>
            </div> --}}
            <div style="display: flex; color: white; justify-content: space-evenly;">
                <div style="margin-right: 30px">
                    <h2 style="font-weight: bold">Customer Support</h2>
                    <h2>{{ $company->customer_support }}</h2>
                </div>
                <div>
                    <h2 style="font-weight: bold">Need Assistance?</h2>
                    <h2>Contact Customer Support or visit our Help Center</h2>
                </div>

            </div>
        </div>
    </section>

@endsection

