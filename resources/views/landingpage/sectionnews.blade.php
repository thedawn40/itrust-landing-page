<style>
  .slider-container {
    display: flex;
    align-items: center;
    position: relative;
    width: 80%;
    max-width: 1000px;
}

.slider {
    overflow: hidden;
    width: 100%;
    position: relative;
}

.cards-wrapper {
    display: flex;
    transition: transform 0.3s ease-in-out;
    padding: 20px 0;
}

.card {
    flex: 0 0 calc((100% / 3) - 20px);
    background: #fff;
    border: 1px solid #ddd;
    border-radius: 10px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    box-sizing: border-box;
    text-align: center;
    margin: 0 10px;
}

button {
    background: none;
    border: none;
    font-size: 2rem;
    cursor: pointer;
    user-select: none;
    position: absolute;
    z-index: 2;
    color: #333;
}

.prev {
    left: -50px;
}

.next {
    right: -50px;
}

button:focus {
    outline: none;
}

</style>

<section class="clients" style="background-image: url('../assets/5158039.jpg');">
    <div class="container" data-aos="fade-up">
        <header class="section-header">
            <h2 class="hero-title">News & Event</h2>
            <br>
            <h4>Keeping You Updated with the Latest News and Information on All Our Events and Initiatives</h4>
            <!-- <p>Terimakasih Telah Memberikan Kepercayaan Kepada Kami</p> -->
        </header>
    <div class="navbar-news">
      <div class="slider-container">
        <button class="prev">&#10094;</button>
        <div class="slider">
            <div class="cards-wrapper">
              @foreach ($news as $post)
                <div class="card">
                  <div class="image-content" style="height: 250px">
                    @if ($post->image)
                      <img src="{{ asset('storage/' . $post->image) }}" alt="" class="card-img">
                    @else
                        <img src="https://source.unsplash.com/250x200?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid mb-3">
                    @endif

                  </div>
                  <div class="card-content">
                    <h2 class="name" > {{ $post->title }} </h2>
                    <p class="description mb-3" style="height: width:100%">{{ $post->excerpt }}</p>
                  </div>
                  <div>
                    <a class="btn btn-primary mb-4" href="/news-events/{{ $post->slug }}">View More</a>
                  </div>
                </div>                    
              @endforeach
            </div>
        </div>
        <button class="next">&#10095;</button>
      </div>
    </div>
  </div>
    </div>
</section>

<script>
  let index = 0;
 
 document.querySelector('.prev').addEventListener('click', () => {
     const sliderContainer = document.querySelector('.cards-wrapper');
     const totalCards = document.querySelectorAll('.card').length;
     const cardsPerView = 3;
     const cardsToScroll = totalCards - cardsPerView;
     index = (index > 0) ? index - 1 : cardsToScroll;
     sliderContainer.style.transform = `translateX(-${index * (100 / cardsPerView)}%)`;
 });
 
 document.querySelector('.next').addEventListener('click', () => {
     const sliderContainer = document.querySelector('.cards-wrapper');
     const totalCards = document.querySelectorAll('.card').length;
     const cardsPerView = 3;
     const cardsToScroll = totalCards - cardsPerView;
     index = (index < cardsToScroll) ? index + 1 : 0;
     sliderContainer.style.transform = `translateX(-${index * (100 / cardsPerView)}%)`;
 });
 
 </script>