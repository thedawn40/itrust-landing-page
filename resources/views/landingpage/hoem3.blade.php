<style>
    .slider {
    position: relative;
    width: 80%;
    max-width: 800px;
    overflow: hidden;
    display: flex;
    align-items: center;
    justify-content: center;
    background: white;
    border-radius: 10px;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.2);
}

.slider-container {
    display: flex;
    transition: transform 0.3s ease-in-out;
}

.card {
    min-width: 100%;
    box-sizing: border-box;
    padding: 20px;
    text-align: center;
}

button {
    background: none;
    border: none;
    font-size: 2rem;
    cursor: pointer;
    user-select: none;
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    z-index: 2;
    color: #333;
}

.prev {
    left: 10px;
}

.next {
    right: 10px;
}

button:focus {
    outline: none;
}
</style>

<div class="slider">
    <button class="prev">&#10094;</button>
    <div class="slider-container">
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
    </div>
    <button class="next">&#10095;</button>
</div>

<script>
    let index = 0;

document.querySelector('.prev').addEventListener('click', () => {
    const sliderContainer = document.querySelector('.slider-container');
    const totalCards = document.querySelectorAll('.card').length;
    index = (index > 0) ? index - 1 : totalCards - 1;
    sliderContainer.style.transform = `translateX(-${index * 100}%)`;
});

document.querySelector('.next').addEventListener('click', () => {
    const sliderContainer = document.querySelector('.slider-container');
    const totalCards = document.querySelectorAll('.card').length;
    index = (index < totalCards - 1) ? index + 1 : 0;
    sliderContainer.style.transform = `translateX(-${index * 100}%)`;
});
</script>