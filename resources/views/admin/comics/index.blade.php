@extends('layouts.dashboard')

@section('content')
        <h1>All Comics for the Admin</h1>
        <a name="" id="" class="btn btn-primary" href="{{route('admin.comics.create')}}" role="button">INSERT A NEW COMIC</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Slug</th>
                    <th>Series</th>
                    <th>Volume</th>
                    <th>Available</th>
                    <th>Price</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($comics as $comic)
                <tr>
                    <td scoper="row">{{ $comic->id }}</td>
                    <td>{{ $comic->title }}</td>
                    <td>{{ $comic->slug }}</td>
                    <td>{{ $comic->series }}</td>
                    <td>{{ $comic->volume }}</td>

                    @if ($comic->available == 1)
                        <td>AVAILABLE</td>
                    @else
                        <td>NO AVAILABLE</td>
                    @endif
                    <td>{{ $comic->price }}</td>
                    <td>
                        <a href="{{route('admin.comics.show', ['comic' => $comic->slug])}}" class="btn btn-primary"><i class="fas fa-eye fa-xs fa-fw"></i></a>
                        <a href="{{route('admin.comics.edit', ['comic' => $comic->slug])}}" class="btn btn-warning"><i class="fas fa-pencil-ruler fa-xs fa-fw"></i></a>
                        <!-- Modal -->
                        <!-- Button trigger modal -->
                        <a class="btn btn-danger" data-toggle="modal" data-target="#delete-{{ $comic->slug }}"
                            role="button">
                            <i class="fas fa-trash-alt"></i>
                        </a>
                        <!-- Modal -->
                        <div class="modal fade" id="delete-{{ $comic->slug }}" tabindex="-1" role="dialog">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">Will delete
                                            <em class="font-weight-bold">"{{ $comic->title }}"</em>
                                        </h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        This is irreverisible. Are you sure?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Nooooo</button>
                                        <form action="{{ route('admin.comics.destroy', ['comic' => $comic->slug]) }}"
                                            method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <input type="submit" value="Yeah, Delete" class="btn btn-danger">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                    
                @endforeach
            </tbody>
        </table>

@endsection