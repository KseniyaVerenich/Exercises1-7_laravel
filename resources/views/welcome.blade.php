<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Portfolio</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Prata" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

        <!-- Styles -->
        <style>
            body {
                background-color: #FAF7FF;

            }

            #title {
                background-color: #FAF7FF;
                color: #F2A488;
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
                text-align: none;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #C8C6D8;
                font-family: 'Nunito', sans-serif;
                padding: 0 25px;
                font-size: 15px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
               
            }

            .links > a:hover {
                color: #F2A488;

            }

            /* .m-b-md {
                margin-bottom: 30px; 
            } */
        </style>
    </head>
    <body>
        
        
<div class="row">
    <div class ="col">
        <div class="flex-center position-ref full-height">
      

            
            <div class="title m-b-md">
                   <a id="title"> Laravel <br>
                   Exercises </a>

    </div>
             <div class="col">
                <div class='col'>
                    <div class="links">
                    
                    <a href="/clock">Clock</a>
                    <br><br>
                    <a href='/countdown'>Countdown</a>
                    <br><br>
                    <a href='/game'>Tic-Tac-Toe</a>
                    <br><br>
                    <a href='/calculator'>Calculator</a>
                    <br><br>
                    <a href="https://laravelrestaurant.herokuapp.com/" target='_blank'> Restaurant </a>
                    <!-- <a href='/weather'>Weather App</a> -->
                    
                </div>
                     </div>
                


               
            </div>
        </div>
    
</div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
        <script src="js/app.js"></script>
    </body>
</html>
