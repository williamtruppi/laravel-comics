        {{-- apertur footer --}}
        <footer>

            {{-- apertura footer top --}}
            <div class="footer-top">
                <div class="container">
                    <ul class="d-flex">
                        <li><a href="#"><img src="{{asset('img/DCUI.svg')}}" alt=""> DIGITAL COMICS</a></li>
                        <li><a href="#"><img src="{{asset('img/DCshop.svg')}}" alt=""> DC MERCHANDISE</a></li>
                        <li><a href="#"><img src="{{asset('img/subscription.svg')}}" alt=""> PRINT SUBSCRIPTION</a></li>
                        <li><a href="#"><img src="{{asset('img/locator.svg')}}" alt=""> COMIC SHOP LOCATOR</a></li>
                    </ul>
                </div>
            </div>
            {{-- chiusura footer top --}}

            {{-- apertura footer-center --}}
            <div class="footer-center" style="background-image: url({{asset('img/footer-bg.jpg')}})">

                {{-- apertura container --}}
                <div class="container d-flex">

                    {{-- apertura footer-center-left --}}
                    <div class="footer-center-left">
                        <div class="block-inner">
                            <h2 class="block-title">DC Comics</h2>
                        <div class="content clearfix">
                                <ul class="menu">
                                    <li class="first leaf menu-21186 characters mid-21186"><a href="/characters">Characters</a></li>
                                    <li class="leaf active-trail menu-21191 comics mid-21191"><a href="/comics" class="active-trail active">Comics</a></li>
                                    <li class="leaf menu-21196 movies mid-21196"><a href="/movies">Movies</a></li>
                                    <li class="leaf menu-21201 tv mid-21201"><a href="/tv">TV</a></li>
                                    <li class="leaf menu-21206 games mid-21206"><a href="/games">Games</a></li>
                                    <li class="leaf menu-14591 videos mid-14591"><a href="/videos">Videos</a></li>
                                    <li class="leaf menu-14603 news mid-14603"><a href="/news">News</a></li>
                                    <li class="last expanded menu-3472947 shop mid-3472947"><a href="http://www.shopdcentertainment.com/category/dcshop_brands/dc+comics.do?ref=DCHEADER">Shop</a>
                                        <ul class="menu"><li class="first leaf menu-3472949 shop-dc mid-3472949"><a href="https://www.shopdcentertainment.com/">Shop DC</a></li>
                                            <li class="last leaf menu-3472948 shop-dc-collectibles mid-3472948"><a href="https://www.shopdcentertainment.com/collections/dcc-all-dc-collectibles">Shop DC Collectibles</a></li>
                                        </ul>
                                    </li>
                                </ul>    
                            </div>
                        </div>
                    </div>
                    {{-- chiusura footer-center-left --}}

                    {{-- apertura footer-center-right --}}
                    <div class="footer-center-right d-flex" style="background-image: url({{asset('img/logo-background.png')}})">
                    </div>
                    {{-- chiusura footer-center-right --}}

                </div>
                {{-- chiusura container --}}

            </div>
            {{-- chiusura footer-center --}}

            {{-- apertura footer-bottom --}}
            <div class="footer-bottom">
                <div class="container d-flex">
                    <a href="#" id="sign_up">SIGN-UP NOW!</a>
                    <div class="follow-footer d-flex">
                        <a href="#">FOLLOW US</a>
                        <i class="fab fa-facebook-f d-flex"></i>
                        <i class="fab fa-twitter d-flex"></i>
                        <i class="fab fa-youtube d-flex"></i>
                        <i class="fab fa-pinterest d-flex"></i>
                        <i class="fas fa-map-marker-alt d-flex"></i>
                    </div>
                </div>
            </div>
            {{-- chiusura footer-bottom --}}

        </footer>
        {{-- chiusura footer --}}
    </body>
</html>