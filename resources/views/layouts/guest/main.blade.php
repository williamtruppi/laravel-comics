<main>
    <section class="comics-graphics d-flex">
        <div class="comics-graphics-title">
            <h1>COMICS & GRAPHIC NOVELS</h1>
        </div>
        @foreach ($comics as $comic)
            <div class="comics-card-container">
                <div class="comics-card">
                    <div class="comic_type">
                        <h5>COMIC BOOK</h5>
                    </div>
                    <a href="">
                        <img src="{{asset('storage/' . $comic->img_cover)}}" alt="">
                    </a>
                    <h5>{{$comic->title}}</h5>
                    @if ($comic->available == 1)
                        <h5 id="available_comics">AVAILABLE NOW</h5>
                    @else
                        <h5 id="available_comics">NOT AVAILABLE</h5>
                    @endif   
                </div>
            </div>
        @endforeach
    </section>
</main>
