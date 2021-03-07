{{-- APERTURA HEADER --}}
<header>   
    {{-- apertura nav --}}
    <nav>
        {{-- apertura navbar_top --}}
        <div class="navbar_top d-flex">
            <ul class="d-flex">
                <li id="dc-navbar"><a href="#" ><img src="{{asset('img/dc_desktop_blue.svg')}}" alt=""> </a></li>
                <li><a href="#"><img src="{{asset('img/DC_community.svg')}}" alt=""></a></li>
                <li><a href="#"><img src="{{asset('img/DC_SHOP_desktop.svg')}}" alt=""></a></li>
                <li><a href="#"><img src="{{asset('img/DC_community.svg')}}" alt=""></a></li>
                <li><a href="#"><img src="{{asset('img/DC_on_HBOMAX_desktop.svg')}}" alt=""></a></li>
            </ul>
        </div>
        {{-- apertura navbar_top --}}

        {{-- apertura navbar_bottom --}}
        <div class="navbar_bottom">

            {{-- apertura container --}}
            <div class="container d-flex">

                {{-- apertura navbar_bottom_left --}}
                <div class="navbar_bottom_left d-flex">
                    <a href="{{route('index')}}"><img src="{{asset('img/logo.png')}}" alt=""></a>
                </div>
                {{-- apertura navbar_bottom_left --}}

                {{-- apertura navbar_bottom_center --}}
                <div class="navbar_bottom_center d-flex">
                    <ul class="d-flex">
                        <li><a href="#">CHARACTER</a></li>
                        <li><a href="{{route('index')}}">COMICS</a></li>
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