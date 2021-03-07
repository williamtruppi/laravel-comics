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

    <h1>INSERT a MUST READ</h1>
    <form action="{{route('admin.musts.store')}}" method="post" enctype="multipart/form-data">
        @csrf

        {{-- TITLE --}}
        <div class="form-group">
            <label for="title">Title</label>
            <input class="form-control" type="text" name="title" id="title" value="{{old('title')}}">
        </div>
        @error('title')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        {{-- SUBTITLE --}}
        <div class="form-group">
            <label for="subtitle">Subtitle</label>
            <input class="form-control" type="text" name="subtitle" id="subtitle" value="{{old('subtitle')}}">
        </div>
        @error('subtitle')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        {{-- CONTENT --}}
        <div class="form-group">
            <label for="content">Content</label>
            <textarea class="form-control" name="content" id="content" rows="3">{{old('content')}}</textarea>
        </div>
        @error('content')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        {{-- IMG COVER --}}
        <div class="form-group">
          <label for="img">Cover Image</label>
          <input type="file" class="form-control-file" name="img" id="img" placeholder="" aria-describedby="fileHelpId">
          <small id="fileHelpId" class="form-text text-muted">Add cover image for the current MUST READ</small>
        </div>
       
        <br>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
    