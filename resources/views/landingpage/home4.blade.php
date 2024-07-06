<style>
body {
    font-family: Arial, sans-serif;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
    background-color: #f0f0f0;
}

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
    padding: 20px;
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

<div class="slider-container">
  <button class="prev">&#10094;</button>
  <div class="slider">
      <div class="cards-wrapper">
          <div class="card">
              <h3>Card 1</h3>
              <p>This is card number 1.</p>
          </div>
          <div class="card">
              <h3>Card 2</h3>
              <p>This is card number 2.</p>
          </div>
          <div class="card">
              <h3>Card 3</h3>
              <p>This is card number 3.</p>
          </div>
          <div class="card">
              <h3>Card 4</h3>
              <p>This is card number 4.</p>
          </div>
          <div class="card">
              <h3>Card 5</h3>
              <p>This is card number 5.</p>
          </div>
          <div class="card">
              <h3>Card 6</h3>
              <p>This is card number 6.</p>
          </div>
      </div>
  </div>
  <button class="next">&#10095;</button>
</div>
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