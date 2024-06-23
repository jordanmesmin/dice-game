<x-guest-layout>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dice Game') }}</div>

                <div class="card-body">
                    <div id="dice-game">
                        <button onclick="rollDice()">Lancez le Dé</button>
                        <div>
                            <img id="die1" style="display: flex; justify-content: center; align-items: center; height: 20vh;" src="{{ asset('') }}" alt="">
                            <img id="die2" style="display: flex; justify-content: center; align-items: center; height: 20vh;" src="{{ asset('') }}" alt="">
                        </div>
                        <div id="result"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function rollDice() {

        document.getElementById('die1').src = `{{ asset('images/img7.gif') }}`;
        document.getElementById('die2').src = `{{ asset('images/img7.gif') }}`;
        document.getElementById('result').innerHTML = '';


        setTimeout(() => {

        const die1 = Math.floor(Math.random() * 6) + 1;
        const die2 = Math.floor(Math.random() * 6) + 1;

        document.getElementById('die1').src = `{{ asset('images/die') }}${die1}.png`;
        document.getElementById('die2').src = `{{ asset('images/die') }}${die2}.png`;
        
        const imageMap = {
            1: '<img  style="display: flex; justify-content: center; align-items: center; height: 10vh;" src="{{ asset('images/img1.png') }}" alt="1">',
            2: '<img  style="display: flex; justify-content: center; align-items: center; height: 10vh;" src="{{ asset('images/img2.png') }}" alt="2">',
            3: '<img  style="display: flex; justify-content: center; align-items: center; height: 10vh;" src="{{ asset('images/img3.jpeg') }}" alt="3">',
            4: '<img  style="display: flex; justify-content: center; align-items: center; height: 10vh;" src="{{ asset('images/img4.png') }}" alt="4">',
            5: '<img  style="display: flex; justify-content: center; align-items: center; height: 10vh;" src="{{ asset('images/img5.png') }}" alt="5">',
            6: '<img  style="display: flex; justify-content: center; align-items: center; height: 10vh;" src="{{ asset('images/img6.png') }}" alt="6">'
        };

        document.getElementById('result').innerHTML = `SCORE1 ${imageMap[die1]} SCORE2 ${imageMap[die2]}`;
        }, 3000);
    }
</script>
<style>
    .container {
        margin-top: 20px;
    }
    .card {
        background-color: #f8fafc;
        border-radius: 10px;
        text-align: center;
    }
    .card-header {
        font-size: 1.5rem;
        font-weight: bold;
    }
    .btn-primary {
        font-size: 1.2rem;
        padding: 10px 20px;
    }
    .dice-img {
        text-align: center;
        width: 100px;
        height: 100px;
        margin: 0 0px;
    }
    .result-img {
        align-items: center;
        justify-content: center;
        text-align: center;
        width: 50px;
        height: 50px;
    }
    #result {
        text-align: center;
        font-size: 1.2rem;
        font-weight: bold;
        color: #333;
    }
</style>
</x-guest-layout>