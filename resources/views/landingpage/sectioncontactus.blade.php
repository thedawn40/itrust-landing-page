<style>


</style>

<section style="padding: 0px;">
    <div class="container" data-aos="fade-up">
    <header class="section-header">
        <h2 class="hero-title">Contact US</h2>
        <h4>Get in Touch with Us for Any Queries or Support</h4>    

        {{-- <p>Starting from the experience, professionalism, and trust from customers, iTrust Data Technology is here as a reliable company ready to be a solution to your data security protection needs. Along with trusted and proven products and solutions, iTrust is committed to deliver beyond expectation solutions.</p>		 --}}
    </header>
    @if (session()->has('success'))
    <div class="alert alert-success" role="alert">
    {{ session('success') }}
    </div>    
    @endif
    <main class="container" style="margin-top: 0px; margin-bottom: 50px" data-aos="fade-up">
        <div class="row">
            <div class="col-sm-12 col-md-6">
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
            <div class="col-sm-12 col-md-6">
                <div class="form-container">
                    <form method="POST" action="/message" >
                        @csrf
                        <input type="text" name="name" placeholder="Your Name" required>
                        <input type="phone" name="phone" placeholder="Your Phone" required>
                        <input type="email" name="email" placeholder="Your Email" required>
                        <input type="text" name="subject" placeholder="Subject" >
                        <textarea name="message" rows="5" placeholder="Your Message" required></textarea>
                        <button type="submit" class="btn btn-pink">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </main>    
    </div>        
</section>
<!-- End Clients Section -->
