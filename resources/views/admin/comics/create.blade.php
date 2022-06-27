@extends('layouts.admin')

@section('content')

<div class="container">
  <h1>Create a new character</h1>
  @include('partials.errors')
  <form action="{{route('admin.characters.store')}}" method="post">
    @csrf
    <div class="mb-3">
      <label for="name" class="form-label"></label>
      <input type="text" name="name" id="name" class="form-control @error('title') is-invalid @enderror" placeholder="" aria-describedby="helpId" value="{{old('name')}}">
      <small id="helpId" class="text-muted">Name</small>
      @error('name')
      <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>

    <div class="mb-3">
      <label for="thumb" class="form-label"></label>
      <input type="text" name="thumb" id="thumb" class="form-control @error('title') is-invalid @enderror" placeholder="" aria-describedby="helpId" value="{{old('thumb')}}">
      <small id="helpId" class="text-muted">Thumb</small>
      @error('thumb')
      <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>

    <div class="mb-3">
      <label for="powers" class="form-label"></label>
      <input type="text" name="powers" id="powers" class="form-control @error('title') is-invalid @enderror" placeholder="" aria-describedby="helpId" value="{{old('powers')}}">
      <small id="helpId" class="text-muted">Powers</small>
      @error('powers')
      <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>

    <div class="mb-3">
      <label for="description" class="form-label"></label>
      <textarea class="form-control" name="description" id="description" rows="5">
      {{old('description')}}
      </textarea>
      <small id="helpId" class="text-muted">Description</small>
      @error('description')
      <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>

    <button class="btn btn-primary" type="submit">Add Character</button>

  </form>
</div>

@endsection