@extends('layouts.app')

@section('content')

<section class="characters">
<div class="container characters">
    <h1>All our characters</h1>

    <div class="row row-cols-3">
        @forelse($characters as $character)
        <div class="col">
            <img src="{{$character->thumb}}" alt="">
            <div class="body text-center">
                <h4 class="text-uppercase">{{$character->name}}</h4>
                <p>{{$character->description}}</p>
                <p>{{$character->powers}}</p>
            </div>
            <!-- /.body -->
        </div>
        <!-- /.col -->
        @empty
        <div class="col">
            <p>Nothing to show!</p>
        </div>
        @endforelse
    </div>
    <!-- /.row row-cols-3 -->
</div>
<!-- /.container -->
</section>
<!-- /.characters -->


@endsection