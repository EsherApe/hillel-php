@extends('layouts.app')

@section('content')
    <div class="col-md-6 col-md-offset-3">
        <div class="img-box">
            <img src="{{ $product->img_url }}" alt="" class="img-responsive">
        </div>
        <h2>{{ $product->title }}</h2>
        <div>
            <p>{{ $product->description }}</p>
        </div>
        <h4>Price: £{{ $product->price }}</h4>
        <p><a class="btn btn-success" href="#" role="button">Buy »</a></p>
    </div>
@stop