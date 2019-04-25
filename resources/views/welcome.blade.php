<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Home</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Prata" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

        <!-- Styles -->
        <style>
            body {
                background-color: #C3ABFF;

            }

            #title {
                background-color: #C3ABFF;
                color: #FAF7FF;
                font-family: 'Prata', serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #EDEBF2;
                font-family: 'Nunito', sans-serif;
                padding: 0 25px;
                font-size: 15px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px; 
            }
        </style>
    </head>
    <body>
 
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content" id="app">
                <div class="title m-b-md">
                   <a id="title"> Laravel Exercises </a>

                    <div class="links">

                    <a href="/clock">Clock</a>
                    <a href='/countdown'>Countdown</a>
                    <a href='/game'>Tic-Tac-Toe</a>
                    <a href='/calculator'>Calculator</a>
                    <a href="https://laravelrestaurant.herokuapp.com/" target='_blank'> Restaurant </a>
                    <!-- <a href='/weather'>Weather App</a> -->
                    
                </div>

                <div>


               
                   
                </div>
            </div>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>

        <script src="js/app.js"></script>
    </body>
</html>
