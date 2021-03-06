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

    <h1>INSERT a SERIE</h1>
    <form action="{{route('admin.series.update', ['serie'=> $serie->slug])}}" method="post" enctype="multipart/form-data">
        @csrf

        @method("PUT") <!-- passiamo PUT poichè il metodo più indicato per EDIT -->
        
        {{-- TITLE --}}
        <div class="form-group">
            <label for="title">Title</label>
            <input class="form-control" type="text" name="title" id="title" value="{{$serie->title}}">
        </div>
        @error('title')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        {{-- IMG COVER --}}
        <div class="form-group">
          <label for="img">Cover Image</label>
          <img src="{{asset('storage/' . $serie->img)}}" alt="">
          <input type="file" class="form-control-file" name="img" id="img" placeholder="" aria-describedby="fileHelpId">
          <small id="fileHelpId" class="form-text text-muted">Add cover image for the current SERIE</small>
        </div>
       
        <br>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
    