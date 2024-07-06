<style>

body {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
    background-color: #f0f0f0;
    font-family: Arial, sans-serif;
}

.card-grid {
    display: flex;
    gap: 20px;
}

.card-container {
    perspective: 1000px;
}

.card {
    width: 300px;
    height: 200px;
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
}

.card-back {
    transform: rotateY(180deg);
}

.card-container:hover .card {
    transform: rotateY(180deg);
}

</style>
<div class="card-grid">
    <div class="card-container">
        <div class="card">
            <div class="card-front">
                <h3>Front Side 1</h3>
                <p>This is the front of card 1.</p>
            </div>
            <div class="card-back">
                <h3>Back Side 1</h3>
                <p>This is the back of card 1.</p>
            </div>
        </div>
    </div>
    <div class="card-container">
        <div class="card">
            <div class="card-front">
                <h3>Front Side 2</h3>
                <p>This is the front of card 2.</p>
            </div>
            <div class="card-back">
                <h3>Back Side 2</h3>
                <p>This is the back of card 2.</p>
            </div>
        </div>
    </div>
    <div class="card-container">
        <div class="card">
            <div class="card-front">
                <h3>Front Side 3</h3>
                <p>This is the front of card 3.</p>
            </div>
            <div class="card-back">
                <h3>Back Side 3</h3>
                <p>This is the back of card 3.</p>
            </div>
        </div>
    </div>
</div>