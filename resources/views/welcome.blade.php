<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Dice Game</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>
            body {
                background-image: url('im.png');
                font-family: 'Figtree', sans-serif;
                background-color: #f8fafc;
                color: #333;
            }
            .container {
                text-align: center;
                padding: 50px;
            }
            .dice {
                font-size: 100px;
            }
            .btn {
                padding: 10px 20px;
                font-size: 20px;
                background-color: blue;
                color: #fff;
                border: none;
                cursor: pointer;
                border-radius: 5px;
                margin-top: 20px;
            }
            .btn:hover {
                background-color: #2d3748;
            }
        </style>
    </head>
    <body>
   
        <div class="container">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Configurer une partie</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Se Connecter</a>
                        @endif
                    @endauth
                </div>
            @endif

            <h1>Welcome to the Dice Game!</h1>
            <p><h3>Cliquez sur le bouton pour lancer la partie</h3></p>
            <div id="dice" class="dice">🎲</div>
            <button class="btn" onclick="rollDice()">Jouer directement</button>
        </div>

        <script>
            function rollDice() {
                const dice = document.getElementById('dice');
                const roll = Math.floor(Math.random() * 6) + 1;
                dice.innerText = `🎲 ${roll}`;
            }
        </script>
    </body>
</html>

