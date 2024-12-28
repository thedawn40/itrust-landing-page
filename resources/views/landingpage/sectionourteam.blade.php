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
            <h2 class="hero-title">Our Team</h2>
            <h4 class="mt-3">Meet the Experts Behind Our Success: Passionate, Driven, and Committed to Excellence.</h4>

            {{-- <p>Starting from the experience, professionalism, and trust from customers, iTrust Data Technology is here as a reliable company ready to be a solution to your data security protection needs. Along with trusted and proven products and solutions, iTrust is committed to deliver beyond expectation solutions.</p>		 --}}
        </header>
        <div class="row" style="display: flex; justify-content: center;">
                <div class="col-sm-12 col-md-6 col-lg-3" style="text-align: center; background:white; margin-bottom:20px; border-radius:8px; padding: 0px 10px;">
                    <div class="card-2" style="padding:25px; text-align: center;">
                        <div>
                            <img src="../../../../img/itrust_icon.ico" class="img-fluid mb-3" style="width: 100%; object-fit: cover; height: 220px;">
                        </div>
                        <br>
                        <div>
                            <div class="card-solution-header" style="font-weight: bold; height: 30px;">
                                <a href="#">John Smith</a>
                            </div>
                            <div>
                                CEO & Founder
                            </div>
                        </div>    
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3" style="text-align: center; background:white; margin-bottom:20px; border-radius:8px; padding: 0px 10px;">
                    <div class="card-2" style="padding:25px; text-align: center;">
                        <div>
                            <img src="../../../../img/itrust_icon.ico" class="img-fluid mb-3" style="width: 100%; object-fit: cover; height: 220px;">
                        </div>
                        <br>
                        <div>
                            <div class="card-solution-header" style="font-weight: bold; height: 30px;">
                                <a href="#">Jane Doe</a>
                            </div>
                            <div>
                                Chief Technology Officer
                            </div>
                        </div>    
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3" style="text-align: center; background:white; margin-bottom:20px; border-radius:8px; padding: 0px 10px;">
                    <div class="card-2" style="padding:25px; text-align: center;">
                        <div>
                            <img src="../../../../img/itrust_icon.ico" class="img-fluid mb-3" style="width: 100%; object-fit: cover; height: 220px;">
                        </div>
                        <br>
                        <div>
                            <div class="card-solution-header" style="font-weight: bold; height: 30px;">
                                <a href="#">Emily Johnson</a>
                            </div>
                            <div>
                                Data Security Specialist
                            </div>
                        </div>    
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3" style="text-align: center; background:white; margin-bottom:20px; border-radius:8px; padding: 0px 10px;">
                    <div class="card-2" style="padding:25px; text-align: center;">
                        <div>
                            <img src="../../../../img/itrust_icon.ico" class="img-fluid mb-3" style="width: 100%; object-fit: cover; height: 220px;">
                        </div>
                        <br>
                        <div>
                            <div class="card-solution-header" style="font-weight: bold; height: 30px;">
                                <a href="#">Michael Brown</a>
                            </div>
                            <div>
                                UX Designer
                            </div>
                        </div>    
                    </div>
                </div>
        </div>
    </div>
</section>
<!-- End Clients Section -->
