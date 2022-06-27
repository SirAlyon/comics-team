@extends('layouts.admin')

@section('content')
    
    <h1>All Characters</h1>

    <a href="{{route('admin.characters.create')}}">
        <button type="submit" class="btn btn-primary">Create Character</button>
    </a>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Thumb</th>
                <th>Powers</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>

            @forelse ($characters as $character)
            <tr>
                <td>{{$character->id}}</td>
                <td>{{$character->name}}</td>
                <td><img height="60" src="{{$character->thumb}}" alt=""></td>
                <td>{{$character->powers}}</td>

                <td>
                    <a href="{{route('admin.characters.show', $character->id)}}" class="btn btn-primary">View</a>
                    <a href="{{route('admin.characters.edit', $character->id)}}" class="btn btn-secondary">Edit</a>

                    {{-- MODAL DELETE --}}
                <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete-character-{{$character->id}}">DELETE</button>

                <div class="modal" tabindex="-1" id="delete-character-{{$character->id}}">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Delete {{$character->name}}</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="text-center modal-body">
                        <p class="text-danger fs-3">IRREVERSIBLE ACTION!</p>
                        <p>Are you sure you want permanently delete <b>{{$character->name}}</b>?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <form action="{{route('admin.characters.destroy', $character->id)}}" method="POST">
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