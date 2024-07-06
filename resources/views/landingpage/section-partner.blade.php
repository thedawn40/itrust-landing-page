<!-- Clients Section -->
<section class="clients" >
    <div class="container" data-aos="fade-up">
        <header class="section-header" >
            <h2>Technology Partner</h2>
            <!-- <p>Terimakasih Telah Memberikan Kepercayaan Kepada Kami</p> -->
        </header>        
        <div id="slider-container">
        <div id="slider-scroller">
            @foreach ($partners as $item)
                <div class="slider-item"><img src="{{ asset('storage/' . $item->image) }}" /></div>                    
            @endforeach
        </div>
      </div>
    </div>
</section>
<!-- End Clients Section -->