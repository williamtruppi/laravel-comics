<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>DC Comics | Homepage</title>

        {{-- link CSS --}}
        <link rel="stylesheet" href="{{asset('css/app.css')}}">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    </head>
    <body>
        
         {{-- APERTURA HEADER --}}
        <header>   
            {{-- apertura nav --}}
            <nav>
                {{-- apertura navbar_top --}}
                <div class="navbar_top d-flex">
                    <ul class="d-flex">
                        <li><a href="#">DC</a></li>
                        <li><a href="#">DC UNIVERSE</a></li>
                        <li><a href="#">DC SHOP</a></li>
                        <li><a href="#">DC COMMUNITY</a></li>
                        <li><a href="#">DC ON HBO MAX</a></li>
                    </ul>
                </div>
                {{-- apertura navbar_top --}}
            </nav>
            {{-- chiusura nav --}}
        </header>
        {{-- chiusura header --}}
    </body>
</html>
