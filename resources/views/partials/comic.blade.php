<div class="col-2">
    <a href="{{route('products.show', $index)}}">
        <div class="serie-logo">
            <img src="{{$comic['thumb']}}">
            <div class="price">{{$comic['price']}}</div>
        </div>
        <div class="serie-title mt-2">{{$comic['title']}}</div>
    </a>
</div>