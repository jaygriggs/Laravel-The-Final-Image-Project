


<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>API</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                
                background-image: url("/images/pictures.png");
                background-repeat: no-repeat;
                background-position:fixed;
                

                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
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
                width:100%;
                background-color: #FFF;
                padding:2vh;
            }

            .title {
                font-size: 84px;
            }
            
            .black {
            background-color: #000;
            height:25vh;
            width:100%;
            }
            
            .black2 {
            background-color: #000;
            height:25vh;
            width:100%;
            margin-top:-25vh;
            position: absolute;
            }


            .links > a {
                color: #FFF;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
              .links {
                text-align: center;
                padding-top:12.5vh;
            }

        </style>
    </head>
    <body>
     <div class="black">
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif
           
            <div class="content">
                <div class="title m-b-md">
                 API
                </div>

                   <div class="description">
                    
                   Here at The Final Image we are your one stop shop for all your image needs.
                   <br>
                   Our free link to our api is
                   
                   <a href="http://www.thefinalimage.com/api">here</a>
                         
                   </div>
                         
                   </div>


        </div>
        <div class="black2">
         <div class="links">
                    
                    <a href="http://www.thefinalimage.com/about%20us">About Us</a>
                    <a href="https://github.com/jaygriggs?tab=overview&from=2017-08-01&to=2017-08-09">GitHub</a>
                    <a href="http://www.thefinalimage.com/list">Our Images</a>
                    <a href="http://www.thefinalimage.com/add">Add Images</a>
                    <a href="http://www.thefinalimage.com/API">API</a>

                </div>
        </div>
    </body>
</html>




