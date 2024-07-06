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
<section class="clients" style="background-image: url('../assets/5158039.jpg');">
    <div class="container" data-aos="fade-up">
        <header class="section-header">
            <h2 class="hero-title">Solutions</h2>
            <h4 class="mt-3">Solutions for Enhanced Protection Ensuring Data Integrity and Confidentiality in Modern Systems</h4>

            {{-- <p>Starting from the experience, professionalism, and trust from customers, iTrust Data Technology is here as a reliable company ready to be a solution to your data security protection needs. Along with trusted and proven products and solutions, iTrust is committed to deliver beyond expectation solutions.</p>		 --}}
        </header>
        <div class="card-grid">
            @foreach ($solutions as $item)
                <div class="card-container">
                    <div class="card-solution">
                        <div class="card-front">
                            <h3 style="font-weight: bold">{{ $item->name }}</h3>
                            {{-- <p>{{ $item->description }}</p> --}}
                        </div>
                        <div class="card-back">
                            <a class="btn btn-primary mb-4" href="/solutions/{{ $item->name }}">View More</a>
                        </div>
                    </div>
                </div> 
            @endforeach
        </div>
    </div>
</section>
<!-- End Clients Section -->
