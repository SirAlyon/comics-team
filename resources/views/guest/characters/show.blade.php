@extends('layouts.app')

@section('content')
<div class="container character">
    <h1>{{$character->name}}</h1>
    <img src="{{$character->thumb}}" alt="">
    <div class="body text-center">
        <h4 class="text-uppercase">{{$character->name}}</h4>
        <p>{{$character->description}}</p>
        <p>{{$character->powers}}</p>
    </div>
    <!-- /.body -->
</div>
<!-- /.row row-cols-3 -->
</div>
@endsection