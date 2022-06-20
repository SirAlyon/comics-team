@extends('layouts.admin')

@section('content')
    
    <h1>All Characters</h1>

    <table class="table">
        <thead>
            <tr>
                <th>id</th>
                <th>name</th>
                <th>thumb</th>
                <th>powers</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>

            @forelse ($characters as $character)
            <tr>
                <td scope="row"></td>
                <td>{{$character->id}}</td>
                <td>{{$character->name}}</td>
                <td><img class="img-fluid" src="{{$character->thumb}}" alt=""></td>
                <td>{{$character->powers}}</td>

                <td>
                    <a href="#">view</a>
                    <a href="#">edit</a>

                    delete

                </td>

            </tr>   
            @empty
                
            @endforelse
            
        </tbody>
    </table>
    

@endsection