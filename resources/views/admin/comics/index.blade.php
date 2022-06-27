@extends('layouts.admin')

@section('content')
    
    <h1>All Comics</h1>

    <a href="{{route('admin.comics.create')}}">
        <button type="submit" class="btn btn-primary">Create Comics</button>
    </a>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Thumb</th>
                <th>Price</th>
                <th>Type</th>
                <th>Sale Date</th>


                <th>Actions</th>
            </tr>
        </thead>
        <tbody>

            @forelse ($comics as $comic)
            <tr>
                <td>{{$comic->id}}</td>
                <td>{{$comic->title}}</td>
                <td><img height="60" src="{{$comic->thumb}}" alt=""></td>
                <td>{{$comic->price}}</td>

                <td>
                    <a href="{{route('admin.comics.show', $comic->id)}}" class="btn btn-primary">View</a>
                    <a href="{{route('admin.comics.edit', $comic->id)}}" class="btn btn-secondary">Edit</a>

                    {{-- MODAL DELETE --}}
                <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete-comic-{{$comic->id}}">DELETE</button>

                <div class="modal" tabindex="-1" id="delete-comic-{{$comic->id}}">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Delete {{$comic->title}}</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="text-center modal-body">
                        <p class="text-danger fs-3">IRREVERSIBLE ACTION!</p>
                        <p>Are you sure you want permanently delete <b>{{$comic->title}}</b>?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <form action="{{route('admin.comics.destroy', $comic->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit">DELETE</button>
                        </form>
                    </div>
                    </div>
                </div>
                </div>
                </td>

            </tr>   
            @empty

            <div>Nothing to show!</div>
                
            @endforelse
            
        </tbody>
    </table>
    

@endsection