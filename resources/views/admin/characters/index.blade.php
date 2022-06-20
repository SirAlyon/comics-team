@extends('layouts.admin')

@section('content')
    
    <h1>All Characters</h1>

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
                    <a href="#">View</a>
                    <a href="#">Edit</a>

                    Delete

                </td>

            </tr>   
            @empty

            <div>Nothing to show!</div>
                
            @endforelse
            
        </tbody>
    </table>
    

@endsection