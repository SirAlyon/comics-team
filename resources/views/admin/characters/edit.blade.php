@extends('layouts.admin')

@section('content')



<div class="container py-5">
    <h1> Edit {{$character->title}}</h1>
    @include('partials.errors')
    <!-- Puntare il form alla rotta POST store -->
    <form action="{{route('admin.characters.update', $character->id)}}" method="post">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="name">name</label>
            <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" placeholder="ex: Batman" aria-describedby="nameHelper" value="{{$character->name}}">
            <small id="nameHelper" class="text-muted">Type the character name here</small>
            @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="thumb">Thumbnail</label>
            <input type="text" name="thumb" id="thumb" class="form-control @error('thumb') is-invalid @enderror" placeholder="ex: http://my-img.jpg" aria-describedby="thumbHelper" value="{{$character->thumb}}">
            <small id="thumbHelper" class="text-muted">Type the thumb image path here</small>
            @error('thumb')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="powers">powers</label>
            <input type="text" name="powers" id="powers" class="form-control @error('powers') is-invalid @enderror" placeholder="ex: 100€" aria-describedby="coverImageHelper" value="{{$character->powers}}">
            <small id="coverImageHelper" class="text-muted">Type the cover image path here</small>
            @error('description')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" name="description" id="description" rows="5">
            {{$character->description}}
            </textarea>
            @error('description')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Update character</button>
    </form>
</div>

@endsection