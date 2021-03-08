@extends("layouts.dashboard")

@section("content")

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <h1>INSERT COMIC</h1>
    <form action="{{route('admin.comics.update', ['comic'=> $comic->slug])}}" method="post" enctype="multipart/form-data">
        @csrf

        @method("PUT") <!-- passiamo PUT poichè il metodo più indicato per EDIT -->

        {{-- TITLE --}}
        <div class="form-group">
            <label for="title">Title</label>
            <input class="form-control" type="text" name="title" id="title" value="{{$comic->title}}">
        </div>
        @error('title')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        {{-- AVAILABLE --}}
        <div class="form-group">
            <label for="available">Available:</label>
            <input type="radio" class="form-control" id="available" name="available" value="1"> <span>TRUE</span> 
            <input type="radio" class="form-control" id="available" name="available" value="0"> <span>FALSE</span> 
        </div>
        @error('available')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        {{-- DESCRIPTION --}}
        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" name="description" id="description" rows="3">{{$comic->description}}</textarea>
        </div>
        @error('description')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        {{-- PRICE --}}
        <div class="form-group">
            <label for="price">PRICE</label>
            <input class="form-control" type="number" name="price" id="price" value="{{$comic->price}}">
        </div>
        @error('price')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        {{-- SERIES --}}
        <div class="form-group">
            <label for="series">Series</label>
            <input class="form-control" type="text" name="series" id="series" value="{{$comic->series}}">
        </div>
        @error('series')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        {{-- VOLUME --}}
        <div class="form-group">
            <label for="volume">Volume</label>
            <input class="form-control" type="text" name="volume" id="volume" value="{{$comic->volume}}">
        </div>
        @error('volume')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        {{-- PAGE COUNT --}}
        <div class="form-group">
            <label for="page_count">Page Count</label>
            <input class="form-control" type="number" name="page_count" id="page_count" value="{{$comic->page_count}}">
        </div>
        @error('page_count')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        {{-- RATED --}}
        <div class="form-group">
            <label for="rated">Rated</label>
            <input class="form-control" type="text" name="rated" id="rated" value="{{$comic->rated}}">
        </div>
        @error('rated')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        {{-- cover image --}}
        <div class="form-group">
          <img src="{{asset('storage/' . $comic->img_cover)}}" alt="">
          <label for="img_cover">Cover Image</label>
          <input type="file" class="form-control-file" name="img_cover" id="img_cover" placeholder="" aria-describedby="fileHelpId">
          <small id="fileHelpId" class="form-text text-muted">Add cover image for the current COMIC</small>
        </div>

        {{-- jumbo image --}}
        <div class="form-group">
            <img src="{{asset('storage/' . $comic->jumbocover)}}" alt="">
            <label for="jumbocover">JUMBO Image</label>
            <input type="file" class="form-control-file" name="jumbocover" id="jumbocover" placeholder="" aria-describedby="fileHelpId">
            <small id="fileHelpId" class="form-text text-muted">Add jumbocover for the current COMIC</small>
          </div>

        <br>
        <span>Choose the Writers: </span>
        <div class="form-group">
          <label for="writers"></label>
          <select class="form-control" name="writers[]" id="writers" multiple>
                @foreach ($writers as $writer)
                    <option value="{{$writer->id}}" {{$comic->writers->contains($writer) ? 'selected' : ''}}>{{$writer->name}} {{$writer->lastname}}</option>
                @endforeach
          </select>
        </div>
        @error('writers')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <br>
        <span>Choose the Artists: </span>
        <div class="form-group">
          <label for="artists"></label>
          <select class="form-control" name="artists[]" id="artists" multiple>
                @foreach ($artists as $artist)
                    <option value="{{$artist->id}}" {{$comic->artists->contains($artist) ? 'selected' : ''}}>{{$artist->name}} {{$artist->lastname}}</option>
                @endforeach
          </select>
        </div>
        @error('artists')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
       

        <br>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
    