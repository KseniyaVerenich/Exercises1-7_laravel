<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Countdown</title>

        <!-- Fonts -->
         <link href="https://fonts.googleapis.com/css?family=Luckiest+Guy"
      rel="stylesheet">

        <!-- Styles -->

<style>

body {
    background-color: lavenderblush;
    background-image: url(/img/unicorn.png);
    background-repeat: no-repeat;
    background-size: cover;
}

#time {
    color: palevioletred;
    font-size: 3vw;
    text-align: center;
    font-family: 'Luckiest Guy', cursive;

    
}



.rowlarge {

    margin-top: 130px;

}

@media (min-width: 445px){
    .rowlarge {
        margin-top: 160px;
    }

}


@media (min-width: 576px){
    .rowlarge {
        margin-top: 240px;
    }

}

@media (min-width: 767px){
    .rowlarge {
        margin-top: 300px;
    }

}

@media (min-width: 991px){
    .rowlarge {
        margin-top: 375px;
    }

}

@media (min-width: 1199px){
    .rowlarge {
        margin-top: 375px;
    }

}

html,
body {
    height: 100%;
}

    .container {
    height: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
}
</style>
    </head>
    <body>
        
<div class="content" id="app">

    <div id='app' class="container-fluid">
        <div class="row rowlarge">
            <div class="col" id="time">
                <div><countdown> </countdown></div>
          

          </div>

        </div>

    </div>

               
</div>
        
        <script src="js/app.js"></script>
    </body>
</html>