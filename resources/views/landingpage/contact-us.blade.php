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
</style>

@section('container')
    <section class="navbar-news">
        <div class="container contact-us" data-aos="fade-up">
            <header class="section-header" >
                <h2 class="hero-title" style="background-image: url('../assets/5667001.jpg'); background-size: cover; background-position: center; height: 100px;  display: flex; justify-content: center; align-items: center; text-align: center;">Contact US</h2>
                <h4>Get in Touch with Us for Any Queries or Support</h4>
                <!-- <p>Terimakasih Telah Memberikan Kepercayaan Kepada Kami</p> -->
            </header>
            @if (session()->has('success'))
            <div class="alert alert-success" role="alert">
            {{ session('success') }}
            </div>    
            @endif
            <div style="display: flex">
            <div class="column">
                {{-- <img src="../assets/img/features-3.png" alt="Company Image" > --}}
                <div class="row gy-4">
					<div class="col-lg-12">
						<iframe style="border:0; width: 100%; height: 330px;" src="https://maps.google.com/maps?q=Perkantoran%20prominence%2038D%20no.%2047%20Jalan%20Jalur%20Sutera%20Boulevard%20Alam%20Sutera,%20Tangerang,%20Banten%2015143&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" allowfullscreen></iframe>
					</div>
				</div>
                <div class="address">
                    <h2>Our Address</h2>
                    <p>
                        {!! nl2br(e($company->address)) !!}
                        <br>
                        Phone: {{ $company->customer_support }}<br>
                        Email: {{ $company->email }}
                    </p>
                </div>
            </div>
            <div class="column">
                <div class="form-container">
                    <form method="POST" action="/message" >
                        @csrf
                        <input type="text" name="name" placeholder="Your Name" required>
                        <input type="phone" name="phone" placeholder="Your Phone" required>
                        <input type="email" name="email" placeholder="Your Email" required>
                        <input type="text" name="subject" placeholder="Subject" >
                        <textarea name="message" rows="5" placeholder="Your Message" required></textarea>
                        <button type="submit">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
        </div>
    </section>

@endsection
<!-- End Clients Section -->
