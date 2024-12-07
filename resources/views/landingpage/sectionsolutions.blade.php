<style>
.card-grid {
    display: flex;
    gap: 20px;
    justify-content: space-around;
}

.card-container {
    perspective: 1000px;
}

.card-solution {
    width: 300px;
    height: 250px;
    position: relative;
    transform-style: preserve-3d;
    transition: transform 0.6s;
}

.card-front,
.card-back {
    position: absolute;
    width: 100%;
    height: 100%;
    backface-visibility: hidden;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    border: 1px solid #ccc;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    background-color: #fff;
    padding: 20px;
}


.card-back {
    transform: rotateY(180deg);
    background-color: #FBE9FF;
}

.card-container:hover .card-solution {
    transform: rotateY(180deg);
}

</style>

<!-- Clients Section -->
{{-- 5667001, 5158039 --}}
{{-- <section class="clients" style="background-image: url('../assets/5667001.jpg');"> --}}
    <section class="clients">
        <div class="container" data-aos="fade-up">
        <header class="section-header">
            <h2 class="hero-title">Solutions</h2>
            <h4 class="mt-3">Solutions for Enhanced Protection Ensuring Data Integrity and Confidentiality in Modern Systems</h4>

            {{-- <p>Starting from the experience, professionalism, and trust from customers, iTrust Data Technology is here as a reliable company ready to be a solution to your data security protection needs. Along with trusted and proven products and solutions, iTrust is committed to deliver beyond expectation solutions.</p>		 --}}
        </header>
        <div class="row" style="display: flex; justify-content: center;">
            @foreach ($solutions as $item)                
                <div class="col-sm-12 col-md-6 col-lg-3" style="text-align: center; background:white; margin-bottom:20px; border-radius:8px; padding: 0px 10px;">
                    <div class="card-2" style="padding:25px; text-align: center;">
                        <div>
                            @if ($item->image)
                                <img style="width: 100%; height: 150px;" src="{{ asset('storage/' . $item->image) }}" alt="Card image">
                            @else
                                <img src="../../../../img/itrust_icon.ico" class="img-fluid mb-3" style="width: 100%; object-fit: cover; height: 150px;">
                            @endif
                        </div>
                        <br>
                        <div>
                            <div class="card-solution-header" style="font-weight: bold; height: 50px;">
                                <a href="/solutions/{{ $item->name }}">{{ $item->name }}</a>
                            </div>
                            <div style="height: 120px">
                                {!! Str::limit(strip_tags($item->description), 100) !!}...
                            </div>
                        </div>    
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
<!-- End Clients Section -->
