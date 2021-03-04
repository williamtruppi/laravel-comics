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
    <form action="{{-- {{route('admin.comics.store')}} --}}" method="post" enctype="multipart/form-data">
        @csrf

        {{-- TITLE --}}
        <div class="form-group">
            <label for="title">Title</label>
            <input class="form-control" type="text" name="title" id="title" value="{{old('title')}}">
        </div>
        @error('title')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        {{-- AVAILABLE --}}
        <div class="form-group">
            <label for="available">Available -- TRUE or FALSE</label>
            <input class="form-control" type="text" name="available" id="available" value="{{old('available')}}">
        </div>
        @error('available')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        {{-- DESCRIPTION --}}
        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" name="description" id="description" rows="3">{{old('description')}}</textarea>
        </div>
        @error('description')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        {{-- PRICE --}}
        <div class="form-group">
            <label for="price">PRICE</label>
            <input class="form-control" type="number" name="price" id="price" value="{{old('price')}}">
        </div>
        @error('price')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        {{-- SERIES --}}
        <div class="form-group">
            <label for="series">Series</label>
            <input class="form-control" type="text" name="series" id="series" value="{{old('series')}}">
        </div>
        @error('series')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        {{-- VOLUME --}}
        <div class="form-group">
            <label for="volume">Volume</label>
            <input class="form-control" type="text" name="volume" id="volume" value="{{old('volume')}}">
        </div>
        @error('volume')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        {{-- PAGE COUNT --}}
        <div class="form-group">
            <label for="page_count">Page Count</label>
            <input class="form-control" type="number" name="page_count" id="page_count" value="{{old('page_count')}}">
        </div>
        @error('page_count')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        {{-- RATED --}}
        <div class="form-group">
            <label for="rated">Rated</label>
            <input class="form-control" type="text" name="rated" id="rated" value="{{old('rated')}}">
        </div>
        @error('rated')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        {{-- <div class="form-group">
          <label for="image">Cover Image</label>
          <input type="file" class="form-control-file" name="image" id="image" placeholder="" aria-describedby="fileHelpId">
          <small id="fileHelpId" class="form-text text-muted">Add cover image for the current post</small>
        </div>
        --}}
        

        {{-- <span>Choose a category</span>
        <select name="category_id" id="category_id">
            <option value="" selected disabled hidden>Choose here</option>
            @foreach ($categories as $category)
                <option value="{{$category->id}}">{{$category->name}}</option>
            @endforeach
        </select>
        @error('category_id')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <br>
        <span>Choose tags: </span>
        <div class="form-group">
          <label for="tags"></label>
          <select class="form-control" name="tags[]" id="tags" multiple>
                @foreach ($tags as $tag)
                    <option value="{{$tag->id}}">{{$tag->name}}</option>
                @endforeach
          </select>
        </div>
        @error('tags')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        --}}

        <br>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
    