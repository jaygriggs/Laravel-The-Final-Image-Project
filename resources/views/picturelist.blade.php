


<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Image list</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                
                background-image: url("/images/pictures.png");
                background-repeat: repeat;
                background-position:fixed;
                color: #000;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

          

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
                top:40.5vh;
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
                margin-bottom: 25vh;
            }

            .title {
                font-size: 45px;
            }
            
            .black {
            background-color: #000;
            height:25vh;
            width:100%;
            position: absolute;
            top: 0vh;
            }
            
            .black2 {
            background-color: #000;
            height:25vh;
            width:100%;
            position: absolute;
            bottom: 0vh;
            }


            .description {
                color: #000;
                padding: 0 25px;
                font-size: 19px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
                margin-top: 100px;
                background-image: url("/images/pictures.png");
                background-repeat: repeat;
                background-position:fixed;

            }

            .m-b-md {
                margin-bottom: 15px;
            }

        td, th {
    background-color:#FFF;
    border-collapse: none;
}

            table {
    border-collapse: collapse;
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
                 
                      The Images

                </div>

               
                     
            <a href="add">Add picture</a>
        
  
        <div class="description">
            <center>
        <table>
            <tr><td>Id</td><td>Name</td><td>Picture</td></tr>
            @foreach($pictures as $key => $picture)
                <tr><td>{{ $picture->id }}</td><td>{{ $picture->name }}</td><td><img src="pic/{{ $picture->id }}"></td></tr>
            @endforeach
        </table>
      </center>
                         
                   </div>


        </div>
        <div class="black2">
        </div">
    </body>
</html>
















