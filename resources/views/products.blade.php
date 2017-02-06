@extends('layouts.app')

@section('content')
    @foreach($products as $product)
        <div class="col-md-4">
            <div class="img-box">
                <img src="{{ $product->img_url }}" alt="" class="img-responsive">
            </div>
            <h2>{{ $product->title }}</h2>
            <div style="min-height: 140px;">
                <p>{{ $product->description }}</p>
            </div>
            <h4>Price: £{{ $product->price }}</h4>
            <p><a class="btn btn-info" href="/products/{{ $product->alias }}" role="button">View details »</a></p>
        </div>
    @endforeach
@stop