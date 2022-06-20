@extends('layouts.admin')

@section('content')

<div class="container">
    <h1>Create a new character</h1>

    <form action="{{route('characters.store')}}" method="post">
        @csrf
        <div class="mb-3">
          <label for="name" class="form-label"></label>
          <input type="text" name="name" id="name" class="form-control" placeholder="" aria-describedby="helpId">
          <small id="helpId" class="text-muted">Help text</small>
        </div>

        <div class="mb-3">
          <label for="thumb" class="form-label"></label>
          <input type="text" name="thumb" id="thumb" class="form-control" placeholder="" aria-describedby="helpId">
          <small id="helpId" class="text-muted">Help text</small>
        </div>

        <div class="mb-3">
          <label for="powers" class="form-label"></label>
          <input type="text" name="powers" id="powers" class="form-control" placeholder="" aria-describedby="helpId">
          <small id="helpId" class="text-muted">Help text</small>
        </div>

        <div class="mb-3">
          <label for="description" class="form-label"></label>
            <textarea name="description" id="description" cols="30" rows="10"></textarea>
          <small id="helpId" class="text-muted">Help text</small>
        </div>

        <button class="btn btn-primary" type="submit">Add post</button>
        
    </form>
</div>

@endsection












