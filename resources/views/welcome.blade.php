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

                {{-- apertura navbar_bottom --}}
                <div class="navbar_bottom">

                    {{-- apertura container --}}
                    <div class="container d-flex">

                        {{-- apertura navbar_bottom_left --}}
                        <div class="navbar_bottom_left">
                            <img src="{{asset('img/logo.png')}}" alt="">
                        </div>
                        {{-- apertura navbar_bottom_left --}}

                        {{-- apertura navbar_bottom_center --}}
                        <div class="navbar_bottom_center d-flex">
                            <ul class="d-flex">
                                <li><a href="#">CHARACTER</a></li>
                                <li><a href="#">COMICS</a></li>
                                <li><a href="#">MOVIES</a></li>
                                <li><a href="#">TV</a></li>
                                <li><a href="#">GAMES</a></li>
                                <li><a href="#">VIDEOS</a></li>
                                <li><a href="#">NEWS</a></li>
                                <li><a href="#">SHOP</a></li>
                            </ul>
                        </div>
                        {{-- apertura navbar_bottom_center --}}

                        {{-- apertura navbar_bottom_right --}}
                        <div class="navbar_bottom_right d-flex">
                            <input type="text">
                        </div>
                        {{-- apertura navbar_bottom_right --}}

                    </div>
                    {{-- chiusura container --}}

                </div>
                {{-- chiusura navbar_bottom --}}
            </nav>
            {{-- chiusura nav --}}
        </header>
        {{-- chiusura header --}}

        {{-- apertur footer --}}
        <footer>

            {{-- apertura footer top --}}
            <div class="footer-top">
                <div class="container">
                    <ul class="d-flex">
                        <li><a href="#">DIGITAL COMICS</a></li>
                        <li><a href="#">DC MERCHANDISE</a></li>
                        <li><a href="#">PRINT SUBSCRIPTION</a></li>
                        <li><a href="#">COMIC SHOP LOCATOR</a></li>
                    </ul>
                </div>
            </div>
            {{-- chiusura footer top --}}

        </footer>
        {{-- chiusura footer --}}
    </body>
</html>
