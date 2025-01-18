<section class="image-slider" style="padding: 0">
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            {{-- @include('landingpage.partials.hero')   --}}
            <div class="swiper-slide">            @include('landingpage.partials.hero')  
            </div>

            @foreach ($headings as $post)
                <div class="swiper-slide"><img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->name }}"></div>
            @endforeach

            {{-- <div class="swiper-slide"><img src="{{ asset('../assets/5667001.jpg') }}" alt="Slide 1"></div> --}}
        </div>
        <!-- Navigation buttons -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <!-- Pagination -->
        <div class="swiper-pagination"></div>
    </div>
</section>

<!-- Swiper.js Styles & Scripts -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

<script>
document.addEventListener("DOMContentLoaded", function() {
    var swiper = new Swiper(".mySwiper", {
        loop: true,
        autoplay: {
            delay: 5000,
            disableOnInteraction: false
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev"
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true
        }
    });
});
</script>

<style>
/* Full-screen slider */
.image-slider {
    position: relative;
    width: 100vw;
    /* height: 85vh; */
    overflow: hidden;
}

.swiper {
    width: 100%;
    height: 100%;
}

.swiper-slide {
    width: 100%;
    height: 100%;
}

.swiper-slide img {
    width: 100%;
    height: 100%;
    object-fit: cover; /* Ensures full coverage */
}
</style>
